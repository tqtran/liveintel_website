<?php
$basePath = "../../";
$pageTitle = "SafeLink | Free Link Checker | LiveIntel";
$pageDescription = "SafeLink is a free tool from LiveIntel that checks a suspicious link for phishing and malware before you click it.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="sl-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../tools/" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Tools
          </a>
          <span class="badge badge-blue">Free Tool · URL Safety</span>
          <h1 class="product-hero-title" id="sl-title">SafeLink</h1>
          <p class="product-hero-desc">
            Paste a suspicious link and check it before anyone clicks. SafeLink
            evaluates the URL against threat intelligence to flag phishing pages
            and malware delivery.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="#features" class="btn btn-primary">See Features</a>
            <a href="../../index.php#platform" class="btn btn-outline">Explore the Platform</a>
          </div>
        </div>

        <!-- Mini spec card -->
        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
            safelink — product spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">LiveIntel SafeLink</span></div>
            <div class="spec-row"><span class="spec-key">Platform layer</span><span class="spec-val">LiveIntel / Intelligence Services</span></div>
            <div class="spec-row"><span class="spec-key">Purpose</span><span class="spec-val">Suspicious URL analysis</span></div>
            <div class="spec-row"><span class="spec-key">Latency</span><span class="spec-val">&lt; 80 ms (p99)</span></div>
            <div class="spec-row"><span class="spec-key">Integration</span><span class="spec-val">REST API / Browser Extension / Email Proxy</span></div>
            <div class="spec-row"><span class="spec-key">Verdict</span><span class="spec-val">Safe / Suspicious / Malicious</span></div>
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
        SafeLink checks a URL against threat intelligence and page behavior to
        return a safety verdict before you open it.
      </p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔍</div>
          <h3 class="feature-title">URL Reputation Check</h3>
          <p class="feature-desc">
            Each URL is cross-referenced against aggregated threat intelligence from
            global blocklists, OSINT feeds, and LiveIntel's own continuously updated
            reputation database before a verdict is returned.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">⚡</div>
          <h3 class="feature-title">Real-Time Link Scanning</h3>
          <p class="feature-desc">
            Inline scanning at click-time intercepts redirects and final destinations
            alike, catching time-delayed attacks where a URL is benign at send time
            but malicious by the time a user clicks.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🎣</div>
          <h3 class="feature-title">Phishing Site Detection</h3>
          <p class="feature-desc">
            Visual similarity hashing, brand impersonation detection, and credential
            form analysis identify phishing pages that mimic legitimate login portals
            — even freshly generated ones.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🦠</div>
          <h3 class="feature-title">Malware URL Detection</h3>
          <p class="feature-desc">
            Drive-by download detection, exploit kit fingerprinting, and payload
            classification flag URLs that serve malware — including obfuscated
            and polymorphic delivery mechanisms.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🖼️</div>
          <h3 class="feature-title">Link Preview</h3>
          <p class="feature-desc">
            Server-side screenshot and metadata extraction let users preview a
            destination page safely before navigating — removing the need to expose
            a live browser to untrusted content.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📊</div>
          <h3 class="feature-title">Threat Intelligence Reporting</h3>
          <p class="feature-desc">
            Every scan produces a structured JSON report with verdict, category
            classification, matched threat indicators, and redirect chain — ready
            for SIEM ingestion or dashboard display.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="how-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="how-heading">How SafeLink Works</h2>
      <p class="section-subtitle fade-in">Every URL passes through a five-stage pipeline and returns a verdict in under 80 ms.</p>

      <div class="spec-box fade-in" style="max-width:720px;">
        <div class="spec-box-header">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          scan-pipeline
        </div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">Stage 1</span><span class="spec-val">URL normalisation &amp; redirect chain resolution</span></div>
          <div class="spec-row"><span class="spec-key">Stage 2</span><span class="spec-val">Reputation lookup (blocklists + LiveIntel feed)</span></div>
          <div class="spec-row"><span class="spec-key">Stage 3</span><span class="spec-val">Domain &amp; certificate intelligence (age, WHOIS, TLS)</span></div>
          <div class="spec-row"><span class="spec-key">Stage 4</span><span class="spec-val">Content analysis — visual hash, form detection, payload check</span></div>
          <div class="spec-row"><span class="spec-key">Stage 5</span><span class="spec-val">ML classifier → verdict: Safe / Suspicious / Malicious</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="utility-banner fade-in">
        <p class="utility-banner-text">
          <strong>SafeLink checks one link at a time.</strong> PhishCheck analyzes
          the whole email it came from, and LiveInsight tracks whether your team
          is getting better at spotting these.
        </p>
        <a href="../../products/phishcheck/" class="btn btn-outline">See PhishCheck</a>
      </div>

      <div class="cta-banner fade-in" style="margin-top:2rem;">
        <h2 class="cta-banner-title" id="cta-heading">Want link checking built into your phishing workflow?</h2>
        <p class="cta-banner-desc">
          Talk to us about connecting SafeLink to full phishing analysis and simulation.
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
