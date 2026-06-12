<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$viewsDir = __DIR__ . '/resources/views/pages';
$files = glob($viewsDir . '/*.blade.php');

$countTexts = 0;
$countLogos = 0;

foreach ($files as $file) {
    $html = file_get_contents($file);
    if (empty($html) || filesize($file) < 500) continue;
    
    $originalHtml = $html;

    // 1. Text Replacements
    $html = preg_replace('/Online\s*Legal\s*India/i', 'Foundida', $html);
    $html = preg_replace('/OnlineLegalIndia/i', 'Foundida', $html);
    $html = preg_replace('/onlinelegalindia\.com/i', 'foundida.com', $html);
    // There are some places with "FastInfo Legal Services Pvt Ltd." - let's keep it or replace? The user said "our company name foundida", let's replace the official company name string in the JSON-LD too.
    $html = preg_replace('/FastInfo Legal Services Pvt Ltd\.?/i', 'Foundida', $html);
    $html = str_replace('info@onlinelegalindia.com', 'info@foundida.com', $html);

    // 2. Logo Replacements
    // Known logos:
    // logo-cd-odr1.svg
    // footer-logo.png
    // onlinelegalindia-logo.webp
    // alternative-contact-popup-logo.webp
    $html = preg_replace('/logo-cd-odr1\.svg/i', 'foundida_logo.png', $html);
    $html = preg_replace('/footer-logo\.png/i', 'foundida_logo.png', $html);
    $html = preg_replace('/onlinelegalindia-logo\.webp/i', 'foundida_logo.png', $html);
    $html = preg_replace('/alternative-contact-popup-logo\.webp/i', 'foundida_logo.png', $html);
    $html = preg_replace('/logo6-1\.svg/i', 'foundida_logo.png', $html);
    
    // Also change alt text
    $html = preg_replace('/alt="Online Legal India"/i', 'alt="Foundida"', $html);

    if ($html !== $originalHtml) {
        file_put_contents($file, $html);
        $countTexts++;
    }
}

echo "Successfully rebranded text and logos in $countTexts files.\n";
