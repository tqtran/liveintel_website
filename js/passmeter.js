/* =========================================================
   PassMeter – client-side password strength analyzer
   Analysis is 100% local. The optional breach check sends
   only the first 5 chars of a SHA-1 hash (k-anonymity) -
   the password itself never leaves this page.
   ========================================================= */

(function () {
  'use strict';

  var COMMON = [
    '123456','password','123456789','12345678','12345','1234567','qwerty','abc123','111111','123123',
    'admin','letmein','welcome','monkey','dragon','master','sunshine','princess','football','baseball',
    'iloveyou','trustno1','superman','batman','shadow','michael','jennifer','jordan','hunter','ranger',
    'buster','soccer','hockey','killer','george','charlie','andrew','thomas','daniel','jessica',
    'pepper','ginger','summer','ashley','nicole','hannah','maggie','matrix','secret','freedom',
    'whatever','qazwsx','password1','password123','qwerty123','1q2w3e4r','zaq12wsx','asdfgh','zxcvbn','000000',
    '121212','112233','654321','666666','696969','777777','888888','987654321','1qaz2wsx','access',
    'flower','mustang','starwars','computer','corvette','harley','cheese','chicken','cookie','banana',
    'orange','purple','silver','golden','diamond','tigger','yankees','cowboys','eagles','lakers',
    'liverpool','chelsea','arsenal','pokemon','naruto','pikachu','peanut','snoopy','smokey','midnight',
    'angel','lovely','babygirl','anthony','joshua','robert','william','nothing','letmein1','welcome1',
    'test','guest','root','toor','pass','love','money','iloveu','password!','p@ssw0rd',
    'passw0rd','admin123','changeme','default','abcd1234','q1w2e3r4','1234qwer','asdf1234','monkey1','dragon1'
  ];

  var DICT = [
    'about','account','alpha','angel','animal','apple','august','autumn','banana','baseball','basket','beach','bear','beautiful','berlin','bird','birthday','black','blue','boston',
    'brave','bread','brother','brown','buster','butter','candy','castle','change','charlie','cheese','cherry','chicken','chocolate','christmas','cloud','coffee','computer','cookie','cool',
    'corvette','cowboy','crazy','cricket','dallas','dance','daniel','david','delta','diamond','digital','doctor','dolphin','dragon','dream','eagle','earth','education','elephant','england',
    'family','fashion','fire','fish','flower','football','forest','forever','freedom','friend','frog','galaxy','game','garden','george','ghost','ginger','girl','gold','golden',
    'green','guitar','hammer','happy','harley','heart','heaven','hello','hockey','home','honey','horse','house','hunter','india','internet','island','jackson','jaguar','james',
    'jasmine','jasper','jennifer','jessica','jordan','joseph','joshua','junior','jupiter','justice','killer','kitten','knight','league','legend','light','lion','little','london','love',
    'lover','lucky','maggie','magic','maple','marine','marley','master','matrix','melody','memory','mercury','michael','michelle','mickey','midnight','miller','money','monkey','moon',
    'morgan','morning','mother','mountain','movie','music','mustang','nature','nicole','night','ninja','nirvana','ocean','oliver','orange','oscar','panda','panther','paris','party',
    'password','peace','peanut','pepper','phoenix','piano','picture','pirate','planet','player','pokemon','police','power','prince','princess','purple','python','queen','rabbit','rainbow',
    'ranger','raptor','raven','river','robert','rocket','rocky','rose','royal','sailor','samantha','sammy','samsung','saturn','school','scooter','scorpion','secret','shadow','shark',
    'silver','simple','sister','skate','smile','snake','snoopy','soccer','sparky','spider','sports','spring','starwars','steelers','stella','stone','storm','summer','sunny','sunshine',
    'super','superman','sweet','swimming','sydney','taylor','teacher','tennis','thomas','thunder','tiger','tigger','time','toyota','travel','trust','turtle','viking','violet','warrior',
    'water','welcome','whatever','white','william','willow','winner','winter','wizard','wolf','wonder','world','xavier','yankee','yellow','zombie'
  ];

  var LEET = { '0':'o', '1':'i', '3':'e', '4':'a', '5':'s', '6':'g', '7':'t', '8':'b', '9':'g', '@':'a', '$':'s', '!':'i', '+':'t', '(':'c' };
  var KEYBOARD_ROWS = ['qwertyuiop', 'asdfghjkl', 'zxcvbnm', '1234567890', '0987654321'];
  var SYMBOLS_POOL = 33; // printable ASCII symbols + space

  var RATES = [
    { id: 'pm-time-online', rate: 1e2 },   // throttled online attack
    { id: 'pm-time-bcrypt', rate: 1e5 },   // offline, bcrypt
    { id: 'pm-time-gpu',    rate: 1e11 }   // offline, GPU rig vs fast hash
  ];

  var $ = function (id) { return document.getElementById(id); };
  var debounceTimer = null;
  var lastAnalyzed = '';

  function normalizeLeet(str) {
    return str.toLowerCase().split('').map(function (c) { return LEET[c] || c; }).join('');
  }

  function reverse(str) { return str.split('').reverse().join(''); }

  /* ---- Pattern detectors -------------------------------------- */
  function findDictWords(normalized) {
    var found = [];
    for (var i = 0; i < DICT.length; i++) {
      if (DICT[i].length >= 4 && normalized.indexOf(DICT[i]) !== -1) found.push(DICT[i]);
    }
    // drop words fully contained in a longer match
    return found.filter(function (w) {
      return !found.some(function (o) { return o !== w && o.indexOf(w) !== -1; });
    });
  }

  function hasSequence(pw) {
    var run = 1;
    for (var i = 1; i < pw.length; i++) {
      var diff = pw.charCodeAt(i) - pw.charCodeAt(i - 1);
      if (diff === 1 || diff === -1) {
        run++;
        if (run >= 4) return true;
      } else {
        run = 1;
      }
    }
    return false;
  }

  function hasKeyboardWalk(pw) {
    var lower = pw.toLowerCase();
    for (var i = 0; i <= lower.length - 4; i++) {
      var chunk = lower.slice(i, i + 4);
      for (var r = 0; r < KEYBOARD_ROWS.length; r++) {
        if (KEYBOARD_ROWS[r].indexOf(chunk) !== -1 || KEYBOARD_ROWS[r].indexOf(reverse(chunk)) !== -1) return true;
      }
    }
    return false;
  }

  /* ---- Core analysis ------------------------------------------- */
  function analyze(pw) {
    var findings = [];
    var len = pw.length;

    var pool = 0;
    if (/[a-z]/.test(pw)) pool += 26;
    if (/[A-Z]/.test(pw)) pool += 26;
    if (/[0-9]/.test(pw)) pool += 10;
    if (/[^a-zA-Z0-9]/.test(pw)) pool += SYMBOLS_POOL;

    var baseBits = len * Math.log2(pool || 1);
    var eff = baseBits;

    var normalized = normalizeLeet(pw);
    var stripped = normalized.replace(/[^a-z]+$/, '').replace(/^[^a-z]+/, '');

    /* common password (exact or with padding stripped) */
    var isCommon = COMMON.indexOf(pw.toLowerCase()) !== -1 ||
                   COMMON.indexOf(normalized) !== -1 ||
                   (stripped.length >= 4 && COMMON.indexOf(stripped) !== -1);
    if (isCommon) {
      eff = 4;
      findings.push({ cls: 'f-err', text: 'This is one of the most common passwords on the internet. Attackers try it first.' });
    }

    /* dictionary matches (leet-speak normalized) */
    var dictHits = isCommon ? [] : findDictWords(normalized);
    dictHits.forEach(function (w) {
      eff -= w.length * 3.5;
      findings.push({ cls: 'f-warn', text: 'Contains the dictionary word "' + w + '" - wordlist attacks see through symbol swaps.' });
    });

    /* structural patterns */
    var patternCount = 0;
    if (hasSequence(pw)) {
      patternCount++; eff -= 10;
      findings.push({ cls: 'f-warn', text: 'Sequential characters detected (like "abcd" or "4321") - these barely add entropy.' });
    }
    if (hasKeyboardWalk(pw)) {
      patternCount++; eff -= 10;
      findings.push({ cls: 'f-warn', text: 'Keyboard walk detected (like "qwer" or "asdf") - cracking tools check these early.' });
    }
    if (/(.)\1{2,}/.test(pw)) {
      patternCount++; eff -= 6;
      findings.push({ cls: 'f-warn', text: 'Repeated characters detected - "aaa" is one guess, not three.' });
    }
    if (/^(.{2,})\1+$/.test(pw)) {
      patternCount++; eff -= 12;
      findings.push({ cls: 'f-warn', text: 'The whole password is a repeated block - only the block counts.' });
    }
    if (/(19|20)\d\d/.test(pw)) {
      patternCount++; eff -= 6;
      findings.push({ cls: 'f-warn', text: 'Looks like it contains a year - dates are common in cracking wordlists.' });
    }

    /* length & variety */
    if (len < 8) {
      findings.push({ cls: 'f-err', text: 'Under 8 characters - too short no matter what\'s in it.' });
    } else if (len >= 16) {
      findings.push({ cls: 'f-ok', text: 'Good length (' + len + ' chars) - length is the easiest way to add entropy.' });
    }
    if (pool <= 10 && len > 0) {
      findings.push({ cls: 'f-warn', text: 'Only digits - add letters or symbols if this is not a PIN.' });
    }
    if (!isCommon && dictHits.length === 0 && len >= 8) {
      findings.push({ cls: 'f-ok', text: 'No dictionary words found.' });
    }
    if (patternCount === 0 && len >= 8) {
      findings.push({ cls: 'f-ok', text: 'No sequences, walks, or repeats found.' });
    }

    eff = Math.max(1, eff);

    /* composite score: entropy 40 / dictionary 25 / patterns 20 / breach 15 */
    var entropyPts = Math.min(40, (eff / 70) * 40);
    var dictPts    = isCommon ? 0 : Math.max(0, 25 - dictHits.length * 10);
    var patternPts = Math.max(0, 20 - patternCount * 7);
    var breachPts  = 15; // granted until a breach check says otherwise

    var score = Math.round(entropyPts + dictPts + patternPts + breachPts);
    if (isCommon) score = Math.min(score, 8);

    return { score: score, eff: eff, len: len, pool: pool, isCommon: isCommon, findings: findings };
  }

  /* ---- Crack-time formatting ------------------------------------ */
  function fmtTime(seconds) {
    if (seconds < 1) return 'instantly';
    if (seconds < 60) return Math.round(seconds) + ' seconds';
    if (seconds < 3600) return Math.round(seconds / 60) + ' minutes';
    if (seconds < 86400) return Math.round(seconds / 3600) + ' hours';
    if (seconds < 31557600) return Math.round(seconds / 86400) + ' days';
    var years = seconds / 31557600;
    if (years < 1e3) return Math.round(years) + ' years';
    if (years < 1e6) return Math.round(years / 1e3) + ' thousand years';
    if (years < 1e9) return Math.round(years / 1e6) + ' million years';
    if (years < 1e12) return Math.round(years / 1e9) + ' billion years';
    return 'effectively unguessable with this model';
  }

  function scoreLevel(score) {
    if (score < 25) return { cls: 'm-weak',   label: 'weak' };
    if (score < 50) return { cls: 'm-fair',   label: 'fair' };
    if (score < 75) return { cls: 'm-good',   label: 'good' };
    return { cls: 'm-strong', label: 'strong' };
  }

  /* ---- Render ----------------------------------------------------- */
  function render(pw) {
    var findingsEl = $('pm-findings');
    var breachBtn = $('pm-breach-btn');
    var breachResult = $('pm-breach-result');

    /* password changed → previous breach verdict no longer applies */
    breachResult.textContent = '';
    breachResult.className = 'tool-status';
    breachBtn.disabled = pw.length === 0;

    if (!pw) {
      $('pm-score-fill').style.width = '0%';
      $('pm-score-text').textContent = 'score: - / 100';
      $('pm-score-label').textContent = 'start typing to analyze';
      $('pm-stat-length').innerHTML = 'length <strong>0</strong>';
      $('pm-stat-pool').innerHTML = 'charset <strong>-</strong>';
      $('pm-stat-bits').innerHTML = 'entropy <strong>-</strong>';
      RATES.forEach(function (r) { $(r.id).textContent = '-'; });
      findingsEl.innerHTML = '';
      return;
    }

    var res = analyze(pw);
    var level = scoreLevel(res.score);

    var fill = $('pm-score-fill');
    fill.className = 'tool-meter-fill ' + level.cls;
    fill.style.width = res.score + '%';
    $('pm-score-text').textContent = 'score: ' + res.score + ' / 100';
    $('pm-score-label').textContent = level.label;

    $('pm-stat-length').innerHTML = 'length <strong>' + res.len + '</strong>';
    $('pm-stat-pool').innerHTML = 'charset <strong>' + res.pool + '</strong>';
    $('pm-stat-bits').innerHTML = 'entropy <strong>~' + Math.round(res.eff) + ' bits</strong>';

    var guesses = Math.pow(2, res.eff - 1); // average case
    RATES.forEach(function (r) { $(r.id).textContent = fmtTime(guesses / r.rate); });

    findingsEl.innerHTML = '';
    res.findings.forEach(function (f) {
      var li = document.createElement('li');
      li.className = f.cls;
      li.textContent = f.text;
      findingsEl.appendChild(li);
    });
  }

  /* ---- HIBP k-anonymity breach check ------------------------------ */
  function sha1Hex(str) {
    var data = new TextEncoder().encode(str);
    return crypto.subtle.digest('SHA-1', data).then(function (buf) {
      return Array.prototype.map.call(new Uint8Array(buf), function (b) {
        return ('0' + b.toString(16)).slice(-2);
      }).join('').toUpperCase();
    });
  }

  function checkBreach() {
    var pw = $('pm-input').value;
    if (!pw) return;
    var result = $('pm-breach-result');
    var btn = $('pm-breach-btn');

    if (!(window.crypto && crypto.subtle)) {
      result.textContent = '✖ breach check needs a secure (https) context. Analysis above still works.';
      result.className = 'tool-status s-err';
      return;
    }

    btn.disabled = true;
    result.className = 'tool-status';
    result.textContent = '❯ hashing locally, sending 5-char prefix to HIBP…';

    sha1Hex(pw).then(function (hash) {
      var prefix = hash.slice(0, 5);
      var suffix = hash.slice(5);
      return fetch('https://api.pwnedpasswords.com/range/' + prefix).then(function (r) {
        if (!r.ok) throw new Error('API returned ' + r.status);
        return r.text();
      }).then(function (body) {
        var hit = body.split('\n').find(function (line) {
          return line.split(':')[0].trim() === suffix;
        });
        if (hit) {
          var count = parseInt(hit.split(':')[1], 10).toLocaleString();
          result.textContent = '✖ found in ' + count + ' known breaches. Use a new password for this account.';
          result.className = 'tool-status s-err';
        } else {
          result.textContent = '✔ not found in any known breach corpus.';
          result.className = 'tool-status s-ok';
        }
      });
    }).catch(function () {
      result.textContent = '✖ couldn\'t reach the breach API. Try again in a moment.';
      result.className = 'tool-status s-err';
    }).finally(function () {
      btn.disabled = false;
    });
  }

  /* ---- Wire up ------------------------------------------------------ */
  document.addEventListener('DOMContentLoaded', function () {
    var input = $('pm-input');
    if (!input) return;

    input.addEventListener('input', function () {
      clearTimeout(debounceTimer);
      var value = input.value;
      debounceTimer = setTimeout(function () {
        if (value !== lastAnalyzed) { lastAnalyzed = value; render(value); }
      }, 120);
    });

    $('pm-toggle').addEventListener('click', function () {
      var masked = input.type === 'password';
      input.type = masked ? 'text' : 'password';
      this.textContent = masked ? 'hide' : 'show';
    });

    $('pm-breach-btn').addEventListener('click', checkBreach);

    render('');
  });
})();
