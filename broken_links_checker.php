<?php

$viewsDir = __DIR__ . '/resources/views/pages';
$publicDir = __DIR__ . '/public';

$files = glob($viewsDir . '/*.blade.php');
$brokenLinks = [];

foreach ($files as $file) {
    $content = file_get_contents($file);
    $pageName = basename($file);
    
    // Match asset('...')
    preg_match_all('/asset\([\'"]([^\'"]+)[\'"]\)/i', $content, $matches);
    
    foreach ($matches[1] as $assetPath) {
        $fullPath = $publicDir . '/' . ltrim($assetPath, '/');
        
        // Remove query strings if any (e.g., app.css?v=1)
        $cleanPath = preg_replace('/[?#].*$/', '', $fullPath);
        
        if (!file_exists($cleanPath)) {
            if (!isset($brokenLinks[$pageName])) {
                $brokenLinks[$pageName] = [];
            }
            // avoid duplicates
            if (!in_array($assetPath, $brokenLinks[$pageName])) {
                $brokenLinks[$pageName][] = $assetPath;
            }
        }
    }
}

$report = "# Broken Asset Links Report\n\n";

if (empty($brokenLinks)) {
    $report .= "🎉 Fantastic! There are NO broken CSS, JS, or Image links. All `asset()` calls map to existing files.\n";
} else {
    $report .= "The following files contain references to assets that do not exist in the `public/` directory:\n\n";
    foreach ($brokenLinks as $page => $links) {
        $report .= "### `{$page}`\n";
        foreach ($links as $link) {
            $report .= "- ❌ Missing: `{$link}`\n";
        }
        $report .= "\n";
    }
}

file_put_contents(__DIR__ . '/broken_links_report.md', $report);

echo "Broken links check completed. Found issues in " . count($brokenLinks) . " pages.\n";
