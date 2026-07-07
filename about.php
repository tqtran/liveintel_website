<?php
$basePath = "";
$pageTitle = "About | LiveIntel";
$pageDescription = "LiveIntel makes phishing simulation easier to run, easier to understand, and easier to adopt without heavy rollout or unnecessary data collection.";
$pageCanonicalPath = "/about";
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="about-title">
    <div class="container">
      <div style="max-width:720px;">
        <span class="badge badge-blue">About</span>
        <h1 class="product-hero-title" id="about-title">Phishing awareness should be practical before it gets complicated.</h1>
        <p class="product-hero-desc" style="max-width:680px;">
          LiveIntel makes phishing simulation easier to run, easier to understand, and easier to adopt for teams that do not have a spare security department waiting around.
        </p>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="why-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Why LiveIntel Exists</div>
          <h2 class="section-title fade-in" id="why-heading">LiveIntel started with a practical problem.</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            Phishing awareness matters, but many tools are priced, packaged, or operated like every organization has a full security team waiting around. Most do not.
          </p>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            Smaller teams, lean IT groups, schools, nonprofits, and growing businesses still need to run controlled simulations, understand what happened, and improve the next round.
          </p>
          <p style="color:var(--clr-text-muted);">
            LiveIntel was built for that work: make phishing simulation easier to run, easier to understand, and easier to adopt, without turning awareness into surveillance.
          </p>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">liveintel-focus</div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Primary use</span><span class="spec-val">Phishing simulation and awareness measurement</span></div>
            <div class="spec-row"><span class="spec-key">Designed for</span><span class="spec-val">Practical teams and organizations of every size</span></div>
            <div class="spec-row"><span class="spec-key">Approach</span><span class="spec-val">Local execution with cloud coordination and campaign results</span></div>
            <div class="spec-row"><span class="spec-key">Boundary</span><span class="spec-val">No real credential collection in simulations</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="principles-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Principles</div>
      <h2 class="section-title fade-in" id="principles-heading">Built for the way security work actually happens</h2>
      <div class="features-grid">
        <div class="feature-card fade-in">
          <h3 class="feature-title">Clear enough to operate</h3>
          <p class="feature-desc">Campaign setup, agent coordination, and result review should make sense without a large security operations team translating every step.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Privacy-conscious by design</h3>
          <p class="feature-desc">LiveIntel minimizes collection to the metadata and campaign metrics needed to operate the service and measure awareness.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Accessible for every size</h3>
          <p class="feature-desc">Teams should be able to start with one sensible campaign, learn from it, and expand when they are ready.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Measurement over theater</h3>
          <p class="feature-desc">Useful programs track click rate, exposure, repeat failures, and trend lines that can guide the next training decision.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="company-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Contact / Company Information</div>
          <h2 class="section-title fade-in" id="company-heading">Reach LiveIntel directly.</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            Questions, support, security reports, or something weird? Send it our way through the contact page.
          </p>
          <p style="color:var(--clr-text-muted);">
            The public site stays direct on purpose: what LiveIntel is, how it works, what it collects, and how to reach the people responsible for it.
          </p>
        </div>
        <div class="cta-banner fade-in" style="text-align:left;">
          <h2 class="cta-banner-title">Wondering if it fits?</h2>
          <p class="cta-banner-desc" style="margin-inline:0;">
            Tell us your team size, current phishing process, and what you want to measure.
          </p>
          <div class="cta-banner-actions" style="justify-content:flex-start;">
            <a href="contact" class="btn btn-primary btn-lg">Contact LiveIntel</a>
            <a href="security" class="btn btn-outline btn-lg">Review Security</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
