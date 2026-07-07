<?php
$basePath = "../../";
$pageTitle = "PhishSim | Phishing Simulation | LiveIntel";
$pageDescription = "PhishSim runs controlled phishing simulations, measures who reports and who clicks, and improves awareness without collecting real passwords.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="ps-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../index.php#platform" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Platform
          </a>
          <span class="badge badge-purple">Core Platform · Phishing Simulation</span>
          <h1 class="product-hero-title" id="ps-title">PhishSim</h1>
          <p class="product-hero-desc">
            Run phishing simulations against your own organization. See who
            reports, who clicks, and who repeats mistakes, without collecting
            or storing a single real password.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="../../contact" class="btn btn-primary">Request Demo</a>
            <a href="#safety" class="btn btn-outline">Safety &amp; Privacy</a>
          </div>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
            phishsim — product spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">PhishSim</span></div>
            <div class="spec-row"><span class="spec-key">Purpose</span><span class="spec-val">Controlled phishing simulation</span></div>
            <div class="spec-row"><span class="spec-key">Tracks</span><span class="spec-val">Opens, clicks, reports, submission events</span></div>
            <div class="spec-row"><span class="spec-key">Credentials</span><span class="spec-val">Never collected or stored</span></div>
            <div class="spec-row"><span class="spec-key">Connects to</span><span class="spec-val">LiveInsight</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CAMPAIGN BUILDER -->
  <section class="section" id="features" aria-labelledby="builder-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="builder-heading">Campaign builder</h2>
      <p class="section-subtitle fade-in">
        Put together a campaign in a few steps and target it by department,
        role, or a group that reported real phishing recently.
      </p>

      <div class="features-grid">
        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🎯</div>
          <h3 class="feature-title">Targeted sending</h3>
          <p class="feature-desc">
            Segment by department, role, or risk tier. Send to a pilot group
            before rolling out company-wide.
          </p>
        </div>
        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🗓️</div>
          <h3 class="feature-title">Scheduling</h3>
          <p class="feature-desc">
            Send once or set up a recurring cadence so awareness testing
            doesn't depend on someone remembering to run it.
          </p>
        </div>
        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🖱️</div>
          <h3 class="feature-title">Click &amp; open tracking</h3>
          <p class="feature-desc">
            Every open, click, and report is logged with a timestamp, so you
            can measure how fast people react, not just whether they did.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- TEMPLATES -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="templates-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="templates-heading">Templates</h2>
      <p class="section-subtitle fade-in">
        Use ready-made lures based on real reported phishing themes, or build
        your own to match a threat you've actually seen.
      </p>

      <div class="theme-tags fade-in" style="max-width:640px;">
        <span class="theme-tag">Invoice / payment request</span>
        <span class="theme-tag">IT helpdesk / password reset</span>
        <span class="theme-tag">Package delivery notice</span>
        <span class="theme-tag">Executive request</span>
        <span class="theme-tag">Benefits / HR notice</span>
        <span class="theme-tag">Custom template</span>
      </div>
    </div>
  </section>

  <!-- USER BEHAVIOR METRICS -->
  <section class="section" aria-labelledby="metrics-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="metrics-heading">User behavior metrics</h2>
      <p class="section-subtitle fade-in">What a completed campaign tells you, in numbers you can compare over time.</p>

      <div class="analytics-grid">
        <div class="metric-card fade-in">
          <div class="metric-label">Remote content exposure</div>
          <div class="metric-value"><span data-count="28" data-suffix="%">0%</span></div>
          <span class="metric-trend trend-up">tracked during simulation</span>
        </div>
        <div class="metric-card fade-in">
          <div class="metric-label">Click rate</div>
          <div class="metric-value"><span data-count="11" data-suffix="%">0%</span></div>
          <span class="metric-trend trend-up">▼ 4% vs last campaign</span>
        </div>
        <div class="metric-card fade-in">
          <div class="metric-label">Credential-page reach</div>
          <div class="metric-value"><span data-count="3" data-suffix="%">0%</span></div>
          <span class="metric-trend trend-up">▼ 2% vs last campaign</span>
        </div>
        <div class="metric-card fade-in">
          <div class="metric-label">Repeat clickers</div>
          <div class="metric-value"><span data-count="4">0</span></div>
          <span class="metric-trend trend-up">▼ 2 vs last campaign</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SAFETY & PRIVACY -->
  <section class="section" id="safety" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="safety-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="safety-heading">Safety and privacy</h2>
      <p class="section-subtitle fade-in">A phishing simulation only works if people trust it isn't a trap.</p>

      <div class="safety-banner fade-in">
        <div class="safety-banner-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
        <div>
          <div class="safety-banner-text">No real passwords are collected, stored, or transmitted during simulations.</div>
          <div class="safety-banner-sub">A simulated login page records that a field was submitted. It does not read or keep what was typed.</div>
        </div>
      </div>

      <div class="trust-grid">
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">No real credential collection</div>
            <div class="trust-item-desc">Simulated credential fields never transmit or store the value a user types.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Training, not surveillance</div>
            <div class="trust-item-desc">Results are used to target training, not to flag individuals for discipline.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Role-based visibility</div>
            <div class="trust-item-desc">Individual-level results are visible to admins you designate, not the whole company.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Audit-friendly records</div>
            <div class="trust-item-desc">Every campaign is logged with who ran it, who it targeted, and what it sent.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- REPORTING & IMPROVEMENT -->
  <section class="section" aria-labelledby="reporting-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="reporting-heading">Reporting and improvement over time</h2>
      <p class="section-subtitle fade-in">
        One campaign is a snapshot. A series of them, tracked in LiveInsight,
        is a trend.
      </p>

      <div class="metric-card span-2 fade-in" style="max-width:640px;">
        <div class="metric-label" style="margin-bottom:1rem;">Click rate across three campaigns</div>
        <div class="dept-bars">
          <div class="dept-bar-row">
            <span class="dept-bar-name">Q1</span>
            <div class="dept-bar-track"><div class="dept-bar-fill risk-high" data-fill="19" style="width:0%"></div></div>
            <span class="dept-bar-value">19%</span>
          </div>
          <div class="dept-bar-row">
            <span class="dept-bar-name">Q2</span>
            <div class="dept-bar-track"><div class="dept-bar-fill" data-fill="15" style="width:0%"></div></div>
            <span class="dept-bar-value">15%</span>
          </div>
          <div class="dept-bar-row">
            <span class="dept-bar-name">Q3</span>
            <div class="dept-bar-track"><div class="dept-bar-fill" data-fill="11" style="width:0%"></div></div>
            <span class="dept-bar-value">11%</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">Run your first campaign the right way</h2>
        <p class="cta-banner-desc">
          We'll help you pick a template, set a target group, and read the
          results without turning it into a witch hunt.
        </p>
        <div class="cta-banner-actions">
          <a href="../../contact" class="btn btn-primary btn-lg">Request Demo</a>
          <a href="../../index.php#platform" class="btn btn-outline btn-lg">Other Products</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
