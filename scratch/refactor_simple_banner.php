<?php

$file = 'resources/views/pages/index.blade.php';
$content = file_get_contents($file);

// Find start point: The wrapper div of the old banner
$startStr = '<div class="row" style="margin-right: 0px; margin-left: 0px;">';
$startPos = strpos($content, $startStr);

if ($startPos === false) {
    echo "Could not find start point.\n";
    exit;
}

// Find end point: The beginning of the About section right below the banner
$endStr = '<section class="about_section_new_modification_block_new">';
$endPos = strpos($content, $endStr, $startPos);

if ($endPos === false) {
    echo "Could not find end point.\n";
    exit;
}

$beforeContent = substr($content, 0, $startPos);
$afterContent = substr($content, $endPos);

$newBanner = <<<HTML

<!-- GLOBAL PREMIUM SIMPLE CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/premium-simple.css') }}?v=1.0">

<section class="premium-simple-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-pill">
                    <span class="new-badge">New</span> Platform Version 2.0 Live
                </div>
                <h1 class="hero-minimal-title">
                    Build your business.<br>
                    <span class="text-gray">Zero friction.</span>
                </h1>
                <p class="hero-minimal-subtitle">
                    The ultra-fast, radically transparent platform for corporate registration, tax filing, and legal compliance. Over 500,000 founders trust us to handle the complexity.
                </p>
                <div class="hero-actions">
                    <a href="#services" class="btn-minimal-primary">Get Started Today</a>
                    <a href="/contact" class="btn-minimal-secondary">Book Consultation</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual-minimal">
                    <!-- Clean dashboard or abstract mockup (Using placeholder for now) -->
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Platform Dashboard">
                </div>
            </div>
        </div>
    </div>
</section>

HTML;

$finalContent = $beforeContent . $newBanner . "\n" . $afterContent;
file_put_contents($file, $finalContent);

echo "Premium Simple Banner injected successfully.\n";
