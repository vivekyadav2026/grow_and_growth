<?php

$publicDir = __DIR__ . '/public/assets';
$viewsDir = __DIR__ . '/resources/views/pages';

// 1. Build a map of all available assets by basename
$assetMap = [];
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($publicDir));
foreach ($iterator as $fileinfo) {
    if ($fileinfo->isFile()) {
        $basename = $fileinfo->getFilename();
        $relativePath = str_replace('\\', '/', str_replace(__DIR__ . '/public/', '', $fileinfo->getPathname()));
        $assetMap[$basename] = $relativePath;
    }
}

// 2. Scan and fix Blade templates
$bladeFiles = glob($viewsDir . '/*.blade.php');
$totalReplaced = 0;

foreach ($bladeFiles as $bladePath) {
    $content = file_get_contents($bladePath);
    $modified = false;

    // Regex to find src="..." or href="..." containing "_files/"
    $pattern = '/(src|href)=["\']([^"\']*_files\/([^"\']+))["\']/';

    $content = preg_replace_callback($pattern, function($matches) use ($assetMap, &$modified, &$totalReplaced) {
        $attr = $matches[1]; // src or href
        $fullPath = $matches[2]; // e.g. ./some_files/logo.png
        $filename = basename(urldecode($matches[3])); // e.g. logo.png

        // Sometimes files in HTML are like f.txt but we renamed them to f.js!
        // So let's check variations if direct match fails.
        $searchNames = [
            $filename,
            preg_replace('/\.txt$/', '.js', $filename),
            preg_replace('/\.php$/', '.js', $filename),
            preg_replace('/\.download$/', '', $filename)
        ];
        
        // Handle names like all.min_1.css -> all-1.min.css
        if (strpos($filename, '_') !== false) {
            $searchNames[] = str_replace(['_1.css', '_2.css'], ['-1.css', '-2.css'], $filename);
            $searchNames[] = str_replace(['_1.js', '_2.js'], ['-1.js', '-2.js'], $filename);
        }

        foreach ($searchNames as $searchName) {
            if (isset($assetMap[$searchName])) {
                $newAssetPath = $assetMap[$searchName];
                $modified = true;
                $totalReplaced++;
                return $attr . '="{{ asset(\'' . $newAssetPath . '\') }}"';
            }
        }

        // If not found, return original
        return $matches[0];
    }, $content);

    // Also look for background-image: url('..._files/...')
    $patternBg = '/url\(["\']?([^"\')]*_files\/([^"\')]+))["\']?\)/';
    $content = preg_replace_callback($patternBg, function($matches) use ($assetMap, &$modified, &$totalReplaced) {
        $fullPath = $matches[1];
        $filename = basename(urldecode($matches[2]));
        
        if (isset($assetMap[$filename])) {
            $newAssetPath = $assetMap[$filename];
            $modified = true;
            $totalReplaced++;
            return 'url("{{ asset(\'' . $newAssetPath . '\') }}")';
        }
        return $matches[0];
    }, $content);

    if ($modified) {
        file_put_contents($bladePath, $content);
        echo "Updated " . basename($bladePath) . "\n";
    }
}

echo "Total replacements made: $totalReplaced\n";
