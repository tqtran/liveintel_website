/* =========================================================
   SPF Flattener UI
   DNS work is handled by products/spf-flattener/api.php.
   ========================================================= */

(function () {
  'use strict';

  var $ = function (id) { return document.getElementById(id); };

  function setMode(mode) {
    var domainMode = mode === 'domain';
    $('spf-tab-domain').setAttribute('aria-selected', domainMode ? 'true' : 'false');
    $('spf-tab-record').setAttribute('aria-selected', domainMode ? 'false' : 'true');
    $('spf-panel-domain').hidden = !domainMode;
    $('spf-panel-record').hidden = domainMode;
    $('spf-status').textContent = domainMode ? 'Ready to check public DNS.' : 'Ready to inspect the pasted record.';
  }

  function setLoading(loading) {
    $('spf-submit').disabled = loading;
    $('spf-submit').textContent = loading ? 'Checking...' : 'Check SPF Record';
    $('spf-status').className = 'tool-status';
    if (loading) $('spf-status').textContent = 'Resolving includes, redirects, and lookup counts...';
  }

  function copyText(text, btn) {
    var done = function () {
      var old = btn.textContent;
      btn.textContent = 'Copied';
      setTimeout(function () { btn.textContent = old; }, 1400);
    };
    if (navigator.clipboard && navigator.clipboard.writeText) {
      navigator.clipboard.writeText(text).then(done);
      return;
    }
    var ta = document.createElement('textarea');
    ta.value = text;
    document.body.appendChild(ta);
    ta.select();
    document.execCommand('copy');
    document.body.removeChild(ta);
    done();
  }

  function summaryFor(data) {
    if (data.overLimit && data.flatLookups <= 10) {
      return 'This record is over the SPF lookup limit today. The flattened version brings DNS lookups back under the limit, but remember to refresh it when providers change sending IPs.';
    }
    if (data.overLimit) {
      return 'This record is over the SPF lookup limit, and some mechanisms still require DNS lookups after flattening. Review the warnings before publishing.';
    }
    if (data.flatLookups < data.lookups) {
      return 'This record is within the SPF lookup limit. Flattening can still reduce lookup pressure, but you may not need to publish a flattened record yet.';
    }
    return 'This record is within the SPF lookup limit. Keep it as-is unless you have a specific deliverability reason to flatten it.';
  }

  function render(data) {
    $('spf-results').hidden = false;
    $('spf-status').textContent = data.overLimit ? 'Finished. SPF is over the 10-lookup limit.' : 'Finished. SPF is within the 10-lookup limit.';
    $('spf-status').className = data.overLimit ? 'tool-status s-err' : 'tool-status s-ok';

    $('spf-stat-original').innerHTML = 'lookups <strong>' + data.lookups + ' / 10</strong>';
    $('spf-stat-kept').innerHTML = 'kept lookups <strong>' + data.flatLookups + '</strong>';
    $('spf-stat-ip4').innerHTML = 'ip4 <strong>' + ((data.flattened.match(/\bip4:/g) || []).length) + '</strong>';
    $('spf-stat-ip6').innerHTML = 'ip6 <strong>' + ((data.flattened.match(/\bip6:/g) || []).length) + '</strong>';
    $('spf-summary').textContent = summaryFor(data);
    $('spf-original').textContent = data.original || '(record was provided directly)';
    $('spf-flat').textContent = data.flattened || '(no flattened output)';

    var warnings = $('spf-warnings');
    warnings.innerHTML = '';
    (data.warnings || []).forEach(function (warning) {
      var li = document.createElement('li');
      li.className = 'f-warn';
      li.textContent = warning;
      warnings.appendChild(li);
    });
    if (!(data.warnings || []).length) {
      var ok = document.createElement('li');
      ok.className = 'f-ok';
      ok.textContent = 'No warnings returned.';
      warnings.appendChild(ok);
    }

    var log = $('spf-log');
    log.innerHTML = '';
    (data.trace || []).forEach(function (entry) {
      var line = document.createElement('div');
      line.className = 'terminal-line';
      line.textContent = '[' + (entry.t || entry.type || 'info') + '] ' + (entry.msg || '');
      log.appendChild(line);
    });
  }

  function readPayload() {
    var domainMode = $('spf-tab-domain').getAttribute('aria-selected') === 'true';
    var params = new URLSearchParams();
    if (domainMode) {
      params.set('domain', $('spf-domain').value.trim());
    } else {
      params.set('record', $('spf-record').value.trim());
      if ($('spf-domain').value.trim()) params.set('domain', $('spf-domain').value.trim());
    }
    return params;
  }

  function submit(e) {
    e.preventDefault();
    var params = readPayload();
    if (!params.get('domain') && !params.get('record')) {
      $('spf-status').textContent = 'Enter a domain or paste an SPF record first.';
      $('spf-status').className = 'tool-status s-err';
      return;
    }

    setLoading(true);
    fetch('api.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
      body: params.toString()
    }).then(function (response) {
      return response.json().then(function (body) {
        if (!response.ok || !body.ok) throw new Error(body.error || 'SPF check failed.');
        return body;
      });
    }).then(render).catch(function (err) {
      $('spf-status').textContent = err.message || 'Could not check that SPF record.';
      $('spf-status').className = 'tool-status s-err';
    }).finally(function () {
      setLoading(false);
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    if (!$('spf-form')) return;

    $('spf-tab-domain').addEventListener('click', function () { setMode('domain'); });
    $('spf-tab-record').addEventListener('click', function () { setMode('record'); });
    $('spf-form').addEventListener('submit', submit);
    $('spf-reset').addEventListener('click', function () {
      $('spf-domain').value = '';
      $('spf-record').value = '';
      $('spf-results').hidden = true;
      $('spf-status').className = 'tool-status';
      $('spf-status').textContent = 'Ready. No account needed.';
    });
    $('spf-copy').addEventListener('click', function () {
      copyText($('spf-flat').textContent, this);
    });
  });
})();
