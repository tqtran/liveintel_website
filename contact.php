<?php
$basePath = "";
$pageTitle = "Contact | LiveIntel";
$pageDescription = "Contact LiveIntel for questions, support, security reports, or anything that needs a human reply.";
$pageCanonicalPath = "/contact";
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="contact-title">
    <div class="container">
      <div style="max-width:680px;">
        <h1 class="product-hero-title" id="contact-title">Reach LiveIntel.</h1>
        <p class="product-hero-desc" style="max-width:620px;">
          Questions, support, security reports, or something weird? Send it our way. Keep sensitive vulnerability details out of public channels and send them directly to security.
        </p>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="channels-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="channels-heading">Contact channels</h2>
      <p class="section-subtitle fade-in">Simple inboxes, clear purpose. A little context helps us give you a useful reply.</p>

      <div class="features-grid">
        <div class="feature-card fade-in">
          <h3 class="feature-title">General contact</h3>
          <p class="feature-desc">Product questions, company questions, and anything that does not fit neatly in another inbox.</p>
          <p style="margin-top:.85rem;"><a href="mailto:hello@liveintel.com">hello@liveintel.com</a></p>
        </div>

        <div class="feature-card fade-in">
          <h3 class="feature-title">Support contact</h3>
          <p class="feature-desc">Help with a campaign, report, agent connection, or one of the free tools.</p>
          <p style="margin-top:.85rem;"><a href="mailto:support@liveintel.com">support@liveintel.com</a></p>
        </div>

        <div class="feature-card fade-in">
          <h3 class="feature-title">Security contact</h3>
          <p class="feature-desc">Responsible disclosure reports and security-sensitive questions about LiveIntel.</p>
          <p style="margin-top:.85rem;"><a href="mailto:security@liveintel.com">security@liveintel.com</a></p>
        </div>

        <div class="feature-card fade-in">
          <h3 class="feature-title">Business inquiries</h3>
          <p class="feature-desc">Partnership, purchasing, or evaluation questions for your organization.</p>
          <p style="margin-top:.85rem;"><a href="mailto:hello@liveintel.com">hello@liveintel.com</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="include-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="include-heading">What to include</h2>
      <div class="spec-box fade-in" style="max-width:760px;">
        <div class="spec-box-header">helpful-context</div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">Product questions</span><span class="spec-val">Team size, current process, and what you want to measure</span></div>
          <div class="spec-row"><span class="spec-key">Support questions</span><span class="spec-val">Affected page, campaign, agent, or tool, plus steps already tried</span></div>
          <div class="spec-row"><span class="spec-key">Security reports</span><span class="spec-val">Affected URL or component, reproduction steps, and potential impact</span></div>
          <div class="spec-row"><span class="spec-key">Business inquiries</span><span class="spec-val">Organization name and the type of conversation you need</span></div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
