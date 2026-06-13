@extends('layouts.app')

@section('meta')
<title>Foundida: Registration, GST, Compliance & Audit</title>
<meta name="description" content="Foundida is India’s 1st & only platform for business registration, licences, compliance, GST, tax, audit, & legal (ODR) services—all under one roof.">
<meta name="keywords" content="Foundida">
<link rel="canonical" href="https://www.foundida.com/" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.foundida.com/">
<meta property="og:image" content="https://www.foundida.com/images/foundida-logo.webp">
<meta property="og:title" content="Foundida: Registration, GST, Compliance & Audit">
<meta property="og:site_name" content="Foundida">
<meta property="og:description" content="Foundida is India’s 1st & only platform for business registration, licences, compliance, GST, tax, audit, & legal (ODR) services—all under one roof.">
<meta property="og:locale" content="en-IN">
<script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": ["Organization"],
    "name": "Foundida",
    "alternateName": "FastInfo Legal Services Pvt Ltd.",
    "url": "https://www.foundida.com/",
    "logo": "https://www.foundida.com/images/logo-cd-odr1.svg",
    "image": "https://www.foundida.com/images/logo-cd-odr1.svg",
    "telephone": "+918069029400",
    "priceRange": "INR",

    "address": {
      "@@type": "PostalAddress",
      "streetAddress": "8th Floor, Kariwala Towers, J1-5, EP Block, Sector V",
      "addressLocality": "Bidhannagar",
      "addressRegion": "West Bengal",
      "postalCode": "700091",
      "addressCountry": "IN"
    },

    "geo": {
      "@@type": "GeoCoordinates",
      "latitude": "22.571227139440595",
      "longitude": "88.43629864232766"
    },

    "contactPoint": {
      "@@type": "ContactPoint",
      "email": "info@foundida.com",
      "contactType": "customer support",
      "areaServed": "IN",
      "availableLanguage": [
        "English",
        "Hindi",
        "Bengali",
        "Tamil",
        "Telugu",
        "Kannada"
      ]
    },

    "sameAs": [
      "https://www.facebook.com/Foundida/",
      "https://twitter.com/onlinelegalind",
      "https://www.instagram.com/foundida/",
      "https://www.linkedin.com/company/online-legal-india/",
      "https://www.youtube.com/c/Foundida"
    ]
  }
</script>
@endsection

@section('styles')
<!--      <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/solid.min.css"> -->
@endsection

@section('content')
<link rel="preload" as="style" onload="this.rel = 'stylesheet'" type="text/css" href="https://www.foundida.com/css/custom-home-modification.css?v=1.2">




<!-- GLOBAL PREMIUM SIMPLE CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/premium-simple.css') }}?v=1.0">


<!-- GLOBAL ZOLVIT CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/zolvit-theme.css') }}?v=3.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


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

<!-- About Section CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/about-section.css') }}?v=1.0">

<section class="foundida-about">
    <div class="container">
        <div class="row">

            <!-- LEFT: Founder Card + Stats -->
            <div class="col-md-5 fa-founder-col">

                <!-- Founder Card -->
                <div class="fa-founder-card">
                    <img src="{{ asset('assets/images/founder-avatar.png') }}" alt="Mr. Arjun Mehta - Founder & CEO" class="fa-founder-img">
                    <div class="fa-founder-info">
                        <p class="fa-founder-quote">"Our mission is to make legal and compliance services accessible, affordable, and effortless for every Indian entrepreneur."</p>
                        <h4 class="fa-founder-name">Mr. Arjun Mehta</h4>
                        <p class="fa-founder-title">Founder & CEO, Foundida</p>
                        <div class="fa-founder-badges">
                            <span class="fa-badge">Forbes 30 Under 30</span>
                            <span class="fa-badge">IIM Ahmedabad</span>
                            <span class="fa-badge">TEDx Speaker</span>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="fa-stats-row">
                    <div class="fa-stat-card">
                        <span class="fa-stat-number">5<span>L+</span></span>
                        <span class="fa-stat-label">Happy Clients</span>
                    </div>
                    <div class="fa-stat-card">
                        <span class="fa-stat-number">16<span>+</span></span>
                        <span class="fa-stat-label">Services</span>
                    </div>
                    <div class="fa-stat-card">
                        <span class="fa-stat-number">12<span>yr</span></span>
                        <span class="fa-stat-label">Experience</span>
                    </div>
                </div>

            </div>

            <!-- RIGHT: About Content -->
            <div class="col-md-7 fa-content-col">

                <div class="fa-eyebrow">About Foundida</div>

                <h2 class="fa-headline">
                    India's Most Trusted<br>
                    <span class="fa-accent">Legal & Compliance</span> Platform
                </h2>

                <p class="fa-description">
                    <strong>Foundida</strong> is a brand of FastInfo Legal Services Pvt. Ltd., registered under the Companies Act, 2013. We are India's <strong>1st &amp; only all-in-one platform</strong> offering business registration, GST &amp; tax, compliance, legal support, audit, and HR — all under one roof. Our panel of diligent professionals delivers expert-backed solutions to individuals, businesses, and corporates across India.
                </p>

                <div class="fa-features">
                    <div class="fa-feature-item">
                        <div class="fa-feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="fa-feature-text">
                            <h4>100% Secure</h4>
                            <p>Bank-level data security & confidentiality</p>
                        </div>
                    </div>
                    <div class="fa-feature-item">
                        <div class="fa-feature-icon"><i class="fas fa-users"></i></div>
                        <div class="fa-feature-text">
                            <h4>Expert Panel</h4>
                            <p>500+ CAs, CSs & Legal experts on board</p>
                        </div>
                    </div>
                    <div class="fa-feature-item">
                        <div class="fa-feature-icon"><i class="fas fa-clock"></i></div>
                        <div class="fa-feature-text">
                            <h4>On-Time Delivery</h4>
                            <p>Guaranteed timeline for every service</p>
                        </div>
                    </div>
                    <div class="fa-feature-item">
                        <div class="fa-feature-icon"><i class="fas fa-certificate"></i></div>
                        <div class="fa-feature-text">
                            <h4>ISO 9001:2015</h4>
                            <p>Certified for quality management systems</p>
                        </div>
                    </div>
                    <div class="fa-feature-item">
                        <div class="fa-feature-icon"><i class="fas fa-headset"></i></div>
                        <div class="fa-feature-text">
                            <h4>24/7 Support</h4>
                            <p>Dedicated support via call, chat & email</p>
                        </div>
                    </div>
                    <div class="fa-feature-item">
                        <div class="fa-feature-icon"><i class="fas fa-rupee-sign"></i></div>
                        <div class="fa-feature-text">
                            <h4>Lowest Prices</h4>
                            <p>No hidden charges, transparent pricing</p>
                        </div>
                    </div>
                </div>

                <div class="fa-cta-row">
                    <a href="/contact" class="fa-cta-primary">
                        Get Free Consultation <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="/about" class="fa-cta-secondary">
                        Learn More <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 
