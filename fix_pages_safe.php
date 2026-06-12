<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$viewsDir = __DIR__ . '/resources/views/pages';
$files = glob($viewsDir . '/*.blade.php');

$count = 0;

foreach ($files as $file) {
    $html = file_get_contents($file);
    if (empty($html) || filesize($file) < 500) {
        continue;
    }
    
    $originalHtml = $html;

    // 1. Remove base href
    $html = str_replace('<base href="https://www.onlinelegalindia.com/">', '', $html);
    $html = str_replace('<base href="https://www.onlinelegalindia.com/"/>', '', $html);
    
    // 2. Fix JSON-LD syntax for Blade
    $html = str_replace('"@context"', '"@@context"', $html);
    $html = str_replace('"@type"', '"@@type"', $html);

    // 3. Asset links replacement using safe preg_replace
    $newHtml = preg_replace('/(href|src)="https?:\/\/(?:www\.)?onlinelegalindia\.com\/assets\/([^"]+)"/i', '$1="{{ asset(\'assets/$2\') }}"', $html);
    if ($newHtml !== null) $html = $newHtml;
    
    $newHtml = preg_replace('/(href|src)="\/assets\/([^"]+)"/i', '$1="{{ asset(\'assets/$2\') }}"', $html);
    if ($newHtml !== null) $html = $newHtml;

    // 4. Other onlinelegalindia.com links -> Local routes (Fallback: '#' if we don't map perfectly yet, but better to keep relative URL)
    $newHtml = preg_replace('/href="https?:\/\/(?:www\.)?onlinelegalindia\.com\/(services\/[^"]*)"/i', 'href="/$1"', $html);
    if ($newHtml !== null) $html = $newHtml;

    $newHtml = preg_replace('/href="https?:\/\/(?:www\.)?onlinelegalindia\.com\/?([^"]*)"/i', 'href="/$1"', $html);
    if ($newHtml !== null) $html = $newHtml;
    
    // Fix canonical
    $newHtml = preg_replace('/<link rel="canonical" href="[^"]+" \/>/i', '<link rel="canonical" href="{{ url()->current() }}" />', $html);
    if ($newHtml !== null) $html = $newHtml;
    
    // Fix og:url
    $newHtml = preg_replace('/<meta property="og:url" content="[^"]+" \/>/i', '<meta property="og:url" content="{{ url()->current() }}" />', $html);
    if ($newHtml !== null) $html = $newHtml;

    // Save only if changes were made and content is not wiped out
    if ($html !== $originalHtml && !empty($html) && strlen($html) > 500) {
        file_put_contents($file, $html);
        $count++;
    }
}

echo "Successfully fixed links and paths in $count files.\n";
