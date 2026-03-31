<?php
$basePath = "../../";
$pageTitle = "LiveSentinel | LiveIntel";
$pageDescription = "LiveSentinel — Centralized monitoring and response layer for the LiveIntel ecosystem, overseeing certificate monitoring, phishing simulation, and key management systems.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="ls-title" style="--hero-accent: rgba(239,68,68,.08);">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../index.php#products" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Products
          </a>
          <span class="badge badge-red">Monitoring &amp; Response</span>
          <h1 class="product-hero-title" id="ls-title">LiveSentinel</h1>
          <p class="product-hero-desc">
            Centralized monitoring and response layer for the LiveIntel ecosystem.
            LiveSentinel watches over certificate monitoring, phishing simulation,
            and key management systems to surface incidents, correlate signals,
            and coordinate action from a single operational view.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="../../index.php#contact" class="btn btn-primary">Request Demo</a>
            <a href="#features" class="btn btn-outline">See Features</a>
          </div>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z"/><path d="M9 12h6"/><path d="M12 9v6"/></svg>
            livesentinel — product spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">LiveSentinel</span></div>
            <div class="spec-row"><span class="spec-key">Purpose</span><span class="spec-val">Centralized monitoring &amp; response</span></div>
            <div class="spec-row"><span class="spec-key">Oversees</span><span class="spec-val">Certificates, phishing simulations, key systems</span></div>
            <div class="spec-row"><span class="spec-key">Primary output</span><span class="spec-val">Incidents, alerts, response workflows</span></div>
            <div class="spec-row"><span class="spec-key">Delivery</span><span class="spec-val">Web UI + REST API + event notifications</span></div>
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
        LiveSentinel provides centralized visibility and operational control across
        multiple LiveIntel services so your team can detect issues sooner and
        respond with less fragmentation.
      </p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🛰️</div>
          <h3 class="feature-title">Cross-Service Monitoring</h3>
          <p class="feature-desc">
            Consolidates status, alerts, and operational telemetry from certificate
            monitoring, phishing simulation, and key management systems into one view.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔗</div>
          <h3 class="feature-title">Incident Correlation</h3>
          <p class="feature-desc">
            Links related signals across products so your team can distinguish
            isolated warnings from coordinated incidents that require broader response.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📜</div>
          <h3 class="feature-title">Response Workflows</h3>
          <p class="feature-desc">
            Standardize containment and escalation with workflow templates for
            triage, assignment, remediation tracking, and post-incident review.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔐</div>
          <h3 class="feature-title">Certificate Oversight</h3>
          <p class="feature-desc">
            Track certificate inventory, expiry risk, and trust issues centrally so
            exposed or expiring assets are surfaced before they disrupt operations.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🎣</div>
          <h3 class="feature-title">Simulation Event Visibility</h3>
          <p class="feature-desc">
            Monitor phishing simulation outcomes, high-risk users, and training-trigger
            activity without needing to pivot away from the broader response console.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🗝️</div>
          <h3 class="feature-title">Key Management Visibility</h3>
          <p class="feature-desc">
            Surface anomalous access, secret-handling exceptions, and policy drift
            across key management systems that feed the wider LiveIntel estate.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- OPERATION MODEL -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="ops-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="ops-heading">How LiveSentinel Works</h2>
      <p class="section-subtitle fade-in">Events are collected, correlated, prioritized, and turned into guided action.</p>

      <div class="spec-box fade-in" style="max-width:720px;">
        <div class="spec-box-header">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z"/><path d="M9 12h6"/><path d="M12 9v6"/></svg>
          monitoring-response-pipeline
        </div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">Step 1</span><span class="spec-val">Ingest service health, alert, and security events from integrated products</span></div>
          <div class="spec-row"><span class="spec-key">Step 2</span><span class="spec-val">Normalize and enrich events with asset, owner, and policy context</span></div>
          <div class="spec-row"><span class="spec-key">Step 3</span><span class="spec-val">Correlate related signals into incidents with severity scoring</span></div>
          <div class="spec-row"><span class="spec-key">Step 4</span><span class="spec-val">Route incidents into response workflows and stakeholder notifications</span></div>
          <div class="spec-row"><span class="spec-key">Step 5</span><span class="spec-val">Track remediation status and feed outcomes back into operational reporting</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">Oversee the whole ecosystem from one response layer</h2>
        <p class="cta-banner-desc">
          Connect LiveSentinel to the rest of your LiveIntel stack and give your
          team a single place to monitor, prioritize, and respond.
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