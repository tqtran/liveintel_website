<?php
$basePath = "../";
$pageTitle = "PassForge | LiveIntel";
$pageDescription = "LiveIntel PassForge — Secure password and passphrase generation engine with policy-driven rules and human-memorable passphrase support.";
require_once __DIR__ . '/../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="pf-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../index.php#products" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Products
          </a>
          <span class="badge badge-green">Password Security</span>
          <h1 class="product-hero-title" id="pf-title">LiveIntel PassForge</h1>
          <p class="product-hero-desc">
            Cryptographically secure password and passphrase generation engine.
            Enforce organisational password policies while producing credentials
            that are both strong and human-memorable.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="../index.php#contact" class="btn btn-primary">Request Demo</a>
            <a href="#features" class="btn btn-outline">See Features</a>
          </div>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            passforge — product spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">LiveIntel PassForge</span></div>
            <div class="spec-row"><span class="spec-key">Platform layer</span><span class="spec-val">LiveIntel / Intelligence Services</span></div>
            <div class="spec-row"><span class="spec-key">Purpose</span><span class="spec-val">Password / passphrase generation</span></div>
            <div class="spec-row"><span class="spec-key">Entropy source</span><span class="spec-val">CSPRNG (OS-level)</span></div>
            <div class="spec-row"><span class="spec-key">Modes</span><span class="spec-val">Password / Passphrase / Policy-based</span></div>
            <div class="spec-row"><span class="spec-key">Integration</span><span class="spec-val">REST API / CLI / SDK</span></div>
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
        PassForge goes beyond random character generation to produce credentials
        your team can actually remember — without sacrificing entropy.
      </p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔒</div>
          <h3 class="feature-title">Password Generation</h3>
          <p class="feature-desc">
            Generate high-entropy passwords using a configurable character set
            (upper, lower, digits, symbols). Length, complexity, and exclusion lists
            are all policy-configurable.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">💬</div>
          <h3 class="feature-title">Passphrase Generation</h3>
          <p class="feature-desc">
            Produce multi-word diceware-style passphrases drawn from curated
            word lists. Configurable word count, separators, and capitalisation
            options deliver NIST-aligned results.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📋</div>
          <h3 class="feature-title">Policy-Driven Rules</h3>
          <p class="feature-desc">
            Define org-wide or per-application policies specifying minimum length,
            character class requirements, prohibited patterns, rotation intervals,
            and reuse restrictions.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🧩</div>
          <h3 class="feature-title">Human-Memorable Passphrases</h3>
          <p class="feature-desc">
            Leverage cognitive-load research to generate passphrases that are
            both mathematically strong (≥ 77 bits of entropy) and easy for users
            to recall without writing them down.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔌</div>
          <h3 class="feature-title">REST API &amp; SDK</h3>
          <p class="feature-desc">
            Integrate PassForge directly into your provisioning workflows,
            HR onboarding systems, or self-service portals via a simple
            REST API or native SDKs (Python, Node.js, Go).
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🛡️</div>
          <h3 class="feature-title">Breach Avoidance</h3>
          <p class="feature-desc">
            Every generated credential is automatically checked against known
            breach corpora before delivery to ensure it has never appeared in
            public data dumps.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- GENERATION MODES -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="modes-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="modes-heading">Generation Modes</h2>
      <p class="section-subtitle fade-in">Choose the mode that fits your use case.</p>

      <div class="spec-box fade-in" style="max-width:720px;">
        <div class="spec-box-header">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          generation-modes
        </div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">password</span><span class="spec-val">Random chars — configurable length &amp; charset</span></div>
          <div class="spec-row"><span class="spec-key">passphrase</span><span class="spec-val">Diceware multi-word — configurable word count</span></div>
          <div class="spec-row"><span class="spec-key">policy</span><span class="spec-val">Auto-selects mode &amp; params from org policy</span></div>
          <div class="spec-row"><span class="spec-key">bulk</span><span class="spec-val">Generate N credentials in a single API call</span></div>
          <div class="spec-row"><span class="spec-key">audit</span><span class="spec-val">Validate existing passwords against active policy</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">Generate credentials your users will actually use</h2>
        <p class="cta-banner-desc">
          Embed PassForge into your identity pipeline or use it standalone
          via the intuitive web UI.
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
