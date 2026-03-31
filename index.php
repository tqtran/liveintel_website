<?php
$basePath = "";
$pageTitle = "LiveIntel | Security Intelligence Platform";
$pageDescription = "LiveIntel — Security Intelligence Platform designed to analyze, simulate, monitor, and respond to security threats and human behavior across modern digital environments.";
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
            <span class="badge badge-blue">Security Intelligence Platform</span>
          </div>

          <h1 class="hero-title" id="hero-heading">
            Security<br /><span>Intelligence</span> Platform
          </h1>

          <p class="hero-desc">
            LiveIntel is a platform designed to analyze, simulate, and understand
            security threats and human behavior across modern digital environments.
            It integrates threat analysis, behavioral simulation, security analytics,
            and centralized monitoring and response into a cohesive intelligence system.
          </p>

          <div class="hero-actions">
            <a href="#products" class="btn btn-primary btn-lg">Explore Products</a>
            <a href="#about"    class="btn btn-outline btn-lg">Learn More</a>
          </div>
        </div>

        <!-- Terminal visual -->
        <div class="hero-visual">
          <div class="hero-terminal" role="img" aria-label="LiveIntel terminal demo">
            <div class="terminal-bar">
              <span class="terminal-dot dot-red"    aria-hidden="true"></span>
              <span class="terminal-dot dot-yellow" aria-hidden="true"></span>
              <span class="terminal-dot dot-green"  aria-hidden="true"></span>
              <span class="terminal-title">liveintel — threat-cli v2.0</span>
            </div>
            <div class="terminal-body" aria-hidden="true">
              <div class="terminal-line"><span class="t-prompt">❯</span><span class="t-cmd">phishcheck analyze --email suspicious.eml</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ Header analysis       PASS</span></div>
              <div class="terminal-line"><span class="t-out t-warn">⚠ Phishing link         DETECTED (3)</span></div>
              <div class="terminal-line"><span class="t-out t-err">✖ Domain intelligence   FLAGGED</span></div>
              <div class="terminal-line t-info" style="margin-top:.5rem"><span class="t-prompt">❯</span><span class="t-cmd">phishsim campaign --report q1</span></div>
              <div class="terminal-line"><span class="t-out t-warn">⚠ Click rate:           18.4% (+3.1%)</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ Training completion:  91%</span></div>
              <div class="terminal-line t-info" style="margin-top:.5rem"><span class="t-prompt">❯</span><span class="t-cmd">liveinsight report --period 30d</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ Risk posture:         improving</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ Report delivered to 4 stakeholders</span></div>
              <div class="terminal-line t-info" style="margin-top:.5rem"><span class="t-prompt">❯</span><span class="t-cmd">livesentinel incidents --active</span></div>
              <div class="terminal-line"><span class="t-out t-warn">⚠ Active incidents:     2 correlated events</span></div>
              <div class="terminal-line"><span class="t-out t-ok">✔ Response workflow:    engaged</span></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       STATS STRIP
  ============================================================ -->
  <div class="stats-strip" aria-label="LiveIntel at a glance">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item">
          <div class="stat-number">4</div>
          <div class="stat-label">Platform Layers</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">8</div>
          <div class="stat-label">Products &amp; Services</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">99.8%</div>
          <div class="stat-label">Phish Detection Rate</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">0-Trust</div>
          <div class="stat-label">Vault Architecture</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">256-bit</div>
          <div class="stat-label">Encryption at Rest</div>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================================================
       PRODUCTS SECTION
  ============================================================ -->
  <section class="section" id="products" aria-labelledby="products-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="products-heading">LiveIntel Platform</h2>
      <p class="section-subtitle fade-in">
        Four integrated layers — intelligence services, behavioral simulation,
        analytics, and centralized response — forming a continuous security
        intelligence cycle:
        <strong style="color:var(--clr-text)">analyze → simulate → monitor → respond → improve</strong>.
      </p>

      <div class="products-grid">

        <!-- ── LAYER 1: Intelligence Services ────────────────────── -->
        <div style="grid-column:1/-1; padding:1.5rem 0 .75rem; border-top:1px solid var(--clr-border); margin-top:.5rem;" class="fade-in">
          <span class="badge badge-blue" style="margin-bottom:.5rem;display:inline-block;">Intelligence Services</span>
          <h3 style="font-size:1.05rem; color:var(--clr-heading); margin:0; font-weight:600;">LiveIntel — Threat &amp; Signal Analysis</h3>
          <p style="color:var(--clr-text-muted); font-size:.9rem; margin-top:.35rem; max-width:640px;">
            Analysis engines that evaluate suspicious content, examine potentially
            malicious links, and assess credential strength to identify threats and weaknesses.
          </p>
        </div>

        <!-- PhishCheck -->
        <article class="product-card fade-in" aria-labelledby="pg-name">
          <div class="product-card-icon icon-blue" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <span class="badge badge-blue">Threat Detection</span>
          <h3 class="product-card-name" id="pg-name">PhishCheck</h3>
          <p class="product-card-purpose">Phishing email analysis</p>
          <p class="product-card-desc">Analyze phishing emails across headers, links, attachments, and sender reputation.</p>
          <ul class="func-list" aria-label="Features">
            <li class="func-tag">email header analysis</li>
            <li class="func-tag">phishing link detection</li>
            <li class="func-tag">impersonation detection</li>
            <li class="func-tag">attachment risk scoring</li>
            <li class="func-tag">domain intelligence</li>
          </ul>
          <a href="products/phishcheck/" class="product-card-link" aria-label="Learn more about PhishCheck">
            Learn more <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

        <!-- SafeLink -->
        <article class="product-card fade-in" aria-labelledby="sl-name">
          <div class="product-card-icon icon-blue" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
          </div>
          <span class="badge badge-blue">URL Safety</span>
          <h3 class="product-card-name" id="sl-name">SafeLink</h3>
          <p class="product-card-purpose">Suspicious URL analysis</p>
          <p class="product-card-desc">Analyze suspicious URLs for phishing, malware, and drive-by threats in real time.</p>
          <ul class="func-list" aria-label="Features">
            <li class="func-tag">URL reputation check</li>
            <li class="func-tag">real-time link scanning</li>
            <li class="func-tag">phishing site detection</li>
            <li class="func-tag">malware URL detection</li>
            <li class="func-tag">link preview</li>
          </ul>
          <a href="products/safelink/" class="product-card-link" aria-label="Learn more about SafeLink">
            Learn more <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

        <!-- PassForge -->
        <article class="product-card fade-in" aria-labelledby="pf-name">
          <div class="product-card-icon icon-green" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
          <span class="badge badge-green">Password Security</span>
          <h3 class="product-card-name" id="pf-name">PassForge</h3>
          <p class="product-card-purpose">Password / passphrase generator</p>
          <p class="product-card-desc">Secure password and passphrase generation engine.</p>
          <ul class="func-list" aria-label="Features">
            <li class="func-tag">password generation</li>
            <li class="func-tag">passphrase generation</li>
            <li class="func-tag">policy-driven rules</li>
            <li class="func-tag">human-memorable</li>
          </ul>
          <a href="products/passforge/" class="product-card-link" aria-label="Learn more about PassForge">
            Learn more <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

        <!-- PassMeter -->
        <article class="product-card fade-in" aria-labelledby="pc-name">
          <div class="product-card-icon icon-yellow" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          </div>
          <span class="badge badge-yellow">Strength Analysis</span>
          <h3 class="product-card-name" id="pc-name">PassMeter</h3>
          <p class="product-card-purpose">Password strength and crack-time analysis</p>
          <p class="product-card-desc">Evaluate password strength, crack-time estimates, breach exposure, and entropy.</p>
          <ul class="func-list" aria-label="Features">
            <li class="func-tag">entropy scoring</li>
            <li class="func-tag">dictionary detection</li>
            <li class="func-tag">pattern weakness</li>
            <li class="func-tag">breach exposure</li>
          </ul>
          <a href="products/passmeter/" class="product-card-link" aria-label="Learn more about PassMeter">
            Learn more <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

        <!-- Vault -->
        <article class="product-card fade-in" aria-labelledby="vt-name">
          <div class="product-card-icon icon-red" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><circle cx="12" cy="12" r="3"/><path d="M7 12h2M15 12h2"/></svg>
          </div>
          <span class="badge badge-red">Secret Storage</span>
          <h3 class="product-card-name" id="vt-name">Vault</h3>
          <p class="product-card-purpose">Secure key-value secret storage</p>
          <p class="product-card-desc">Store and retrieve API keys, tokens, and credentials in a zero-knowledge vault.</p>
          <ul class="func-list" aria-label="Features">
            <li class="func-tag">key ID retrieval</li>
            <li class="func-tag">bearer token auth</li>
            <li class="func-tag">IP allowlists</li>
            <li class="func-tag">zero-knowledge</li>
            <li class="func-tag">brute force detection</li>
          </ul>
          <a href="products/vault/" class="product-card-link" aria-label="Learn more about Vault">
            Learn more <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

        <!-- ── LAYER 2: Behavioral Simulation ─────────────────────── -->
        <div style="grid-column:1/-1; padding:2.5rem 0 .75rem; border-top:1px solid var(--clr-border); margin-top:1rem;" class="fade-in">
          <span class="badge badge-purple" style="margin-bottom:.5rem;display:inline-block;">Behavioral Simulation</span>
          <h3 style="font-size:1.05rem; color:var(--clr-heading); margin:0; font-weight:600;">PhishSim — Security Behavior Simulation</h3>
          <p style="color:var(--clr-text-muted); font-size:.9rem; margin-top:.35rem; max-width:640px;">
            Introduces a human behavioral layer by simulating real-world phishing scenarios
            to measure user awareness, identify behavioral risk patterns, and reinforce training.
          </p>
        </div>

        <!-- PhishSim -->
        <article class="product-card fade-in" aria-labelledby="ps-name">
          <div class="product-card-icon icon-purple" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <span class="badge badge-purple">Behavioral Simulation</span>
          <h3 class="product-card-name" id="ps-name">PhishSim</h3>
          <p class="product-card-purpose">Security behavior simulation</p>
          <p class="product-card-desc">Conduct controlled phishing campaigns that generate structured behavioral telemetry and drive targeted training.</p>
          <ul class="func-list" aria-label="Features">
            <li class="func-tag">simulation campaigns</li>
            <li class="func-tag">click &amp; open tracking</li>
            <li class="func-tag">credential telemetry</li>
            <li class="func-tag">reporting activity</li>
            <li class="func-tag">automated training</li>
          </ul>
          <a href="products/phishsim/" class="product-card-link" aria-label="Learn more about PhishSim">
            Learn more <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

        <!-- ── LAYER 3: Analytics & Intelligence ───────────────────── -->
        <div style="grid-column:1/-1; padding:2.5rem 0 .75rem; border-top:1px solid var(--clr-border); margin-top:1rem;" class="fade-in">
          <span class="badge badge-blue" style="margin-bottom:.5rem;display:inline-block;">Analytics &amp; Intelligence</span>
          <h3 style="font-size:1.05rem; color:var(--clr-heading); margin:0; font-weight:600;">LiveInsight — Organizational Intelligence</h3>
          <p style="color:var(--clr-text-muted); font-size:.9rem; margin-top:.35rem; max-width:640px;">
            Aggregates telemetry from all platform services and converts security activity
            into dashboards, trend analysis, and strategic visibility for security teams and leadership.
          </p>
        </div>

        <!-- LiveInsight -->
        <article class="product-card fade-in" aria-labelledby="li-name">
          <div class="product-card-icon icon-blue" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
          </div>
          <span class="badge badge-blue">Analytics &amp; Reporting</span>
          <h3 class="product-card-name" id="li-name">LiveInsight</h3>
          <p class="product-card-purpose">Intelligence, analytics and reporting</p>
          <p class="product-card-desc">Unified dashboard and reporting platform that converts LiveIntel security activity into operational insight.</p>
          <ul class="func-list" aria-label="Features">
            <li class="func-tag">unified dashboard</li>
            <li class="func-tag">trend analysis</li>
            <li class="func-tag">campaign reporting</li>
            <li class="func-tag">scheduled reports</li>
            <li class="func-tag">executive summaries</li>
          </ul>
          <a href="products/liveinsight/" class="product-card-link" aria-label="Learn more about LiveInsight">
            Learn more <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

        <!-- ── LAYER 4: Monitoring & Response ─────────────────────── -->
        <div style="grid-column:1/-1; padding:2.5rem 0 .75rem; border-top:1px solid var(--clr-border); margin-top:1rem;" class="fade-in">
          <span class="badge badge-red" style="margin-bottom:.5rem;display:inline-block;">Monitoring &amp; Response</span>
          <h3 style="font-size:1.05rem; color:var(--clr-heading); margin:0; font-weight:600;">LiveSentinel — Centralized Oversight &amp; Response</h3>
          <p style="color:var(--clr-text-muted); font-size:.9rem; margin-top:.35rem; max-width:640px;">
            Oversees multiple LiveIntel services from a central control layer, correlating
            telemetry, surfacing operational incidents, and coordinating response workflows.
          </p>
        </div>

        <!-- LiveSentinel -->
        <article class="product-card fade-in" aria-labelledby="ls-name">
          <div class="product-card-icon icon-red" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z"/><path d="M9 12h6"/><path d="M12 9v6"/></svg>
          </div>
          <span class="badge badge-red">Monitoring &amp; Response</span>
          <h3 class="product-card-name" id="ls-name">LiveSentinel</h3>
          <p class="product-card-purpose">Centralized monitoring and response</p>
          <p class="product-card-desc">Monitor certificate exposure, phishing simulation activity, and key-management events from one coordinated response layer.</p>
          <ul class="func-list" aria-label="Features">
            <li class="func-tag">cross-service monitoring</li>
            <li class="func-tag">incident correlation</li>
            <li class="func-tag">response workflows</li>
            <li class="func-tag">certificate oversight</li>
            <li class="func-tag">key management visibility</li>
          </ul>
          <a href="products/livesentinel/" class="product-card-link" aria-label="Learn more about LiveSentinel">
            Learn more <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </article>

      </div>
    </div>
  </section>

  <!-- ============================================================
       ABOUT
  ============================================================ -->
  <section class="section" id="about" aria-labelledby="about-heading" style="background: var(--clr-surface); border-top: 1px solid var(--clr-border);">
    <div class="container">
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:start;">
        <div>
          <span class="badge badge-blue" style="margin-bottom:1rem;display:inline-block;">Platform Architecture</span>
          <h2 class="section-title fade-in" id="about-heading">Four layers. One intelligence cycle.</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1.25rem;">
            Rather than offering isolated utilities, LiveIntel integrates multiple capabilities
            into a cohesive intelligence system that helps organizations identify threats,
            measure risk, and improve security awareness.
          </p>

          <div style="display:flex; flex-direction:column; gap:1.25rem; margin-bottom:1.5rem;">
            <div>
              <span class="badge badge-blue" style="margin-bottom:.4rem;display:inline-block;">Intelligence Services</span>
              <p style="color:var(--clr-text-muted); font-size:.95rem; margin:0;">
                <strong style="color:var(--clr-text)">LiveIntel</strong> provides the analysis engines —
                PhishCheck, SafeLink, PassForge, PassMeter, and Vault — that evaluate security
                signals and technical indicators.
              </p>
            </div>
            <div>
              <span class="badge badge-purple" style="margin-bottom:.4rem;display:inline-block;">Behavioral Simulation</span>
              <p style="color:var(--clr-text-muted); font-size:.95rem; margin:0;">
                <strong style="color:var(--clr-text)">PhishSim</strong> introduces a human behavioral layer,
                generating structured telemetry — click events, credential submissions, reporting
                activity — that becomes the primary source of behavioral security insight.
              </p>
            </div>
            <div>
              <span class="badge badge-blue" style="margin-bottom:.4rem;display:inline-block;">Analytics &amp; Intelligence</span>
              <p style="color:var(--clr-text-muted); font-size:.95rem; margin:0;">
                <strong style="color:var(--clr-text)">LiveInsight</strong> aggregates telemetry from all
                platform services and transforms it into behavioral risk metrics, trend visualizations,
                and organizational security posture insights.
              </p>
            </div>
            <div>
              <span class="badge badge-red" style="margin-bottom:.4rem;display:inline-block;">Monitoring &amp; Response</span>
              <p style="color:var(--clr-text-muted); font-size:.95rem; margin:0;">
                <strong style="color:var(--clr-text)">LiveSentinel</strong> acts as the centralized
                oversight layer, monitoring certificate systems, phishing simulation activity,
                and key management services while coordinating response actions from one place.
              </p>
            </div>
          </div>

          <p style="color:var(--clr-text-muted); font-size:.9rem; font-style:italic; border-left:3px solid var(--clr-primary); padding-left:.85rem; margin:0;">
            "Security decisions should be driven by intelligence derived from real signals and real
            behavior, not isolated technical checks."
          </p>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            platform-architecture
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Layer 1</span><span class="spec-val">LiveIntel — Intelligence Services</span></div>
            <div class="spec-row"><span class="spec-key">Layer 2</span><span class="spec-val">PhishSim — Behavioral Simulation</span></div>
            <div class="spec-row"><span class="spec-key">Layer 3</span><span class="spec-val">LiveInsight — Analytics &amp; Intelligence</span></div>
            <div class="spec-row"><span class="spec-key">Layer 4</span><span class="spec-val">LiveSentinel — Monitoring &amp; Response</span></div>
            <div class="spec-row"><span class="spec-key">Intelligence cycle</span><span class="spec-val">analyze → simulate → monitor → respond → improve</span></div>
            <div class="spec-row"><span class="spec-key">API standard</span><span class="spec-val">REST + JSON</span></div>
            <div class="spec-row"><span class="spec-key">Encryption</span><span class="spec-val">AES-256-GCM at rest &amp; in transit</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA
  ============================================================ -->
  <section class="section" id="contact" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">Ready to secure your organisation?</h2>
        <p class="cta-banner-desc">
          Get in touch with the LiveIntel team to schedule a demo, start a free trial,
          or discuss an enterprise deployment.
        </p>
        <div class="cta-banner-actions">
          <a href="mailto:hello@liveintel.com" class="btn btn-primary btn-lg">Contact Us</a>
          <a href="#products" class="btn btn-outline btn-lg">View Products</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
