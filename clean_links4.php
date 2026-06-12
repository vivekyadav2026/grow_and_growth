<?php

$viewsDir = __DIR__ . '/resources/views/pages';
$bladeFiles = glob($viewsDir . '/*.blade.php');
$totalReplaced = 0;

foreach ($bladeFiles as $bladePath) {
    $content = file_get_contents($bladePath);
    $originalContent = $content;

    // Fix hidden input landing_uri that still points to old domain
    $content = preg_replace(
        '/(<input[^>]*id="landing_uri"[^>]*value=")https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^"]*(")/i',
        '${1}{{ url()->current() }}${2}',
        $content
    );

    // Fix window.location.href = "https://www.onlinelegalindia.com/payment/..."
    // Point to # since this is the payment gateway which won't work anyway
    $content = preg_replace(
        '/window\.location(?:\.href)?\s*=\s*"https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^"]*";/',
        'window.location.href = "/";',
        $content
    );
    $content = preg_replace(
        "/window\.location(?:\.href)?\s*=\s*'https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^']*';/",
        "window.location.href = '/';",
        $content
    );

    // Fix commented-out window.location lines that have the domain (just leave them or fix)
    $content = preg_replace(
        "/\/\/\s*window\.location(?:\.href)?\s*=\s*\"https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^\"]*\";/",
        '// window.location.href = "/";',
        $content
    );

    // Fix trustpilot evaluate link
    $content = preg_replace(
        '/window\.location\.href\s*=\s*"https?:\/\/www\.trustpilot\.com\/evaluate\/onlinelegalindia[^"]*"/',
        'window.location.href = "#"',
        $content
    );
    $content = preg_replace(
        "///\s*window\.location\.href\s*=\s*\"https?:\/\/www\.trustpilot\.com\/evaluate\/onlinelegalindia[^\"]*\"/",
        '// window.location.href = "#"',
        $content
    );

    if ($content !== $originalContent) {
        file_put_contents($bladePath, $content);
        $totalReplaced++;
        echo "Pass 4 Cleaned: " . basename($bladePath) . "\n";
    }
}

echo "\nPass 4 Done! Files cleaned: $totalReplaced\n";
