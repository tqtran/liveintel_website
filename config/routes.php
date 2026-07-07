<?php

/**
 * Canonical public route manifest.
 *
 * Keep sitemap, navigation, and future rewrite generation aligned by adding
 * public canonical pages here first. Redirect targets, APIs, auth/admin paths,
 * private pages, and implementation endpoints do not belong in this list.
 */

$route = static function (
    string $path,
    string $title,
    string $changefreq,
    string $priority,
    string $sourceFile,
    bool $includeInSitemap = true
): array {
    $absoluteSource = dirname(__DIR__) . DIRECTORY_SEPARATOR . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $sourceFile);
    $lastmod = is_file($absoluteSource) ? date('Y-m-d', filemtime($absoluteSource)) : null;

    return [
        'path' => $path,
        'title' => $title,
        'changefreq' => $changefreq,
        'priority' => $priority,
        'lastmod' => $lastmod,
        'includeInSitemap' => $includeInSitemap,
    ];
};

return [
    $route('/', 'LiveIntel | Phishing Simulation and Analytics Platform', 'weekly', '1.0', 'index.php'),
    $route('/products/phishsim/', 'PhishSim | Phishing Simulation | LiveIntel', 'monthly', '0.9', 'products/phishsim/index.php'),
    $route('/products/liveinsight/', 'LiveInsight | Phishing Analytics | LiveIntel', 'monthly', '0.9', 'products/liveinsight/index.php'),
    $route('/tools/', 'Free Security Tools | LiveIntel', 'monthly', '0.8', 'tools/index.php'),
    $route('/products/passmeter/', 'PassMeter | Free Password Strength Checker | LiveIntel', 'monthly', '0.8', 'products/passmeter/index.php'),
    $route('/products/passforge/', 'PassForge | Free Password Generator | LiveIntel', 'monthly', '0.8', 'products/passforge/index.php'),
    $route('/products/spf-flattener/', 'SPF Flattener | Free SPF Record Tool | LiveIntel', 'monthly', '0.8', 'products/spf-flattener/index.php'),
    $route('/about', 'About | LiveIntel', 'monthly', '0.6', 'about.php'),
    $route('/security', 'Security | LiveIntel', 'monthly', '0.6', 'legal/security.php'),
    $route('/getting-started', 'Getting Started | LiveIntel', 'monthly', '0.6', 'getting-started.php'),
    $route('/contact', 'Contact | LiveIntel', 'monthly', '0.6', 'contact.php'),
    $route('/privacy', 'Privacy Policy | LiveIntel', 'yearly', '0.3', 'legal/privacy-policy.php'),
    $route('/terms', 'Terms of Service | LiveIntel', 'yearly', '0.3', 'legal/terms-of-service.php'),
    $route('/products/livesentinel/', 'LiveSentinel (Coming Soon) | Uptime & Certificate Monitoring | LiveIntel', 'monthly', '0.4', 'products/livesentinel/index.php'),
    $route('/products/vault/', 'Vault (Coming Soon) | Secure Secret Storage | LiveIntel', 'monthly', '0.4', 'products/vault/index.php'),
];
