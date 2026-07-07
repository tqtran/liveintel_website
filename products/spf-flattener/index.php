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
      <div class="tool-intro fade-in">
        SPF has a rule almost nobody remembers until mail starts bouncing:
        receiving servers stop after <strong>10 DNS lookups</strong> (RFC 7208),
        and every <code>include:</code> — plus every include hiding inside
        it — burns one. Records grow one "just add us to your DNS" at a time
        until they quietly cross the line. This tool walks the whole tree,
        counts the damage, and hands back a flattened record that fits.
      </div>

      <div class="tool-panel fade-in">
        <div class="tool-panel-body">
          <div class="tool-tabs" role="tablist" aria-label="SPF input mode">
            <button class="tool-tab" id="spf-tab-domain" type="button" role="tab" aria-selected="true" aria-controls="spf-panel-domain">Domain</button>
            <button class="tool-tab" id="spf-tab-record" type="button" role="tab" aria-selected="false" aria-controls="spf-panel-record">Paste Record</button>
          </div>

          <form id="spf-form">
            <div id="spf-panel-domain" role="tabpanel" aria-labelledby="spf-tab-domain">
              <div class="tool-field" style="margin-bottom:0;">
                <label for="spf-domain">Domain</label>
                <input class="tool-input" id="spf-domain" name="domain" type="text" inputmode="url" autocomplete="off" spellcheck="false" placeholder="example.com" />
              </div>
              <div class="spf-examples" aria-label="Example domains">
                try:
                <button type="button" class="spf-example">gmail.com</button>
                <button type="button" class="spf-example">github.com</button>
                <button type="button" class="spf-example">microsoft.com</button>
              </div>
            </div>

            <div id="spf-panel-record" role="tabpanel" aria-labelledby="spf-tab-record" hidden>
              <div class="tool-field">
                <label for="spf-record">SPF record</label>
                <textarea class="tool-textarea" id="spf-record" name="record" spellcheck="false" placeholder="v=spf1 include:_spf.example.com -all"></textarea>
              </div>
            </div>

            <div class="tool-actions" style="margin-top:1.25rem;">
              <button class="btn btn-primary" id="spf-submit" type="submit">Check &amp; Flatten</button>
              <button class="btn btn-outline" id="spf-reset" type="button">Reset</button>
            </div>
          </form>

          <div class="tool-status" id="spf-status" aria-live="polite">Ready. No account needed.</div>

          <div class="tool-terminal" id="spf-terminal" hidden>
            <div class="terminal-bar">
              <span class="terminal-dot dot-red" aria-hidden="true"></span>
              <span class="terminal-dot dot-yellow" aria-hidden="true"></span>
              <span class="terminal-dot dot-green" aria-hidden="true"></span>
              <span class="terminal-title">spf-flattener — resolver trace</span>
            </div>
            <div class="terminal-body" id="spf-log" aria-live="polite" aria-label="SPF resolver trace"></div>
          </div>

          <div class="tool-result-block" id="spf-results" hidden>
            <div class="spf-verdict" id="spf-verdict">
              <div class="spf-verdict-icon" id="spf-verdict-icon" aria-hidden="true"></div>
              <div>
                <div class="spf-verdict-title" id="spf-verdict-title"></div>
                <div class="spf-verdict-text" id="spf-verdict-text"></div>
              </div>
            </div>

            <div class="spf-compare">
              <div class="spf-compare-cell">
                <div class="spf-compare-label">Current record</div>
                <div class="spf-compare-value" id="spf-before">-</div>
                <div class="spf-gauge" id="spf-gauge-before" aria-hidden="true"></div>
              </div>
              <div class="spf-compare-arrow" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </div>
              <div class="spf-compare-cell">
                <div class="spf-compare-label">Flattened record</div>
                <div class="spf-compare-value" id="spf-after">-</div>
                <div class="spf-gauge" id="spf-gauge-after" aria-hidden="true"></div>
              </div>
            </div>

            <div class="tool-stats" aria-label="Flattening summary">
              <span class="tool-stat" id="spf-stat-ip4">ip4 <strong>-</strong></span>
              <span class="tool-stat" id="spf-stat-ip6">ip6 <strong>-</strong></span>
              <span class="tool-stat" id="spf-stat-kept">kept lookups <strong>-</strong></span>
              <span class="tool-stat" id="spf-stat-chars">record size <strong>-</strong></span>
            </div>

            <div class="tool-result-title">Current record</div>
            <div class="tool-record" id="spf-original"></div>

            <div class="tool-result-title" style="margin-top:1rem;">Flattened record</div>
            <div class="tool-record" id="spf-flat"></div>
            <div class="tool-actions" style="margin-top:.75rem;">
              <button class="btn btn-primary btn-sm" id="spf-copy" type="button">Copy Flattened Record</button>
              <button class="btn btn-outline btn-sm" id="spf-copy-split" type="button" hidden>Copy as Split Strings</button>
            </div>

            <div id="spf-chunks-wrap" hidden>
              <div class="tool-result-title" style="margin-top:1.25rem;">Split for publishing</div>
              <p class="tool-note" style="margin-top:0; margin-bottom:.6rem;">
                DNS TXT strings max out at 255 characters. Publish these as one
                record with multiple strings — resolvers join them back together.
              </p>
              <div class="spf-chunks" id="spf-chunks"></div>
            </div>

            <div class="tool-result-title" style="margin-top:1.25rem;">Warnings</div>
            <ul class="tool-findings" id="spf-warnings"></ul>
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
