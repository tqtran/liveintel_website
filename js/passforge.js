/* =========================================================
   PassForge – client-side password & passphrase generator
   Everything runs locally. No network calls, ever.
   ========================================================= */

(function () {
  'use strict';

  /* ---- Wordlist for passphrases: shared 1000-word list in
     js/wordlist.js (~10 bits/word) ---- */
  var WORDS = window.LI_GENERATOR_WORDS;

  var SETS = {
    upper:   'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    lower:   'abcdefghijklmnopqrstuvwxyz',
    digits:  '0123456789',
    symbols: '!@#$%^&*-_=+?~'
  };
  var AMBIGUOUS = 'Il1O0o';

  var $ = function (id) { return document.getElementById(id); };
  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var scrambleTimer = null;

  /* ---- Unbiased secure random int in [0, max) ---------------- */
  function randInt(max) {
    var limit = Math.floor(0x100000000 / max) * max;
    var buf = new Uint32Array(1);
    do { crypto.getRandomValues(buf); } while (buf[0] >= limit);
    return buf[0] % max;
  }

  function pick(str) { return str.charAt(randInt(str.length)); }

  function shuffle(arr) {
    for (var i = arr.length - 1; i > 0; i--) {
      var j = randInt(i + 1);
      var t = arr[i]; arr[i] = arr[j]; arr[j] = t;
    }
    return arr;
  }

  function stripAmbiguous(str) {
    return str.split('').filter(function (c) { return AMBIGUOUS.indexOf(c) === -1; }).join('');
  }

  /* ---- Generators -------------------------------------------- */
  function makePassword() {
    var length = parseInt($('pf-length').value, 10);
    var chosen = [];
    if ($('pf-upper').checked)   chosen.push(SETS.upper);
    if ($('pf-lower').checked)   chosen.push(SETS.lower);
    if ($('pf-digits').checked)  chosen.push(SETS.digits);
    if ($('pf-symbols').checked) chosen.push(SETS.symbols);
    if ($('pf-ambiguous').checked) chosen = chosen.map(stripAmbiguous);

    if (!chosen.length) return { error: 'Pick at least one character set to generate a password.' };

    var pool = chosen.join('');
    // one guaranteed char per selected set, rest from the whole pool
    var chars = chosen.map(pick);
    while (chars.length < length) chars.push(pick(pool));
    return {
      value: shuffle(chars).join(''),
      bits: Math.round(length * Math.log2(pool.length)),
      pool: pool
    };
  }

  function makePassphrase() {
    var count = parseInt($('pf-words').value, 10);
    var sep   = $('pf-separator').value;
    var caps  = $('pf-capitalize').checked;
    var num   = $('pf-number').checked;

    var words = [];
    for (var i = 0; i < count; i++) {
      var w = WORDS[randInt(WORDS.length)];
      if (caps) w = w.charAt(0).toUpperCase() + w.slice(1);
      words.push(w);
    }
    var value = words.join(sep);
    var bits = count * Math.log2(WORDS.length);
    if (num) { value += sep + randInt(100); bits += Math.log2(100); }
    /* headline = wordlist model: attackers run dictionary/combinator
       modes before byte-level brute force, so the wordlist figure is
       the strength that matters; char-space shown for comparison */
    return {
      value: value,
      bits: Math.round(bits),
      charBits: charSpaceBits(value),
      pool: 'abcdefghijklmnopqrstuvwxyz' + sep
    };
  }

  /* character-space entropy: length x log2(union of charsets present) -
     mirrors PassMeter's baseline so both tools agree on the same string */
  function charSpaceBits(value) {
    var pool = 0;
    if (/[a-z]/.test(value)) pool += 26;
    if (/[A-Z]/.test(value)) pool += 26;
    if (/[0-9]/.test(value)) pool += 10;
    if (/[^a-zA-Z0-9]/.test(value)) pool += 33;
    return Math.round(value.length * Math.log2(pool || 1));
  }

  /* ---- Meter -------------------------------------------------- */
  function meterLevel(bits) {
    if (bits < 45)  return { cls: 'm-weak',   text: 'weak - increase length or character variety' };
    if (bits < 65)  return { cls: 'm-fair',   text: 'fair - usable, but stronger is better' };
    if (bits < 100) return { cls: 'm-good',   text: 'good - strong for everyday use' };
    return { cls: 'm-strong', text: 'excellent - strong for high-value accounts' };
  }

  function updateMeter(bits, charBits) {
    var fill = $('pf-meter-fill');
    var level = meterLevel(bits);
    fill.className = 'tool-meter-fill ' + level.cls;
    fill.style.width = Math.min(100, (bits / 128) * 100) + '%';
    var label = '~' + bits + ' bits of entropy';
    if (charBits) label += ' (~' + charBits + ' bits vs blind brute force)';
    $('pf-meter-bits').textContent = label;
    $('pf-meter-text').textContent = level.text;
  }

  /* ---- Scramble-reveal animation ------------------------------ */
  var currentValue = ''; // the real generated value; Copy uses this, not the
                         // on-screen text, which may be mid-scramble

  function showResult(result) {
    var out = $('pf-output');
    if (scrambleTimer) { clearInterval(scrambleTimer); scrambleTimer = null; }

    if (result.error) {
      currentValue = '';
      out.textContent = result.error;
      out.style.color = 'var(--clr-warning)';
      $('pf-meter-fill').style.width = '0%';
      $('pf-meter-bits').textContent = '-';
      $('pf-meter-text').textContent = '';
      return;
    }
    currentValue = result.value;
    out.style.color = '';
    updateMeter(result.bits, result.charBits);

    var value = result.value;
    if (reducedMotion) { out.textContent = value; return; }

    var frame = 0;
    var totalFrames = 12;
    scrambleTimer = setInterval(function () {
      frame++;
      var revealed = Math.floor((frame / totalFrames) * value.length);
      var text = value.slice(0, revealed);
      for (var i = revealed; i < value.length; i++) text += pick(result.pool);
      out.textContent = text;
      if (frame >= totalFrames) {
        clearInterval(scrambleTimer);
        scrambleTimer = null;
        out.textContent = value;
      }
    }, 28);
  }

  function generate() {
    var passphraseMode = $('pf-tab-passphrase').getAttribute('aria-selected') === 'true';
    showResult(passphraseMode ? makePassphrase() : makePassword());
  }

  /* ---- Copy ---------------------------------------------------- */
  function copyOutput() {
    var text = currentValue;
    if (!text) return;
    var done = function () {
      var btn = $('pf-copy');
      var old = btn.textContent;
      btn.textContent = '✔ Copied';
      setTimeout(function () { btn.textContent = old; }, 1400);
    };
    if (navigator.clipboard && navigator.clipboard.writeText) {
      navigator.clipboard.writeText(text).then(done);
    } else {
      var ta = document.createElement('textarea');
      ta.value = text;
      document.body.appendChild(ta);
      ta.select();
      document.execCommand('copy');
      document.body.removeChild(ta);
      done();
    }
  }

  /* ---- Tabs ----------------------------------------------------- */
  function selectTab(mode) {
    var isPass = mode === 'password';
    $('pf-tab-password').setAttribute('aria-selected', isPass ? 'true' : 'false');
    $('pf-tab-passphrase').setAttribute('aria-selected', isPass ? 'false' : 'true');
    $('pf-panel-password').hidden = !isPass;
    $('pf-panel-passphrase').hidden = isPass;
    generate();
  }

  /* ---- Wire up --------------------------------------------------- */
  document.addEventListener('DOMContentLoaded', function () {
    if (!$('pf-output')) return;

    $('pf-tab-password').addEventListener('click', function () { selectTab('password'); });
    $('pf-tab-passphrase').addEventListener('click', function () { selectTab('passphrase'); });
    $('pf-generate').addEventListener('click', generate);
    $('pf-copy').addEventListener('click', copyOutput);

    $('pf-length').addEventListener('input', function () {
      $('pf-length-value').textContent = this.value;
      generate();
    });
    $('pf-words').addEventListener('input', function () {
      $('pf-words-value').textContent = this.value;
      generate();
    });
    $('pf-separator').addEventListener('input', generate);

    ['pf-upper', 'pf-lower', 'pf-digits', 'pf-symbols', 'pf-ambiguous',
     'pf-capitalize', 'pf-number'].forEach(function (id) {
      $(id).addEventListener('change', generate);
    });

    generate();
  });
})();
