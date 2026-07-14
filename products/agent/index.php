<?php
$basePath = "../../";
$pageTitle = "LiveIntel Agent | Technical Product Overview";
$pageDescription = "Technical overview of the open-source LiveIntel Agent: customer-controlled phishing simulation delivery, local identity handling, anonymous event synchronization, local reporting, security review, and MIT licensing.";
$pageCanonicalPath = '/products/agent/';
$pageStyles = <<<'CSS'
<style>
  .technical-notice {
    max-width: 820px;
    margin-top: 1.5rem;
    padding: 1rem 1.25rem;
    border-left: 3px solid var(--clr-primary);
    border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
    background: var(--clr-surface);
    color: var(--clr-text-muted);
    font-size: .92rem;
  }
  .boundary-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    margin-top: 2.5rem;
  }
  .boundary-card {
    background: var(--clr-surface);
    border: 1px solid var(--clr-border);
    border-radius: var(--radius-md);
    overflow: hidden;
  }
  .boundary-card-header {
    padding: .85rem 1.1rem;
    border-bottom: 1px solid var(--clr-border);
    color: var(--clr-heading);
    font-family: var(--font-mono);
    font-size: .82rem;
    font-weight: 700;
  }
  .boundary-card-body { padding: 1.1rem; }
  .boundary-card-body ul { margin: 0; padding-left: 1.15rem; color: var(--clr-text-muted); }
  .boundary-card-body li + li { margin-top: .45rem; }
  .data-flow {
    overflow-x: auto;
    padding: 1.25rem;
    border: 1px solid var(--clr-border);
    border-radius: var(--radius-md);
    background: var(--clr-bg);
    color: var(--clr-text);
    font-family: var(--font-mono);
    font-size: .82rem;
    line-height: 1.7;
    white-space: pre;
  }
  .technical-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-top: 2rem;
  }
  .technical-item {
    padding: 1rem 1.1rem;
    border: 1px solid var(--clr-border);
    border-radius: var(--radius-sm);
    background: var(--clr-surface);
  }
  .technical-item code { color: var(--clr-primary); }
  .technical-item strong { display: block; color: var(--clr-heading); margin-bottom: .35rem; }
  .technical-item span { color: var(--clr-text-muted); font-size: .9rem; }
  @media (max-width: 780px) {
    .boundary-grid, .technical-list { grid-template-columns: 1fr; }
  }
</style>
CSS;
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="agent-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../index.php#platform" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Platform
          </a>
          <div class="eyebrow"><span class="eyebrow-dot"></span>Technical product overview</div>
          <h1 class="product-hero-title" id="agent-title">LiveIntel Agent</h1>
          <p class="product-hero-desc">
            A transparent, customer-controlled execution layer for phishing
            simulations. Run campaign delivery and identity-aware reporting
            inside your environment while LiveIntel coordinates anonymous
            campaign state.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="../../getting-started" class="btn btn-primary">Getting Started</a>
            <a href="#boundary" class="btn btn-outline">Inspect the Data Boundary</a>
          </div>
          <p class="technical-notice">
            This page is intentionally technical. It explains where the Agent
            runs, which data it handles, what crosses the network boundary, and
            how customers can review and extend it.
          </p>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 9h8M8 13h5M8 17h8"/></svg>
            liveintel-agent - deployment spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Runtime</span><span class="spec-val">Windows PowerShell 5.1+ / PowerShell 7</span></div>
            <div class="spec-row"><span class="spec-key">Location</span><span class="spec-val">Customer-controlled host</span></div>
            <div class="spec-row"><span class="spec-key">Delivery</span><span class="spec-val">Customer-provided SMTP</span></div>
            <div class="spec-row"><span class="spec-key">Identity</span><span class="spec-val">Held locally by the Agent</span></div>
            <div class="spec-row"><span class="spec-key">Dependencies</span><span class="spec-val">No required external PowerShell modules</span></div>
            <div class="spec-row"><span class="spec-key">License</span><span class="spec-val">MIT</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="flow-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>System context</div>
      <h2 class="section-title fade-in" id="flow-heading">Cloud coordination. Local execution.</h2>
      <p class="section-subtitle fade-in">
        The hosted service manages campaign configuration and anonymous state.
        The Agent owns recipient identity, SMTP delivery, and de-anonymized reports.
      </p>
      <div class="data-flow fade-in" role="img" aria-label="Data flow between the LiveIntel cloud and the customer-controlled Agent">LIVEINTEL CLOUD                         CUSTOMER ENVIRONMENT