<section class=" home_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7 about">
                <h2>About Us</h2>
                <p>Foundida is a brand of FastInfo Legal Services Pvt. Ltd., registered under the
                    Companies Act, 2013.</p>
                <p class="about_seond_p">Our core panel consists of diligent professionals, all under one roof. They provide solution to all the individual, business person, corporate body and others for the issues faced by them in their everyday life.</p>
            </div>
            <div class="col-md-5">
                <div class="about_imgg">
                    <img src="https://www.foundida.com/images/home-modification/about-us.webp" alt="About Us" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="home_bottom_section">
    <div class="container">
        <div class="home_bottom_section_inner">
            <h2>Foundida is India’s 1st & only all-in-one platform, that provides business registration, licences, GST & tax, regulatory compliance, ODR-enabled legal support, audit, HR & payroll, all under one roof.</h2>
        </div>
</section> -->

<!-- Services Section CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/services-section.css') }}?v=1.0">

<section class="fd-services-sec">
    <div class="container">
        
        <!-- Section Header -->
        <div class="fd-srvc-header">
            <span class="fd-srvc-badge">
                <i class="fas fa-cubes"></i> Our Offerings
            </span>
            <h2 class="fd-srvc-title">
                Launch & Grow with <span>Expert Solutions</span>
            </h2>
            <p class="fd-srvc-subtitle">
                Quick, hassle-free online services for business registration, licensing, tax compliance, and smart legal support, tailored for Indian entrepreneurs.
            </p>
        </div>

        <!-- Category Filter Tabs -->
        <div class="fd-srvc-filters">
            <button class="fd-filter-btn active" data-filter="all">All Services</button>
            <button class="fd-filter-btn" data-filter="startups-reg">Startups & Registration</button>
            <button class="fd-filter-btn" data-filter="ip-growth">IP & Growth</button>
            <button class="fd-filter-btn" data-filter="legal-compliance">Legal & Compliance</button>
        </div>

        <!-- Service Cards Grid -->
        <div class="fd-services-grid">

            <!-- Card 1: Company Registration -->
            <div class="fd-service-card" data-category="startups-reg">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Startups</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/company-reg-service.png') }}" alt="Company Registration" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> End-to-end Support
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/company-registration/">Company Registration</a>
                    </h3>
                    <p class="fd-srvc-desc">We have professionals to support everything online on the ROC portal and relieve you of any burden. Click to learn.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/company-registration/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2: GST Registration -->
            <div class="fd-service-card" data-category="startups-reg">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Tax & GST</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/gst-tax-service.png') }}" alt="GST Registration" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> 100% Online Process
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/gst-online/">GST Registration</a>
                    </h3>
                    <p class="fd-srvc-desc">Foundida supports you to meet GST compliance and registrations for your business with professional assistance.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/gst-online/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: FSSAI Registration -->
            <div class="fd-service-card" data-category="startups-reg">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Food Business</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/company-reg-service.png') }}" alt="FSSAI Registration" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> Government License
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/fssai-registration/">FSSAI Registration</a>
                    </h3>
                    <p class="fd-srvc-desc">Register FSSAI with our support for certificates and licenses to run your food business flawlessly with perfect compliance.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/fssai-registration/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4: GeM Registration -->
            <div class="fd-service-card" data-category="startups-reg">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Government Portal</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/company-reg-service.png') }}" alt="GeM Registration" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> Sell to Govt
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/gem-registration/">GeM Registration</a>
                    </h3>
                    <p class="fd-srvc-desc">GeM enables businesses to sell products and services directly to government departments through a secure online marketplace.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/gem-registration/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5: Trademark Registration -->
            <div class="fd-service-card" data-category="ip-growth">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">IP & Protection</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/trademark-service.png') }}" alt="Trademark Registration" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> 1-2 Days Process
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/trademark-registration/">Trademark Registration</a>
                    </h3>
                    <p class="fd-srvc-desc">Register your trademark (brand name, logo, slogan, icon, etc.) from anywhere in India through our online registration assistance services.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/trademark-registration/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6: ISO Registration -->
            <div class="fd-service-card" data-category="ip-growth">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Quality Standards</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/trademark-service.png') }}" alt="ISO Certification" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> Boost Credibility
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/iso-certification">ISO Registration</a>
                    </h3>
                    <p class="fd-srvc-desc">Get your ISO Certification support from anywhere in India and enhance your business credibility with globally recognized standards.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/iso-certification" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 7: Import Export Code (IEC) -->
            <div class="fd-service-card" data-category="ip-growth">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Import Export</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/trademark-service.png') }}" alt="IEC Registration" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> 1-3 Days Delivery
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/online-iec-code-import-export-license/">Import Export Code</a>
                    </h3>
                    <p class="fd-srvc-desc">Get an IEC code from the Directorate General of Foreign Trade, Ministry of Commerce and Industry, Govt. of India, through our support.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/online-iec-code-import-export-license/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 8: Virtual CXO Services -->
            <div class="fd-service-card" data-category="ip-growth">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Management</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/company-reg-service.png') }}" alt="Virtual CXO Services" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> Scale Your Startup
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/virtual-cxo-services/">Virtual CXO Services</a>
                    </h3>
                    <p class="fd-srvc-desc">Virtual CXO leadership support to help startups and MSMEs decide faster, scale with confidence, and avoid costly growth mistakes.</p>
                    <div class="srvc-action">
                        <a href="https://www.foundida.com/services/virtual-cxo-services/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 9: Online Dispute Resolution (ODR) -->
            <div class="fd-service-card" data-category="legal-compliance">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Dispute Resolution</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/dispute-service.png') }}" alt="Online Dispute Resolution" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> Out of Court
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/online-dispute-resolution/">Online Dispute Resolution</a>
                    </h3>
                    <p class="fd-srvc-desc">Avoid courtroom stress by resolving disputes online with our professional ODR assistance, available anytime, anywhere.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/online-dispute-resolution/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 10: Consumer Dispute -->
            <div class="fd-service-card" data-category="legal-compliance">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Dispute Resolution</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/dispute-service.png') }}" alt="Consumer Dispute" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> Quick Legal Remedy
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/consumer-dispute-odr">Consumer Dispute</a>
                    </h3>
                    <p class="fd-srvc-desc">Say goodbye to long legal battles—Foundida assists you to quick and smart consumer dispute resolution, online.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/consumer-dispute-odr" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 11: Corporates Advisory -->
            <div class="fd-service-card" data-category="legal-compliance">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">Corporate Law</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/company-reg-service.png') }}" alt="Corporates" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> Expert Board Advisory
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/corporate-compliance-governance/">Corporate Services</a>
                    </h3>
                    <p class="fd-srvc-desc">Strategic Advisory and governance for Enterprises, Corporates & Institutional Businesses.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/corporate-compliance-governance/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 12: HR Compliance -->
            <div class="fd-service-card" data-category="legal-compliance">
                <div class="fd-srvc-img-wrapper">
                    <span class="fd-srvc-cat-badge">HR & Payroll</span>
                    <img class="fd-srvc-img" src="{{ asset('assets/images/gst-tax-service.png') }}" alt="HR Compliance" loading="lazy">
                </div>
                <div class="fd-srvc-info">
                    <div class="fd-srvc-meta">
                        <i class="far fa-clock"></i> Payroll & Compliance
                    </div>
                    <h3 class="fd-srvc-card-title">
                        <a href="https://www.foundida.com/services/hr-compliance/">HR Compliance</a>
                    </h3>
                    <p class="fd-srvc-desc">All-in-one HR software for payroll, compliance & team management. Automate tasks, save time & improve efficiency today.</p>
                    <div class="fd-srvc-action">
                        <a href="https://www.foundida.com/services/hr-compliance/" class="fd-srvc-btn">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom CTA -->
        <div class="fd-srvc-bottom-cta">
            <p>Need a custom solution or can't find what you are looking for?</p>
            <a href="https://www.foundida.com/contact-us" class="fd-srvc-cta-btn">
                Talk to a Legal Expert <i class="fas fa-headset"></i>
            </a>
        </div>

    </div>
