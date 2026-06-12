<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$indexFile = __DIR__ . '/resources/views/pages/index.blade.php';
$html = file_get_contents($indexFile);

$services = [
    '/ISO\s*Registration/' => 'iso_icon.png',
    '/Company\s*Registration/' => 'company_icon.png',
    '/FSSAI\s*Registration/' => 'fssai_icon.png',
    '/Import\s*Export\s*Code\s*Registration/' => 'import_export_icon.png'
];

foreach ($services as $pattern => $icon) {
    if (preg_match($pattern, $html, $matches, PREG_OFFSET_CAPTURE)) {
        $pos = $matches[0][1];
        // Look backwards to find the nearest modern_card_bg.png
        $imgPos = strrpos(substr($html, 0, $pos), 'modern_card_bg.png');
        if ($imgPos !== false) {
            // Replace modern_card_bg.png with home-modification-new/$icon
            $html = substr_replace($html, 'home-modification-new/' . $icon, $imgPos, strlen('modern_card_bg.png'));
            echo "Replaced image for pattern: $pattern\n";
        }
    }
}

file_put_contents($indexFile, $html);
echo "Specific card images updated successfully.\n";
