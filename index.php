<?php
$basePath = "";
$pageTitle = "LiveIntel | Phishing Simulation and Analytics Platform";
$pageDescription = "LiveIntel helps security teams run controlled phishing simulations and turn user behavior into measurable security analytics.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- ============================================================
     HERO
============================================================ -->
<main>
  <section class="hero" aria-labelledby="hero-heading">
    <div class="container">
      <div class="hero-grid">

        <!-- Copy -->
        <div>
          <div class="hero-eyebrow">
            <span class="hero-eyebrow-dot" aria-hidden="true"></span>
            <span class="badge badge-blue">Phishing Simulation Platform</span>
          </div>

          <h1 class="hero-title" id="hero-heading">
            Phishing simulation<br />and <span>analytics</span> for security teams.
          </h1>

          <p class="hero-desc">
            Run phishing simulations and turn user behavior into clear reports.
          </p>

          <div class="hero-actions">
            <a href="#platform" class="btn btn-primary btn-lg">Explore Platform</a>
            <a href="#tools" class="btn btn-outline btn-lg">Try Free Tools</a>
          </div>
          <p class="tool-note" style="max-width:620px; margin-top:1rem;">
            Not ready for a platform yet? Start with free tools for passwords,
            SPF records, and email trust.
          </p>
        </div>

        <!-- Terminal + dashboard hybrid visual -->
        <div class="hero-visual" style="position:relative;">
          <span class="ioc-chip chip-danger" style="top:-14px; left:-10px;" aria-hidden="true">hxxp://login-secure-update.ru</span>
          <span class="ioc-chip chip-warn chip-2" style="top:38%; right:-24px;" aria-hidden="true">SPF: fail</span>
          <span class="ioc-chip chip-warn chip-3" style="bottom:-16px; left:8%;" aria-hidden="true">macro: enabled</span>

          <div class="hero-terminal" role="img" aria-label="PhishSim campaign activity followed by LiveInsight summaries">
            <div class="terminal-bar">
              <span class="terminal-dot dot-red"    aria-hidden="true"></span>
              <span class="terminal-dot dot-yellow" aria-hidden="true"></span>
              <span class="terminal-dot dot-green"  aria-hidden="true"></span>
              <span class="terminal-title">phishsim: campaign session</span>
            </div>
            <div class="terminal-body" aria-hidden="true">
              <div class="terminal-line"><span class="t-prompt">❯</span><span class="t-cmd">phishsim launch q3-training</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ 480 recipients queued</span></div>
              <div class="terminal-line"><span class="t-out t-warn">⚠ finance cohort needs extra coaching</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ credential fields record submission events only</span></div>

              <div class="risk-meter" style="margin:.85rem 0 1rem;">
                <div class="risk-meter-track"><div class="risk-meter-fill" data-fill="82" style="width:0%"></div></div>
                <div class="risk-meter-labels"><span>risk score</span><span>82 / 100, high</span></div>
              </div>

              <div class="terminal-line t-info"><span class="t-prompt">❯</span><span class="t-cmd">phishsim campaign report --q3</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ Report rate: 58% (+6%)</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ Click rate: 11% (-4%)</span></div>
              <div class="terminal-line t-info" style="margin-top:.5rem"><span class="t-prompt">❯</span><span class="t-cmd">liveinsight trend --30d</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ Risk trend: improving across 4 of 5 departments</span></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       PROBLEM
  ============================================================ -->
  <section class="section" aria-labelledby="problem-heading">
    <div class="container">
      <div class="problem-grid">
        <div class="problem-copy">
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>The problem</div>
          <h2 class="section-title fade-in" id="problem-heading">Phishing defense usually lives in five different places.</h2>
          <p class="fade-in">
            A team runs a phishing simulation. Results land in one system.
            Training notes live somewhere else. Someone
            builds a slide deck for leadership once a quarter.
          </p>
          <p class="fade-in">
            Every handoff loses context, and nobody can answer a simple question:
            is phishing risk actually going down? LiveIntel connects simulation
            and reporting signals, so the answer is always current.
          </p>
        </div>

        <div class="glass-panel scatter-diagram fade-in">
          <div class="scatter-row">
            <span class="scatter-chip">simulation results</span>
            <span class="scatter-chip">training notes</span>
          </div>
          <div class="scatter-row">
            <span class="scatter-chip">simulation tool</span>
            <span class="scatter-chip">spreadsheet</span>
          </div>
          <div class="scatter-arrow">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
            becomes one workflow
          </div>
          <span class="scatter-result">LiveIntel: simulate, measure, improve</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       PLATFORM PILLARS
  ============================================================ -->
  <section class="section" id="platform" aria-labelledby="platform-heading" style="background:var(--clr-surface); border-block:1px solid var(--clr-border);">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>The platform</div>
      <h2 class="section-title fade-in" id="platform-heading">Two products. One phishing behavior workflow.</h2>
      <p class="section-subtitle fade-in">
        PhishSim and LiveInsight work together, so simulations, reports, and
        behavior trends feed the same picture of risk.
      </p>

      <div class="pillar-grid">

        <article class="pillar-card fade-in">
          <span class="pillar-step">Step 01</span>
          <div class="product-card-icon icon-purple" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3 class="pillar-name">Simulate real-world attacks</h3>
          <p class="pillar-product">PhishSim</p>
          <p class="pillar-desc">
            Run controlled phishing campaigns, measure user behavior, and improve
            awareness without collecting or storing real passwords.
          </p>
          <a href="products/phishsim/" class="pillar-link">See how PhishSim works
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

        <article class="pillar-card fade-in">
          <span class="pillar-step">Step 02</span>
          <div class="product-card-icon icon-blue" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
          </div>
          <h3 class="pillar-name">Measure human risk</h3>
          <p class="pillar-product">LiveInsight</p>
          <p class="pillar-desc">
            Turn phishing reports and simulation results into dashboards, trends,
            executive summaries, and reports your team can act on.
          </p>
          <a href="products/liveinsight/" class="pillar-link">See how LiveInsight works
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

      </div>
    </div>
  </section>

  <!-- ============================================================
       INTELLIGENCE WORKFLOW
  ============================================================ -->
  <section class="section" aria-labelledby="workflow-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>How it fits together</div>
      <h2 class="section-title fade-in" id="workflow-heading">From a simulation to measurable improvement</h2>
      <p class="section-subtitle fade-in">One workflow, four steps, with reporting built in.</p>

      <div class="workflow fade-in">
        <div class="workflow-node">
          <div class="workflow-node-dot" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z" opacity="0"/><path d="M3 8l9 6 9-6M3 8v10h18V8M3 8l9-4 9 4"/></svg>
          </div>
          <div class="workflow-node-label">Team plans</div>
          <div class="workflow-node-desc">Choose audience, scenario, and learning goal</div>
        </div>
        <div class="workflow-node">
          <div class="workflow-node-dot" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <div class="workflow-node-label">PhishSim tests behavior</div>
          <div class="workflow-node-desc">Controlled campaigns measure response</div>
        </div>
        <div class="workflow-node">
          <div class="workflow-node-dot" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
          </div>
          <div class="workflow-node-label">LiveInsight measures</div>
          <div class="workflow-node-desc">Risk, trends, and improvement over time</div>
        </div>
        <div class="workflow-node">
          <div class="workflow-node-dot" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
          </div>
          <div class="workflow-node-label">Team adjusts</div>
          <div class="workflow-node-desc">Training, policy, and controls improve</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       ANALYTICS
  ============================================================ -->
  <section class="section" id="analytics" aria-labelledby="analytics-heading" style="background:var(--clr-surface); border-block:1px solid var(--clr-border);">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Analytics</div>
      <h2 class="section-title fade-in" id="analytics-heading">See what changes over time.</h2>
      <p class="section-subtitle fade-in">
        Free tools answer one question. LiveInsight shows patterns. See which
        groups report, which campaigns work, where repeat risk shows up, and
        whether behavior is improving.
        <br /><span style="font-size:.82rem; opacity:.75;">Figures below are sample data for illustration.</span>
      </p>

      <div class="analytics-grid">

        <div class="metric-card fade-in">
          <div class="metric-label">Report rate</div>
          <div class="metric-value"><span data-count="58" data-suffix="%">0%</span></div>
          <span class="metric-trend trend-up">▲ 6% vs last quarter</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,32 20,28 40,24 60,18 80,12 100,8" fill="none" stroke="#10b981" stroke-width="2"/>
          </svg>
        </div>

        <div class="metric-card fade-in">
          <div class="metric-label">Click rate</div>
          <div class="metric-value"><span data-count="11" data-suffix="%">0%</span></div>
          <span class="metric-trend trend-up">▼ 4% vs last quarter</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,10 20,14 40,18 60,22 80,26 100,30" fill="none" stroke="#10b981" stroke-width="2"/>
          </svg>
        </div>

        <div class="metric-card fade-in">
          <div class="metric-label">Repeat clickers</div>
          <div class="metric-value"><span data-count="4">0</span></div>
          <span class="metric-trend trend-up">▼ 2 vs last quarter</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,8 20,12 40,16 60,20 80,26 100,30" fill="none" stroke="#10b981" stroke-width="2"/>
          </svg>
        </div>

        <div class="metric-card fade-in">
          <div class="metric-label">Time to report</div>
          <div class="metric-value"><span data-count="18" data-suffix=" min">0 min</span></div>
          <span class="metric-trend trend-up">▼ 5 min vs last quarter</span>
          <svg class="sparkline" viewBox="0 0 100 40" preserveAspectRatio="none" aria-hidden="true">
            <polyline points="0,6 20,10 40,16 60,20 80,24 100,28" fill="none" stroke="#10b981" stroke-width="2"/>
          </svg>
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
              <span class="dept-bar-name">HR</span>
              <div class="dept-bar-track"><div class="dept-bar-fill" data-fill="45" style="width:0%"></div></div>
              <span class="dept-bar-value">45</span>
            </div>
            <div class="dept-bar-row">
              <span class="dept-bar-name">Engineering</span>
              <div class="dept-bar-track"><div class="dept-bar-fill" data-fill="31" style="width:0%"></div></div>
              <span class="dept-bar-value">31</span>
            </div>
          </div>
        </div>

        <div class="metric-card span-2 fade-in">
          <div class="metric-label" style="margin-bottom:1rem;">Top phishing themes reported this quarter</div>
          <div class="theme-tags">
            <span class="theme-tag">Invoice / payment request <span class="theme-tag-count">34%</span></span>
            <span class="theme-tag">IT helpdesk / password reset <span class="theme-tag-count">22%</span></span>
            <span class="theme-tag">Package delivery <span class="theme-tag-count">18%</span></span>
            <span class="theme-tag">Executive request <span class="theme-tag-count">14%</span></span>
            <span class="theme-tag">Benefits / HR notice <span class="theme-tag-count">12%</span></span>
          </div>
        </div>

        <div class="metric-card span-2 fade-in">
          <div class="metric-label" style="margin-bottom:1rem;">Campaign comparison: click rate</div>
          <div class="dept-bars">
            <div class="dept-bar-row">
              <span class="dept-bar-name">Q1 campaign</span>
              <div class="dept-bar-track"><div class="dept-bar-fill risk-high" data-fill="19" style="width:0%"></div></div>
              <span class="dept-bar-value">19%</span>
            </div>
            <div class="dept-bar-row">
              <span class="dept-bar-name">Q2 campaign</span>
              <div class="dept-bar-track"><div class="dept-bar-fill" data-fill="15" style="width:0%"></div></div>
              <span class="dept-bar-value">15%</span>
            </div>
            <div class="dept-bar-row">
              <span class="dept-bar-name">Q3 campaign</span>
              <div class="dept-bar-track"><div class="dept-bar-fill" data-fill="11" style="width:0%"></div></div>
              <span class="dept-bar-value">11%</span>
            </div>
          </div>
        </div>

        <div class="spec-box span-2 fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
            executive-summary
          </div>
          <div class="spec-box-body">
            <p style="color:var(--clr-text); font-size:.92rem; margin-bottom:.75rem;">
              Click rate dropped from 19% to 11% over two campaign cycles. Report rate
              is up in every department. Finance and Support still click more than the
              rest of the company and are the next training priority.
            </p>
            <p style="color:var(--clr-text-muted); font-size:.85rem;">Generated by LiveInsight from PhishSim activity.</p>
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
      <p class="section-subtitle fade-in">PhishSim is built around one hard rule.</p>

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
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Safe credential simulation</div>
            <div class="trust-item-desc">Login pages in a campaign log a submission event, never the value entered.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Data minimization</div>
            <div class="trust-item-desc">We collect what's needed to measure behavior and report on it. Nothing more.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Role-based access</div>
            <div class="trust-item-desc">Campaign and reporting results are visible based on role, not open to the whole company.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Audit-friendly records</div>
            <div class="trust-item-desc">Every campaign, scan, and report is logged so you can show your work later.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Privacy-conscious reporting</div>
            <div class="trust-item-desc">Dashboards show trends and department patterns, not a public list of who clicked.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">Clear boundaries</div>
            <div class="trust-item-desc">Simulations exist to train and measure, not to monitor or punish individual employees.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       TOOLS / HOOKS
  ============================================================ -->
  <section class="section tools-hook-band" id="tools" aria-labelledby="tools-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Free tools</div>
      <h2 class="section-title fade-in" id="tools-heading">Start with a free security tool.</h2>
      <p class="section-subtitle fade-in">
        Check a password, generate a stronger one, or inspect an SPF record.
        No account needed.
      </p>

      <div class="tool-grid-mini">
        <a href="products/passforge/" class="tool-card-mini fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          <div class="tool-card-mini-name">PassForge</div>
          <p class="tool-card-mini-desc">Generate strong passwords locally in your browser using secure browser randomness.</p>
          <span class="tool-card-mini-link">Generate Password →</span>
        </a>
        <a href="products/passmeter/" class="tool-card-mini fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
          <div class="tool-card-mini-name">PassMeter</div>
          <p class="tool-card-mini-desc">Check password strength in your browser. Your password is never sent to LiveIntel.</p>
          <span class="tool-card-mini-link">Check a Password →</span>
        </a>
        <a href="products/spf-flattener/" class="tool-card-mini fade-in">
          <div class="tool-card-mini-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 15h6"/></svg></div>
          <div class="tool-card-mini-name">SPF Flattener</div>
          <p class="tool-card-mini-desc">Check your SPF record, count DNS lookups, and see whether flattening can help.</p>
          <span class="tool-card-mini-link">Check SPF Record →</span>
        </a>
      </div>

      <p class="tools-connect-note fade-in">
        Use the tools when you need a quick answer. Use LiveIntel when you need
        simulations, trends, and reports over time. <a href="tools/">See all tools →</a>
      </p>
    </div>
  </section>

  <!-- ============================================================
       WHO IT'S FOR
  ============================================================ -->
  <section class="section" aria-labelledby="audience-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Who it's for</div>
      <h2 class="section-title fade-in" id="audience-heading">Built for teams that own phishing risk.</h2>

      <div class="audience-grid">
        <div class="audience-card fade-in">
          <div class="audience-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="audience-name">Security teams</div>
        </div>
        <div class="audience-card fade-in">
          <div class="audience-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5-10-5z"/><path d="M6 12v5c0 1.5 2.5 3 6 3s6-1.5 6-3v-5"/></svg></div>
          <div class="audience-name">Schools &amp; colleges</div>
        </div>
        <div class="audience-card fade-in">
          <div class="audience-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 9v.01M9 13v.01M9 17v.01M15 9v.01M15 13v.01M15 17v.01"/></svg></div>
          <div class="audience-name">Public agencies</div>
        </div>
        <div class="audience-card fade-in">
          <div class="audience-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"/><path d="M17 11a4 4 0 1 0-4-4"/><path d="M1 21v-2a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v2"/><path d="M17 15a4 4 0 0 1 4 4v2"/></svg></div>
          <div class="audience-name">MSPs</div>
        </div>
        <div class="audience-card fade-in">
          <div class="audience-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
          <div class="audience-name">Awareness programs</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       TRUST
  ============================================================ -->
  <section class="section" aria-labelledby="trust-heading" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Trust</div>
      <h2 class="section-title fade-in" id="trust-heading">Security tools should not ask for more data than they need.</h2>

      <div class="trust-grid">
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">PassMeter runs in the browser</div>
            <div class="trust-item-desc">Passwords are analyzed locally and are never sent to LiveIntel.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">PassForge runs in the browser</div>
            <div class="trust-item-desc">Generated passwords and passphrases are never sent to LiveIntel.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">SPF checks public DNS</div>
            <div class="trust-item-desc">SPF Flattener sends only the domain name or pasted SPF record needed for public DNS checks.</div>
          </div>
        </div>
        <div class="trust-item fade-in">
          <div class="trust-item-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="trust-item-title">PhishSim avoids real passwords</div>
            <div class="trust-item-desc">Simulations measure behavior without collecting, storing, or transmitting real passwords.</div>
          </div>
        </div>
      </div>
      <p class="fade-in" style="margin-top:1.5rem; color:var(--clr-text-muted); font-size:.9rem;">
        Read the full picture on our <a href="legal/security.php">security page</a>.
      </p>
    </div>
  </section>

  <!-- ============================================================
       FINAL CTA
  ============================================================ -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">When one-off checks are not enough.</h2>
        <p class="cta-banner-desc">
          LiveIntel helps teams move from individual tools to a repeatable
          phishing program. Analyze reports, run simulations, measure behavior,
          and show improvement.
        </p>
        <div class="cta-banner-actions">
          <a href="contact.php" class="btn btn-primary btn-lg">Request Demo</a>
          <a href="#platform" class="btn btn-outline btn-lg">Explore Platform</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