</section>

<!-- Filter Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const filterBtns = document.querySelectorAll(".fd-filter-btn");
        const cards = document.querySelectorAll(".fd-service-card");

        filterBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                // Toggle active button class
                filterBtns.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");

                const category = btn.getAttribute("data-filter");

                cards.forEach(card => {
                    const cardCat = card.getAttribute("data-category");
                    if (category === "all" || cardCat === category) {
                        card.classList.remove("fd-hidden");
                        // Trigger fade in animation
                        card.style.opacity = "0";
                        card.style.transform = "scale(0.96)";
                        setTimeout(() => {
                            card.style.opacity = "1";
                            card.style.transform = "scale(1)";
                        }, 50);
                    } else {
                        card.classList.add("fd-hidden");
                    }
                });
            });
        });
    });
</script>

<!-- CEO Desk & Events Gallery Stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/css/ceo-events.css') }}?v=1.0">

<!-- From CEO's Desk Section -->
<section class="fd-ceo-desk-sec">
    <div class="container">
        <div class="fd-ceo-desk-card">
            <div class="fd-ceo-desk-img-wrapper">
                <img src="{{ asset('assets/images/founder-avatar.png') }}" alt="Mr. Arjun Mehta" class="fd-ceo-desk-img">
            </div>
            <div class="fd-ceo-desk-content">
                <span class="fd-ceo-desk-badge">From CEO's Desk</span>
                <blockquote class="fd-ceo-desk-quote">
                    "You don’t need MONEY to build your business empire, what you need is big dreams & a SHARP MIND! If you got it, try it."
                </blockquote>
                <div class="fd-ceo-desk-signature">
                    <span class="fd-ceo-desk-name">Mr. Arjun Mehta</span>
                    <span class="fd-ceo-desk-title">Founder & CEO, Foundida</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Redesigned Events Gallery Section -->
<section class="fd-events-sec">
    <div class="container">
        
        <!-- Section Header -->
        <div class="fd-events-header">
            <span class="fd-events-badge">
                <i class="fas fa-camera-retro"></i> Gallery
            </span>
            <h2 class="fd-events-title">
                Our <span>Key Milestones</span>
            </h2>
            <p class="fd-events-subtitle">
                A glimpse of our speaking engagements, corporate achievements, and national recognition.
            </p>
        </div>

        <!-- Events Grid -->
        <div class="fd-events-grid">
            
            <!-- Event 1: Businessman of the Year -->
            <div class="fd-event-card">
                <div class="fd-event-img-wrapper">
                    <img class="fd-event-img" src="{{ asset('assets/images/event-award.png') }}" alt="Businessman of the Year" loading="lazy">
                </div>
                <div class="fd-event-info">
                    <h4 class="fd-event-card-title">Businessman of the Year Award</h4>
                </div>
            </div>

            <!-- Event 2: TEDx Talk -->
            <div class="fd-event-card">
                <div class="fd-event-img-wrapper">
                    <img class="fd-event-img" src="{{ asset('assets/images/event-tedx.png') }}" alt="TEDx Talk" loading="lazy">
                </div>
                <div class="fd-event-info">
                    <h4 class="fd-event-card-title">Featured TEDx Keynote Speaker</h4>
                </div>
            </div>

            <!-- Event 3: IIT Kharagpur -->
            <div class="fd-event-card">
                <div class="fd-event-img-wrapper">
                    <img class="fd-event-img" src="{{ asset('assets/images/event-iit.png') }}" alt="IIT Kharagpur Event" loading="lazy">
                </div>
                <div class="fd-event-info">
                    <h4 class="fd-event-card-title">Guest Lecture at IIT Kharagpur</h4>
                </div>
            </div>

        </div>

    </div>
</section>



<!-- Why Us Stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/css/why-us.css') }}?v=1.0">

<section class="fd-whyus-sec">
    <div class="container">
        
        <!-- Section Header -->
        <div class="fd-whyus-header">
            <span class="fd-whyus-badge">
                <i class="fas fa-question-circle"></i> Why Foundida?
            </span>
            <h2 class="fd-whyus-title">
                Redefining Legal & <span>Compliance Services</span>
            </h2>
            <p class="fd-whyus-subtitle">
                We are building the future of legal services. Here is why new-age startups, SMEs, and modern entrepreneurs launch and scale with us.
            </p>
        </div>

        <!-- Grid -->
        <div class="fd-whyus-grid">
            
            <!-- Card 1: Built for Startups -->
            <div class="fd-whyus-card">
                <div class="fd-whyus-icon-wrapper">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="fd-whyus-card-title">Built for Startups</h3>
                <p class="fd-whyus-card-desc">
                    We understand the agility required by new-age founders. Our processes are streamlined to support fast growth and modern legal requirements.
                </p>
            </div>

            <!-- Card 2: 100% Digitized Workflows -->
            <div class="fd-whyus-card">
                <div class="fd-whyus-icon-wrapper">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="fd-whyus-card-title">100% Digital & Simple</h3>
                <p class="fd-whyus-card-desc">
                    Say goodbye to endless physical files and manual courier runs. Track, upload, and manage all your documents online with our simple client dashboard.
                </p>
            </div>

            <!-- Card 3: Direct Expert Access -->
            <div class="fd-whyus-card">
                <div class="fd-whyus-icon-wrapper">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 class="fd-whyus-card-title">Direct Expert Access</h3>
                <p class="fd-whyus-card-desc">
                    No sales agents or pushy representatives. You get direct support and consultation from qualified CAs, CSs, and experienced corporate lawyers.
                </p>
            </div>

            <!-- Card 4: Transparent Flat Fees -->
            <div class="fd-whyus-card">
                <div class="fd-whyus-icon-wrapper">
                    <i class="fas fa-receipt"></i>
                </div>
                <h3 class="fd-whyus-card-title">Flat Transparent Pricing</h3>
                <p class="fd-whyus-card-desc">
                    We hate hidden charges. We offer upfront, all-inclusive pricing with zero surprises, so you can plan your legal budgets with confidence.
                </p>
            </div>

            <!-- Card 5: Fast Guaranteed Delivery -->
            <div class="fd-whyus-card">
                <div class="fd-whyus-icon-wrapper">
                    <i class="fas fa-history"></i>
                </div>
                <h3 class="fd-whyus-card-title">Guaranteed Turnaround</h3>
                <p class="fd-whyus-card-desc">
                    We respect your timelines. We adhere to strict service delivery timelines and keep you updated at every step of your application process.
                </p>
            </div>

            <!-- Card 6: Enterprise-Grade Privacy -->
            <div class="fd-whyus-card">
                <div class="fd-whyus-icon-wrapper">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="fd-whyus-card-title">Enterprise Security</h3>
                <p class="fd-whyus-card-desc">
                    Your company data, financial records, and intellectual property are guarded under strict non-disclosure agreements and SSL-encrypted pipelines.
                </p>
            </div>

        </div>

    </div>
