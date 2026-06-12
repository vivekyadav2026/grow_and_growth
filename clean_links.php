<?php

$viewsDir = __DIR__ . '/resources/views/pages';

// Map of old onlinelegalindia.com service URLs to new local Laravel route URLs
// Format: 'old-path-segment' => 'new-local-route'
$routeMap = [
    // --- Home ---
    'https://www.onlinelegalindia.com/'                                      => '/',
    'https://onlinelegalindia.com/'                                          => '/',

    // --- Services ---
    '/services/trademark-registration-web/'                                  => '/trademark-registration',
    '/services/trademark-renewal/'                                           => '/trademark-renewal',
    '/services/trademark-objection-reply/'                                   => '/trademark-objection-reply',
    '/services/trademark-opposition-india/'                                  => '/trademark-opposition',
    '/services/trademark-assignment/'                                        => '/trademark-assignment',
    '/services/logo-design/'                                                 => '/logo-design',
    '/services/series-trademark/'                                            => '/series-trademark-registration',
    '/services/trademark-global/'                                            => '/global-trademark-registration',
    '/services/copyright-registration/'                                      => '/business-registration',
    '/services/private-limited-company-registration/'                        => '/pvt-ltd-registration',
    '/services/pvt-ltd-registration/'                                        => '/pvt-ltd-registration',
    '/services/private-company-registration-new/'                            => '/pvt-ltd-registration',
    '/services/llp-partnership/'                                             => '/business-registration',
    '/services/one-person-company-registration/'                             => '/opc-registration',
    '/services/public-limited-company/'                                      => '/public-ltd-registration',
    '/services/section-8-company-registration/'                              => '/section-8-registration',
    '/services/nidhi-company-registration/'                                  => '/nidhi-company-registration',
    '/services/indian-subsidiary/'                                           => '/indian-subsidiary-registration',
    '/services/update-din-dir-3-ekyc-director/'                              => '/director-din-ekyc-update',
    '/services/appointment-of-director/'                                     => '/appoint-director',
    '/services/removal-of-director/'                                         => '/remove-director',
    '/services/llp-partnership/'                                             => '/business-registration',
    '/services/pvt-ltd-windingup/'                                           => '/company-closure',
    '/services/windingup-closure-llp-company/'                               => '/llp-closure',
    '/services/company-compl-windingup-sec8/'                                => '/section-8-closure',
    '/services/company-compl-windingup-nidhi/'                               => '/nidhi-winding-up',
    '/services/company-compl-windingup-subsidiary/'                          => '/indian-subsidiary-windup',
    '/services/iso-certification/'                                           => '/iso-certification',
    '/services/fssai-registration/'                                          => '/fssai-registration',
    '/services/fssai-renewal/'                                               => '/fssai-renewal',
    '/services/fssai-modification/'                                          => '/fssai-modification',
    '/services/fssai-food-labeling-compliance/'                              => '/fssai-food-label-compliance',
    '/services/fssai-annual-return-filing/'                                  => '/fssai-annual-return',
    '/services/online-iec-code-import-export-license/'                       => '/iec-code-registration',
    '/services/iec-certificate-modification/'                                => '/iec-code-renewal',
    '/services/bis-certificate/'                                             => '/bis-certification',
    '/services/gst-registration/'                                            => '/gst-registration',
    '/services/gst-return-filing/'                                           => '/gst-return-filing',
    '/services/gst-modification/'                                            => '/gst-modification',
    '/services/online-gst-nil-return-filing/'                                => '/gst-nil-return-filing',
    '/services/gstr-9-annual-filing/'                                        => '/gstr-9-annual-return',
    '/services/gst-eway-bill-generation/'                                    => '/gst-eway-bill',
    '/services/gst-lut-filing/'                                              => '/gst-lut-filing',
    '/services/online-annual-compliance-filing/'                             => '/annual-compliance-filing',
    '/services/annual-compliance-bookkeeping/'                               => '/annual-filing-bookkeeping',
    '/services/online-tax-dpt-3/'                                            => '/dpt-3-filing',
    '/services/online-bookkeeping-service/'                                  => '/bookkeeping-services',
    '/services/online-tax-planning-consultancy/'                             => '/tax-planning-consultancy',
    '/services/online-tax-cma/'                                              => '/cma-credit-management-analysis',
    '/services/online-tax-pfesi-registration/'                               => '/pf-esic-registration',
    '/services/online-tax-pfesi-return/'                                     => '/pf-esic-return-filing',
    '/services/online-tax-jansamarth/'                                       => '/jansamarth-registration',
    '/services/online-tax-project-report/'                                   => '/project-report-preparation',
    '/services/hr-compliance/'                                               => '/hr-payroll-compliance',
    '/services/consumer-dispute-odr/'                                        => '/resolve-consumer-dispute',
    '/services/labour-dispute-odr/'                                          => '/labour-dispute-support',
    '/services/insurance-claim-dispute-odr/'                                 => '/settle-insurance-disputes',
    '/services/business-dispute/'                                            => '/settle-business-disputes',
    '/services/property-dispute/'                                            => '/settle-real-estate-disputes',
    '/services/share-transfer/'                                              => '/share-transfer',
    '/services/moa-amendment-private-limited-company/'                       => '/moa-amendment-pvt-ltd',
    '/services/moa-amendment-public-limited-company/'                        => '/moa-amendment-public-limited',
    '/services/moa-amendment-section-8-company/'                             => '/moa-amendment-section-8',
    '/services/increasing-authorized-capital/'                               => '/increase-authorized-capital',
    '/services/registered-office-change-roc/'                                => '/registered-office-change',
    '/services/company-name-change/'                                         => '/company-name-change',
    '/services/ngo-darpan/'                                                  => '/ngo-darpan-registration',
    '/services/legal/'                                                       => '/business-registration',
    '/services/company-compl-llptopvt/'                                      => '/llp-to-pvt-ltd',
    '/services/company-compl-opctopvt/'                                      => '/opc-to-pvt-ltd',
    '/services/company-compl-pvttopubc/'                                     => '/pvt-ltd-to-public-ltd',
    '/services/section-8-company-compliance-filing/'                         => '/tax-compliance',
    '/services/online-tax-planning-consultancy(1)/'                          => '/tax-planning-consultancy',
    '/services/free-compliance/'                                             => '/business-compliance-check',
    '/services/12a-80g-csr-registration/'                                    => '/12a-80g-csr-registration',
    '/contact/'                                                              => '/contact-experts',
    '/about/'                                                                => '/',
    '/blog/'                                                                 => '/blogs',
    '/services/'                                                             => '/',
    '/services/online-dispute-resolution/'                                   => '/online-dispute-resolution',
    '/services/registration-gst-compliance/'                                 => '/registration-gst-compliance',
    '/services/legal-service/'                                               => '/business-registration',
    '/legal/'                                                                => '/business-registration',
    '/customers/login'                                                       => '/',
    '/services/include/'                                                     => '/',
];

