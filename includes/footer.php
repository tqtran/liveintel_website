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
        <p>Analyze threats, simulate behavior, and understand risk — a continuous security intelligence cycle.</p>
      </div>
      <nav aria-label="Products footer links">
        <h3 class="footer-col-title">Products</h3>
        <ul class="footer-links" role="list">
          <li><a href="<?php echo $basePath; ?>products/phishcheck/">PhishCheck</a></li>
          <li><a href="<?php echo $basePath; ?>products/phishsim/">PhishSim</a></li>
          <li><a href="<?php echo $basePath; ?>products/safelink/">SafeLink</a></li>
          <li><a href="<?php echo $basePath; ?>products/passforge/">PassForge</a></li>
          <li><a href="<?php echo $basePath; ?>products/passmeter/">PassMeter</a></li>
          <li><a href="<?php echo $basePath; ?>products/vault/">Vault</a></li>
          <li><a href="<?php echo $basePath; ?>products/liveinsight/">LiveInsight</a></li>
          <li><a href="<?php echo $basePath; ?>products/livesentinel/">LiveSentinel</a></li>
        </ul>
      </nav>
      <nav aria-label="Company footer links">
        <h3 class="footer-col-title">Company</h3>
        <ul class="footer-links" role="list">
          <li><a href="<?php echo $basePath; ?>index.php#about">About</a></li>
          <li><a href="<?php echo $basePath; ?>index.php#contact">Contact</a></li>
        </ul>
      </nav>
      <nav aria-label="Legal footer links">
        <h3 class="footer-col-title">Legal</h3>
        <ul class="footer-links" role="list">
          <li><a href="<?php echo $basePath; ?>legal/privacy-policy.php">Privacy Policy</a></li>
          <li><a href="<?php echo $basePath; ?>legal/terms-of-service.php">Terms of Service</a></li>
          <li><a href="<?php echo $basePath; ?>legal/security.php">Security</a></li>
        </ul>
      </nav>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> LiveIntel. All rights reserved.</p>
      <p>Built with ❤ for cybersecurity professionals.</p>
    </div>
  </div>
</footer>

<script src="<?php echo $basePath; ?>js/main.js"></script>
</body>
</html>
