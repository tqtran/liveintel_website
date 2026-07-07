<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription ?? ''); ?>" />
  <title><?php echo htmlspecialchars($pageTitle ?? 'LiveIntel'); ?></title>
  <?php
    if (!empty($pageCanonicalPath) && empty($pageCanonical)) {
        $siteUrl = getenv('SITE_URL') ?: '';
        if ($siteUrl === '') {
            $host = $_SERVER['HTTP_HOST'] ?? 'www.liveintel.com';
            $isLocalHost = preg_match('/^(localhost|127\.0\.0\.1|\[::1\])(?::\d+)?$/', $host) === 1;
            $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
            $canonicalHost = $isLocalHost ? $host : 'www.' . preg_replace('/^www\./i', '', $host);
            $siteUrl = ($isLocalHost ? $scheme : 'https') . '://' . $canonicalHost;
        }
        $pageCanonical = rtrim($siteUrl, '/') . '/' . ltrim($pageCanonicalPath, '/');
    }
  ?>
  <?php if (!empty($pageCanonical)): ?>
  <link rel="canonical" href="<?php echo htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8'); ?>" />
  <?php endif; ?>
  <link rel="stylesheet" href="<?php echo $basePath; ?>css/styles.css" />
  <style>
    .fade-in { opacity: 0; transform: translateY(20px); transition: opacity .5s ease, transform .5s ease; }
    .fade-in.visible { opacity: 1; transform: none; }
  </style>
  <?php if (!empty($pageStyles)) echo $pageStyles; ?>
</head>
<body>

<!-- ============================================================
     HEADER
============================================================ -->
<header class="site-header">
  <div class="container">
    <nav class="nav" aria-label="Main navigation">
      <a href="<?php echo $basePath; ?>index.php" class="brand-lockup" aria-label="LiveIntel home">
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">
          <rect width="28" height="28" rx="6" fill="#00c2ff" fill-opacity=".12"/>
          <path d="M7 14h14M14 7l7 7-7 7" stroke="#00c2ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="brand-wordmark">LiveIntel</span>
      </a>

      <button class="nav-toggle" aria-controls="nav-links" aria-expanded="false" aria-label="Toggle navigation">
        <span></span><span></span><span></span>
      </button>

      <ul class="nav-links" id="nav-links" role="list">
        <li><a href="<?php echo $basePath; ?>index.php#platform">Platform</a></li>
        <li><a href="<?php echo $basePath; ?>index.php#analytics">Analytics</a></li>
        <li><a href="<?php echo $basePath; ?>getting-started">Getting Started</a></li>
        <li><a href="<?php echo $basePath; ?>tools/">Tools</a></li>
        <li><a href="<?php echo $basePath; ?>security">Security</a></li>
        <li><a href="<?php echo $basePath; ?>about">About</a></li>
      </ul>

      <a href="<?php echo $basePath; ?>start" class="btn btn-primary nav-cta">Start Free</a>
    </nav>
  </div>
</header>
