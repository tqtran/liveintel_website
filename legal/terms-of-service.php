<?php
$basePath = "../";
$pageTitle = "Terms of Service | LiveIntel";
$pageDescription = "LiveIntel Terms of Service covering use of the service, accounts, acceptable use, customer responsibilities, availability, disclaimers, and contact.";
$pageCanonicalPath = "/terms";
$pageStyles = '<style>
  .legal-section { max-width: 820px; margin: 0 auto; }
  .legal-section h2 { font-size: 1.25rem; color: var(--clr-text); margin: 2rem 0 .75rem; }
  .legal-section p, .legal-section ul { color: var(--clr-text-muted); line-height: 1.8; margin-bottom: 1rem; }
  .legal-section ul { padding-left: 1.5rem; }
  .legal-section ul li { margin-bottom: .4rem; }
  .legal-meta { font-size: .85rem; color: var(--clr-text-muted); margin-bottom: 2.5rem; }
</style>';
require_once __DIR__ . '/../includes/header.php';
?>

<main>
  <section class="section" aria-labelledby="terms-heading">
    <div class="container">
      <div class="legal-section">
        <h1 class="section-title fade-in" id="terms-heading">Terms of Service</h1>
        <p class="legal-meta fade-in">Last updated: July 7, 2026</p>

        <h2 class="fade-in">Acceptance of Terms</h2>
        <p class="fade-in">
          These Terms of Service govern access to and use of the LiveIntel website, platform, tools, and related services. By using LiveIntel, you agree to these Terms. If you use LiveIntel on behalf of an organization, you represent that you have authority to accept these Terms for that organization.
        </p>

        <h2 class="fade-in">Use of Service</h2>
        <p class="fade-in">
          LiveIntel provides phishing simulation, campaign coordination, awareness measurement, reporting, and related security tools. You may use the service only for lawful, authorized purposes and in accordance with these Terms and any applicable agreement with LiveIntel.
        </p>

        <h2 class="fade-in">Accounts</h2>
        <p class="fade-in">
          You are responsible for keeping account information accurate and protecting account credentials. You are responsible for activity under your account unless caused by LiveIntel's failure to meet its own obligations. Notify LiveIntel promptly if you suspect unauthorized access.
        </p>

        <h2 class="fade-in">Acceptable Use</h2>
        <ul class="fade-in">
          <li>Do not use LiveIntel to target people, systems, or organizations without proper authorization.</li>
          <li>Do not use the service to collect real credentials, payment information, or other sensitive secrets.</li>
          <li>Do not interfere with the service, bypass access controls, or attempt unauthorized testing of LiveIntel systems.</li>
          <li>Do not upload malicious code, unlawful content, or content that infringes the rights of others.</li>
          <li>Do not resell or redistribute the service without written permission from LiveIntel.</li>
        </ul>

        <h2 class="fade-in">Customer Responsibilities</h2>
        <p class="fade-in">
          Customers are responsible for obtaining required approvals before launching simulations, selecting appropriate audiences and templates, configuring their environment, complying with applicable law and internal policies, and using results responsibly.
        </p>

        <h2 class="fade-in">Service Availability</h2>
        <p class="fade-in">
          LiveIntel works to keep the service available and reliable, but availability may be affected by maintenance, third-party providers, network conditions, customer environments, or events outside LiveIntel's control. Unless a separate written agreement says otherwise, no specific uptime commitment is provided by these Terms.
        </p>

        <h2 class="fade-in">Disclaimers</h2>
        <p class="fade-in">
          LiveIntel is provided on an "as is" and "as available" basis unless a separate written agreement states otherwise. LiveIntel does not guarantee that phishing simulations will prevent security incidents, eliminate risk, or identify every awareness issue.
        </p>

        <h2 class="fade-in">Limitation of Liability</h2>
        <p class="fade-in">
          To the maximum extent permitted by law, LiveIntel will not be liable for indirect, incidental, special, consequential, exemplary, or punitive damages, or for lost profits, revenue, goodwill, or data, arising from use of the service. Where liability cannot be excluded, it is limited to the amount permitted by applicable law or any separate written agreement.
        </p>

        <h2 class="fade-in">Changes to Terms</h2>
        <p class="fade-in">
          LiveIntel may update these Terms from time to time. Material changes will be posted on the website or communicated through reasonable channels. Continued use of the service after changes take effect means you accept the updated Terms.
        </p>

        <h2 class="fade-in">Contact</h2>
        <p class="fade-in">
          Questions about these Terms can be sent to <a href="mailto:hello@liveintel.com">hello@liveintel.com</a>.
        </p>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
