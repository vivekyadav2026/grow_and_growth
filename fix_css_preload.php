<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$viewsDir = __DIR__ . '/resources/views/pages';
$files = glob($viewsDir . '/*.blade.php');

$count = 0;

foreach ($files as $file) {
    $html = file_get_contents($file);
    if (empty($html) || filesize($file) < 500) continue;
    
    $originalHtml = $html;

    // Convert <link rel="preload" as="style" onload="this.rel='stylesheet'" href="..."> to <link rel="stylesheet" href="...">
    $html = preg_replace('/<link[^>]+rel="preload"[^>]+as="style"[^>]+onload="[^"]+"[^>]*href="([^"]+)"[^>]*>/i', '<link rel="stylesheet" href="$1">', $html);
    $html = preg_replace("/<link[^>]+rel='preload'[^>]+as='style'[^>]+onload='[^']+'[^>]*href='([^']+)'[^>]*>/i", "<link rel='stylesheet' href='$1'>", $html);
    
    // Also catch variants where href comes before onload
    $html = preg_replace('/<link[^>]+href="([^"]+)"[^>]+rel="preload"[^>]+as="style"[^>]+onload="[^"]+"[^>]*>/i', '<link rel="stylesheet" href="$1">', $html);

    // Another variant
    $html = preg_replace('/<link[^>]+rel="preload"[^>]+href="([^"]+)"[^>]+as="style"[^>]+onload="[^"]+"[^>]*>/i', '<link rel="stylesheet" href="$1">', $html);
    
    // Also check for lazyload images, sometimes they don't load if the JS is broken
    // Actually, leave lazyload as it is for now unless they are crucial.

    if ($html !== $originalHtml) {
        file_put_contents($file, $html);
        $count++;
    }
}

echo "Successfully fixed preload CSS links in $count files.\n";