</section>



<div id="customModal" class="custom-modal" style="display:none;">
    <div class="customModal_inner">
        <div class="custom-modal-content">
            <div class="modal_cross_button">
                <i class="fas fa-times" id="closeModalBtn"></i>
            </div>

            <div class="new_custom_new_home">
                <p>We are not taking requests for legal consultancy services. Our customer support is open 24x7.</p>
            </div>

        </div>
    </div>
</div>




<style>
    .footer_bottom {
        height: 110px;
        padding-top: 0;
        margin-top: -8px;
    }

    .footer_copyright {
        margin-top: 10px;
    }

    .footer_bottom_img img {
        width: 63%;
        position: absolute;
        left: 52px;
        top: -10px;
    }

    .footer {
        padding: 21px 0 60px 0;
        padding-top: 40px;
        border-top: 1px solid;
        background: #2e363a;
    }

    .review_icon li {
        float: left;
        list-style: none;
        margin-right: 12px;
        margin-bottom: 15px;
    }

    .review_icon li a {
        font-size: 12px;
    }


    .footer_change .footer_bg_black {
        background-color: #0563bf21 !important;
        padding-top: 40px !important;
    }

    .footer_change .footer_bg_black .link_lists p a {
        color: #002b42;
        margin-bottom: 6px;
        display: inline-block;
    }

    .footer_change .footer_bg_black .footer_links li a {
        color: #6d6d6d;
    }

    .footer_change .footer_links li {
        font-size: 14px;
        margin-bottom: 6px;
        color: #6d6d6d;
    }

    .footer_change .review_icon li a {
        color: #6d6d6d !important;
    }

    .footer_change .footer_bg_black .social_title {
        color: #6d6d6d;
    }

    .footer_change .footer_bg_black .quick_links ul li a,
    .footer_change .footer_bg_black .social_title,
    .footer_change .footer_bg_black .quick_links ul li a,
    .footer_change .footer .textwidget p {
        color: #6d6d6d;
    }

    .footer_bg_black {
        background-color: #215585 !important;
        padding-top: 20px !important;
        height: auto !important;
    }

    .footer_copyright,
    .footer_bottom_menu .menu li a {
        color: #fff !important;
    }

    .social_icons a img {
        margin: 5px 5px 0 0;
        width: 28px;
    }


    @media (max-width: 1024px) {
        .footer_bg_black .social_title {
            margin-top: 20px;
        }

        .footer_bottom_img img {
            top: 11px;
        }

        .quick_links ul {
            margin-top: 34px;
        }
    }

    @media (max-width: 991px) {
        .footer_bottom_img {
            position: absolute;
            right: 0;
            top: 27px;
        }

        .footer_bottom_img img {
            width: 48%;
            position: relative;
            right: 0;
            top: -90px;
        }

        .quick_links ul {
            margin-top: 63px;
        }
    }

    @media (max-width: 768px) {
        .footer_bg_black .social_title {
            margin-top: 20px;
        }

        .footer_bottom_img img {
            width: 48%;
            position: relative;
            right: 0;
            top: -90px;
        }

        .footer_bottom_img {
            position: absolute;
            right: 0;
            top: 23px;
        }

        .quick_links ul {
            margin-top: 45px;
        }
    }

    @media (max-width: 425px) {
        .footer_bottom_img {
            position: absolute;
            right: 0;
            top: 27px;
        }

        .footer_bottom_img img {
            width: 41%;
            position: relative;
            right: 0;
            top: -88px;
        }
    }
</style>

<section>
    <footer class="footer footer_bg_black" style="display: none;">
        <div class="container">
            <style>
    .new_new_block_mobile {
        display: none;
    }

    .app_link_block_holder {
        margin-top: 15px;
    }

    .app_link_block_holder ul li a img {
        width: 100%;
    }

    .app_link_block_holder ul li {
        width: 30%;
    }

    .app_link_block_holder ul li:last-child {
        margin-left: 10px;
    }

    .app_link_block_holder ul {
        display: flex;
    }

    .footer_grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-gap: 30px;
        margin-bottom: 20px;
    }

    .grievance {
        width: 100%;
        float: left;
        color: #626262;
        text-align: left;
        margin-top: 20px;
        padding-left: 47px;
        font-size: 13px;
    }

    span.grievance a {
        text-decoration: none;
        color: #337ab7;
    }

    span.grievance a:hover {
        color: #09599d;
    }

    .footer_change .footer_links li {
        font-size: 15px !important;
    }
    .cstm_align{
        text-align:left;
    }
    .follow_us_destop_block{
        padding-left:0;
    }

    @media (max-width: 767px) {
        .app_link_block_holder ul li {
            width: 100%;
        }
        .follow_us_destop_block{
                padding-left:15px;
            }
        .new_new_block_mobile {
            display: block;
            z-index: 99999999999999999999;
        }

        .new_new_block_mobile a {
            z-index: 99999999999999999999;
        }

        .new_new_block_mobile a {
            background-color: #00bb55;
            height: 60px;
            width: 60px;
            position: fixed;
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff !important;
            font-size: 24px;
            bottom: 20px;
            left: 15px;
        }

        .footer_grid {
            grid-template-columns: 1fr 1fr;
            padding: 0 15px;
            grid-gap: 15px;
        }

        .footer_grid_block_last {
            margin-top: 15px;
        }

        .footer_bg_black .footer_black_img {
            margin-left: 0px !important;
        }

        .grievance {
            padding-left: 0;
        }
        .right_side{
            padding:0 15px;
        }
        .quick_links ul{
            margin-left: 0 !important;
            align-items: center;
            width: 100%;
        }
    }
        @media (max-width: 360px) {
            .quick_links ul{
                flex-wrap: wrap;
            }
        }
</style>
<style>

