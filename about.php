<?php
$basePath = "";
$pageTitle = "About | LiveIntel";
$pageDescription = "LiveIntel builds phishing simulation and analytics tools for security teams. Here's why, and how we think about the problem.";
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- HERO -->
  <section class="product-hero" aria-labelledby="about-title">
    <div class="container">
      <div style="max-width:680px;">
        <span class="badge badge-blue">About</span>
        <h1 class="product-hero-title" id="about-title">We build tools for the phishing problem specifically.</h1>
        <p class="product-hero-desc" style="max-width:640px;">
          Not general security monitoring. Not a full SIEM. LiveIntel helps
          teams run safer phishing simulations, measure how people respond,
          and see whether behavior is getting better.
        </p>
      </div>
    </div>
  </section>

  <!-- WHY -->
  <section class="section" aria-labelledby="why-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Why we built this</div>
          <h2 class="section-title fade-in" id="why-heading">Phishing defense was scattered across too many tools.</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            Every security team we talked to had the same setup: a mailbox
            for reported phishing, a separate simulation platform, and a
            spreadsheet someone updates before the quarterly review. The
            three never talked to each other.
          </p>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            That gap makes a simple question hard to answer: is phishing risk
            actually going down, or does it just feel that way? We built
            PhishSim and LiveInsight to answer it with data
            instead of a guess.
          </p>
          <p style="color:var(--clr-text-muted);">
            The free tools came later, once we noticed people wanted a quick
            way to check a password, generate a safer one, or diagnose an SPF
            record before they needed the full platform. They stayed useful on
            their own, so we kept them that way.
          </p>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            what-we-focus-on
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Core focus</span><span class="spec-val">Phishing simulation, behavior analytics</span></div>
            <div class="spec-row"><span class="spec-key">Core products</span><span class="spec-val">PhishSim, LiveInsight</span></div>
            <div class="spec-row"><span class="spec-key">Free tools</span><span class="spec-val">PassMeter, PassForge, SPF Flattener</span></div>
            <div class="spec-row"><span class="spec-key">Not trying to be</span><span class="spec-val">A full SIEM or EDR platform</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRINCIPLES -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="principles-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>How we think about it</div>
      <h2 class="section-title fade-in" id="principles-heading">A few things we hold to</h2>

      <div class="features-grid">
        <div class="feature-card fade-in">
          <h3 class="feature-title">Simulations train people, not punish them</h3>
          <p class="feature-desc">
            PhishSim exists to identify where training is needed, not to build
            a list of employees to discipline. We built the reporting around
            that boundary on purpose.
          </p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">No real credentials, ever</h3>
          <p class="feature-desc">
            Simulated login pages record that a submission happened. They
            don't read or store what someone typed. That's not configurable.
          </p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Numbers over vibes</h3>
          <p class="feature-desc">
            "Awareness feels better" isn't something you can report to
            leadership. Click rate, report rate, and time-to-report are.
          </p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Tools should work standalone</h3>
          <p class="feature-desc">
            PassMeter, PassForge, and SPF Flattener work without a LiveIntel
            account. They get more useful once connected to a broader phishing
            program, but they are not blocked behind signup.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-banner fade-in">
        <h2 class="cta-banner-title" id="cta-heading">Questions about how this fits your team?</h2>
        <p class="cta-banner-desc">
          Tell us what your current phishing reporting process looks like.
          We'll tell you honestly whether LiveIntel is a fit.
        </p>
        <div class="cta-banner-actions">
          <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>
          <a href="index.php#platform" class="btn btn-outline btn-lg">Explore the Platform</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
