<?php
$basePath = "../../";
$pageTitle = "PassForge | Free Password Generator | LiveIntel";
$pageDescription = "Generate strong passwords and passphrases locally in your browser. PassForge uses secure browser randomness and sends nothing to LiveIntel.";
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <section class="product-hero" aria-labelledby="pf-title">
    <div class="container">
      <div class="product-hero-inner">
        <div>
          <a href="../../tools/" class="product-hero-back">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            All Tools
          </a>
          <span class="badge badge-green">Free Tool · Runs in your browser</span>
          <h1 class="product-hero-title" id="pf-title">PassForge</h1>
          <p class="product-hero-desc">
            Generate a strong password or a memorable passphrase locally. No
            account needed, and generated passwords are never sent to LiveIntel.
          </p>
        </div>

        <div class="spec-box fade-in">
          <div class="spec-box-header">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            local-generation
          </div>
          <div class="spec-box-body">
            <div class="spec-row"><span class="spec-key">Account</span><span class="spec-val">Not needed</span></div>
            <div class="spec-row"><span class="spec-key">Randomness</span><span class="spec-val">Browser crypto API</span></div>
            <div class="spec-row"><span class="spec-key">Network</span><span class="spec-val">No password network calls</span></div>
            <div class="spec-row"><span class="spec-key">Modes</span><span class="spec-val">Password and passphrase</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="tool-heading">
    <div class="container">
      <h2 class="section-title fade-in" id="tool-heading">Generate a strong password.</h2>
      <div class="tool-intro fade-in">
        Humans are famously bad at random — our "random" passwords have a
        favorite word, a lucky number, and an exclamation point at the end.
        PassForge hands the job to your browser's <strong>cryptographic random
        generator</strong> (<code>crypto.getRandomValues</code>), which has no
        favorites and no birthday. Set the rules, get a credential with honest,
        measurable entropy. Everything happens locally — nothing is ever sent
        anywhere.
      </div>

      <div class="tool-panel fade-in">
        <div class="tool-panel-body">
          <div class="tool-tabs" role="tablist" aria-label="Generator mode">
            <button class="tool-tab" id="pf-tab-password" type="button" role="tab" aria-selected="true" aria-controls="pf-panel-password">Password</button>
            <button class="tool-tab" id="pf-tab-passphrase" type="button" role="tab" aria-selected="false" aria-controls="pf-panel-passphrase">Passphrase</button>
          </div>

          <div id="pf-panel-password" role="tabpanel" aria-labelledby="pf-tab-password">
            <div class="tool-field">
              <label for="pf-length">Length</label>
              <div class="tool-range-row">
                <input id="pf-length" type="range" min="12" max="40" value="20" />
                <span class="tool-range-value" id="pf-length-value">20</span>
              </div>
            </div>
            <div class="tool-checks">
              <label class="tool-check"><input id="pf-upper" type="checkbox" checked /> Uppercase</label>
              <label class="tool-check"><input id="pf-lower" type="checkbox" checked /> Lowercase</label>
              <label class="tool-check"><input id="pf-digits" type="checkbox" checked /> Digits</label>
              <label class="tool-check"><input id="pf-symbols" type="checkbox" checked /> Symbols</label>
              <label class="tool-check"><input id="pf-ambiguous" type="checkbox" checked /> Avoid ambiguous characters</label>
            </div>
          </div>

          <div id="pf-panel-passphrase" role="tabpanel" aria-labelledby="pf-tab-passphrase" hidden>
            <div class="tool-field">
              <label for="pf-words">Words</label>
              <div class="tool-range-row">
                <input id="pf-words" type="range" min="4" max="8" value="5" />
                <span class="tool-range-value" id="pf-words-value">5</span>
              </div>
            </div>
            <div class="tool-field">
              <label for="pf-separator">Separator <span class="tool-rate-note" style="display:inline; margin-left:.35rem;">any character(s) you like — leave empty for none</span></label>
              <input class="tool-input" id="pf-separator" type="text" value="-" maxlength="3" autocomplete="off" spellcheck="false" style="max-width:120px;" />
            </div>
            <div class="tool-checks">
              <label class="tool-check"><input id="pf-capitalize" type="checkbox" checked /> Capitalize words</label>
              <label class="tool-check"><input id="pf-number" type="checkbox" checked /> Add number</label>
            </div>
          </div>

          <div class="tool-output" aria-live="polite">
            <div class="tool-output-value" id="pf-output"></div>
            <button class="btn btn-outline btn-sm" id="pf-copy" type="button">Copy</button>
          </div>

          <div class="tool-meter" aria-label="Generated password strength">
            <div class="tool-meter-track"><div class="tool-meter-fill" id="pf-meter-fill"></div></div>
            <div class="tool-meter-label"><span id="pf-meter-bits">-</span><span id="pf-meter-text"></span></div>
          </div>

          <div class="tool-actions">
            <button class="btn btn-primary" id="pf-generate" type="button">Generate</button>
          </div>
          <p class="tool-note">
            PassForge uses secure browser randomness. Nothing generated here is sent to LiveIntel.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--clr-surface); border-top:1px solid var(--clr-border);" aria-labelledby="next-heading">
    <div class="container">
      <div class="utility-banner fade-in">
        <p class="utility-banner-text">
          <strong>Strong passwords are one layer.</strong> LiveIntel helps teams
          build safer habits through phishing simulations and clear reporting.
        </p>
        <a href="../../index.php#analytics" class="btn btn-outline">Explore Phishing Analytics</a>
      </div>

      <div class="cta-banner fade-in" style="margin-top:2rem;">
        <h2 class="cta-banner-title" id="next-heading">Want reporting over time?</h2>
        <p class="cta-banner-desc">
          Use this tool for a quick credential. Use LiveIntel when you need to
          measure phishing behavior, trends, and improvement across a team.
        </p>
        <div class="cta-banner-actions">
          <a href="../../index.php#platform" class="btn btn-primary btn-lg">Explore Platform</a>
          <a href="../../tools/" class="btn btn-outline btn-lg">Try Another Tool</a>
        </div>
      </div>
    </div>
  </section>

</main>

<script src="../../js/passforge.js"></script>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
