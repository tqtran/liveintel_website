<!-- ============================================================
     FOOTER
============================================================ -->
<footer class="site-footer" aria-label="Site footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?php echo $basePath; ?>index.php" class="nav-logo" aria-label="LiveIntel home">
          <svg width="24" height="24" viewBox="0 0 28 28" fill="none" aria-hidden="true">
            <rect width="28" height="28" rx="6" fill="#00c2ff" fill-opacity=".12"/>
            <path d="M7 14h14M14 7l7 7-7 7" stroke="#00c2ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Live<span>Intel</span>
        </a>
        <p>Privacy-conscious phishing simulation, customer-controlled execution, and practical awareness measurement.</p>
      </div>
      <nav aria-label="Capability footer links">
        <h3 class="footer-col-title">Capabilities</h3>
        <ul class="footer-links" role="list">
          <li><a href="<?php echo $basePath; ?>products/phishsim/">Campaign simulation</a></li>
          <li><a href="<?php echo $basePath; ?>products/liveinsight/">Behavior reporting</a></li>
        </ul>
      </nav>
      <nav aria-label="Tools footer links">
        <h3 class="footer-col-title">Free Tools</h3>
        <ul class="footer-links" role="list">
          <li><a href="<?php echo $basePath; ?>products/passmeter/">PassMeter</a></li>
          <li><a href="<?php echo $basePath; ?>products/passforge/">PassForge</a></li>
          <li><a href="<?php echo $basePath; ?>products/spf-flattener/">SPF Flattener</a></li>
        </ul>
      </nav>
      <nav aria-label="Company footer links">
        <h3 class="footer-col-title">Company</h3>
        <ul class="footer-links" role="list">
          <li><a href="<?php echo $basePath; ?>about">About</a></li>
          <li><a href="<?php echo $basePath; ?>security">Security</a></li>
          <li><a href="<?php echo $basePath; ?>getting-started">Docs</a></li>
          <li><a href="<?php echo $basePath; ?>contact">Contact</a></li>
          <li><a href="<?php echo $basePath; ?>privacy">Privacy</a></li>
          <li><a href="<?php echo $basePath; ?>terms">Terms</a></li>
          <li><a href="<?php echo $basePath; ?>sitemap.xml">Sitemap</a></li>
        </ul>
      </nav>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> LiveIntel. All rights reserved.</p>
      <p>Built for practical phishing defense.</p>
    </div>
  </div>
</footer>

<script src="<?php echo $basePath; ?>js/main.js"></script>
</body>
</html>