────────────────────────                ──────────────────────────────
campaign configuration   ─────────────► LiveIntel Agent
anonymous tokens         ─────────────►
anonymous events         ◄───────────── token lifecycle updates
tracked interactions     ─────────────► local event synchronization

                                        recipients.csv
                                        token-to-recipient map
                                        SMTP credentials
                                        identifiable local reports</div>
    </div>
  </section>

  <section class="section" id="boundary" style="background:var(--clr-surface); border-top:1px solid var(--clr-border); border-bottom:1px solid var(--clr-border);" aria-labelledby="boundary-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Data boundary</div>
      <h2 class="section-title fade-in" id="boundary-heading">The Agent manages people. The cloud manages anonymous state.</h2>
      <p class="section-subtitle fade-in">
        Recipient identity is resolved locally. LiveIntel receives the minimum
        anonymous campaign data needed to coordinate and measure a simulation.
      </p>

      <div class="boundary-grid">
        <article class="boundary-card fade-in">
          <h3 class="boundary-card-header">STAYS IN THE CUSTOMER ENVIRONMENT</h3>
          <div class="boundary-card-body">
            <ul>
              <li>Recipient names and email addresses</li>
              <li>Customer-supplied group and department fields</li>
              <li>The anonymous-token-to-recipient mapping</li>
              <li>Customer SMTP credentials and local send results</li>
              <li>Identifiable campaign reports</li>
              <li>Customer integration code and downstream credentials</li>
            </ul>
          </div>
        </article>

        <article class="boundary-card fade-in">
          <h3 class="boundary-card-header">SENT TO OR OBSERVED BY LIVEINTEL</h3>
          <div class="boundary-card-body">
            <ul>
              <li>Tenant, Agent, campaign, and anonymous token identifiers</li>
              <li>Anonymous token lifecycle events</li>
              <li>Simulation interaction types and timestamps</li>
              <li>Restricted, non-identifying operational metadata</li>
              <li>No recipient list, token mapping, or SMTP credentials</li>
              <li>No identifiable local report or LMS credential</li>
            </ul>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="reports-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Local report handoff</div>
          <h2 class="section-title fade-in" id="reports-heading">Useful outputs without uploading identity.</h2>
          <p class="fade-in">
            The Agent joins anonymous events to the local recipient mapping and
            writes one completed report set per campaign beneath a configurable
            local directory.
          </p>
          <p class="fade-in" style="margin-top:1rem; color:var(--clr-text-muted);">
            LiveIntel does not automatically email, upload, archive, or import
            these reports into an LMS or another third-party system. Customers
            control access, retention, transmission, and downstream processing.
          </p>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">reports/&lt;campaign-id&gt;/</div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">recipient-results.csv</span><span class="spec-val">Identity-bearing local results</span></div>
            <div class="spec-row"><span class="spec-key">campaign-summary.csv</span><span class="spec-val">Aggregate campaign metrics</span></div>
            <div class="spec-row"><span class="spec-key">manifest.json</span><span class="spec-val">Schema version, row counts, and SHA-256 hashes</span></div>
            <div class="spec-row"><span class="spec-key">Completion</span><span class="spec-val">Manifest written last</span></div>
          </div>
        </div>
      </div>

      <div class="technical-list">
        <div class="technical-item fade-in"><strong>Automation boundary</strong><span>Customer-controlled jobs can wait for <code>manifest.json</code> and validate hashes before consuming the CSV files.</span></div>
        <div class="technical-item fade-in"><strong>Customer-managed integrations</strong><span>Authorized customer scripts can archive results, deliver reports, or initiate an existing LMS workflow.</span></div>
        <div class="technical-item fade-in"><strong>No connector claim</strong><span>The local handoff is an integration point; pre-built LMS connectors are not included today.</span></div>
        <div class="technical-item fade-in"><strong>Local responsibility</strong><span>The customer determines permissions, retention, encryption, approved destinations, and deletion.</span></div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="review-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Designed to be inspected</div>
          <h2 class="section-title fade-in" id="review-heading">Open where trust matters.</h2>
          <p class="fade-in">
            The Agent is readable PowerShell rather than a compiled executable.
            Its source code is intentionally open so security teams can inspect
            what it executes, verify what leaves their environment, scan the
            exact version they deploy, and validate the privacy boundary.
          </p>
          <p class="fade-in" style="margin-top:1rem; color:var(--clr-text-muted);">
            Before deployment or upgrade, customers are responsible for reviewing,
            scanning, testing, approving, configuring, and securing the Agent and
            any customer or third-party modifications under their own security and
            change-control processes.
          </p>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">MIT license - practical rights</div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Use</span><span class="spec-val">Permitted</span></div>
            <div class="spec-row"><span class="spec-key">Modify</span><span class="spec-val">Permitted</span></div>
            <div class="spec-row"><span class="spec-key">Distribute</span><span class="spec-val">Permitted</span></div>
            <div class="spec-row"><span class="spec-key">Attribution</span><span class="spec-val">Preserve copyright and license notice</span></div>
            <div class="spec-row"><span class="spec-key">Public badge</span><span class="spec-val">Not required</span></div>
            <div class="spec-row"><span class="spec-key">Modified-code support</span><span class="spec-val">Only when separately agreed</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="operations-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Operational controls</div>
      <h2 class="section-title fade-in" id="operations-heading">Readable scripts with cautious defaults.</h2>
      <p class="section-subtitle fade-in">The reference Agent keeps its execution model small enough to inspect and operate directly.</p>
      <div class="features-grid">
        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">01</div>
          <h3 class="feature-title">Dry run first</h3>
          <p class="feature-desc">Sending is off by default. Live execution requires an explicit option and confirmation unless the customer changes that safety setting.</p>
        </div>
        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">02</div>
          <h3 class="feature-title">Resumable delivery</h3>
          <p class="feature-desc">Local state allows an interrupted run to continue with pending recipients instead of automatically sending successful deliveries twice.</p>
        </div>
        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">03</div>
          <h3 class="feature-title">Customer-held secrets</h3>
          <p class="feature-desc">The Agent keeps the API key and SMTP password locally and supports Windows DPAPI protection for the configured Windows user.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="agent-cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="agent-cta-heading">Review the architecture before you deploy.</h2>
        <p class="cta-banner-desc">
          See the setup flow, then talk with LiveIntel about your sending
          environment, privacy requirements, and operational controls.
        </p>
        <div class="cta-banner-actions">
          <a href="../../getting-started" class="btn btn-primary btn-lg">Getting Started</a>
          <a href="../../contact" class="btn btn-outline btn-lg">Discuss Your Environment</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