</style>
<!-- /.row -->
<div class="footer_grid">
    <div class="footer_grid_block">
        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Business Registration</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <!-- <li>
                            <a href="https://www.foundida.com/services/company-registration/private-company-registration/">Private Limited Company</a>
                        </li> -->
                        <li>
                            <a href="https://www.foundida.com/services/company-registration/private-company-registration/">Private Limited Company</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/company-registration/llp-partnership/">Limited
                                Liability Partnership</a>
                        </li>
                        <li>
                            <a
                                href="https://www.foundida.com/services/company-registration/one-person-company-registration/">One
                                Person Company</a>
                        </li>
                        <!-- <li>
                            <a href="<? php // targetUrl('services/company-registration/nidhi-company/')
                                        ?>">Nidhi
                                Company</a>
                        </li> -->
                        <li>
                            <a
                                href="https://www.foundida.com/services/company-registration/public-limited-company/">Public
                                limited Company</a>
                        </li>
                        <li>
                            <a
                                href="https://www.foundida.com/services/company-registration/section-8-company-registration/">Section
                                8 Company</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_grid_block">
        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Licenses</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <li>
                            <a href="https://www.foundida.com/services/fssai-registration/">FSSAI [Food
                                License]</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/fssai-renewal/">FSSAI Renewal</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/online-iec-code-import-export-license/">IEC
                                [Import/Export Code]</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/iec-certificate-modification/">IEC
                                Certificate Modification</a>
                        </li>

                        <li>
                            <a href="https://www.foundida.com/services/bis-certificate/">BIS Certificate</a>
                        </li>



                        <li>
                            <!-- <a  href="https://www.foundida.com/services/online-apeda-registration/">Apeda Registration</a> -->
                            <!-- <a  href="https://www.foundida.com/contact/">Apeda Registration</a> -->
                        </li>
                        <li>

                            <!-- <li>
                            <a href="https://www.foundida.com/services/hard-copy-certificate/">Hard-Copy
                                License</a>
                        </li> -->


                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_grid_block">
        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Registration</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <li>
                            <a href="https://www.foundida.com/services/trademark-registration/">TM
                                Registration</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/trademark-objection-reply/">TM
                                Objection</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/trademark-renewal/">TM Renewal</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/online-copyright-registration/">Copyright
                                Registration</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/iso-registration/">ISO
                                Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_grid_block">
        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">GST</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <li>
                            <a href="https://www.foundida.com/services/gst-registration/">GST Registration</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/gst-return-filing/">GST Filing</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/gst-modification/">GST Modification</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/gst-cancellation/">GST Cancellation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_grid_block">
        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Accounting & Tax</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <!-- <li>
                            <a href="https://www.foundida.com/services/oliaccountant/">Online Accountant</a>
                        </li> -->
                        <li>
                            <!-- <a href="">PF
                                Registration</a> -->
                            <a href="https://www.foundida.com/services/online-tax-pfesi-registration/">PF-ESIC Registration</a>
                        </li>
                        <li>
                            <!-- <a href="">PF Return</a> -->
                            <a href="https://www.foundida.com/services/online-tax-pfesi-return/">PF-ESIC Return Filing </a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/online-bookkeeping-service/">Online
                                Bookkeeping</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>








</div>

<div class="row">
    <div class="right_side">
        <div class="textwidget">
            <!-- <img class="footer_black_img" src="https://www.foundida.com/images/footer-logo.png" alt="logo" style="margin-left: -13px;"> -->
            <!-- 30-12-2022_bkp<img class="footer_black_img" src="https://www.foundida.com/images/logo6-1.svg" alt="logo" style="margin-left: -13px; width: 250px;"> -->
            <!-- <img class="footer_black_img" src="https://www.foundida.com/images/fastinfo-group.svg" alt="logo"
                style="margin-left: -13px; width: 250px;"> -->
            <!-- <img class="footer_black_img" src="https://www.foundida.com/images/Online-legal-india-republic.png" alt="logo" style="margin-left: -13px; width: 250px;"> -->
            <p>
                <strong>Foundida is a part of FastInfo Legal Services Pvt Ltd. Which is registered under the Companies Act, 2013.</strong>
            </p>

        </div>

        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Website Disclaimer :</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <!-- <li>
                        This website is privately operated and not affiliated with any government entity. We do not represent or are affiliated with, endorsed by, or in any way connected to any government body or department. The form provided is not for official registration purposes; rather, it's designed to gather information from our clients to help us better understand their business or needs. By continuing to use this website, you acknowledge that we are a private company managing its operations. We offer assistance based on customer requests, and the fees collected on this website are for consultancy services.
                        </li> -->

                        <li>
                            This website is privately operated and not affiliated with any government entity. We do not represent or are affiliated with, endorsed by, or in any way connected to any government body or department. The form provided is not for official registration purposes; rather, it's designed to gather information from our clients to help us better understand their business or needs. By continuing to use this website, you acknowledge that we are a private company. We offer assistance based on customer requests, and the fees collected on this website are charged as a platform fee. We reserve the right to outsource matters as deemed necessary. We are in the process of giving our brand a new name. Stay tuned for updates. This platform does not offer legal services, nor does it provide legal advice or representation. Do you require legal assistance? We strongly recommend consulting with a qualified lawyer or law firm.
                        </li>

                    </ul>
                </div>
            </div>
        </div>



    </div>
</div>
<div class="row">
    <div class="col-md-5 follow_us_destop_block">

        <p class="social_title cstm_align" style="margin: 0;">Follow Us</p>
        <div class="social_contacts">
                            <div class="social_icons">
                    <!-- <a href="https://www.facebook.com/Foundida/"><i class="fab fa-facebook-f"></i></a>
                          <a href="mailto:info@foundida.com"><i class="fab fa-google-plus-g"></i></a> -->
                    <a href="https://www.facebook.com/Foundida/" target="_blank"><img
                            src="https://www.foundida.com/images/facebook.webp" alt="Facebook"></a>
                    <a href="https://twitter.com/onlinelegalind" target="_blank"><img
                            src="https://www.foundida.com/images/twitter.webp" alt="Twitter"></a>
                    <a href="https://www.linkedin.com/company/online-legal-india/" target="_blank"><img
                            src="https://www.foundida.com/images/linkedin.webp" alt="Linkedin"></a>
                    <a href="https://www.instagram.com/foundida/" target="_blank"><img
                            src="https://www.foundida.com/images/instagram.webp" alt="Instagram"></a>
                    <a href="mailto:info@foundida.com"><img src="https://www.foundida.com/images/email.webp"
                            alt="Email"></a>
                    <a href="https://www.youtube.com/c/Foundida" target="_blank"><img class="icons"
                            src="https://www.foundida.com/images/youtube.webp" alt="youtube icon"></a>


                </div>
            



        </div>

        <div class="app_link_block_holder">
            <ul>
                <li><a href="https://play.google.com/store/apps/details?id=foundida.com.foundida"
                        target="_blank"><img src="https://www.foundida.com/images/google-play.webp"
                            alt="Google Play"></a></li>
                <li><a href="https://apps.apple.com/in/app/online-legal-india/id1573385779" target="_blank"><img
                            src="https://www.foundida.com/images/app-store.webp" alt="App Store"></a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-2 text-center">

    </div>
    <div class="col-md-5">
        <div class="quick_links">
            <ul>
                <li><a id="careers" target="_blank" href="https://www.fastinfo.com/career">Careers</a></li>
                <li><a href="https://www.foundida.com/contact/">Contact Us</a></li>
                <li><a href="https://www.foundida.com/blogs/">Blogs</a></li>
                <!-- <li><a href="https://www.foundida.com/customer_complain/">Report an Issue</a></li> -->
                <li><a href="https://www.foundida.com/news/">News</a></li>
                <li><a href="https://www.foundida.com/about/">About Us</a></li>
                <li><a href="https://www.foundida.com/press-release/">Press Release</a></li>
                <li id="event-link"><a href="https://www.foundida.com/services/founders-discussion-table/">Event</a></li>
            </ul>
            <span class="grievance" style="">For any grievance mail to: <a
                    href="mailto:complain@fastinfo.com">complain@fastinfo.com</a></span>
        </div>
    </div>