$bladeFiles = glob($viewsDir . '/*.blade.php');
$totalReplaced = 0;

foreach ($bladeFiles as $bladePath) {
    $content = file_get_contents($bladePath);
    $originalContent = $content;

    // Step 1: Replace all known service URL hrefs with local routes
    foreach ($routeMap as $oldPath => $newRoute) {
        // If it's a full URL like https://www.onlinelegalindia.com/
        if (str_starts_with($oldPath, 'https://')) {
            $search  = 'href="' . $oldPath . '"';
            $replace = 'href="' . $newRoute . '"';
            if (strpos($content, $search) !== false) {
                $content = str_replace($search, $replace, $content);
                $totalReplaced++;
            }
        } else {
            // Relative path segment - convert full URL
            $fullUrl1 = 'href="https://www.onlinelegalindia.com' . $oldPath . '"';
            $fullUrl2 = 'href="https://onlinelegalindia.com' . $oldPath . '"';
            $replace  = 'href="' . $newRoute . '"';

            if (strpos($content, $fullUrl1) !== false) {
                $content = str_replace($fullUrl1, $replace, $content);
                $totalReplaced++;
            }
            if (strpos($content, $fullUrl2) !== false) {
                $content = str_replace($fullUrl2, $replace, $content);
                $totalReplaced++;
            }
        }
    }

    // Step 2: Replace any remaining onlinelegalindia.com hrefs that didn't match
    // with just '#' so they don't redirect externally
    $content = preg_replace_callback(
        '/href="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^"]*"/',
        function($matches) use (&$totalReplaced) {
            $url = $matches[0];
            // Extract path from the URL
            $path = preg_replace('/href="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)/', '', $url);
            $path = trim($path, '"');
            // Return href="#" to be safe
            $totalReplaced++;
            return 'href="#"';
        },
        $content
    );

    // Step 3: Fix canonical meta tag
    $content = preg_replace(
        '/<link rel="canonical" href="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^"]*">/',
        '<link rel="canonical" href="{{ url()->current() }}">',
        $content
    );

    // Step 4: Fix og:url meta tag
    $content = preg_replace(
        '/<meta property="og:url" content="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^"]*">/',
        '<meta property="og:url" content="{{ url()->current() }}">',
        $content
    );

    // Step 5: Fix og:image that still points to old domain (only if asset not migrated)
    $content = preg_replace(
        '/<meta property="og:image" content="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)\/images\/([^"]+)">/',
        '<meta property="og:image" content="{{ asset(\'assets/images/$1\') }}">',
        $content
    );

    // Step 6: Fix logo favicon
    $content = preg_replace(
        '/<link rel="icon" href="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^"]*"/',
        '<link rel="icon" href="{{ asset(\'assets/images/favicon.ico\') }}"',
        $content
    );

    // Step 7: Fix JSON-LD schema URLs (in "url": "...")
    $content = preg_replace(
        '/"url"\s*:\s*"https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)\/?[^"]*"/',
        '"url": "{{ url(\'/\') }}"',
        $content
    );

    // Step 8: Fix image src pointing to old domain
    $content = preg_replace_callback(
        '/src="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)\/([^"]+)"/',
        function($matches) use (&$totalReplaced) {
            $imgPath = $matches[1];
            $basename = basename($imgPath);
            $totalReplaced++;
            return 'src="{{ asset(\'assets/images/' . $basename . '\') }}"';
        },
        $content
    );

    // Step 9: Remove commented-out lines referencing old domain
    $content = preg_replace(
        '/^\s*<!--[^>]*onlinelegalindia\.(com|in)[^>]*-->\s*$/m',
        '',
        $content
    );

    // Step 10: Remove remaining inline references in non-href text (like action="")
    $content = preg_replace(
        '/action="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^"]*"/',
        'action="#"',
        $content
    );

    if ($content !== $originalContent) {
        file_put_contents($bladePath, $content);
        echo "Cleaned: " . basename($bladePath) . "\n";
    }
}

echo "\nDone! Total replacements: $totalReplaced\n";
