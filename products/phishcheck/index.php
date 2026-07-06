<?php
$basePath = "../../";
$pageTitle = "PhishCheck | Phishing Email Analysis | LiveIntel";
$pageDescription = "PhishCheck analyzes suspicious emails: headers, links, attachments, and sender signals, and returns a risk score your team can act on.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="pg-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../index.php#platform" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Platform
          </a>
          <span class="badge badge-blue">Core Platform · Phishing Analysis</span>
          <h1 class="product-hero-title" id="pg-title">PhishCheck</h1>
          <p class="product-hero-desc">
            Analyze suspicious emails fast. PhishCheck checks headers, links,
            attachments, and sender signals in one pass, then hands you a risk
            score and the indicators behind it.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="../../contact.php" class="btn btn-primary">Request Demo</a>
            <a href="#example-report" class="btn btn-outline">See a Sample Report</a>
          </div>
        </div>

        <!-- Mini spec card -->
        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            phishcheck — product spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">PhishCheck</span></div>
            <div class="spec-row"><span class="spec-key">Purpose</span><span class="spec-val">Phishing email analysis &amp; triage</span></div>
            <div class="spec-row"><span class="spec-key">Analyzes</span><span class="spec-val">Headers, links, attachments, sender signals</span></div>
            <div class="spec-row"><span class="spec-key">Output</span><span class="spec-val">Risk score + extracted indicators (IOCs)</span></div>
            <div class="spec-row"><span class="spec-key">Connects to</span><span class="spec-val">PhishSim &amp; LiveInsight</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT IT ANALYZES -->
  <section class="section" id="features" aria-labelledby="features-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="features-heading">What PhishCheck analyzes</h2>
      <p class="section-subtitle fade-in">
        Every submitted email is broken down into the same checks a triage
        analyst would run by hand, done consistently and in seconds.
      </p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📧</div>
          <h3 class="feature-title">Header review</h3>
          <p class="feature-desc">
            SPF, DKIM, and DMARC results, routing hops, and reply-to mismatches
            that point to a spoofed sender.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔗</div>
          <h3 class="feature-title">Link analysis</h3>
          <p class="feature-desc">
            Every link is unshortened and checked, including redirect chains
            and lookalike domains built to pass a quick glance.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📎</div>
          <h3 class="feature-title">Attachment indicators</h3>
          <p class="feature-desc">
            File type, macro presence, and known malicious patterns are flagged
            before anyone opens the file.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🌐</div>
          <h3 class="feature-title">Sender reputation</h3>
          <p class="feature-desc">
            Domain age, registration history, and prior activity separate a
            freshly registered lure domain from an established sender.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🎭</div>
          <h3 class="feature-title">Impersonation patterns</h3>
          <p class="feature-desc">
            Display-name spoofing and executive impersonation attempts, the
            kind used in invoice fraud and payment redirect scams.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🧩</div>
          <h3 class="feature-title">IOC extraction</h3>
          <p class="feature-desc">
            Every domain, URL, and file hash found in the message is pulled
            out into a list you can drop straight into other tools.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- HOW SCORING WORKS -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="how-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="how-heading">How scoring works</h2>
      <p class="section-subtitle fade-in">
        Each check contributes to a single risk score from 0 to 100, so triage
        decisions don't depend on who's reading the email.
      </p>

      <div class="two-col">
        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            analysis-pipeline
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Stage 1</span><span class="spec-val">Email ingestion (forward, upload, or API)</span></div>
            <div class="spec-row"><span class="spec-key">Stage 2</span><span class="spec-val">Header &amp; authentication checks</span></div>
            <div class="spec-row"><span class="spec-key">Stage 3</span><span class="spec-val">Sender reputation &amp; domain lookup</span></div>
            <div class="spec-row"><span class="spec-key">Stage 4</span><span class="spec-val">Link extraction &amp; verdicting</span></div>
            <div class="spec-row"><span class="spec-key">Stage 5</span><span class="spec-val">Attachment indicator review</span></div>
            <div class="spec-row"><span class="spec-key">Stage 6</span><span class="spec-val">Score aggregation → Low / Medium / High</span></div>
          </div>
        </div>

        <div class="fade-in">
          <div class="risk-meter" style="margin-bottom:1.5rem;">
            <div class="risk-meter-track"><div class="risk-meter-fill" data-fill="82" style="width:0%"></div></div>
            <div class="risk-meter-labels"><span>0 — low</span><span>50 — medium</span><span>100 — high</span></div>
          </div>
          <p style="color:var(--clr-text-muted); font-size:.92rem; margin-bottom:.75rem;">
            A score under 40 usually means routine mail with a false positive
            somewhere in the mix. Above 70 means multiple independent checks
            failed at once, which is a strong signal on its own.
          </p>
          <p style="color:var(--clr-text-muted); font-size:.92rem;">
            Scores and the indicators behind them flow straight into LiveInsight,
            so a spike in high-risk reports shows up on the dashboard the same day.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- EXAMPLE REPORT -->
  <section class="section" id="example-report" aria-labelledby="report-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="report-heading">Example report</h2>
      <p class="section-subtitle fade-in">What an analyst sees after submitting a suspicious email.</p>

      <div class="spec-box fade-in" style="max-width:720px;">
        <div class="spec-box-header">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            invoice-overdue.eml — analysis result
        </div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">Sender</span><span class="spec-val">billing@lnvoice-support.com</span></div>
          <div class="spec-row"><span class="spec-key">SPF / DKIM / DMARC</span><span class="spec-val" style="color:var(--clr-danger)">Fail / Fail / Fail</span></div>
          <div class="spec-row"><span class="spec-key">Domain age</span><span class="spec-val" style="color:var(--clr-warning)">Registered 6 days ago</span></div>
          <div class="spec-row"><span class="spec-key">Links found</span><span class="spec-val" style="color:var(--clr-danger)">2, both flagged credential-harvesting</span></div>
          <div class="spec-row"><span class="spec-key">Attachment</span><span class="spec-val" style="color:var(--clr-accent-2)">None</span></div>
          <div class="spec-row"><span class="spec-key">Risk score</span><span class="spec-val" style="color:var(--clr-danger); font-weight:700;">82 / 100 — High</span></div>
          <div class="spec-row"><span class="spec-key">Recommendation</span><span class="spec-val">Quarantine and notify recipient</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- USE CASES -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="usecases-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="usecases-heading">How security teams use it</h2>

      <div class="features-grid">
        <div class="feature-card fade-in">
          <h3 class="feature-title">Clear the inbox faster</h3>
          <p class="feature-desc">
            Cut the time between "a user reported something" and "we know if it's real"
            from an inbox full of forwards to a single analysis run.
          </p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Standardize triage</h3>
          <p class="feature-desc">
            New analysts follow the same checks as senior ones. The score
            doesn't depend on who happens to be on shift.
          </p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Feed the rest of the platform</h3>
          <p class="feature-desc">
            Real phishing themes found by PhishCheck inform what PhishSim
            simulates next, and every result shows up in LiveInsight.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">See PhishCheck analyze a real report</h2>
        <p class="cta-banner-desc">
          Bring a sample of your own phishing reports to the demo. We'll show you
          exactly what the analysis looks like.
        </p>
        <div class="cta-banner-actions">
          <a href="../../contact.php" class="btn btn-primary btn-lg">Request Demo</a>
          <a href="../../index.php#platform" class="btn btn-outline btn-lg">Other Products</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
