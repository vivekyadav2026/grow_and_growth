<?php

$viewsDir = __DIR__ . '/resources/views/pages';
$bladeFiles = glob($viewsDir . '/*.blade.php');

$replacements = [
    '"@context"' => '"@@context"',
    '"@type"' => '"@@type"',
];

foreach ($bladeFiles as $bladePath) {
    $content = file_get_contents($bladePath);
    $modified = false;

    foreach ($replacements as $search => $replace) {
        if (strpos($content, $search) !== false) {
            $content = str_replace($search, $replace, $content);
            $modified = true;
        }
    }

    if ($modified) {
        file_put_contents($bladePath, $content);
        echo "Updated " . basename($bladePath) . "\n";
    }
}

echo "All Blade templates fixed!\n";
