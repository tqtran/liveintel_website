<?php
$basePath = "../../";
$pageTitle = "SPF Flattener | Free SPF Record Tool | LiveIntel";
$pageDescription = "Check an SPF record, count DNS lookups, and generate a flattened SPF record using LiveIntel's free SPF Flattener.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="spf-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../tools/" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Tools
          </a>
          <span class="badge badge-green">Free Tool · Public DNS check</span>
          <h1 class="product-hero-title" id="spf-title">SPF Flattener</h1>
          <p class="product-hero-desc">
            Check your SPF record, count DNS lookups, and see whether flattening
            can help. Enter a domain or paste an SPF record to start.
          </p>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 15h6"/></svg>
            dns-boundary
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Account</span><span class="spec-val">Not needed</span></div>
            <div class="spec-row"><span class="spec-key">Input</span><span class="spec-val">Domain or SPF record</span></div>
            <div class="spec-row"><span class="spec-key">Backend</span><span class="spec-val">PHP DNS resolver</span></div>
            <div class="spec-row"><span class="spec-key">Privacy</span><span class="spec-val">Only public DNS data is checked</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="tool-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="tool-heading">Check an SPF record.</h2>
      <p class="section-subtitle fade-in">SPF allows 10 DNS lookups. This tool shows where your record stands.</p>

      <div class="tool-panel fade-in">
        <div class="tool-panel-body">
          <div class="tool-tabs" role="tablist" aria-label="SPF input mode">
            <button class="tool-tab" id="spf-tab-domain" type="button" role="tab" aria-selected="true" aria-controls="spf-panel-domain">Domain</button>
            <button class="tool-tab" id="spf-tab-record" type="button" role="tab" aria-selected="false" aria-controls="spf-panel-record">Paste Record</button>
          </div>

          <form id="spf-form">
            <div id="spf-panel-domain" role="tabpanel" aria-labelledby="spf-tab-domain">
              <div class="tool-field">
                <label for="spf-domain">Domain</label>
                <input class="tool-input" id="spf-domain" name="domain" type="text" inputmode="url" autocomplete="off" spellcheck="false" placeholder="example.com" />
              </div>
            </div>

            <div id="spf-panel-record" role="tabpanel" aria-labelledby="spf-tab-record" hidden>
              <div class="tool-field">
                <label for="spf-record">SPF record</label>
                <textarea class="tool-textarea" id="spf-record" name="record" spellcheck="false" placeholder="v=spf1 include:_spf.example.com -all"></textarea>
              </div>
            </div>

            <div class="tool-actions">
              <button class="btn btn-primary" id="spf-submit" type="submit">Check SPF Record</button>
              <button class="btn btn-outline" id="spf-reset" type="button">Reset</button>
            </div>
          </form>

          <div class="tool-status" id="spf-status" aria-live="polite">Ready. No account needed.</div>

          <div class="tool-result-block" id="spf-results" hidden>
            <div class="tool-stats">
              <span class="tool-stat" id="spf-stat-original">lookups <strong>-</strong></span>
              <span class="tool-stat" id="spf-stat-kept">kept lookups <strong>-</strong></span>
              <span class="tool-stat" id="spf-stat-ip4">ip4 <strong>-</strong></span>
              <span class="tool-stat" id="spf-stat-ip6">ip6 <strong>-</strong></span>
            </div>

            <div class="tool-result-title">Plain-English result</div>
            <p class="tool-note" id="spf-summary" style="margin-top:0;"></p>

            <div class="tool-result-title">Current record</div>
            <div class="tool-record" id="spf-original"></div>

            <div class="tool-result-title" style="margin-top:1rem;">Flattened record</div>
            <div class="tool-record" id="spf-flat"></div>
            <div class="tool-actions" style="margin-top:.75rem;">
              <button class="btn btn-outline btn-sm" id="spf-copy" type="button">Copy Flattened Record</button>
            </div>

            <div class="tool-result-title" style="margin-top:1rem;">Warnings and trace</div>
            <ul class="tool-findings" id="spf-warnings"></ul>
            <div class="tool-log" id="spf-log" aria-label="SPF resolver trace"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="next-heading">
    <div class="container">
      <div class="utility-banner fade-in">
        <p class="utility-banner-text">
          <strong>SPF helps with spoofing.</strong> LiveIntel helps with the
          bigger phishing workflow: simulations, analytics, and reporting.
        </p>
        <a href="../../products/phishsim/" class="btn btn-outline">See PhishSim</a>
      </div>

      <div class="cta-banner fade-in" style="margin-top:2rem;">
        <h2 class="cta-banner-title" id="next-heading">When one-off checks are not enough.</h2>
        <p class="cta-banner-desc">
          LiveIntel helps teams move from individual tools to a repeatable
          phishing program with simulations, analytics, trends, and reports.
        </p>
        <div class="cta-banner-actions">
          <a href="../../index.php#platform" class="btn btn-primary btn-lg">Explore LiveIntel</a>
          <a href="../../tools/" class="btn btn-outline btn-lg">Try Another Tool</a>
        </div>
      </div>
    </div>
  </section>

</main>

<script src="../../js/spf-flattener.js"></script>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