</div>
<!-- /.row -->
<section class="new_new_block_mobile">
    <a title="Contact" href="tel:08069029400" class="info info_a"><i class="fas fa-phone-alt"></i></a>
</section>
        </div>
        <!-- /.container -->
    </footer>
</section>
@endsection

@section('scripts')
<script type='text/javascript' src='https://www.foundida.com/js/main.js'></script>

<script>
    $('.accordaion-main-div').click(function() {
        var show_id = $(this).attr('data-port-id');
        $('.child-ans-div-1').hide();
        $('#' + show_id).show();

    });
</script>

<script>
    $('.collapsed').click(function() {
        var id_show = $(this).attr('data-port');
        location.href = "#" + id_show;
        $('#' + id_show).addClass('in');
        $('.custom_close').removeClass('in');

    });
</script>
<script> 
    $(window).on('load',function(){
        setTimeout(function(){
//        $("#asia").modal('show');
        $('#asia').appendTo("body").modal('show');    
            }, 4800);
    });   
</script>

<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5d7c8e839f6b7a4457e1a085/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<script>
    $('#associated_carousal').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 1800,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
            },
            1000: {
                items: 6,
            }
        }
    });

    $('#linkUl').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: false,
        autoplay: true,
        autoWidth: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
            },
            1000: {
                items: 7,
            }
        }
    });

    $('#associated_carousal_home').owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        nav: false,
        autoplay: true,
        autoWidth: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
            },
            1000: {
                items: 7,
            }
        }
    });
</script>

<script>
    //Custom dropdown of all Company Registration

    $(document).ready(function() {

        $("#specialPrice999 input").prop('checked', true);
        $("#specialPrice999").addClass("price_active")

        $("#specialPrice999 input").click(function() {
            $(".custom_dropdown label").html("---- Select Package ----");
            $("#hiddenInput").html('<input type="radio" id="" name="" value="" hidden checked>');
        });

        $(".custom_dropdown").click(function() {
            $(".custom_dropdown ul").toggleClass("custom_style");
        });

        $("#specialPrice999").click(function() {
            $(this).addClass("price_active");
            $(".custom_dropdown ul").removeClass("custom_style");
        })


        $('.custom_dropdown ul li').on('click', function() {

            var label = $(this).parent().parent().children('label');
            $(label).attr('id', 'one');
            var input = $(this).parent().parent().parent().parent().children('input');
            $("#hiddenInput input").prop('value', $(this).attr('value'));
            $("#hiddenInput input").attr('name', $(this).attr('name'));
            $("#hiddenInput input").attr('id', $(this).attr('id'));

            label.html($(this).html());

            $(this).parent().children('.selected').removeClass('selected');
            $(this).addClass('selected');
            $("#specialPrice999 input").prop('checked', false);
            $("#specialPrice999").removeClass("price_active");
            $(".custom_dropdown ul li.selected").removeClass("custom_style");

        });

    });
</script>

<script type="text/javascript">
    /*For GCLID*/
    function getParam(p) {
        var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
        return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
    }

    function getExpiryRecord(value) {
        var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90 day expiry in milliseconds

        var expiryDate = new Date().getTime() + expiryPeriod;
        return {
            value: value,
            expiryDate: expiryDate
        };
    }

    function addGclid() {
        // $("#landing_url").val(readCookie('_landing_url'));
        // $("#Campaignid").val(readCookie('_Campaignid'));
        // $("#utm_content").val(readCookie('_utm_content'));
        // $("#utm_source").val(readCookie('_utm_source'));
        // $("#utm_medium").val(readCookie('_utm_medium'));
        // $("#utm_campaign").val(readCookie('_utm_campaign'));
        // $("#Adgroupid").val(readCookie('_Adgroupid'));
        // $("#device").val(readCookie('_device'));
        // $("#keyword_id").val(readCookie('_keyword_id'));
        var gclidParam = getParam('gclid');
        var gclidFormFields = ['gclid_field', 'foobar']; // all possible gclid form field ids here
        var gclidRecord = null;
        var currGclidFormField;

        var gclsrcParam = getParam('gclsrc');
        var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;

        gclidFormFields.forEach(function(field) {
            if (document.getElementById(field)) {
                currGclidFormField = document.getElementById(field);
            }
        });

        if (gclidParam && isGclsrcValid) {
            gclidRecord = getExpiryRecord(gclidParam);
            localStorage.setItem('gclid', JSON.stringify(gclidRecord));
        }

        var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
        var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;

        if (currGclidFormField && isGclidValid) {
            currGclidFormField.value = gclid.value;
        }
    }

    window.addEventListener('load', addGclid);
</script>

