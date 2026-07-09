/* =========================================================
   SPF Flattener UI
   DNS work is handled by products/spf-flattener/api.php.
   The trace returned by the API is replayed terminal-style.
   ========================================================= */

(function () {
  'use strict';

  var $ = function (id) { return document.getElementById(id); };
  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var replayTimer = null;
  var lastShareQuery = '';

  var LINE_STYLES = {
    info:   { prefix: '',   cls: 't-out'  },
    lookup: { prefix: '→ ', cls: 't-info' },
    ok:     { prefix: '✔ ', cls: 't-ok'   },
    warn:   { prefix: '⚠ ', cls: 't-warn' },
    err:    { prefix: '✖ ', cls: 't-err'  },
    done:   { prefix: '★ ', cls: 't-ok'   }
  };

  /* ---- terminal log ------------------------------------------ */
  function makeLine(type, msg) {
    var line = document.createElement('div');
    line.className = 'terminal-line';
    if (type === 'cmd') {
      var p = document.createElement('span');
      p.className = 't-prompt';
      p.textContent = '❯ ';
      line.appendChild(p);
      var c = document.createElement('span');
      c.className = 't-cmd';
      c.textContent = msg;
      line.appendChild(c);
    } else {
      var style = LINE_STYLES[type] || LINE_STYLES.info;
      var s = document.createElement('span');
      s.className = 't-out ' + style.cls;
      s.textContent = style.prefix + msg;
      line.appendChild(s);
    }
    return line;
  }

  function appendLine(el) {
    var log = $('spf-log');
    log.appendChild(el);
    log.scrollTop = log.scrollHeight;
  }

  function startRun(label) {
    clearTimeout(replayTimer);
    $('spf-terminal').hidden = false;
    $('spf-log').innerHTML = '';
    appendLine(makeLine('cmd', 'spf-flatten ' + label));
    var waiting = makeLine('info', 'resolving DNS tree…');
    waiting.classList.add('t-cursor');
    appendLine(waiting);
  }

  function replayTrace(trace, doneCb) {
    clearTimeout(replayTimer);
    $('spf-log').innerHTML = '';
    if (reducedMotion || trace.length === 0) {
      trace.forEach(function (e) { appendLine(makeLine(e.t, e.msg)); });
      doneCb();
      return;
    }
    var i = 0;
    var delay = trace.length > 30 ? 40 : 90;
    var step = function () {
      if (i >= trace.length) { doneCb(); return; }
      appendLine(makeLine(trace[i].t, trace[i].msg));
      i++;
      replayTimer = setTimeout(step, delay);
    };
    step();
  }

  /* ---- gauges & verdict --------------------------------------- */
  function renderGauge(el, count) {
    el.innerHTML = '';
    var over = count > 10;
    for (var i = 0; i < 10; i++) {
      var pip = document.createElement('span');
      pip.className = 'spf-pip';
      if (i < count) pip.classList.add(over ? 'over' : (count >= 9 ? 'warn' : 'lit'));
      el.appendChild(pip);
    }
    if (over) {
      var extra = document.createElement('span');
      extra.className = 'spf-overflow';
      extra.textContent = '+' + (count - 10);
      el.appendChild(extra);
    }
  }

  function renderCompareValue(el, count) {
    el.innerHTML = '';
    el.className = 'spf-compare-value ' + (count > 10 ? 'bad' : 'ok');
    el.appendChild(document.createTextNode(count + ' '));
    var unit = document.createElement('span');
    unit.className = 'unit';
    unit.textContent = '/ 10 lookups';
    el.appendChild(unit);
  }

  function verdictFor(data) {
    if (data.overLimit && data.flatLookups <= 10) {
      return {
        cls: 'v-err', icon: '✖',
        title: 'Over the 10-lookup limit — mail servers may already be failing your SPF.',
        text: 'The flattened record below brings you back to ' + data.flatLookups + ' lookup' + (data.flatLookups === 1 ? '' : 's') + '. Publish it, and re-flatten whenever a provider changes its sending IPs.'
      };
    }
    if (data.overLimit) {
      return {
        cls: 'v-err', icon: '✖',
        title: 'Over the 10-lookup limit',
        text: 'Some mechanisms still require DNS lookups even after flattening. Review the warnings below before publishing.'
      };
    }
    if (data.lookups >= 8) {
      return {
        cls: 'v-warn', icon: '⚠',
        title: 'At the edge of the limit — using ' + data.lookups + ' of 10 lookups.',
        text: 'One more include could start failing your mail. The flattened version below gives you headroom before that happens.'
      };
    }
    return {
      cls: 'v-ok', icon: '✔',
      title: 'Within the 10-lookup limit — using ' + data.lookups + ' of 10.',
      text: 'No urgent need to flatten. Keep the output below handy for when this record grows.'
    };
  }

  /* ---- results ------------------------------------------------- */
  function render(data) {
    var verdict = verdictFor(data);
    var banner = $('spf-verdict');
    banner.className = 'spf-verdict ' + verdict.cls;
    $('spf-verdict-icon').textContent = verdict.icon;
    $('spf-verdict-title').textContent = verdict.title;
    $('spf-verdict-text').textContent = verdict.text;

    renderCompareValue($('spf-before'), data.lookups);
    renderGauge($('spf-gauge-before'), data.lookups);
    renderCompareValue($('spf-after'), data.flatLookups);
    renderGauge($('spf-gauge-after'), data.flatLookups);

    var ip4 = (data.flattened.match(/\bip4:/g) || []).length;
    var ip6 = (data.flattened.match(/\bip6:/g) || []).length;
    $('spf-stat-ip4').innerHTML = 'ip4 <strong>' + ip4 + '</strong>';
    $('spf-stat-ip6').innerHTML = 'ip6 <strong>' + ip6 + '</strong>';
    $('spf-stat-kept').innerHTML = 'kept lookups <strong>' + data.flatLookups + '</strong>';
    $('spf-stat-chars').innerHTML = 'record size <strong>' + data.flattened.length + ' chars'
      + (data.chunks.length > 1 ? ' · ' + data.chunks.length + ' strings' : '') + '</strong>';

    $('spf-original').textContent = data.original || '(record was provided directly)';
    $('spf-flat').textContent = data.flattened || '(no flattened output)';

    var chunks = (data.chunks && data.chunks.length)
      ? data.chunks
      : (data.flattened ? [data.flattened] : []);
    var zone = chunks.map(function (c) { return '"' + c + '"'; }).join(' ');
    $('spf-zone').textContent = zone || '(no output)';

    var warnings = $('spf-warnings');
    warnings.innerHTML = '';
    (data.warnings || []).forEach(function (warning) {
      var li = document.createElement('li');
      li.className = 'f-warn';
      li.textContent = warning;
      warnings.appendChild(li);
    });
    if (!(data.warnings || []).length) {
      var okLi = document.createElement('li');
      okLi.className = 'f-ok';
      okLi.textContent = 'No warnings — clean resolution all the way down.';
      warnings.appendChild(okLi);
    }

    $('spf-results').hidden = false;
    $('spf-share').hidden = false;
    $('spf-status').textContent = data.overLimit
      ? 'Finished. SPF is over the 10-lookup limit.'
      : 'Finished. SPF is within the 10-lookup limit.';
    $('spf-status').className = data.overLimit ? 'tool-status s-err' : 'tool-status s-ok';
  }

  /* ---- plumbing -------------------------------------------------- */
  function setMode(mode) {
    var domainMode = mode === 'domain';
    $('spf-tab-domain').setAttribute('aria-selected', domainMode ? 'true' : 'false');
    $('spf-tab-record').setAttribute('aria-selected', domainMode ? 'false' : 'true');
    $('spf-panel-domain').hidden = !domainMode;
    $('spf-panel-record').hidden = domainMode;
    $('spf-status').className = 'tool-status';
    $('spf-status').textContent = domainMode ? 'Ready to check public DNS.' : 'Ready to inspect the pasted record.';
  }

  function setLoading(loading) {
    $('spf-submit').disabled = loading;
    $('spf-submit').textContent = loading ? 'Resolving…' : 'Analyze & Flatten';
    if (loading) {
      $('spf-status').className = 'tool-status';
      $('spf-status').textContent = 'Walking every include, redirect, a, and mx…';
    }
  }

  function copyText(text, btn) {
    var done = function () {
      var old = btn.textContent;
      btn.textContent = '✔ Copied';
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

  function run() {
    var domainMode = $('spf-tab-domain').getAttribute('aria-selected') === 'true';
    var domain = $('spf-domain').value.trim();
    var record = $('spf-record').value.trim();
    var params = new URLSearchParams();
    if (domainMode) {
      record = '';
    }
    if (domain) params.set('domain', domain);
    if (record) params.set('record', record);

    if ((domainMode && !domain) || (!domainMode && !record)) {
      $('spf-status').textContent = domainMode ? 'Enter a domain first.' : 'Paste an SPF record first.';
      $('spf-status').className = 'tool-status s-err';
      return;
    }

    lastShareQuery = params.toString();
    $('spf-results').hidden = true;
    setLoading(true);
    startRun(domainMode ? domain : '(pasted record)');

    fetch('api.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
      body: params.toString()
    }).then(function (response) {
      return response.json().then(function (body) {
        if (!response.ok || !body.ok) throw new Error(body.error || 'SPF check failed.');
        return body;
      });
    }).then(function (body) {
      setLoading(false);
      replayTrace(body.trace || [], function () { render(body); });
    }).catch(function (err) {
      setLoading(false);
      var msg = (err instanceof SyntaxError)
        ? 'The resolver returned something unexpected. Try again in a moment.'
        : (err.message || 'Could not check that SPF record.');
      $('spf-log').innerHTML = '';
      appendLine(makeLine('cmd', 'spf-flatten ' + (domainMode ? domain : '(pasted record)')));
      appendLine(makeLine('err', msg));
      $('spf-status').textContent = msg;
      $('spf-status').className = 'tool-status s-err';
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    if (!$('spf-form')) return;

    // Prefill from the URL (?domain=… or ?record=…) without auto-running —
    // the user still clicks Analyze & Flatten so nothing resolves on load.
    var qp = new URLSearchParams(window.location.search);
    var qDomain = (qp.get('domain') || '').trim();
    var qRecord = (qp.get('record') || '').trim();
    if (qDomain) {
      $('spf-domain').value = qDomain;
      setMode('domain');
    } else if (qRecord) {
      $('spf-record').value = qRecord;
      setMode('record');
    }

    $('spf-tab-domain').addEventListener('click', function () { setMode('domain'); });
    $('spf-tab-record').addEventListener('click', function () { setMode('record'); });

    $('spf-form').addEventListener('submit', function (e) {
      e.preventDefault();
      run();
    });

    Array.prototype.forEach.call(document.querySelectorAll('.spf-example'), function (btn) {
      btn.addEventListener('click', function () {
        $('spf-domain').value = btn.textContent.trim();
        setMode('domain');
        run();
      });
    });

    $('spf-reset').addEventListener('click', function () {
      clearTimeout(replayTimer);
      $('spf-domain').value = '';
      $('spf-record').value = '';
      $('spf-results').hidden = true;
      $('spf-share').hidden = true;
      $('spf-terminal').hidden = true;
      $('spf-log').innerHTML = '';
      $('spf-status').className = 'tool-status';
      $('spf-status').textContent = 'Ready. No account needed.';
    });

    $('spf-copy').addEventListener('click', function () {
      copyText($('spf-flat').textContent, this);
    });
    $('spf-copy-zone').addEventListener('click', function () {
      copyText($('spf-zone').textContent, this);
    });
    $('spf-share').addEventListener('click', function () {
      var query = lastShareQuery || window.location.search.replace(/^\?/, '');
      var url = window.location.origin + window.location.pathname + (query ? '?' + query : '');
      copyText(url, this);
    });
  });
})();
