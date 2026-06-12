<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$indexFile = __DIR__ . '/resources/views/pages/index.blade.php';
$html = file_get_contents($indexFile);

// 1. Replace Saurabh Shukla / Celebrity Avatar with the new Business Service Hero
$html = str_replace(
    "asset('assets/images/home-modification-new/about-saurabh-shukla-new.webp')",
    "asset('assets/images/business_service_hero.png')",
    $html
);

// 2. Replace Service Card Images
// This targets the specific folder paths used for the stock card images
$html = preg_replace(
    "/asset\('assets\/images\/home-modification\/[a-zA-Z0-9_-]+\.webp'\)/",
    "asset('assets/images/modern_card_bg.png')",
    $html
);

$html = preg_replace(
    "/asset\('assets\/images\/home-modification-new\/[a-zA-Z0-9_-]+\.webp'\)/",
    "asset('assets/images/modern_card_bg.png')",
    $html
);

file_put_contents($indexFile, $html);
echo "Image paths updated in index.blade.php successfully.\n";
