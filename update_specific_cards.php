<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$indexFile = __DIR__ . '/resources/views/pages/index.blade.php';
$html = file_get_contents($indexFile);

$services = [
    'Trademark Registration Online' => 'trademark_icon.png',
    'ISO Registration' => 'iso_icon.png',
    'GST Registration Services' => 'gst_icon.png',
    'Company Registration' => 'company_icon.png',
    'FSSAI [Food License]' => 'fssai_icon.png',
    'Import Export Code' => 'import_export_icon.png'
];

foreach ($services as $title => $icon) {
    // Find the position of the title
    $pos = strpos($html, $title);
    if ($pos !== false) {
        // Look backwards to find the nearest modern_card_bg.png
        $imgPos = strrpos(substr($html, 0, $pos), 'modern_card_bg.png');
        if ($imgPos !== false) {
            // Replace modern_card_bg.png with home-modification-new/$icon
            $html = substr_replace($html, 'home-modification-new/' . $icon, $imgPos, strlen('modern_card_bg.png'));
            echo "Replaced image for: $title\n";
        }
    }
}

file_put_contents($indexFile, $html);
echo "Specific card images updated successfully.\n";
