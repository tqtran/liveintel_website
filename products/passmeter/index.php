<?php
$basePath = "../../";
$pageTitle = "PassMeter | Free Password Strength Checker | LiveIntel";
$pageDescription = "Check password strength in your browser. PassMeter explains weak patterns, estimated crack time, and optional breach exposure without sending your password to LiveIntel.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="pm-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../tools/" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Tools
          </a>
          <span class="badge badge-yellow">Free Tool · Runs in your browser</span>
          <h1 class="product-hero-title" id="pm-title">PassMeter</h1>
          <p class="product-hero-desc">
            Check password strength safely. The analysis runs in your browser,
            and your password is never sent to LiveIntel.
          </p>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            privacy-notes
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Account</span><span class="spec-val">Not needed</span></div>
            <div class="spec-row"><span class="spec-key">Password</span><span class="spec-val">Never sent to LiveIntel</span></div>
            <div class="spec-row"><span class="spec-key">Analysis</span><span class="spec-val">Local browser scoring</span></div>
            <div class="spec-row"><span class="spec-key">Breach check</span><span class="spec-val">Optional k-anonymity lookup</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="tool-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="tool-heading">Start with a quick check.</h2>
      <div class="tool-intro fade-in">
        Every signup form has an opinion about your password, and most of them
        are lying to you — "must contain a symbol" will happily wave
        <code>P@ssw0rd1</code> through. PassMeter gives you the
        <strong>attacker's-eye view</strong> instead: how big the real search
        space is, which shortcuts (dictionary words, keyboard walks, that birth
        year) shrink it, and how long a cracking rig would actually chew on it.
        All of it runs in your browser — the password never leaves this page.
      </div>

      <div class="tool-panel fade-in">
        <div class="tool-panel-body">
          <div class="tool-field">
            <label for="pm-input">Password to check</label>
            <div class="tool-output" style="margin:0;">
              <input class="tool-input" id="pm-input" type="password" autocomplete="off" spellcheck="false" placeholder="Type or paste a password" />
              <button class="btn btn-outline btn-sm" id="pm-toggle" type="button">show</button>
            </div>
          </div>

          <div class="tool-field">
            <label>Assumed character space
              <span class="tool-rate-note" style="display:inline; margin-left:.35rem;">what an attacker has to search — anything you actually typed is counted regardless</span>
            </label>
            <div class="tool-checks">
              <label class="tool-check"><input id="pm-upper" type="checkbox" checked /> Uppercase</label>
              <label class="tool-check"><input id="pm-lower" type="checkbox" checked /> Lowercase</label>
              <label class="tool-check"><input id="pm-digits" type="checkbox" checked /> Numbers</label>
              <label class="tool-check"><input id="pm-symbols" type="checkbox" checked /> Symbols</label>
            </div>
            <div class="tool-record" id="pm-charset" style="margin-top:.6rem; font-size:.78rem;" aria-live="polite"></div>
          </div>

          <div class="tool-meter" aria-label="Password strength score">
            <div class="tool-meter-track"><div class="tool-meter-fill" id="pm-score-fill"></div></div>
            <div class="tool-meter-label"><span id="pm-score-text">score: - / 100</span><span id="pm-score-label">start typing to analyze</span></div>
          </div>

          <div class="tool-stats" aria-label="Password statistics">
            <span class="tool-stat" id="pm-stat-length">length <strong>0</strong></span>
            <span class="tool-stat" id="pm-stat-pool">charset <strong>-</strong></span>
            <span class="tool-stat" id="pm-stat-bits">entropy <strong>-</strong></span>
          </div>

          <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(180px,1fr)); gap:1rem; margin-top:1rem;">
            <div class="feature-card">
              <h3 class="feature-title" style="font-size:1rem;">Online attack
                <span class="tool-rate-note">100 guesses/sec — rate-limited login form</span>
              </h3>
              <p class="feature-desc" id="pm-time-online">-</p>
            </div>
            <div class="feature-card">
              <h3 class="feature-title" style="font-size:1rem;">Offline bcrypt
                <span class="tool-rate-note">100k guesses/sec — stolen hash database</span>
              </h3>
              <p class="feature-desc" id="pm-time-bcrypt">-</p>
            </div>
            <div class="feature-card">
              <h3 class="feature-title" style="font-size:1rem;">Fast hash GPU
                <span class="tool-rate-note">100 billion guesses/sec — GPU rig vs MD5</span>
              </h3>
              <p class="feature-desc" id="pm-time-gpu">-</p>
            </div>
          </div>

          <ul class="tool-findings" id="pm-findings" aria-live="polite"></ul>

          <div class="tool-actions">
            <button class="btn btn-outline" id="pm-breach-btn" type="button" disabled>Check Known Breaches</button>
          </div>
          <div class="tool-status" id="pm-breach-result" aria-live="polite"></div>
          <p class="tool-note">
            The optional breach check hashes the password locally and sends only a short hash prefix to the public breach API.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="next-heading">
    <div class="container">
      <div class="utility-banner fade-in">
        <p class="utility-banner-text">
          <strong>Good passwords help, but phishing still gets through.</strong>
          LiveIntel helps teams measure reporting, clicking, and repeat risk
          across phishing simulations.
        </p>
        <a href="../../products/phishsim/" class="btn btn-outline">See PhishSim</a>
      </div>

      <div class="cta-banner fade-in" style="margin-top:2rem;">
        <h2 class="cta-banner-title" id="next-heading">Need this across your team?</h2>
        <p class="cta-banner-desc">
          Free tools answer one question. LiveIntel connects phishing analysis,
          simulations, and reporting over time.
        </p>
        <div class="cta-banner-actions">
          <a href="../../index.php#platform" class="btn btn-primary btn-lg">Explore Platform</a>
          <a href="../../tools/" class="btn btn-outline btn-lg">Try Another Tool</a>
        </div>
      </div>
    </div>
  </section>

</main>

<script src="../../js/passmeter.js"></script>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
