<?php
$basePath = "";
$pageTitle = "Getting Started | LiveIntel";
$pageDescription = "A beginner-friendly guide to setting up LiveIntel, connecting the local agent, launching a phishing simulation, and reviewing results.";
$pageCanonicalPath = "/getting-started";
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="getting-started-title">
    <div class="container">
      <div style="max-width:720px;">
        <span class="badge badge-blue">Getting Started</span>
        <h1 class="product-hero-title" id="getting-started-title">Start with a local agent, a small campaign, and a clear report.</h1>
        <p class="product-hero-desc" style="max-width:680px;">
          This guide explains the normal LiveIntel setup flow at a high level. Any commands shown here are examples until your organization receives its actual agent package and connection details.
        </p>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="overview-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Overview</div>
          <h2 class="section-title fade-in" id="overview-heading">How LiveIntel is deployed</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            LiveIntel uses a lightweight local agent to execute phishing simulations from the customer environment. The cloud platform provides campaign management, coordination, and reporting.
          </p>
          <p style="color:var(--clr-text-muted);">
            A typical first rollout starts with a small internal test group, confirms mail flow and tracking behavior, then expands to the intended audience.
          </p>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">setup-flow</div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">1</span><span class="spec-val">Confirm requirements</span></div>
            <div class="spec-row"><span class="spec-key">2</span><span class="spec-val">Install the local agent</span></div>
            <div class="spec-row"><span class="spec-key">3</span><span class="spec-val">Connect the agent to LiveIntel</span></div>
            <div class="spec-row"><span class="spec-key">4</span><span class="spec-val">Create and launch a campaign</span></div>
            <div class="spec-row"><span class="spec-key">5</span><span class="spec-val">Review results and iterate</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="steps-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="steps-heading">Setup steps</h2>
      <p class="section-subtitle fade-in">Use these steps as a checklist for a first LiveIntel deployment.</p>

      <div class="features-grid">
        <div class="feature-card fade-in">
          <h3 class="feature-title">Requirements</h3>
          <p class="feature-desc">Confirm an approved sending environment, DNS/mail permissions if needed, an admin account, and a small pilot audience.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Install the LiveIntel agent</h3>
          <p class="feature-desc">Install the agent on the customer-controlled system that will execute simulations. Follow the package instructions provided for your environment.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Connect the agent</h3>
          <p class="feature-desc">Use your organization-specific enrollment token or connection string to register the agent with the LiveIntel cloud platform.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Create your first campaign</h3>
          <p class="feature-desc">Choose a small audience, select a simulation template, set timing, and define what metrics you want to review.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Launch a simulation</h3>
          <p class="feature-desc">Start with a pilot campaign. Confirm delivery, tracking, and reporting before expanding to a larger group.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Review results</h3>
          <p class="feature-desc">Look at click rate, exposure, repeat failures, and patterns that should guide follow-up training.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="commands-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Example Only</div>
          <h2 class="section-title fade-in" id="commands-heading">Placeholder command pattern</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            Actual install commands are not available in this website repository. The commands below are placeholders showing the kind of flow an agent install may follow.
          </p>
          <p style="color:var(--clr-text-muted);">
            Do not run placeholder commands in production. Use the agent package and instructions provided for your LiveIntel account.
          </p>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">placeholder-example</div>
          <div class="spec-box-body">
            <pre class="tool-record"># Example only. Replace with real LiveIntel instructions.
liveintel-agent install
liveintel-agent enroll --token EXAMPLE_TOKEN
liveintel-agent status</pre>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="help-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="help-heading">Troubleshooting</h2>
      <div class="features-grid">
        <div class="feature-card fade-in">
          <h3 class="feature-title">Agent does not connect</h3>
          <p class="feature-desc">Check outbound network access, token validity, system time, and whether the agent service is running.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Messages are not delivered</h3>
          <p class="feature-desc">Review mail routing, allowlists, sending domain configuration, and any internal filtering rules.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Reports look incomplete</h3>
          <p class="feature-desc">Confirm tracking settings, campaign timing, pilot audience membership, and whether events are still processing.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="faq-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="faq-heading">FAQ</h2>
      <div class="spec-box fade-in">
        <div class="spec-box-header">common-questions</div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">Where do simulations run?</span><span class="spec-val">From the customer environment through the LiveIntel local agent.</span></div>
          <div class="spec-row"><span class="spec-key">What does the cloud do?</span><span class="spec-val">Campaign management, coordination, reporting, and service operation.</span></div>
          <div class="spec-row"><span class="spec-key">Should we pilot first?</span><span class="spec-val">Yes. Start with a small authorized group before launching broadly.</span></div>
          <div class="spec-row"><span class="spec-key">Who can help?</span><span class="spec-val">Contact support@liveintel.com with setup questions.</span></div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
