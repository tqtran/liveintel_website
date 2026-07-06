<?php
$basePath = "../";
$pageTitle = "Free Security Tools | LiveIntel";
$pageDescription = "Free security utilities from LiveIntel: SafeLink, PassForge, PassMeter, Vault, and LiveSentinel. Standalone tools that connect to the LiveIntel phishing intelligence platform.";
require_once __DIR__ . '/../includes/header.php';
?>

<main>

  <!-- HERO -->
  <section class="product-hero" aria-labelledby="tools-title">
    <div class="container">
      <div style="max-width:680px;">
        <span class="badge badge-blue">Free Tools</span>
        <h1 class="product-hero-title" id="tools-title">Useful on their own. Stronger when connected.</h1>
        <p class="product-hero-desc" style="max-width:640px;">
          These utilities solve a specific problem on the spot: check a link,
          generate a password, store a secret. Each one also introduces your
          team to the LiveIntel workflow that PhishCheck, PhishSim, and
          LiveInsight run on.
        </p>
        <div style="display:flex; gap:1rem; flex-wrap:wrap;">
          <a href="../index.php#platform" class="btn btn-primary">See the Phishing Platform</a>
          <a href="../contact.php" class="btn btn-outline">Request Demo</a>
        </div>
      </div>
    </div>
  </section>

  <!-- TOOLS GRID -->
  <section class="section" aria-labelledby="grid-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="grid-heading">Tools</h2>
      <p class="section-subtitle fade-in">Free to use. No account required to try them out.</p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true" style="margin-bottom:.85rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></div>
          <h3 class="feature-title">SafeLink</h3>
          <p class="feature-desc">
            Paste a suspicious link and get a safety check before you click it.
            Same link-checking logic PhishCheck uses on email links.
          </p>
          <a href="../products/safelink/" class="product-card-link" style="margin-top:1rem;">Open SafeLink
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="feature-card fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true" style="margin-bottom:.85rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          <h3 class="feature-title">PassForge</h3>
          <p class="feature-desc">
            Generate a strong password or a memorable passphrase, with rules
            you control.
          </p>
          <a href="../products/passforge/" class="product-card-link" style="margin-top:1rem;">Open PassForge
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="feature-card fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true" style="margin-bottom:.85rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
          <h3 class="feature-title">PassMeter</h3>
          <p class="feature-desc">
            Check how long a password would take to crack and where it's
            weak: length, patterns, or reuse.
          </p>
          <a href="../products/passmeter/" class="product-card-link" style="margin-top:1rem;">Open PassMeter
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="feature-card fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true" style="margin-bottom:.85rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><circle cx="12" cy="12" r="3"/><path d="M7 12h2M15 12h2"/></svg></div>
          <h3 class="feature-title">Vault</h3>
          <p class="feature-desc">
            Store API keys, tokens, and credentials outside of chat messages
            and shared spreadsheets.
          </p>
          <a href="../products/vault/" class="product-card-link" style="margin-top:1rem;">Open Vault
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="feature-card fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true" style="margin-bottom:.85rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z"/><path d="M9 12h6"/><path d="M12 9v6"/></svg></div>
          <h3 class="feature-title">LiveSentinel</h3>
          <p class="feature-desc">
            Get an early warning when a public-facing site goes down or a
            certificate is about to expire.
          </p>
          <a href="../products/livesentinel/" class="product-card-link" style="margin-top:1rem;">Open LiveSentinel
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="feature-card fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true" style="margin-bottom:.85rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 15h6"/></svg></div>
          <h3 class="feature-title">SPF Flattener</h3>
          <p class="feature-desc">
            Resolve nested SPF includes into a flat record so you stay
            under the 10 DNS lookup limit.
          </p>
          <a href="../products/spf-flattener/" class="product-card-link" style="margin-top:1rem;">Open SPF Flattener
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- CONNECT TO PLATFORM -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="connect-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Where this leads</div>
          <h2 class="section-title fade-in" id="connect-heading">Security utilities that help you grow into phishing intelligence.</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            A stronger password doesn't stop a phishing email. A safe link
            check doesn't tell you if your organization is getting better at
            spotting attacks. That's what PhishCheck, PhishSim, and
            LiveInsight are for.
          </p>
          <p style="color:var(--clr-text-muted);">
            Start with the free tools. When you're ready to measure and reduce
            phishing risk across the whole organization, the platform is
            right here.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap; margin-top:1.5rem;">
            <a href="../index.php#platform" class="btn btn-primary">Explore the Platform</a>
            <a href="../contact.php" class="btn btn-outline">Request Demo</a>
          </div>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            from tool to platform
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Start</span><span class="spec-val">Check a link with SafeLink</span></div>
            <div class="spec-row"><span class="spec-key">Next</span><span class="spec-val">Analyze the full email with PhishCheck</span></div>
            <div class="spec-row"><span class="spec-key">Then</span><span class="spec-val">Test the team with PhishSim</span></div>
            <div class="spec-row"><span class="spec-key">Finally</span><span class="spec-val">Track improvement with LiveInsight</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
