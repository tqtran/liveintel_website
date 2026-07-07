<?php

declare(strict_types=1);

$routes = require __DIR__ . '/config/routes.php';

$siteUrl = getenv('SITE_URL') ?: '';
if ($siteUrl === '') {
    $host = $_SERVER['HTTP_HOST'] ?? '';
    if ($host !== '') {
        $isLocalHost = preg_match('/^(localhost|127\.0\.0\.1|\[::1\])(?::\d+)?$/', $host) === 1;
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $canonicalHost = $isLocalHost ? $host : 'www.' . preg_replace('/^www\./i', '', $host);
        $siteUrl = ($isLocalHost ? $scheme : 'https') . '://' . $canonicalHost;
    } else {
        $siteUrl = 'https://www.liveintel.com';
    }
}

$siteUrl = rtrim($siteUrl, '/');

$escape = static function (string $value): string {
    return htmlspecialchars($value, ENT_XML1 | ENT_COMPAT, 'UTF-8');
};

$seenPaths = [];

header('Content-Type: application/xml; charset=UTF-8');
header('X-Robots-Tag: noindex, follow');

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

foreach ($routes as $route) {
    if (empty($route['includeInSitemap']) || empty($route['path'])) {
        continue;
    }

    $path = '/' . ltrim((string) $route['path'], '/');
    if (isset($seenPaths[$path])) {
        continue;
    }
    $seenPaths[$path] = true;

    echo "  <url>\n";
    echo '    <loc>' . $escape($siteUrl . $path) . "</loc>\n";

    if (!empty($route['lastmod'])) {
        echo '    <lastmod>' . $escape((string) $route['lastmod']) . "</lastmod>\n";
    }

    if (!empty($route['changefreq'])) {
        echo '    <changefreq>' . $escape((string) $route['changefreq']) . "</changefreq>\n";
    }

    if (!empty($route['priority'])) {
        echo '    <priority>' . $escape((string) $route['priority']) . "</priority>\n";
    }

    echo "  </url>\n";
}

echo "</urlset>\n";
