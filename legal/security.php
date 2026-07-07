<?php
$basePath = "../";
$pageTitle = "Security | LiveIntel";
$pageDescription = "How LiveIntel approaches deployment, data minimization, simulation boundaries, encryption, retention, and responsible disclosure.";
$pageCanonicalPath = "/security";
$pageStyles = '<style>
  .legal-section { max-width: 820px; margin: 0 auto; }
  .legal-section h2 { font-size: 1.25rem; color: var(--clr-text); margin: 2rem 0 .75rem; }
  .legal-section p, .legal-section ul { color: var(--clr-text-muted); line-height: 1.8; margin-bottom: 1rem; }
  .legal-section ul { padding-left: 1.5rem; }
  .legal-section ul li { margin-bottom: .4rem; }
</style>';
require_once __DIR__ . '/../includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="security-heading">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <span class="badge badge-blue">Security</span>
          <h1 class="product-hero-title" id="security-heading">LiveIntel security and privacy model</h1>
          <p class="product-hero-desc">
            This page explains how LiveIntel operates, what data is needed to run the service, and where the simulation boundaries are. Security claims should be clear, specific, and reviewable.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="mailto:security@liveintel.com" class="btn btn-primary">Report a Vulnerability</a>
            <a href="../getting-started" class="btn btn-outline">Getting Started</a>
          </div>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">security-overview</div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Deployment</span><span class="spec-val">Local agent with cloud coordination</span></div>
            <div class="spec-row"><span class="spec-key">Data approach</span><span class="spec-val">Minimized campaign metadata and simulation results</span></div>
            <div class="spec-row"><span class="spec-key">Simulation boundary</span><span class="spec-val">No real credential collection in simulated forms</span></div>
            <div class="spec-row"><span class="spec-key">Security contact</span><span class="spec-val">security@liveintel.com</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="details-heading">
    <div class="container">
      <div class="legal-section">
        <h2 class="section-title fade-in" id="details-heading" style="text-align:left;">Security Overview</h2>
        <p class="fade-in">
          LiveIntel is a phishing simulation and awareness measurement platform. The security model is built around customer-controlled execution, limited data collection, and measurement focused on campaign outcomes.
        </p>

        <h2 class="fade-in">Deployment Model</h2>
        <p class="fade-in">
          LiveIntel uses a lightweight local agent to execute phishing simulations from the customer environment. The cloud platform provides campaign management, coordination, and campaign results.
        </p>

        <h2 class="fade-in">What Stays Local</h2>
        <ul class="fade-in">
          <li>Simulation execution is performed by the local agent in the customer environment.</li>
          <li>Customer mail flow and environment-specific configuration remain under customer control.</li>
          <li>Simulated credential values are not collected by LiveIntel. A simulation may record that a form submission happened, but not the real value typed into the field.</li>
        </ul>

        <h2 class="fade-in">What LiveIntel Collects</h2>
        <p class="fade-in">
          LiveIntel limits collection to the campaign metadata, account details, operational logs, and simulation results needed to operate the service. Depending on configuration, this may include:
        </p>
        <ul class="fade-in">
          <li>Account and administrator contact details.</li>
          <li>Campaign configuration, template selection, launch timing, and target group metadata.</li>
          <li>Simulation events such as delivery status, opens, clicks, remote content exposure, and simulated form submission events.</li>
          <li>Report events, if configured, such as user-submitted phishing reports and related timestamps.</li>
          <li>Operational logs needed to troubleshoot the agent, platform, and result review workflow.</li>
        </ul>

        <h2 class="fade-in">What LiveIntel Does Not Collect</h2>
        <ul class="fade-in">
          <li>LiveIntel does not intentionally collect real passwords or real credential values through phishing simulations.</li>
          <li>LiveIntel does not need mailbox contents to provide campaign results.</li>
          <li>LiveIntel does not sell customer data.</li>
        </ul>

        <h2 class="fade-in">Data Retention</h2>
        <p class="fade-in">
          Campaign and simulation result data is retained for as long as needed to provide the service, support customer review, meet legal obligations, and maintain operational integrity. Customers can contact LiveIntel to request deletion or retention details for their account.
        </p>

        <h2 class="fade-in">Encryption</h2>
        <p class="fade-in">
          LiveIntel uses encryption in transit for communications between browsers, the cloud platform, and connected agents. Stored service data is protected with encryption at rest where supported by the underlying hosting and database services.
        </p>

        <h2 class="fade-in">Responsible Disclosure</h2>
        <p class="fade-in">
          If you believe you have found a vulnerability in LiveIntel, email security@liveintel.com with a clear description, affected URL or component, steps to reproduce, and potential impact. Please avoid accessing customer data, modifying data, or performing denial-of-service testing.
        </p>

        <h2 class="fade-in">Security Contact</h2>
        <p class="fade-in">
          Security reports: <a href="mailto:security@liveintel.com">security@liveintel.com</a><br />
          General questions: <a href="mailto:hello@liveintel.com">hello@liveintel.com</a>
        </p>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
