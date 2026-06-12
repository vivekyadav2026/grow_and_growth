<?php

$publicDir = __DIR__ . '/public/assets';
$viewsDir = __DIR__ . '/resources/views/pages';

// 1. Scan and rename all files in public/assets/*
$files = [];
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($publicDir));
foreach ($iterator as $fileinfo) {
    if ($fileinfo->isFile()) {
        $files[] = $fileinfo->getPathname();
    }
}

$renameMap = []; // oldAssetPath => newAssetPath

foreach ($files as $oldPath) {
    $dir = dirname($oldPath);
    $filename = basename($oldPath);
    $newFilename = $filename;

    // Remove .download suffix
    if (str_ends_with($newFilename, '.download')) {
        $newFilename = substr($newFilename, 0, -9); // remove .download
    }
    // Convert .txt inside vendor to .js (these are tracking scripts usually)
    if (str_ends_with($newFilename, '.txt') && strpos($dir, 'vendor') !== false) {
        $newFilename = substr($newFilename, 0, -4) . '.js';
    }
    // Convert .php inside vendor to .js (e.g. captcha_12.php which is just a script response)
    if (str_ends_with($newFilename, '.php') && strpos($dir, 'vendor') !== false) {
        $newFilename = substr($newFilename, 0, -4) . '.js';
    }
    // Fix weird CSS names like all.min_1.css -> all-1.min.css
    if (strpos($newFilename, '_') !== false && strpos($dir, 'css') !== false) {
        $newFilename = str_replace(['_1.css', '_2.css'], ['-1.css', '-2.css'], $newFilename);
    }
    
    // Also, some files end in a dot like `17495169.` or `js.`.
    // The previous broken link report showed they didn't even copy! So they don't exist in $files.
    // That's fine, we are only renaming existing files.

    if ($newFilename !== $filename) {
        $newPath = $dir . '/' . $newFilename;
        rename($oldPath, $newPath);
        
        // Compute relative asset paths for Blade templates
        $oldAssetPath = str_replace('\\', '/', str_replace(__DIR__ . '/public/', '', $oldPath));
        $newAssetPath = str_replace('\\', '/', str_replace(__DIR__ . '/public/', '', $newPath));
        
        $renameMap[$oldAssetPath] = $newAssetPath;
        echo "Renamed: $oldAssetPath -> $newAssetPath\n";
    }
}

// 2. Update Blade templates
if (!empty($renameMap)) {
    $bladeFiles = glob($viewsDir . '/*.blade.php');
    foreach ($bladeFiles as $bladePath) {
        $content = file_get_contents($bladePath);
        $modified = false;
        
        foreach ($renameMap as $old => $new) {
            // we search for asset('old') and replace with asset('new')
            // It might be single or double quotes
            $search1 = "asset('{$old}')";
            $replace1 = "asset('{$new}')";
            if (strpos($content, $search1) !== false) {
                $content = str_replace($search1, $replace1, $content);
                $modified = true;
            }
            
            $search2 = 'asset("' . $old . '")';
            $replace2 = 'asset("' . $new . '")';
            if (strpos($content, $search2) !== false) {
                $content = str_replace($search2, $replace2, $content);
                $modified = true;
            }
        }
        
        if ($modified) {
            file_put_contents($bladePath, $content);
        }
    }
    echo "Updated Blade templates successfully.\n";
} else {
    echo "No files needed renaming.\n";
}

