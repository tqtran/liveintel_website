<?php
$basePath = "";
$pageTitle = "Contact | LiveIntel";
$pageDescription = "Get in touch with LiveIntel to request a demo, ask a support question, or report a security issue.";
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- HERO -->
  <section class="product-hero" aria-labelledby="contact-title">
    <div class="container">
      <div style="max-width:640px;">
        <span class="badge badge-blue">Contact</span>
        <h1 class="product-hero-title" id="contact-title">Let's talk about your phishing program.</h1>
        <p class="product-hero-desc" style="max-width:600px;">
          Tell us what you're using today, and where the gaps are. We'll
          walk you through PhishSim and LiveInsight based on that, not a
          generic pitch deck.
        </p>
      </div>
    </div>
  </section>

  <!-- CONTACT CHANNELS -->
  <section class="section" aria-labelledby="channels-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="channels-heading">Reach the right team</h2>
      <p class="section-subtitle fade-in">Email is the fastest way to reach us. We reply from a real person, not a ticket queue bot.</p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📅</div>
          <h3 class="feature-title">Request a demo</h3>
          <p class="feature-desc">
            Want to see PhishSim or LiveInsight in action?
            Tell us a bit about your team size and current phishing process.
          </p>
          <p style="margin-top:.85rem;"><a href="mailto:demo@liveintel.com">demo@liveintel.com</a></p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🛠️</div>
          <h3 class="feature-title">Support</h3>
          <p class="feature-desc">
            Existing customer with a question about a campaign, a report,
            or one of the free tools? Reach the support team directly.
          </p>
          <p style="margin-top:.85rem;"><a href="mailto:support@liveintel.com">support@liveintel.com</a></p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔒</div>
          <h3 class="feature-title">Security disclosure</h3>
          <p class="feature-desc">
            Found a vulnerability? We welcome responsible disclosure and
            acknowledge reports within 48 hours.
          </p>
          <p style="margin-top:.85rem;"><a href="mailto:security@liveintel.com">security@liveintel.com</a></p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">💬</div>
          <h3 class="feature-title">Everything else</h3>
          <p class="feature-desc">
            Press, partnerships, or anything that doesn't fit the categories
            above. This inbox is read by the founding team.
          </p>
          <p style="margin-top:.85rem;"><a href="mailto:hello@liveintel.com">hello@liveintel.com</a></p>
        </div>

      </div>
    </div>
  </section>

  <!-- WHAT TO INCLUDE -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="prep-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="prep-heading">Getting the most out of a demo</h2>
      <p class="section-subtitle fade-in">A few details that help us tailor the call instead of running a generic script.</p>

      <div class="spec-box fade-in" style="max-width:680px;">
        <div class="spec-box-header">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          before-the-call
        </div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">Team size</span><span class="spec-val">Roughly how many people you're protecting</span></div>
          <div class="spec-row"><span class="spec-key">Current tools</span><span class="spec-val">What you use today for reporting and simulation, if anything</span></div>
          <div class="spec-row"><span class="spec-key">Main pain point</span><span class="spec-val">Triage speed, awareness testing, or reporting to leadership</span></div>
          <div class="spec-row"><span class="spec-key">Industry</span><span class="spec-val">Especially if you're in education, government, or an MSP</span></div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
