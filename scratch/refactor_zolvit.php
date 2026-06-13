<?php

$file = 'resources/views/pages/index.blade.php';
$content = file_get_contents($file);

// Find start point
$startStr = '<section class="zolvit-hero">';
$startPos = strpos($content, $startStr);

if ($startPos === false) {
    echo "Could not find start point.\n";
    exit;
}

// Find end point: The beginning of the About section right below
$endStr = '<section class="about_section_new_modification_block_new">';
$endPos = strpos($content, $endStr, $startPos);

if ($endPos === false) {
    echo "Could not find end point.\n";
    exit;
}

$beforeContent = substr($content, 0, $startPos);
$afterContent = substr($content, $endPos);

$newBanner = <<<HTML

<!-- GLOBAL ZOLVIT CSS v4.0 (Cache Busting) -->
<link rel="stylesheet" href="{{ asset('assets/css/zolvit-theme.css') }}?v=4.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- 1. BLUE HERO SECTION -->
<section class="zolvit-hero">
    <div class="zv-container">
        
        <div class="zv-top-review">
            <img src="{{ asset('assets/images/trademark-search-block/legal-corporate-CC/google-rating-new.webp') }}" alt="Google" style="height: 20px; border-radius: 50%;">
            <span class="zv-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <span>4.8/5 (20k+ Reviews)</span>
        </div>
        
        <h1 class="zv-title">Build Your Business with Passion.<br>Run It Smarter with Us.</h1>
        <p class="zv-subtitle">Simplifying Legal, Tax, and Compliance, the AI-Driven Way. Trusted by millions.</p>
        
        <div class="zv-search-wrapper">
            <input type="text" class="zv-search-input" placeholder="Try 'GST Filing' or 'Trademark'">
            <button class="zv-search-btn"><i class="fas fa-search"></i></button>
        </div>
        
        <div class="zv-quick-links">
            <a href="/trademark-registration" class="zv-pill">Trademark Registration</a>
            <a href="/gst-registration" class="zv-pill">GST Registration</a>
            <a href="/company-registration" class="zv-pill">Company Registration</a>
            <a href="/contact" class="zv-pill">Lawyer Consultation</a>
        </div>
        
    </div>
</section>

<!-- 2. BULLETPROOF SVG CONVEX CURVE -->
<div class="hero-curve-divider">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path d="M0,120 C480,0 960,0 1440,120 Z" fill="#000000"></path>
    </svg>
</div>

<!-- 3. BLACK TRUST SECTION (Contains Cards + Trust Badges) -->
<section class="zv-trust-section">
    
    <!-- The 3 Overlapping Cards (Pulled up via negative margin) -->
    <div class="zv-cards-wrapper">
        <div class="zv-card zv-card-left">
            <h3>Start Your Business <i class="fas fa-caret-right" style="color: var(--zv-emerald);"></i></h3>
            <p>Launch your business effortlessly with expert-guided incorporation, registrations, and licensing.</p>
        </div>
        
        <div class="zv-card zv-card-center">
            <h3>Manage Your Business <i class="fas fa-caret-right" style="color: var(--zv-emerald);"></i></h3>
            <p>Stay compliant and in control with automated tax filings, smart dashboards, and real-time alerts.</p>
        </div>
        
        <div class="zv-card zv-card-right">
            <h3>Protect Your Business <i class="fas fa-caret-right" style="color: var(--zv-emerald);"></i></h3>
            <p>Secure your brand with trademark registration, contracts, and legal support from trusted experts.</p>
        </div>
    </div>

    <!-- The Trust Badges -->
    <div class="zv-trust-flex">
        <div class="zv-trust-quote">
            <p>"Registration, Filing, and Legal help in one app just makes sense"</p>
            <span>Review By <strong>Sanjivani Awale</strong> on Google</span>
        </div>
        
        <div class="zv-laurel-badge">
            <i class="fas fa-leaf" style="color: var(--zv-yellow); font-size: 24px;"></i>
            <div class="zv-stars" style="margin-top: 10px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p style="margin: 5px 0; font-size: 12px;">20,000+ Reviews</p>
            <h4>VOTED NO 1 LEGAL<br>PLATFORM IN INDIA</h4>
            <p style="font-size: 14px;">2026</p>
        </div>
        
        <div class="zv-google-badge">
            <img src="{{ asset('assets/images/trademark-search-block/legal-corporate-CC/google-rating-new.webp') }}" alt="Google" style="width: 60px;">
            <div class="zv-google-badge-text">
                <p style="margin: 0; font-weight: 600;">Google Reviews</p>
                <div class="zv-stars" style="font-size: 14px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.8/5</div>
                <p style="margin: 0; font-size: 12px; color: #94A3B8;">20k+ Happy Reviews</p>
            </div>
        </div>
    </div>
    
</section>

HTML;

$finalContent = $beforeContent . $newBanner . "\n" . $afterContent;
file_put_contents($file, $finalContent);

echo "Navy/Emerald HTML structure injected successfully.\n";
