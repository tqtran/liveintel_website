/* =========================================================
   PassForge – client-side password & passphrase generator
   Everything runs locally. No network calls, ever.
   ========================================================= */

(function () {
  'use strict';

  /* ---- Wordlist for passphrases (log2(384) ≈ 8.6 bits/word) ---- */
  var WORDS = [
    'acorn','actor','adobe','agent','alarm','album','alert','alley','amber','anchor','ankle','antler','anvil','apple','apron','arch','arena','argon','armor','arrow',
    'aspen','atlas','attic','audio','autumn','avocado','awning','axis','bacon','badge','badger','bagel','baker','bamboo','banjo','barge','barley','basil','basket','baton',
    'beach','beacon','beak','bean','bear','beard','beaver','bell','belt','bench','berry','bicycle','birch','bison','blade','blanket','blaze','blimp','bloom','blossom',
    'bluff','board','bobcat','bolt','bonfire','bongo','bonus','book','booth','borrow','bottle','boulder','bounce','bowl','brace','braid','brain','branch','brave','bread',
    'breeze','brick','bridge','brisk','broom','brush','bubble','bucket','buddy','buffalo','bugle','bundle','bunny','burrow','butter','button','cabin','cable','cactus','camel',
    'camera','canal','candle','candy','canoe','canyon','carbon','cargo','carol','carrot','carve','castle','catfish','cedar','cellar','cello','chair','chalk','charm','chase',
    'cheek','cheer','cherry','chess','chest','chill','chime','chipmunk','chord','cider','cinder','circle','citrus','clam','clarinet','clasp','claw','clay','cliff','climb',
    'cloak','clock','cloud','clover','coach','coast','cobalt','cocoa','comet','compass','copper','coral','cotton','couch','cougar','cove','coyote','crab','cradle','craft',
    'crane','crater','crayon','creek','crest','cricket','crisp','crocus','crumb','crystal','cub','curtain','cushion','cycle','dagger','dairy','daisy','dandelion','dawn','decoy',
    'deer','delta','denim','depot','desk','dew','diesel','dill','dime','dinghy','dodge','dome','donkey','donut','dove','dozen','draft','dragon','drift','drill',
    'drum','duckling','dune','dusk','eagle','easel','echo','eclipse','eel','elbow','elder','elk','elm','ember','emerald','engine','envoy','ferry','fiddle','field',
    'finch','fjord','flame','flannel','flask','fleet','flint','flute','foam','fog','forge','fossil','fox','freckle','frost','gadget','galaxy','garlic','gecko','geyser',
    'giant','ginger','glacier','glade','glider','glow','goat','goose','gourd','granite','grape','gravel','griffin','grove','guitar','gull','gust','hammer','hamper','harbor',
    'harp','hatch','hawk','hazel','hedge','helmet','heron','hickory','hillside','hinge','holly','honey','hornet','horse','husk','ibis','icicle','igloo','inlet','iris',
    'iron','island','ivory','ivy','jacket','jade','jaguar','jasper','jelly','jigsaw','jungle','juniper','kayak','kelp','kettle','kiosk','kitten','kiwi','knapsack','knoll',
    'koala','lagoon','lantern','lapel','larch','lasso','latch','lava','leaf','ledge','lemon','lentil','levee','lilac','lily','limber','linen','lion','lizard','llama',
    'locket','locust','lodge','loft','lotus','lumber','lunar','lynx','magma','magnet','magpie','mango','mantis','maple','marble','marsh','mason','meadow','melon','mesa',
    'meteor','mint','mitten','moat','mocha','molar','monsoon','moose','morning','moss','moth','mountain','mule','mural','mustard','napkin','nectar','nettle','newt','nickel',
    'night','noodle','north','nova','nugget','nutmeg','oasis','oatmeal','ocean','ocelot','octave','olive','onion','opal','orbit','orchid','osprey','otter','owl','oxen',
    'oyster','paddle','pagoda','palm','panda','pantry','papaya','parcel','parrot','pasture','patio','peach','peanut','pebble','pecan','pelican','penguin','pepper','perch','pewter',
    'phantom','piano','pickle','pigeon','pillow','pilot','pine','pistachio','pixel','plank','plasma','plaza','plume','pocket','pond','pony','poppy','porch','portal','prairie',
    'prism','pumpkin','puppet','python','quail','quarry','quartz','quill','quilt','rabbit','raccoon','radar','radish','raft','rain','ranch','raven','reef','ribbon','ridge',
    'river','robin','rocket','rooster','rose','rudder','rune','rustic','saddle','saffron','sage','salmon','sand','sapling','satchel','scarf','scooter','scout','sedan','sequoia',
    'shale','shark','shelf','shore','shrub','sierra','silk','silo','skate','sketch','skillet','sled','sleet','sloth','smock','snail','sonar','sparrow','spice','spiral',
    'spruce','squash','squid','stable','stag','stairs','stamp','starling','static','steam','stone','stork','storm','stove','strudel','summit','sunset','swan','sweater','syrup',
    'table','tadpole','taffy','talon','tandem','tangelo','tapir','tavern','teapot','tempest','temple','terrace','thicket','thistle','thunder','tiger','timber','toad','toffee','token',
    'torch','totem','toucan','trail','tram','trench','trout','truffle','trumpet','tulip','tundra','tunnel','turnip','turtle','tusk','twig','umbrella','urchin','valley','vanilla',
    'vault','velvet','vessel','vine','violet','violin','vista','volcano','vole','waffle','wagon','walnut','walrus','wasp','waterfall','weasel','wharf','wheat','whistle','willow',
    'wind','winter','wolf','wombat','wren','yarn','yodel','yonder','zebra','zephyr','zinc','zinnia','zipper','saddlebag','marmot','falcon','gondola','harvest','lantana','mesquite'
  ];

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
    return { value: value, bits: Math.round(bits), pool: 'abcdefghijklmnopqrstuvwxyz' + sep };
  }

  /* ---- Meter -------------------------------------------------- */
  function meterLevel(bits) {
    if (bits < 45)  return { cls: 'm-weak',   text: 'weak - increase length or character variety' };
    if (bits < 65)  return { cls: 'm-fair',   text: 'fair - usable, but stronger is better' };
    if (bits < 100) return { cls: 'm-good',   text: 'good - strong for everyday use' };
    return { cls: 'm-strong', text: 'excellent - strong for high-value accounts' };
  }

  function updateMeter(bits) {
    var fill = $('pf-meter-fill');
    var level = meterLevel(bits);
    fill.className = 'tool-meter-fill ' + level.cls;
    fill.style.width = Math.min(100, (bits / 128) * 100) + '%';
    $('pf-meter-bits').textContent = '~' + bits + ' bits of entropy';
    $('pf-meter-text').textContent = level.text;
  }

  /* ---- Scramble-reveal animation ------------------------------ */
  function showResult(result) {
    var out = $('pf-output');
    if (scrambleTimer) { clearInterval(scrambleTimer); scrambleTimer = null; }

    if (result.error) {
      out.textContent = result.error;
      out.style.color = 'var(--clr-warning)';
      $('pf-meter-fill').style.width = '0%';
      $('pf-meter-bits').textContent = '-';
      $('pf-meter-text').textContent = '';
      return;
    }
    out.style.color = '';
    updateMeter(result.bits);

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
    var text = $('pf-output').textContent;
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

    ['pf-upper', 'pf-lower', 'pf-digits', 'pf-symbols', 'pf-ambiguous',
     'pf-separator', 'pf-capitalize', 'pf-number'].forEach(function (id) {
      $(id).addEventListener('change', generate);
    });

    generate();
  });
})();
