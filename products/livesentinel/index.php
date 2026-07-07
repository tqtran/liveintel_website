<?php
$basePath = "../../";
$pageTitle = "LiveSentinel (Coming Soon) | Uptime & Certificate Monitoring | LiveIntel";
$pageDescription = "LiveSentinel is an upcoming lightweight monitoring tool from LiveIntel that watches uptime and certificate expiry for public-facing services.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- PRODUCT HERO -->
  <section class="product-hero" aria-labelledby="ls-title" style="--hero-accent: rgba(239,68,68,.08);">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../tools/" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Tools
          </a>
          <span class="badge badge-yellow">Coming Soon · External Checks</span>
          <h1 class="product-hero-title" id="ls-title">LiveSentinel</h1>
          <p class="product-hero-desc">
            LiveSentinel watches your public-facing services for downtime and
            certificate expiry, so you find out from a check, not a customer.
            <strong style="color:var(--clr-text);">LiveSentinel is under development and not available yet.</strong>
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <a href="#features" class="btn btn-primary">See What's Coming</a>
            <a href="../../tools/" class="btn btn-outline">Try the Live Tools</a>
          </div>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z"/><path d="M9 12h6"/><path d="M12 9v6"/></svg>
            livesentinel — product spec
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Product</span><span class="spec-val">LiveSentinel</span></div>
            <div class="spec-row"><span class="spec-key">Best for</span><span class="spec-val">Teams that want fewer surprises in production</span></div>
            <div class="spec-row"><span class="spec-key">Focus</span><span class="spec-val">Uptime confidence, certificate visibility, external reassurance</span></div>
            <div class="spec-row"><span class="spec-key">Operational style</span><span class="spec-val">Lightweight, scheduled, easy to fit into daily workflows</span></div>
            <div class="spec-row"><span class="spec-key">Outcome</span><span class="spec-val">Earlier awareness with less manual checking</span></div>
            <div class="spec-row"><span class="spec-key">Delivery</span><span class="spec-val">Simple checks, simple signals, fast action</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="section" id="features" aria-labelledby="features-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="features-heading">What's Coming</h2>
      <p class="section-subtitle fade-in">
        LiveSentinel is built for teams that want fast reassurance when things are
        healthy and an earlier heads-up when something starts drifting the wrong way.
      </p>

      <div class="features-grid">

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🛰️</div>
          <h3 class="feature-title">Catch Issues Before Customers Notice</h3>
          <p class="feature-desc">
            Keep a lightweight watch on the public signs of service health so your
            team has a chance to respond before reliability becomes a customer conversation.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔐</div>
          <h3 class="feature-title">Protect Trust At The Edge</h3>
          <p class="feature-desc">
            Stay ahead of certificate problems and other visible warning signs that
            can make a healthy service suddenly feel broken or unsafe to users.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">📏</div>
          <h3 class="feature-title">Turn Quiet Drift Into Clear Signals</h3>
          <p class="feature-desc">
            Spot the difference between healthy, risky, and urgent conditions without
            turning every simple check into a heavy monitoring project.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">⏱️</div>
          <h3 class="feature-title">Fit Into Real Operational Routines</h3>
          <p class="feature-desc">
            Designed to work with the simple schedules and habits teams already use,
            so you gain coverage without adding operational drag.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🔔</div>
          <h3 class="feature-title">Know What Needs Attention Sooner</h3>
          <p class="feature-desc">
            Get a straightforward signal when a service needs a closer look, helping
            teams act early instead of reacting after a visible failure.
          </p>
        </div>

        <div class="feature-card fade-in">
          <div class="feature-icon" aria-hidden="true">🧰</div>
          <h3 class="feature-title">Keep Coverage High And Complexity Low</h3>
          <p class="feature-desc">
            LiveSentinel stays intentionally lightweight, giving teams practical
            reassurance without the overhead of a larger observability stack.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- CHECK MODEL -->
  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="ops-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="ops-heading">From Quiet Signals To Earlier Action</h2>
      <p class="section-subtitle fade-in">A small check can prevent a much bigger surprise when it reaches the right person at the right time.</p>

      <div class="spec-box fade-in" style="max-width:720px;">
        <div class="spec-box-header">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z"/><path d="M9 12h6"/><path d="M12 9v6"/></svg>
          early-warning-flow
        </div>
        <div class="spec-box-body">
          <div class="spec-row"><span class="spec-key">Step 1</span><span class="spec-val">Check the public-facing signal that matters most</span></div>
          <div class="spec-row"><span class="spec-key">Step 2</span><span class="spec-val">Measure whether the service still looks healthy from the outside</span></div>
          <div class="spec-row"><span class="spec-key">Step 3</span><span class="spec-val">Flag small warning signs before they harden into incidents</span></div>
          <div class="spec-row"><span class="spec-key">Step 4</span><span class="spec-val">Surface a clear, lightweight signal for the team</span></div>
          <div class="spec-row"><span class="spec-key">Step 5</span><span class="spec-val">Give operators more time to respond calmly and deliberately</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" aria-labelledby="cta-heading">
    <div class="container">
      <div class="utility-banner fade-in">
        <p class="utility-banner-text">
          <strong>LiveSentinel watches your infrastructure.</strong> LiveInsight
          watches your phishing and human-risk numbers the same way.
        </p>
        <a href="../../products/liveinsight/" class="btn btn-outline">See LiveInsight</a>
      </div>

      <div class="cta-banner fade-in" style="margin-top:2rem;">
        <h2 class="cta-banner-title" id="cta-heading">Catch small warning signs before they become incidents</h2>
        <p class="cta-banner-desc">
          LiveSentinel isn't available yet. Tell us you're interested and
          we'll let you know when it launches.
        </p>
        <div class="cta-banner-actions">
          <a href="../../contact.php" class="btn btn-primary btn-lg">Get Notified at Launch</a>
          <a href="../../tools/" class="btn btn-outline btn-lg">Try the Live Tools</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>