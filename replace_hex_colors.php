<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$dirs = [
    __DIR__ . '/resources/views/pages',
    __DIR__ . '/public/assets/css'
];

// Target new colors
$navy = '#0D1B3D';
$emerald = '#1B5E3A';

// Old colors to replace
$toNavy = [
    '#f06906', '#CE7905', '#ff6800', '#e87515', '#d3531a', '#ffab6d', // Oranges
    '#215585', '#004d8c', '#121f2f', '#385067', '#1c5c96', '#2e363a', // Blues
    '#337ab7', '#5472d2', '#4cadc9', '#5aa1e3'
];

$toEmerald = [
    '#18ba60', '#76c13e', '#008000', '#42a239', '#5cb85c', '#75d69c', '#6dab3c'
];

$count = 0;

foreach ($dirs as $dir) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile() && in_array($file->getExtension(), ['php', 'css'])) {
            $content = file_get_contents($file->getPathname());
            $original = $content;
            
            // Case-insensitive replace for hex colors
            foreach ($toNavy as $old) {
                $content = str_ireplace($old, $navy, $content);
            }
            foreach ($toEmerald as $old) {
                $content = str_ireplace($old, $emerald, $content);
            }
            
            if ($content !== $original) {
                file_put_contents($file->getPathname(), $content);
                $count++;
            }
        }
    }
}

echo "Successfully replaced old hex colors with Navy ($navy) and Emerald ($emerald) in $count files.\n";
