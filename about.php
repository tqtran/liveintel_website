<?php
$basePath = "";
$pageTitle = "About | LiveIntel";
$pageDescription = "LiveIntel makes practical phishing simulation and awareness measurement accessible without heavy rollout or unnecessary data collection.";
$pageCanonicalPath = "/about";
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="about-title">
    <div class="container">
      <div style="max-width:720px;">
        <span class="badge badge-blue">About</span>
        <h1 class="product-hero-title" id="about-title">Practical phishing awareness for teams that need clarity, not complexity.</h1>
        <p class="product-hero-desc" style="max-width:680px;">
          LiveIntel exists to make phishing simulation and awareness measurement accessible to organizations that need practical security improvement without heavy rollout, complex administration, or unnecessary data collection.
        </p>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="why-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Why LiveIntel Exists</div>
          <h2 class="section-title fade-in" id="why-heading">Phishing programs should be usable before they are enterprise-scale.</h2>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            Most phishing awareness platforms are built for large organizations with large budgets and dedicated security teams. Smaller teams, lean IT groups, schools, nonprofits, and growing businesses still need to understand who is at risk, which campaigns worked, and where training should improve.
          </p>
          <p style="color:var(--clr-text-muted); margin-bottom:1rem;">
            LiveIntel focuses on the practical work: running controlled simulations, coordinating execution, and reporting the campaign metrics that help a team make better decisions.
          </p>
          <p style="color:var(--clr-text-muted);">
            The goal is not to turn awareness into surveillance. The goal is to help teams measure risk, train responsibly, and improve over time.
          </p>
        </div>
        <div class="spec-box fade-in">
          <div class="spec-box-header">liveintel-focus</div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Primary use</span><span class="spec-val">Phishing simulation and awareness measurement</span></div>
            <div class="spec-row"><span class="spec-key">Designed for</span><span class="spec-val">Practical security teams and organizations of every size</span></div>
            <div class="spec-row"><span class="spec-key">Approach</span><span class="spec-val">Local execution with cloud coordination and reporting</span></div>
            <div class="spec-row"><span class="spec-key">Boundary</span><span class="spec-val">No real credential collection in simulations</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="principles-heading">
    <div class="container">
      <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Principles</div>
      <h2 class="section-title fade-in" id="principles-heading">Built for practical phishing awareness</h2>
      <div class="features-grid">
        <div class="feature-card fade-in">
          <h3 class="feature-title">Clear enough to operate</h3>
          <p class="feature-desc">Campaign setup, agent coordination, and reporting should be understandable without a large security operations team.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Privacy-conscious by design</h3>
          <p class="feature-desc">LiveIntel minimizes collection to the metadata and reporting metrics needed to operate the service and measure awareness.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Accessible for every size</h3>
          <p class="feature-desc">The product is intended for teams that need credible phishing awareness work without a months-long deployment project.</p>
        </div>
        <div class="feature-card fade-in">
          <h3 class="feature-title">Measurement over theater</h3>
          <p class="feature-desc">Useful programs track click rate, exposure, repeat failures, and trend lines that can guide training decisions.</p>
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
            For product questions, support, business inquiries, or security reports, use the contact channels listed on the contact page.
          </p>
          <p style="color:var(--clr-text-muted);">
            We keep the public site direct on purpose: what LiveIntel is, how it works, what it collects, and how to reach the people responsible for it.
          </p>
        </div>
        <div class="cta-banner fade-in" style="text-align:left;">
          <h2 class="cta-banner-title">Questions about fit?</h2>
          <p class="cta-banner-desc" style="margin-inline:0;">
            Tell us your team size, current phishing process, and what you are trying to measure.
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
