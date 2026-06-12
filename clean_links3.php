<?php

$viewsDir = __DIR__ . '/resources/views/pages';
$bladeFiles = glob($viewsDir . '/*.blade.php');
$totalReplaced = 0;

foreach ($bladeFiles as $bladePath) {
    $content = file_get_contents($bladePath);
    $originalContent = $content;

    // Fix Google Play Store app link that has onlinelegalindia in the app ID — just remove it or replace
    $content = preg_replace(
        '/href="https:\/\/play\.google\.com\/store\/apps\/details\?id=onlinelegalindia[^"]*"/',
        'href="#"',
        $content
    );
    $content = preg_replace(
        '/href="https:\/\/apps\.apple\.com\/[^"]*onlinelegalindia[^"]*"/',
        'href="#"',
        $content
    );

    // Fix Trustpilot review links for old domain
    $content = preg_replace(
        '/href="https:\/\/www\.trustpilot\.com\/review\/onlinelegalindia[^"]*"/',
        'href="#"',
        $content
    );

    // Fix JavaScript AJAX URLs pointing to old domain backend
    $content = preg_replace(
        "/url:\s*'https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^']*'/",
        "url: '#'",
        $content
    );
    $content = preg_replace(
        '/url:\s*"https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^"]*"/',
        'url: "#"',
        $content
    );

    // Fix cookie domain references in JavaScript
    $content = preg_replace(
        '/domain=onlinelegalindia\.(?:com|in)/',
        'domain=localhost',
        $content
    );

    // Fix commented-out script tags with old domain
    $content = preg_replace(
        '/<!--\s*<script[^>]*onlinelegalindia\.(?:com|in)[^>]*><\/script>\s*-->/',
        '',
        $content
    );

    // Remove any remaining plain text references in comments
    $content = preg_replace(
        '/<!--[^>]*onlinelegalindia\.(?:com|in)[^>]*-->/',
        '',
        $content
    );

    if ($content !== $originalContent) {
        file_put_contents($bladePath, $content);
        $totalReplaced++;
        echo "Pass 3 Cleaned: " . basename($bladePath) . "\n";
    }
}

echo "\nPass 3 Done! Files cleaned: $totalReplaced\n";