<script>
    $(document).ready(function() {
        $("#searchCompanyQuery").keyup(function() {

            $('#finalResult').text("");

            if ($("#searchCompanyQuery").val().length > 3) {

                //  alert('fdsafzdfffd');
                $.ajax({
                    type: "post",
                    url: "/admin/companysearch",
                    cache: false,
                    data: 'search=' + $("#searchCompanyQuery").val(),
                    beforeSend: function() {
                        $('#loader').show();
                    },

                    success: function(response) {
                        console.log(response);
                        $('#finalResult').html("");
                        var obj = JSON.parse(response);
                        if (obj.length > 0) {
                            try {
                                var items = [];
                                $.each(obj, function(i, val) {
                                    //items.push($('<li/>').text(val.ID + " " + val.Company_Name));
                                    //items.push($('<a href="'+val.ID+'"></a><li/>').text("" + val.Company_Name+""));
                                    items.push('<li><a href="https://foundida.com/companydetails.php?cin=' + val.CORPORATE_IDENTIFICATION_NUMBER + '" target="_blank">' + val.Company_Name + '</a></li>');
                                });
                                $('#finalResult').append.apply($('#finalResult'), items);
                            } catch (e) {
                                alert('Exception while request..');
                            }
                        } else {
                            $('#finalResult').html($('<li/>').text("No Data Found"));
                        }

                    },
                    complete: function() {
                        $('#loader').hide();
                    },
                    error: function() {
                        alert('Error while request..');
                    }
                });
            }
            return false;
        });
    });

    //User's Cookie Track//

    function readCookie(c_name) {
        var c_value = document.cookie;
        var c_start = c_value.indexOf(" " + c_name + "=");
        if (c_start == -1) {
            c_start = c_value.indexOf(c_name + "=");
        }
        if (c_start == -1) {
            c_value = null;
        } else {
            c_start = c_value.indexOf("=", c_start) + 1;
            var c_end = c_value.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = c_value.length;
            }
            c_value = unescape(c_value.substring(c_start, c_end));
        }
        return c_value;
    }

    function setCookie(a, d, b) {
        var c = new Date;
        c.setTime(c.getTime() + 864E5 * b);
        b = "; expires=" + c.toGMTString() + "domain=foundida.com;path=/;SameSite=None;Secure";
        document.cookie = a + "=" + d + b
    }

    function getParam(a) {
        return (a = RegExp("[?&]" + a + "=([^&]*)").exec(window.location.search)) && decodeURIComponent(a[1].replace(/\+/g, " "))
    }
    var _oclid = getParam("_oclid");
    if (_oclid) {
        var gclsrc = getParam("gclsrc");
        (!gclsrc || -1 !== gclsrc.indexOf("aw")) && setCookie("_oclid", _oclid, 365)
    };
    // $(document).ready(function(){
    //     if(readCookie('_oclid') != '' || readCookie('_oclid') != null || typeof readCookie('_oclid') !== 'undefined'){
    //         var new_oli_id = "";
    //         $.ajax({
    //            url: "/emailMarketing/cookie-data-track.php",
    //            type: "POST",
    //            data: {oli_id:readCookie('_oclid'), full_url:document.URL, new_oli_id: new_oli_id},
    //            success: function(response){
    //               console.log(response);
    //            }
    //         });            
    //     }

    // });
</script>

<script type="text/javascript">
    $(function() {

        let custom_utm = getParam("custom_utm");
        if (readCookie('_oclid') != '' && readCookie('_oclid') != null && typeof readCookie('_oclid') !== 'undefined' && custom_utm == 'alterpop') {
            // console.log(custom_utm)
            let _oclid = readCookie('_oclid');

            $.ajax({
                type: 'POST',
                url: 'https://www.foundida.com/payment/store-alternative-number.php',
                data: {
                    _oclid: _oclid,
                    action: 'check-alter-number'
                },
                dataType: "json",
                success: function(response) {

                    if (response.success) {
                        $('#registeredMobileNumber').val(response.mobile);
                        $('#alternative-phone-number-popup').modal('show');
                    }

                }
            });
        }

        $("#alternative-contact-popup-form").validate({
            rules: {
                alternativeContactNumber: {
                    required: true,
                    number: true,
                    maxlength: 10,
                    minlength: 10,
                    digits: true
                },
                messages: {
                    alternativeContactNumber: {
                        required: "Please enter your phone number.",
                        number: "Please enter a valid phone number.",
                        maxlength: "Only 10 digit phone number is valid.",
                        minlength: "Only 10 digit phone number is valid."
                    }
                }
            },
            submitHandler: function(form) {

                let _oclid = readCookie('_oclid');

                $.ajax({
                    type: 'POST',
                    url: 'https://www.foundida.com/payment/store-alternative-number.php',
                    data: $(form).serialize() + '&action=store-alter-number&_oclid=' + _oclid,
                    dataType: "json",
                    beforeSend: function() {
                        $('.alternative-contact-popup-submit-btn').text('Please Wait..');
                    },
                    success: function(response) {

                        if (response.success) {

                            $('#response-messages').html(`<div class="alert alert-danger" role="alert" style="color: #155724;background-color: #d4edda;border-color: #c3e6cb;">
                      ` + response.msg + `
                    </div>`);

                            setTimeout(function() {
                                location.reload(true);
                            }, 1000);

                        } else {

                            let msg = response.msg;
                            for (let k in msg) {
                                $("#" + k + "-error").html(msg[k]);
                                $("#" + k + "-error").attr("style", "display: inline-block;");
                                $("#" + k).removeClass("is-valid");
                                $("#" + k).addClass("is-invalid");
                            }
                        }

                    },
                    complete: function() {
                        $('.alternative-contact-popup-submit-btn').text('Submit');
                    }
                });
            }
        });
    });

    window.onload = function() {

        let _oclid = getParam("_oclid");
        if (_oclid) {
            if (document.cookie.indexOf('_oclid') > -1) {
                document.cookie = "_oclid=" + readCookie('_oclid') + ";expires=Thu, 01 Jan 1970 00:00:01 GMT;domain=foundida.com;path=/;SameSite=None;Secure";
                setCookie("_oclid", _oclid, 365)
            } else {
                setCookie("_oclid", _oclid, 365)
            }
        }
    }
</script>

