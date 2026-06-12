<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$viewsDir = __DIR__ . '/resources/views/pages';
$files = glob($viewsDir . '/*.blade.php');

$count = 0;

$assetDirs = ['css', 'js', 'images', 'fonts', 'vendor', 'icon'];

foreach ($files as $file) {
    $html = file_get_contents($file);
    if (empty($html) || filesize($file) < 500) continue;
    
    $originalHtml = $html;

    foreach ($assetDirs as $dir) {
        // Fix relative paths like src="/js/script.js" -> src="{{ asset('assets/js/script.js') }}"
        $html = preg_replace_callback(
            '/(href|src|data-src|data-bg)="\/(' . $dir . '\/[^"]+)"/i',
            function ($matches) {
                // If it already contains asset(, skip it
                if (strpos($matches[0], 'asset(') !== false) return $matches[0];
                return $matches[1] . '="{{ asset(\'assets/' . $matches[2] . '\') }}"';
            },
            $html
        );
        
        // Fix single quote variants
        $html = preg_replace_callback(
            "/(href|src|data-src|data-bg)='\/(" . $dir . "\/[^']+)'/i",
            function ($matches) {
                if (strpos($matches[0], 'asset(') !== false) return $matches[0];
                return $matches[1] . "='{{ asset(\"assets/" . $matches[2] . "\") }}'";
            },
            $html
        );

        // Fix absolute onlinelegalindia.com paths
        $html = preg_replace_callback(
            '/(href|src|data-src|data-bg)="https?:\/\/(?:www\.)?onlinelegalindia\.com\/(' . $dir . '\/[^"]+)"/i',
            function ($matches) {
                if (strpos($matches[0], 'asset(') !== false) return $matches[0];
                return $matches[1] . '="{{ asset(\'assets/' . $matches[2] . '\') }}"';
            },
            $html
        );
        
        $html = preg_replace_callback(
            "/(href|src|data-src|data-bg)='https?:\/\/(?:www\.)?onlinelegalindia\.com\/(" . $dir . "\/[^']+)'/i",
            function ($matches) {
                if (strpos($matches[0], 'asset(') !== false) return $matches[0];
                return $matches[1] . "='{{ asset(\"assets/" . $matches[2] . "\") }}'";
            },
            $html
        );
    }
    
    // Also check for background-image: url('/images/...')
    $html = preg_replace_callback(
        '/url\([\'"]?\/(' . implode('|', $assetDirs) . ')\/([^"\'\)]+)[\'"]?\)/i',
        function ($matches) {
            return "url('{{ asset('assets/" . $matches[1] . "/" . $matches[2] . "') }}')";
        },
        $html
    );

    if ($html !== $originalHtml) {
        file_put_contents($file, $html);
        $count++;
    }
}

echo "Successfully mapped asset links in $count files.\n";
