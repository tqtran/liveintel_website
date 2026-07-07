<?php
$basePath = "";
$pageTitle = "Start Free | LiveIntel";
$pageDescription = "Start LiveIntel free and get setup details for running your first privacy-conscious phishing simulation from your own environment.";
$pageCanonicalPath = "/start";
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="start-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <span class="badge badge-blue">Start Free</span>
          <h1 class="product-hero-title" id="start-title">Start LiveIntel free.</h1>
          <p class="product-hero-desc">
            Tell us where to send your setup details. We'll help you get your first phishing simulation running without making it a whole project.
          </p>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">free-setup</div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Setup</span><span class="spec-val">Agent package and connection details by email</span></div>
            <div class="spec-row"><span class="spec-key">Execution</span><span class="spec-val">Run simulations from your own environment</span></div>
            <div class="spec-row"><span class="spec-key">Metrics</span><span class="spec-val">Clicks, remote content exposure, repeat patterns, and improvement</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="setup-form-heading">
    <div class="container">
      <div class="two-col">
        <div>
          <div class="eyebrow fade-in"><span class="eyebrow-dot"></span>Free setup</div>
          <h2 class="section-title fade-in" id="setup-form-heading">Request your setup details</h2>
          <p style="color:var(--clr-text-muted);">
            Share the basics so LiveIntel can send the right agent package and setup instructions for your team.
          </p>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">setup-request</div>
          <div class="spec-box-body">
            <!-- TODO: Wire this form to the production submission handler. -->
            <form id="start-form" action="#" method="post">
              <div class="tool-field">
                <label for="start-name">Name</label>
                <input class="tool-input" type="text" id="start-name" name="name" autocomplete="name" required />
              </div>
              <div class="tool-field">
                <label for="start-email">Work email</label>
                <input class="tool-input" type="email" id="start-email" name="email" autocomplete="email" required />
              </div>
              <div class="tool-field">
                <label for="start-organization">Organization</label>
                <input class="tool-input" type="text" id="start-organization" name="organization" autocomplete="organization" required />
              </div>
              <div class="tool-field">
                <label for="start-team-size">Approximate team size</label>
                <input class="tool-input" type="text" id="start-team-size" name="team_size" inputmode="numeric" required />
              </div>
              <div class="tool-field">
                <label for="start-measure">What do you want to measure first?</label>
                <textarea class="tool-textarea" id="start-measure" name="measurement_goal" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Request Free Setup</button>
            </form>

            <div id="start-confirmation" role="status" hidden>
              <p style="color:var(--clr-text); margin:0;">Thanks. We'll send setup details to your email.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<script>
  (function () {
    var form = document.getElementById('start-form');
    var confirmation = document.getElementById('start-confirmation');
    if (!form || !confirmation) return;

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      form.hidden = true;
      confirmation.hidden = false;
    });
  }());
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
