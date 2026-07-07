<?php
$basePath = "../";
$pageTitle = "Privacy Policy | LiveIntel";
$pageDescription = "LiveIntel privacy policy covering collected information, data use, retention, security measures, third-party services, and customer controls.";
$pageCanonicalPath = "/privacy";
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
  <section class="section" aria-labelledby="privacy-heading">
    <div class="container">
      <div class="legal-section">
        <h1 class="section-title fade-in" id="privacy-heading">Privacy Policy</h1>
        <p class="legal-meta fade-in">Last updated: July 7, 2026</p>

        <p class="fade-in">
          This Privacy Policy explains how LiveIntel collects, uses, retains, and protects information when you use the LiveIntel website, platform, tools, and related services.
        </p>

        <h2 class="fade-in">Information Collected</h2>
        <ul class="fade-in">
          <li>Account information, such as name, email address, organization, role, and authentication-related records.</li>
          <li>Contact and support communications you send to LiveIntel.</li>
          <li>Campaign metadata, such as campaign names, template choices, target group metadata, timing, and configuration.</li>
          <li>Reporting metrics, such as delivery status, opens, clicks, reports, time to report, and simulated form submission events.</li>
          <li>Technical and operational data, such as IP address, browser or device information, logs, diagnostic events, and security events needed to operate the service.</li>
        </ul>

        <h2 class="fade-in">Information Not Intentionally Collected</h2>
        <ul class="fade-in">
          <li>LiveIntel does not intentionally collect real passwords or credential values through simulated phishing forms.</li>
          <li>LiveIntel does not require mailbox contents to produce campaign reports.</li>
          <li>LiveIntel does not intentionally collect sensitive personal information unless a customer or user includes it in a communication, campaign name, uploaded data, or support request.</li>
        </ul>

        <h2 class="fade-in">How Information Is Used</h2>
        <ul class="fade-in">
          <li>Provide, operate, secure, and improve the LiveIntel service.</li>
          <li>Create, coordinate, execute, and report on phishing simulation campaigns.</li>
          <li>Respond to support, security, and business inquiries.</li>
          <li>Detect, investigate, and prevent misuse, abuse, or unauthorized access.</li>
          <li>Meet legal, contractual, accounting, or compliance obligations.</li>
        </ul>

        <h2 class="fade-in">Data Retention</h2>
        <p class="fade-in">
          LiveIntel retains information for as long as needed to provide the service, maintain reports requested by customers, resolve support issues, meet legal obligations, and protect the integrity of the platform. Customers may contact LiveIntel to request deletion or retention details for their account.
        </p>

        <h2 class="fade-in">Security Measures</h2>
        <p class="fade-in">
          LiveIntel uses administrative, technical, and operational safeguards intended to protect service data. These include access controls, encryption in transit, encryption at rest where supported by underlying services, logging, and operational review of security-sensitive activity.
        </p>

        <h2 class="fade-in">Third-Party Services</h2>
        <p class="fade-in">
          LiveIntel may use third-party providers for hosting, email delivery, analytics, payment processing, support, and security operations. These providers are used to operate the service and are expected to process information only for the purposes LiveIntel authorizes.
        </p>

        <h2 class="fade-in">User and Customer Controls</h2>
        <ul class="fade-in">
          <li>Customers control campaign configuration, audience selection, and use of the local agent in their environment.</li>
          <li>Account administrators can request access, correction, export, or deletion of account information where applicable.</li>
          <li>Users can contact LiveIntel to ask privacy questions or request assistance with personal information associated with the service.</li>
        </ul>

        <h2 class="fade-in">Contact</h2>
        <p class="fade-in">
          Privacy questions can be sent to <a href="mailto:privacy@liveintel.com">privacy@liveintel.com</a>. General inquiries can be sent to <a href="mailto:hello@liveintel.com">hello@liveintel.com</a>.
        </p>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
