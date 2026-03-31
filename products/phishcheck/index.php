<?php
$basePath = "../../";
$pageTitle = "PhishCheck | LiveIntel";
$pageDescription = "LiveIntel PhishCheck — Phishing email analysis covering header inspection, link detection, impersonation detection, attachment risk scoring, and domain intelligence.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="pg-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../index.php#products" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Products
          </a>
          <span class="badge badge-blue">Phishing Email Analysis</span>
          <h1 class="product-hero-title" id="pg-title">LiveIntel PhishCheck</h1>
          <p class="product-hero-desc">
            Phishing email analysis engine that inspects every layer of an email —
            headers, links, attachments, and sender reputation — to surface threats
            before they reach a user's inbox.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="../../index.php#contact" class="btn btn-primary">Request Demo</a>
            <a href="#features" class="btn btn-outline">See Features</a>
          </div>
        </div>

        <!-- Mini spec card -->
        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            phishcheck — product spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">LiveIntel PhishCheck</span></div>
            <div class="spec-row"><span class="spec-key">Platform layer</span><span class="spec-val">LiveIntel / Intelligence Services</span></div>
            <div class="spec-row"><span class="spec-key">Purpose</span><span class="spec-val">Phishing email analysis</span></div>
            <div class="spec-row"><span class="spec-key">Integration</span><span class="spec-val">SMTP, O365, Google Workspace</span></div>
            <div class="spec-row"><span class="spec-key">Detection mode</span><span class="spec-val">Real-time &amp; post-delivery</span></div>
            <div class="spec-row"><span class="spec-key">Reporting</span><span class="spec-val">Dashboard + REST API</span></div>
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
        PhishCheck applies multi-layer analysis to every incoming email, flagging
        threats with high precision and near-zero false positives.
      </p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📧</div>
          <h3 class="feature-title">Email Header Analysis</h3>
          <p class="feature-desc">
            Deep inspection of SPF, DKIM, DMARC records and routing metadata to
            surface forged or manipulated headers before message delivery.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔗</div>
          <h3 class="feature-title">Phishing Link Detection</h3>
          <p class="feature-desc">
            URL rewriting and sandbox detonation detect credential-harvesting pages,
            lookalike domains, and shortened URLs with millisecond response times.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🎭</div>
          <h3 class="feature-title">Impersonation Detection</h3>
          <p class="feature-desc">
            Machine-learning models identify display-name spoofing, lookalike sender
            addresses, and executive impersonation patterns (BEC attacks).
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📎</div>
          <h3 class="feature-title">Attachment Risk Scoring</h3>
          <p class="feature-desc">
            File-type heuristics, macro analysis, and cloud sandboxing assign a
            risk score to every attachment, blocking malicious payloads before execution.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🌐</div>
          <h3 class="feature-title">Domain Intelligence</h3>
          <p class="feature-desc">
            Age, reputation, WHOIS data, and category classification of sending domains
            to distinguish established senders from freshly registered threat infrastructure.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📊</div>
          <h3 class="feature-title">Unified Threat Dashboard</h3>
          <p class="feature-desc">
            Aggregate threat timelines, per-user exposure reports, and API-accessible
            events for SIEM integration.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="how-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="how-heading">How PhishCheck Works</h2>
      <p class="section-subtitle fade-in">Every email passes through a six-stage analysis pipeline in under 200 ms.</p>

      <div class="spec-box fade-in" style="max-width:720px;">
        <div class="spec-box-header">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          analysis-pipeline
        </div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">Stage 1</span><span class="spec-val">Email ingestion (SMTP hook / API)</span></div>
          <div class="spec-row"><span class="spec-key">Stage 2</span><span class="spec-val">Header &amp; authentication checks (SPF / DKIM / DMARC)</span></div>
          <div class="spec-row"><span class="spec-key">Stage 3</span><span class="spec-val">Sender reputation &amp; domain intelligence lookup</span></div>
          <div class="spec-row"><span class="spec-key">Stage 4</span><span class="spec-val">URL extraction, rewriting &amp; sandbox detonation</span></div>
          <div class="spec-row"><span class="spec-key">Stage 5</span><span class="spec-val">Attachment heuristic analysis &amp; sandbox execution</span></div>
          <div class="spec-row"><span class="spec-key">Stage 6</span><span class="spec-val">Risk score aggregation → Allow / Quarantine / Block</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">Stop phishing attacks before they land</h2>
        <p class="cta-banner-desc">
          Deploy PhishCheck alongside your email gateway in minutes.
          Full API coverage included.
        </p>
        <div class="cta-banner-actions">
          <a href="../../index.php#contact" class="btn btn-primary btn-lg">Request Demo</a>
          <a href="../../index.php#products" class="btn btn-outline btn-lg">Other Products</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
