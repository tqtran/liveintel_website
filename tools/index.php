<?php
$basePath = "../";
$pageTitle = "Free Security Tools | LiveIntel";
$pageDescription = "Free LiveIntel tools for password strength checks, local password generation, and SPF record diagnostics. No account needed.";
require_once __DIR__ . '/../includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="tools-title">
    <div class="container">
      <div style="max-width:720px;">
        <span class="badge badge-blue">Free Tools</span>
        <h1 class="product-hero-title" id="tools-title">Start with a free security tool.</h1>
        <p class="product-hero-desc" style="max-width:680px;">
          Check a password, generate a stronger one, or inspect an SPF record.
          No account needed. Use the free tool first, then connect the workflow
          when you need team-wide phishing simulations and reporting.
        </p>
        <div style="display:flex; gap:1rem; flex-wrap:wrap;">
          <a href="#tools-grid" class="btn btn-primary">Try Free Tools</a>
          <a href="../index.php#platform" class="btn btn-outline">Explore Platform</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="tools-grid" aria-labelledby="grid-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="grid-heading">Useful checks, right away.</h2>
      <p class="section-subtitle fade-in">
        Each tool is built to answer one practical question without forcing a signup.
      </p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true" style="margin-bottom:.85rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
          <h3 class="feature-title">PassMeter</h3>
          <p class="feature-desc">
            Check password strength in your browser. Your password is never sent
            to LiveIntel.
          </p>
          <a href="../products/passmeter/" class="product-card-link" style="margin-top:1rem;">Check a Password
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="feature-card fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true" style="margin-bottom:.85rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          <h3 class="feature-title">PassForge</h3>
          <p class="feature-desc">
            Generate strong passwords locally in your browser using secure browser
            randomness.
          </p>
          <a href="../products/passforge/" class="product-card-link" style="margin-top:1rem;">Generate Password
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="feature-card fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true" style="margin-bottom:.85rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 15h6"/></svg></div>
          <h3 class="feature-title">SPF Flattener</h3>
          <p class="feature-desc">
            Check your SPF record, count DNS lookups, and see whether flattening
            can help.
          </p>
          <a href="../products/spf-flattener/" class="product-card-link" style="margin-top:1rem;">Check SPF Record
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="connect-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Where this leads</div>
          <h2 class="section-title fade-in" id="connect-heading">When one-off checks are not enough.</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            Free tools are useful for one check. LiveIntel is built for teams
            that need a repeatable phishing workflow.
          </p>
          <p style="color:var(--clr-text-muted);">
            Use the tools when you need a quick answer. Use LiveIntel when you
            need simulations, trends, and reports over time.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap; margin-top:1.5rem;">
            <a href="../index.php#platform" class="btn btn-primary">Explore Platform</a>
            <a href="../contact.php" class="btn btn-outline">Request Demo</a>
          </div>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            from-tool-to-platform
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Quick check</span><span class="spec-val">Passwords, passphrases, and SPF records</span></div>
            <div class="spec-row"><span class="spec-key">Simulate</span><span class="spec-val">Controlled campaigns in PhishSim</span></div>
            <div class="spec-row"><span class="spec-key">Measure</span><span class="spec-val">Trends and summaries in LiveInsight</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
