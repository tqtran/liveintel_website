<?php
$basePath = "";
$pageTitle = "Getting Started | LiveIntel";
$pageDescription = "A guided path for setting up LiveIntel, connecting the local agent, launching a first phishing simulation, and reviewing results.";
$pageCanonicalPath = "/getting-started";
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="getting-started-title">
    <div class="container">
      <div style="max-width:720px;">
        <h1 class="product-hero-title" id="getting-started-title">Start with the local agent, one small campaign, and clear results.</h1>
        <p class="product-hero-desc" style="max-width:680px;">
          LiveIntel provides the agent package and connection details as part of the free setup flow. Here is the basic path.
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
            LiveIntel uses a lightweight local agent to execute phishing simulations from the customer environment. The cloud platform provides campaign management, coordination, and campaign results.
          </p>
          <p style="color:var(--clr-text-muted);">
            Start with a small internal test group. Confirm mail flow and tracking behavior. Expand when the results look sane.
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
      <p class="section-subtitle fade-in">Use these steps as a checklist for your first LiveIntel deployment.</p>

      <div class="features-grid">
        <div class="feature-card fade-in">
          <h3 class="feature-title">Requirements</h3>
          <p class="feature-desc">Confirm an approved sending environment, any DNS or mail permissions you need, an admin account, and a small pilot audience.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Install the LiveIntel agent</h3>
          <p class="feature-desc">Install the agent on the customer-controlled system that will execute simulations. Follow the package instructions provided for your environment.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Connect the agent</h3>
          <p class="feature-desc">Use the setup details from your LiveIntel email to register the agent with the cloud platform.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Create your first campaign</h3>
          <p class="feature-desc">Choose a small audience, select a simulation template, set timing, and decide what you want to measure.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Launch a simulation</h3>
          <p class="feature-desc">Start with one campaign. Confirm delivery, tracking, and result collection before expanding to a larger group. You can get fancy later.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Review results</h3>
          <p class="feature-desc">Look at click rate, exposure, repeat failures, and patterns that should guide the next training decision.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="commands-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Setup Pattern</div>
          <h2 class="section-title fade-in" id="commands-heading">Example command pattern</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            The commands below show the expected setup pattern. Use the agent package and connection details from your LiveIntel setup email.
          </p>
          <p style="color:var(--clr-text-muted);">
            Your setup email includes the package, enrollment details, and environment-specific instructions for your account.
          </p>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">setup-example</div>
          <div class="spec-box-body">
            <pre class="tool-record"># Example setup pattern.
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
          <p class="feature-desc">Review mail routing, allowlists, sending domain configuration, and any internal filtering rules that may be getting involved.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Results look incomplete</h3>
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
          <div class="spec-row"><span class="spec-key">What does the cloud do?</span><span class="spec-val">Campaign management, coordination, result review, and service operation.</span></div>
          <div class="spec-row"><span class="spec-key">Should we pilot first?</span><span class="spec-val">Yes. Start with a small authorized group before launching broadly.</span></div>
          <div class="spec-row"><span class="spec-key">Who can help?</span><span class="spec-val">Contact support@liveintel.com with setup questions.</span></div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
