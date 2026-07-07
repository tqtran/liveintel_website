<?php
$basePath = "../../";
$pageTitle = "LiveInsight | Phishing Analytics | LiveIntel";
$pageDescription = "LiveInsight turns phishing simulation activity into clear dashboards, trends, comparisons, and summaries people can actually use.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="li-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../index.php#platform" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Platform
          </a>
          <span class="badge badge-blue">Core Platform - Analytics</span>
          <h1 class="product-hero-title" id="li-title">LiveInsight</h1>
          <p class="product-hero-desc">
            LiveInsight turns PhishSim campaign results into dashboards, trends,
            and reports people can read without a guided tour.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="../../contact" class="btn btn-primary">Request Demo</a>
            <a href="#dashboards" class="btn btn-outline">See Dashboards</a>
          </div>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
            liveinsight - product spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">LiveInsight</span></div>
            <div class="spec-row"><span class="spec-key">Purpose</span><span class="spec-val">Phishing &amp; human-risk analytics</span></div>
            <div class="spec-row"><span class="spec-key">Data sources</span><span class="spec-val">PhishSim campaigns and reporting events</span></div>
            <div class="spec-row"><span class="spec-key">Output</span><span class="spec-val">Dashboards, trends, scheduled reports</span></div>
            <div class="spec-row"><span class="spec-key">Audience</span><span class="spec-val">Analysts, managers, and leadership</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DASHBOARDS -->
  <section class="section" id="dashboards" aria-labelledby="dash-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="dash-heading">Dashboards</h2>
      <p class="section-subtitle fade-in">
        One view across phishing reports and simulation campaigns.
        <br /><span style="font-size:.82rem; opacity:.75;">Figures below are sample data for illustration.</span>
      </p>

      <div class="analytics-grid">
        <div class="metric-card fade-in">
          <div class="metric-label">Remote content exposure</div>
          <div class="metric-value"><span data-count="28" data-suffix="%">0%</span></div>
          <span class="metric-trend trend-up">tracked this quarter</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,32 20,28 40,24 60,18 80,12 100,8" fill="none" stroke="#10b981" stroke-width="2"/>
          </svg>
        </div>
        <div class="metric-card fade-in">
          <div class="metric-label">Click rate</div>
          <div class="metric-value"><span data-count="11" data-suffix="%">0%</span></div>
          <span class="metric-trend trend-up">Down 4% this quarter</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,10 20,14 40,18 60,22 80,26 100,30" fill="none" stroke="#10b981" stroke-width="2"/>
          </svg>
        </div>
        <div class="metric-card fade-in">
          <div class="metric-label">Time to report</div>
          <div class="metric-value"><span data-count="18" data-suffix=" min">0 min</span></div>
          <span class="metric-trend trend-up">Down 5 min this quarter</span>
        </div>
        <div class="metric-card fade-in">
          <div class="metric-label">High-risk emails flagged</div>
          <div class="metric-value"><span data-count="212">0</span></div>
          <span class="metric-trend trend-flat">steady month over month</span>
        </div>
      </div>
    </div>
  </section>

  <!-- TRENDS & COMPARISON -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="trend-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="trend-heading">Trends and campaign comparison</h2>
      <p class="section-subtitle fade-in">See whether training changed behavior, or only felt productive.</p>

      <div class="analytics-grid">
        <div class="metric-card span-2 fade-in">
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

        <div class="metric-card span-2 fade-in">
          <div class="metric-label" style="margin-bottom:1rem;">Department risk</div>
          <div class="dept-bars">
            <div class="dept-bar-row">
              <span class="dept-bar-name">Finance</span>
              <div class="dept-bar-track"><div class="dept-bar-fill risk-high" data-fill="72" style="width:0%"></div></div>
              <span class="dept-bar-value">72</span>
            </div>
            <div class="dept-bar-row">
              <span class="dept-bar-name">Support</span>
              <div class="dept-bar-track"><div class="dept-bar-fill risk-high" data-fill="63" style="width:0%"></div></div>
              <span class="dept-bar-value">63</span>
            </div>
            <div class="dept-bar-row">
              <span class="dept-bar-name">Sales</span>
              <div class="dept-bar-track"><div class="dept-bar-fill" data-fill="54" style="width:0%"></div></div>
              <span class="dept-bar-value">54</span>
            </div>
            <div class="dept-bar-row">
              <span class="dept-bar-name">Engineering</span>
              <div class="dept-bar-track"><div class="dept-bar-fill" data-fill="31" style="width:0%"></div></div>
              <span class="dept-bar-value">31</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXECUTIVE SUMMARIES -->
  <section class="section" aria-labelledby="exec-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="exec-heading">Executive summaries</h2>
      <p class="section-subtitle fade-in">
        A short, plain-English summary stakeholders can read without a
        walkthrough from the security team.
      </p>

      <div class="spec-box fade-in" style="max-width:680px;">
        <div class="spec-box-header">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
          quarterly-summary
        </div>
        <div class="spec-box-body">
          <p style="color:var(--clr-text); font-size:.92rem; margin-bottom:.75rem;">
            Click rate dropped from 19% to 11% over two campaign cycles.
            Remote content exposure is visible across departments. Finance
            and Support still need focused follow-up and are the next training priority.
          </p>
          <p style="color:var(--clr-text-muted); font-size:.85rem;">Delivered automatically. No manual slide-building required.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- BEHAVIOR OVER TIME -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="behavior-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="behavior-heading">User behavior over time</h2>
      <p class="section-subtitle fade-in">
        Individual results stay role-restricted. Broader reporting focuses on
        patterns, not public callouts.
      </p>

      <div class="features-grid">
        <div class="feature-card fade-in">
          <h3 class="feature-title">Repeat clicker tracking</h3>
          <p class="feature-desc">
            Flag the small group that clicks on more than one simulation, so
            targeted coaching goes where it matters.
          </p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Improvement curves</h3>
          <p class="feature-desc">
            Track a department's click rate campaign over campaign instead of
            judging one result in isolation.
          </p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Scheduled delivery</h3>
          <p class="feature-desc">
            Send a report to stakeholders on a schedule, scoped to their
            team or the whole organization.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">Turn phishing activity into a report people read</h2>
        <p class="cta-banner-desc">
          Connect LiveInsight to PhishSim and start with clear campaign results.
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
