<?php
$basePath = "../";
$pageTitle = "PassMeter | LiveIntel";
$pageDescription = "LiveIntel PassMeter — Password strength and crack-time analysis with entropy scoring, dictionary detection, pattern weakness detection, and breach exposure checks.";
$pageStyles = '<style>
  /* Score meter */
  .score-meter {
    background: var(--clr-surface-2);
    border: 1px solid var(--clr-border);
    border-radius: var(--radius-md);
    padding: 1.5rem;
    margin-top: 1.5rem;
  }
  .score-label {
    font-size: .85rem;
    color: var(--clr-text-muted);
    margin-bottom: .6rem;
  }
  .score-bar {
    height: 8px;
    border-radius: 999px;
    background: var(--clr-border);
    overflow: hidden;
  }
  .score-bar-fill {
    height: 100%;
    border-radius: 999px;
  }
  .fill-weak   { width: 25%; background: var(--clr-danger); }
  .fill-fair   { width: 50%; background: var(--clr-warning); }
  .fill-good   { width: 75%; background: var(--clr-primary); }
  .fill-strong { width: 100%; background: var(--clr-accent-2); }
</style>';
require_once __DIR__ . '/../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="pc-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../index.php#products" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Products
          </a>
          <span class="badge badge-yellow">Strength &amp; Crack-Time Analysis</span>
          <h1 class="product-hero-title" id="pc-title">LiveIntel PassMeter</h1>
          <p class="product-hero-desc">
            Password strength and crack-time analysis engine. PassMeter goes beyond
            naive length checks — exposing entropy weakness, dictionary presence,
            structural patterns, breach exposure, and estimated crack time in one API call.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="../index.php#contact" class="btn btn-primary">Request Demo</a>
            <a href="#features" class="btn btn-outline">See Features</a>
          </div>
        </div>

        <!-- Score demo visual -->
        <div class="fade-in">
          <div class="spec-box">
            <div class="spec-box-header">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
              passmeter — product spec
            </div>
            <div class="spec-box-body">
              <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">LiveIntel PassMeter</span></div>
              <div class="spec-row"><span class="spec-key">Purpose</span><span class="spec-val">Password strength &amp; crack-time analysis</span></div>
              <div class="spec-row"><span class="spec-key">Response time</span><span class="spec-val">&lt; 50 ms (p99)</span></div>
              <div class="spec-row"><span class="spec-key">Breach DB</span><span class="spec-val">k-anonymity HIBP-compatible</span></div>
              <div class="spec-row"><span class="spec-key">Output</span><span class="spec-val">Score 0–100 + structured feedback</span></div>
            </div>
          </div>

          <div class="score-meter" aria-label="Strength score examples">
            <div class="score-label">Example: "P@ssw0rd!" — Score 24 / 100</div>
            <div class="score-bar" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" aria-label="Score 24">
              <div class="score-bar-fill fill-weak"></div>
            </div>
          </div>
          <div class="score-meter" aria-label="Strength score examples">
            <div class="score-label">Example: "correct-horse-battery-staple" — Score 91 / 100</div>
            <div class="score-bar" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" aria-label="Score 91">
              <div class="score-bar-fill fill-strong"></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="section" id="features" aria-labelledby="features-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="features-heading">Core Capabilities</h2>
      <p class="section-subtitle fade-in">
        PassMeter combines statistical analysis, linguistic heuristics, and live
        breach data to give you the most accurate strength assessment available.
      </p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📐</div>
          <h3 class="feature-title">Entropy Scoring</h3>
          <p class="feature-desc">
            Shannon entropy calculation adjusted for character set size and
            password structure. Penalizes predictable character class patterns
            (e.g. "Aaaaaa1!") that game naive metrics.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📖</div>
          <h3 class="feature-title">Dictionary Detection</h3>
          <p class="feature-desc">
            Multi-language dictionary matching with leet-speak normalisation,
            substring matching, and common concatenation detection
            (e.g. "password123" → dictionary word + digits).
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔍</div>
          <h3 class="feature-title">Pattern Weakness Detection</h3>
          <p class="feature-desc">
            Identifies keyboard walks (qwerty, 12345), date patterns, phone-number
            templates, repeated sequences, and other structural weaknesses that
            reduce effective entropy.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">⚠️</div>
          <h3 class="feature-title">Breach Exposure Checks</h3>
          <p class="feature-desc">
            k-anonymity prefix check against a continuously updated breach corpus
            (compatible with HaveIBeenPwned v3 API). No plaintext password ever
            leaves your network.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">💬</div>
          <h3 class="feature-title">Actionable Feedback</h3>
          <p class="feature-desc">
            Structured JSON feedback includes specific weakness reasons with
            user-friendly suggestion strings — ready to surface in your
            registration or password-change UI without extra dev work.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🧮</div>
          <h3 class="feature-title">Crack-Time Estimation</h3>
          <p class="feature-desc">
            Estimates offline crack time under GPU-accelerated attack scenarios
            (bcrypt, SHA-256, MD5) to give users intuitive feedback like
            "cracked in 3 seconds" vs "centuries".
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- SCORING MODEL -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="scoring-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="scoring-heading">Scoring Breakdown</h2>
      <p class="section-subtitle fade-in">PassMeter's composite score is derived from four weighted dimensions.</p>

      <div class="spec-box fade-in" style="max-width:720px;">
        <div class="spec-box-header">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          composite-score-model
        </div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">Entropy score (40%)</span><span class="spec-val">Effective bits of entropy</span></div>
          <div class="spec-row"><span class="spec-key">Dictionary penalty (25%)</span><span class="spec-val">Deduction for dictionary matches</span></div>
          <div class="spec-row"><span class="spec-key">Pattern penalty (20%)</span><span class="spec-val">Deduction for structural weaknesses</span></div>
          <div class="spec-row"><span class="spec-key">Breach flag (15%)</span><span class="spec-val">Binary: found in breach corpus</span></div>
          <div class="spec-row"><span class="spec-key">Output range</span><span class="spec-val">0 (critical) → 100 (excellent)</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">Stop users choosing weak passwords at the source</h2>
        <p class="cta-banner-desc">
          Integrate PassMeter into your registration and password-change flows
          with a single REST endpoint — no new infrastructure required.
        </p>
        <div class="cta-banner-actions">
          <a href="../index.php#contact" class="btn btn-primary btn-lg">Request Demo</a>
          <a href="../index.php#products" class="btn btn-outline btn-lg">Other Products</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