<script>
    function makeid(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }
    $(document).ready(function() {
        let _u_track = makeid(32);
        if (readCookie('_u_track') == '' || readCookie('_u_track') == null) {
            setCookie("_u_track", _u_track, 365);
        }
        // $.ajax({
        //     type: 'POST',
        //     url: 'https://www.foundida.com/cookie-user-tracker/insert-tracked-data.php',
        //     dataType:"json",
        //     data: {
        //         _u_track:readCookie('_u_track'),
        //         _url: window.location.href,
        //         _gclid: (JSON.parse(localStorage.getItem('gclid')).value ? JSON.parse(localStorage.getItem('gclid')).value : '')
        //     },
        //     success: function (response) {

        //     }
        // });
    });

    //=================================================================//
    //New UTM Tracking
    function getParameters() {
        let urlString = window.location.href;
        let paramString = urlString.split('?')[1];
        let queryString = new URLSearchParams(paramString);
        for (let pair of queryString.entries()) {
            console.log(pair[0] + ':' + pair[1]);
        }
    }
    $(document).ready(function() {
        //console.log(getParameters());
    });
    //===========================Custom Cookie===================================//
    function makeid(length) {
        let result = '';
        let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let charactersLength = characters.length;
        for (let i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    function fnBrowserDetect() {
        let userAgent = navigator.userAgent;
        let browserName;
        if (userAgent.match(/chrome|chromium|crios/i)) {
            browserName = "Chrome";
        } else if (userAgent.match(/firefox|fxios/i)) {
            browserName = "Firefox";
        } else if (userAgent.match(/safari/i)) {
            browserName = "Safari";
        } else if (userAgent.match(/opr\//i)) {
            browserName = "Opera";
        } else if (userAgent.match(/edg/i)) {
            browserName = "Edge";
        } else {
            browserName = "No browser detection";
        }
        return browserName;
    }
    // $(document).ready(function(){
    //     let browser_id = makeid(32);
    //     if(readCookie('browser_id') == '' || readCookie('browser_id') == null) {
    //         setCookie("browser_id", browser_id, 365);
    //     }

    //     $.ajax({
    //         type: 'POST',
    //         url: 'https://www.foundida.com/advanced_utm_tracking/custom_cookie_track.php',
    //         dataType:"json",
    //         data: {
    //             browser_id:readCookie('browser_id'),
    //             url: window.location.href,
    //             browser: fnBrowserDetect()
    //         },
    //         success: function (response) {

    //         }
    //     });
    // });
    //===========================Facebook===================================//
    // window.onload = function () {
    //     try {
    //         var url_string = window.location.href.toLowerCase();
    //         var url = new URL(url_string);
    //         ['fbclid'].forEach(function (key) {
    //             var value = url.searchParams.get(key);
    //             if (value) {
    //                 document.cookie = `${key}=${value}; max-age=525600` + ';path=/';
    //             }
    //         });
    //     }
    //     catch (err) {
    //         console.log("Issues with Parsing URL Parameter's - " + err);
    //     }

    //     if(readCookie('fbclid') != null){
    //         $.ajax({
    //             type: 'POST',
    //             url: 'https://www.foundida.com/advanced_utm_tracking/insert-fb-utm-data.php',
    //             data:{ url: window.location.href },
    //             dataType:"json",
    //             success: function (response) {
    //                console.log(response);
    //                console.log('Facebook');
    //             }
    //         }); 
    //     }
    //     else{
    //         console.log('From Facebook');
    //     }
    //     //==========================GOOGLE====================================//
    //     try {
    //         var url_string = window.location.href.toLowerCase();
    //         var url = new URL(url_string);
    //         ['gclid'].forEach(function (key) {
    //             var value = url.searchParams.get(key);
    //             if (value) {
    //                 document.cookie = `${key}=${value}; max-age=525600` + ';path=/';
    //             }
    //         });
    //     }
    //     catch (err) {
    //         console.log("Issues with Parsing URL Parameter's - " + err);
    //     }

    //     if(readCookie('gclid') != null){
    //         $.ajax({
    //             type: 'POST',
    //             url: 'https://www.foundida.com/advanced_utm_tracking/insert-google-utm-data.php',
    //             data:{ url: window.location.href },
    //             dataType:"json",
    //             success: function (response) {
    //                console.log('Google');
    //             }
    //         }); 
    //     }
    //     else{
    //         console.log('From Google');
    //     }
    //     //==========================BING====================================//
    //     try {
    //         var url_string = window.location.href.toLowerCase();
    //         var url = new URL(url_string);
    //         ['msclkid'].forEach(function (key) {
    //             var value = url.searchParams.get(key);
    //             if (value) {
    //                 document.cookie = `${key}=${value}; max-age=525600` + ';path=/';
    //             }
    //         });
    //     }
    //     catch (err) {
    //         console.log("Issues with Parsing URL Parameter's - " + err);
    //     }

    //     if(readCookie('msclkid') != null){
    //         $.ajax({
    //             type: 'POST',
    //             url: 'https://www.foundida.com/advanced_utm_tracking/insert-bing-utm-data.php',
    //             data:{ url: window.location.href },
    //             dataType:"json",
    //             success: function (response) {
    //                console.log('Bing');
    //             }
    //         }); 
    //     }
    //     else{
    //         console.log('From Bing');
    //     }
    //     //==========================Mailer====================================//
    //     const params = new URLSearchParams(window.location.search)
    //     if(params.get('utm_source') == 'mailer'){
    //         $.ajax({
    //             type: 'POST',
    //             url: 'https://www.foundida.com/advanced_utm_tracking/insert-mailer-data.php',
    //             data:{ url: window.location.href },
    //             dataType:"json",
    //             success: function (response) {
    //                console.log('Mailer');
    //             }
    //         }); 
    //     }
    // };
    function ValidateOliIdForComplaint() {
        console.log('ValidateOliIdForComplaint');
    }

    $(document).on('click', '#event-link', function(e) {
        e.preventDefault(); // stop normal link redirect
        e.stopPropagation();
        // alert('link Clicked');
        var redirectUrl = $(this).find('a').attr('href');

        $.ajax({
            url: '../../payment/link_click_count_insert.php',
            type: 'POST',
            data: {
                link_name: 'event'
            },
            dataType: "JSON",
            success: function(resp) {
                // after ajax completes
                // if(resp.success){
                // alert(redirectUrl);
                window.location.href = redirectUrl;
                // }else{
                //     alert('Error');
                // }
            }
        });
    });
</script>

<script type="text/javascript">
    /*Do not remove this.This is for UTM tracking*/
    var landing_form_type = 'HOME';
</script>

<script>
    function loadVideo1() {
        document.getElementById("video1").innerHTML = `<iframe class="video-iframe" width="100%" height="290" src="https://www.youtube.com/embed/Eps7ZMF2mq0?si=R113rFM7UMSvb5qd&autoplay=1&playsinline=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
    }

    function loadVideo2() {
        document.getElementById("video2").innerHTML = `<iframe class="video-iframe" width="100%" height="290" src="https://www.youtube.com/embed/0JUTRkG_Cgs?si=bHlcpZWGqtQamXRn&autoplay=1&playsinline=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
    }


    function loadVideo3() {
        document.getElementById("video3").innerHTML = `<iframe class="video-iframe" width="100%" height="290" src="https://www.youtube.com/embed/2wwXvlFmxeU?si=p9BiaWTKg4CPJfFz&autoplay=1&playsinline=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
    }

    function loadVideo4() {
        document.getElementById("video4").innerHTML = `<iframe class="video-iframe" width="100%" height="290" src="https://www.youtube.com/embed/WDFnK23aoi8?si=BSNfXWKg2_gHIDmh&autoplay=1&playsinline=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
    }



    function loadVideo5() {
        const container = document.getElementById("video5");
        container.innerHTML =
            `<iframe class="video-iframe" width="100%" height="290" src="https://www.youtube.com/embed/V3zTS7MjQMQ?si=t98XlPfvxbKN6XL2&autoplay=1&playsinline=1"
             title="YouTube video player" 
             frameborder="0" 
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
             </iframe>`;

    }

    function loadVideo6() {
        const container = document.getElementById("video6");

        container.innerHTML = `
            <iframe 
                class="video-iframe" 
                width="100%" 
                height="290" 
                src="https://www.youtube.com/embed/ylNJCRrlo40?si=itMgvhRkQg3EmKtC&autoplay=1&playsinline=1&rel=0"
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen>
            </iframe>
        `;
    }
</script>

<script>
    $(function() {
        $("img.lazy").lazyload({
            effect: "fadeIn"
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("img").forEach((img, index) => {
            if (!img.hasAttribute("fetchpriority")) {
                img.setAttribute("loading", "lazy");
            }
        });
    });
</script>
@endsection
