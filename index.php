<?php
$basePath = "";
$pageTitle = "LiveIntel | Privacy-Conscious Phishing Simulation Platform";
$pageDescription = "LiveIntel helps teams create phishing simulation campaigns, launch them from their own environment, measure behavior, and improve awareness over time.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- ============================================================
     HERO
============================================================ -->
<main>
  <section class="hero" aria-labelledby="hero-heading">
    <div class="container">
      <div class="hero-grid">

        <div>
          <div class="hero-eyebrow">
            <span class="hero-eyebrow-dot" aria-hidden="true"></span>
            <span class="badge badge-blue">Phishing Simulation Platform</span>
          </div>

          <h1 class="hero-title" id="hero-heading">
            Privacy-conscious phishing simulations from your own environment.
          </h1>

          <p class="hero-desc">
            Create realistic campaigns, launch simulations, and measure clicks, exposure, and improvement over time.
          </p>

          <div class="hero-actions">
            <a href="contact" class="btn btn-primary btn-lg">Start Free</a>
            <a href="#workflow" class="btn btn-outline btn-lg">See How It Works</a>
          </div>
        </div>

        <div class="hero-visual" style="position:relative;">
          <span class="ioc-chip chip-danger" style="top:-14px; left:-10px;" aria-hidden="true">simulated-login.example</span>
          <span class="ioc-chip chip-warn chip-2" style="top:38%; right:-24px;" aria-hidden="true">remote content loaded</span>
          <span class="ioc-chip chip-3" style="bottom:-16px; left:8%;" aria-hidden="true">repeat failure trend</span>

          <div class="hero-terminal" role="img" aria-label="LiveIntel phishing simulation campaign activity and behavior metrics">
            <div class="terminal-bar">
              <span class="terminal-dot dot-red" aria-hidden="true"></span>
              <span class="terminal-dot dot-yellow" aria-hidden="true"></span>
              <span class="terminal-dot dot-green" aria-hidden="true"></span>
              <span class="terminal-title">liveintel: campaign session</span>
            </div>
            <div class="terminal-body" aria-hidden="true">
              <div class="terminal-line"><span class="t-prompt">&gt;</span><span class="t-cmd">create campaign q3-awareness</span></div>
              <div class="terminal-line"><span class="t-out t-ok">campaign template prepared</span></div>
              <div class="terminal-line"><span class="t-out t-ok">local agent connected</span></div>
              <div class="terminal-line"><span class="t-out t-warn">remote content exposure tracking enabled</span></div>

              <div class="risk-meter" style="margin:.85rem 0 1rem;">
                <div class="risk-meter-track"><div class="risk-meter-fill" data-fill="64" style="width:0%"></div></div>
                <div class="risk-meter-labels"><span>campaign progress</span><span>64% measured</span></div>
              </div>

              <div class="terminal-line t-info"><span class="t-prompt">&gt;</span><span class="t-cmd">review behavior signals</span></div>
              <div class="terminal-line"><span class="t-out t-ok">click rate: 11%</span></div>
              <div class="terminal-line"><span class="t-out t-ok">remote content exposure: 28%</span></div>
              <div class="terminal-line"><span class="t-out t-ok">repeat failures: 4 users</span></div>
              <div class="terminal-line"><span class="t-out t-ok">trend: improving over 3 campaigns</span></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       WORKFLOW
  ============================================================ -->
  <section class="section" id="workflow" aria-labelledby="workflow-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>How it works</div>
      <h2 class="section-title fade-in" id="workflow-heading">One phishing behavior workflow.</h2>
      <p class="section-subtitle fade-in">
        From campaign planning to measurable improvement, LiveIntel keeps the process simple.
      </p>

      <div class="workflow fade-in">
        <div class="workflow-node">
          <div class="workflow-node-dot" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z"/><path d="M8 8h8M8 12h8M8 16h5"/></svg>
          </div>
          <div>
            <div class="workflow-node-label">Team plans</div>
            <div class="workflow-node-desc">Choose audience, scenario, and learning goal.</div>
          </div>
        </div>
        <div class="workflow-node">
          <div class="workflow-node-dot" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2 11 13"/><path d="m22 2-7 20-4-9-9-4 20-7z"/></svg>
          </div>
          <div>
            <div class="workflow-node-label">LiveIntel simulates</div>
            <div class="workflow-node-desc">Run controlled campaigns and measure behavior.</div>
          </div>
        </div>
        <div class="workflow-node">
          <div class="workflow-node-dot" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
          </div>
          <div>
            <div class="workflow-node-label">LiveIntel measures</div>
            <div class="workflow-node-desc">Track clicks, exposure, repeat failures, and improvement over time.</div>
          </div>
        </div>
        <div class="workflow-node">
          <div class="workflow-node-dot" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
          </div>
          <div>
            <div class="workflow-node-label">Team improves</div>
            <div class="workflow-node-desc">Use results to adjust awareness, policy, and controls.</div>
          </div>
        </div>
      </div>

      <p class="tools-connect-note fade-in">
        Build a realistic phishing simulation, send it from your environment, and track the signals that matter: clicks, remote content exposure, repeat failures, and improvement over time.
      </p>
    </div>
  </section>

  <!-- ============================================================
       WHY LIVEINTEL
  ============================================================ -->
  <section class="section" id="platform" aria-labelledby="platform-heading" style="background:var(--clr-surface); border-block:1px solid var(--clr-border);">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>The platform</div>
      <h2 class="section-title fade-in" id="platform-heading">One platform. One phishing behavior workflow.</h2>
      <p class="section-subtitle fade-in">
        Campaign creation, simulation delivery, analytics, and reporting work together so teams can understand phishing behavior without stitching together separate tools.
      </p>

      <div class="pillar-grid pillar-grid-five">
        <article class="pillar-card fade-in">
          <span class="pillar-step">Privacy</span>
          <div class="product-card-icon icon-green" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="pillar-name">Privacy-conscious by design</h3>
          <p class="pillar-desc">Keep campaign execution close to the customer environment and avoid unnecessary data collection.</p>
        </article>

        <article class="pillar-card fade-in">
          <span class="pillar-step">Adoption</span>
          <div class="product-card-icon icon-blue" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3 class="pillar-name">Lightweight adoption</h3>
          <p class="pillar-desc">Start without a heavy enterprise rollout or analyst-heavy workflow.</p>
        </article>

        <article class="pillar-card fade-in">
          <span class="pillar-step">Metrics</span>
          <div class="product-card-icon icon-purple" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 16v-5M12 16V8M17 16v-3"/></svg>
          </div>
          <h3 class="pillar-name">Clear behavior metrics</h3>
          <p class="pillar-desc">Measure clicks, exposure signals, repeat failures, and improvement trends.</p>
        </article>

        <article class="pillar-card fade-in">
          <span class="pillar-step">Teams</span>
          <div class="product-card-icon icon-yellow" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="pillar-name">Built for practical teams</h3>
          <p class="pillar-desc">Designed for organizations that need phishing awareness without complex administration.</p>
        </article>

        <article class="pillar-card fade-in">
          <span class="pillar-step">Workflow</span>
          <div class="product-card-icon icon-blue" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 6h13M8 12h13M8 18h13"/><path d="M3 6h.01M3 12h.01M3 18h.01"/></svg>
          </div>
          <h3 class="pillar-name">One platform experience</h3>
          <p class="pillar-desc">Campaign creation, simulation delivery, and reporting work together as one workflow.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SIMPLE DEPLOYMENT
  ============================================================ -->
  <section class="section" aria-labelledby="deployment-heading">
    <div class="container">
      <div class="problem-grid">
        <div class="problem-copy">
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Deployment</div>
          <h2 class="section-title fade-in" id="deployment-heading">Simple deployment. Customer-controlled execution.</h2>
          <p class="fade-in">
            LiveIntel uses a lightweight local agent to execute phishing simulations from the customer's environment. The cloud platform provides campaign management, coordination, and reporting while the agent handles local execution.
          </p>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
            deployment-flow
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Agent</span><span class="spec-val">Deploy a lightweight agent</span></div>
            <div class="spec-row"><span class="spec-key">Portal</span><span class="spec-val">Create and manage campaigns from the portal</span></div>
            <div class="spec-row"><span class="spec-key">Execution</span><span class="spec-val">Execute simulations from the customer environment</span></div>
            <div class="spec-row"><span class="spec-key">Dashboard</span><span class="spec-val">Review results in the dashboard</span></div>
            <div class="spec-row"><span class="spec-key">Operations</span><span class="spec-val">Keep operational overhead low</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SIMULATION SAFETY & PRIVACY
  ============================================================ -->
  <section class="section" aria-labelledby="safety-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Simulation safety</div>
      <h2 class="section-title fade-in" id="safety-heading">Testing behavior, not surveilling people.</h2>
      <p class="section-subtitle fade-in">LiveIntel is built around clear simulation boundaries.</p>

      <div class="safety-banner fade-in">
        <div class="safety-banner-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
        <div>
          <div class="safety-banner-text">No real passwords are collected, stored, or transmitted during simulations.</div>
          <div class="safety-banner-sub">PhishSim records that a credential field was submitted. It never captures what was typed into it.</div>
        </div>
      </div>

      <div class="trust-grid">
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Safe credential simulation</div>
            <div class="trust-item-desc">Login pages in a campaign log a submission event, never the value entered.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Data minimization</div>
            <div class="trust-item-desc">Collect the signals needed to measure behavior and report on improvement.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Clear boundaries</div>
            <div class="trust-item-desc">Simulations exist to train and measure, not to monitor or punish individual employees.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       METRICS
  ============================================================ -->
  <section class="section" id="analytics" aria-labelledby="analytics-heading" style="background:var(--clr-surface); border-block:1px solid var(--clr-border);">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Metrics</div>
      <h2 class="section-title fade-in" id="analytics-heading">Measure the signals that matter.</h2>
      <p class="section-subtitle fade-in">
        LiveIntel focuses on practical indicators that help teams understand phishing resilience without requiring a dedicated analyst workflow.
      </p>

      <div class="analytics-grid analytics-grid-four">
        <div class="metric-card fade-in">
          <div class="metric-label">Click rate</div>
          <div class="metric-value"><span data-count="11" data-suffix="%">0%</span></div>
          <span class="metric-trend trend-up">Lower is better over time</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,10 20,14 40,18 60,22 80,26 100,30" fill="none" stroke="#10b981" stroke-width="2"/>
          </svg>
        </div>

        <div class="metric-card fade-in">
          <div class="metric-label">Remote content exposure</div>
          <div class="metric-value"><span data-count="28" data-suffix="%">0%</span></div>
          <span class="metric-trend trend-up">Signal captured during simulation</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,30 20,24 40,28 60,20 80,18 100,14" fill="none" stroke="#00c2ff" stroke-width="2"/>
          </svg>
        </div>

        <div class="metric-card fade-in">
          <div class="metric-label">Repeat failures</div>
          <div class="metric-value"><span data-count="4">0</span></div>
          <span class="metric-trend trend-up">Down from the prior campaign</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,8 20,12 40,16 60,20 80,26 100,30" fill="none" stroke="#10b981" stroke-width="2"/>
          </svg>
        </div>

        <div class="metric-card fade-in">
          <div class="metric-label">Improvement over time</div>
          <div class="metric-value"><span data-count="3" data-suffix=" cycles">0 cycles</span></div>
          <span class="metric-trend trend-up">Measured across campaigns</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,32 20,28 40,24 60,18 80,12 100,8" fill="none" stroke="#10b981" stroke-width="2"/>
          </svg>
        </div>

        <div class="spec-box span-2 fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
            exposure-note
          </div>
          <div class="spec-box-body">
            <p style="color:var(--clr-text); font-size:.92rem;">
              Remote content exposure means remote content loaded during the simulation. This may happen because of user action, client configuration, or automatic image loading. LiveIntel reports the signal without overclaiming the cause.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       TOOLS
  ============================================================ -->
  <section class="section tools-hook-band" id="tools" aria-labelledby="tools-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Free tools</div>
      <h2 class="section-title fade-in" id="tools-heading">Useful security tools, available anytime.</h2>
      <p class="section-subtitle fade-in">
        LiveIntel also provides standalone utilities for quick checks and investigations. Use them when you need a quick answer. Use the platform when you need repeatable phishing simulations, trends, and reporting over time.
      </p>

      <div class="tool-grid-mini">
        <a href="products/passforge/" class="tool-card-mini fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          <div class="tool-card-mini-name">PassForge</div>
          <p class="tool-card-mini-desc">Generate strong passwords locally in your browser using secure browser randomness.</p>
          <span class="tool-card-mini-link">Generate Password</span>
        </a>
        <a href="products/passmeter/" class="tool-card-mini fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
          <div class="tool-card-mini-name">PassMeter</div>
          <p class="tool-card-mini-desc">Check password strength in your browser. Your password is never sent to LiveIntel.</p>
          <span class="tool-card-mini-link">Check a Password</span>
        </a>
        <a href="products/spf-flattener/" class="tool-card-mini fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 15h6"/></svg></div>
          <div class="tool-card-mini-name">SPF Flattener</div>
          <p class="tool-card-mini-desc">Check your SPF record, count DNS lookups, and see whether flattening can help.</p>
          <span class="tool-card-mini-link">Check SPF Record</span>
        </a>
      </div>

      <p class="tools-connect-note fade-in">
        <a href="tools/">See all tools</a>
      </p>
    </div>
  </section>

  <!-- ============================================================
       FINAL CTA
  ============================================================ -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">Start your first phishing simulation.</h2>
        <p class="cta-banner-desc">
          Create a campaign, launch it from your environment, and measure behavior over time.
        </p>
        <div class="cta-banner-actions">
          <a href="contact" class="btn btn-primary btn-lg">Start Free</a>
          <a href="#workflow" class="btn btn-outline btn-lg">See How It Works</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
