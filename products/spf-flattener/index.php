<?php
$basePath = "../../";
$pageTitle = "SPF Flattener | Free SPF Record Tool | LiveIntel";
$pageDescription = "SPF Flattener is a free tool from LiveIntel that resolves nested SPF includes into a flattened record so you stay under the 10 DNS lookup limit.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="spf-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../tools/" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Tools
          </a>
          <span class="badge badge-green">Free Tool · Email Deliverability</span>
          <h1 class="product-hero-title" id="spf-title">SPF Flattener</h1>
          <p class="product-hero-desc">
            SPF has a hard limit of 10 DNS lookups. Cross it and mail servers
            can start failing your SPF check outright. SPF Flattener resolves
            every nested include down to raw IP ranges so you stay under the limit.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="#features" class="btn btn-primary">See Features</a>
            <a href="../../index.php#platform" class="btn btn-outline">Explore the Platform</a>
          </div>
        </div>

        <!-- Mini spec card -->
        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 15h6"/></svg>
            spf-flattener — tool spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">SPF Flattener</span></div>
            <div class="spec-row"><span class="spec-key">Purpose</span><span class="spec-val">Flatten SPF records under the 10-lookup limit</span></div>
            <div class="spec-row"><span class="spec-key">Input</span><span class="spec-val">Domain name or existing SPF record</span></div>
            <div class="spec-row"><span class="spec-key">Output</span><span class="spec-val">Flattened, ready-to-publish TXT record</span></div>
            <div class="spec-row"><span class="spec-key">Limit checked</span><span class="spec-val">RFC 7208 — 10 DNS lookups max</span></div>
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
        Most broken SPF records aren't wrong, they're just too big. This
        tool finds the problem and gives you a record you can actually publish.
      </p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔢</div>
          <h3 class="feature-title">Lookup Counting</h3>
          <p class="feature-desc">
            See exactly how many DNS lookups your current SPF record uses,
            and which include is responsible for the most of them.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🧬</div>
          <h3 class="feature-title">Recursive Flattening</h3>
          <p class="feature-desc">
            Every include, redirect, and nested SPF record gets resolved down
            to static IPv4 and IPv6 ranges, all in one pass.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">✅</div>
          <h3 class="feature-title">Record Validation</h3>
          <p class="feature-desc">
            Catches syntax errors, duplicate mechanisms, and a missing or
            misplaced "all" qualifier before you publish anything.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">✂️</div>
          <h3 class="feature-title">Proper Record Splitting</h3>
          <p class="feature-desc">
            Flattened records often exceed the 255-character TXT string limit.
            This splits them correctly so DNS providers accept them.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔔</div>
          <h3 class="feature-title">Change Monitoring</h3>
          <p class="feature-desc">
            A flattened record is a snapshot. Get notified when a provider
            you included changes its IP ranges, so your record doesn't go stale.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📋</div>
          <h3 class="feature-title">Ready-to-Publish Output</h3>
          <p class="feature-desc">
            Copy the finished record straight into your DNS provider. No
            manual editing or character counting required.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="how-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="how-heading">How SPF Flattener Works</h2>
      <p class="section-subtitle fade-in">Paste a domain or a record. Get back something you can publish.</p>

      <div class="two-col">
        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            flattening-pipeline
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Stage 1</span><span class="spec-val">Enter a domain or paste an existing SPF record</span></div>
            <div class="spec-row"><span class="spec-key">Stage 2</span><span class="spec-val">Resolve every include and redirect recursively</span></div>
            <div class="spec-row"><span class="spec-key">Stage 3</span><span class="spec-val">Collect IPv4 / IPv6 ranges and count total lookups</span></div>
            <div class="spec-row"><span class="spec-key">Stage 4</span><span class="spec-val">Flag anything still over the 10-lookup limit</span></div>
            <div class="spec-row"><span class="spec-key">Stage 5</span><span class="spec-val">Output a flattened, correctly split TXT record</span></div>
          </div>
        </div>

        <div class="fade-in">
          <p style="color:var(--clr-text-muted); font-size:.92rem; margin-bottom:.85rem;">
            Flattening trades flexibility for headroom. Once you flatten, an
            included provider changing their sending IPs won't automatically
            show up in your SPF record anymore, because you're now listing
            raw IPs instead of a dynamic include.
          </p>
          <p style="color:var(--clr-text-muted); font-size:.92rem;">
            That's why change monitoring matters. We track the providers you
            flattened and let you know when it's time to regenerate the record,
            instead of letting it quietly go stale.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="utility-banner fade-in">
        <p class="utility-banner-text">
          <strong>A clean SPF record stops spoofed senders at the DNS level.</strong>
          It doesn't tell you if a phishing email got through anyway. PhishCheck
          reviews SPF, DKIM, and DMARC results on every message you analyze.
        </p>
        <a href="../../products/phishcheck/" class="btn btn-outline">See PhishCheck</a>
      </div>

      <div class="cta-banner fade-in" style="margin-top:2rem;">
        <h2 class="cta-banner-title" id="cta-heading">Fix your SPF record before it fails silently</h2>
        <p class="cta-banner-desc">
          Use SPF Flattener on its own, or ask us how email authentication
          fits into a broader phishing analysis program.
        </p>
        <div class="cta-banner-actions">
          <a href="../../contact.php" class="btn btn-primary btn-lg">Request Demo</a>
          <a href="../../tools/" class="btn btn-outline btn-lg">Other Tools</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
