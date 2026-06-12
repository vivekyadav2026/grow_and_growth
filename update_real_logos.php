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

    // Replace the incorrectly linked logo with the real one
    $html = str_replace("asset('assets/images/foundida_logo.png')", "asset('assets/images/logos/Foundida_Logo_Main.webp')", $html);
    $html = str_replace('images/foundida_logo.png', 'images/logos/Foundida_Logo_Main.webp', $html);

    // Update Favicon
    $html = preg_replace('/href="[^"]*favicon\.ico"/i', 'href="{{ asset(\'assets/images/logos/Foundida_Favicon.ico\') }}"', $html);
    $html = preg_replace('/href=\'[^\']*favicon\.ico\'/i', 'href="{{ asset(\'assets/images/logos/Foundida_Favicon.ico\') }}"', $html);
    
    // Sometimes old icons
    $html = str_replace("asset('assets/icon/favicon.ico')", "asset('assets/images/logos/Foundida_Favicon.ico')", $html);

    if ($html !== $originalHtml) {
        file_put_contents($file, $html);
        $count++;
    }
}

echo "Successfully updated logos to Foundida_Logo_Main.webp in $count files.\n";

// Remove any file with onlinelegalindia in the name
$imagesDir = __DIR__ . '/public/assets/images';
$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($imagesDir), RecursiveIteratorIterator::SELF_FIRST);
$deleted = 0;
foreach($objects as $name => $object){
    if (!$object->isDir()) {
        if (stripos($object->getFilename(), 'onlinelegalindia') !== false || stripos($object->getFilename(), 'online-legal-india') !== false) {
            unlink($object->getPathname());
            echo "Deleted: " . $object->getPathname() . "\n";
            $deleted++;
        }
    }
}
echo "Deleted $deleted old onlinelegalindia images.\n";
