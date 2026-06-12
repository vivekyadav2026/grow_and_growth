<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
set_time_limit(0);

$viewsDir = __DIR__ . '/resources/views/pages';

// All pages to download - [blade-filename => original-URL]
$pages = [
    'index'                          => 'https://www.onlinelegalindia.com/',
    'fssai-registration'             => 'https://www.onlinelegalindia.com/services/fssai-registration/',
    'trademark-registration'         => 'https://www.onlinelegalindia.com/services/trademark-registration-web/',
    'trademark-renewal'              => 'https://www.onlinelegalindia.com/services/trademark-renewal/',
    'trademark-objection-reply'      => 'https://www.onlinelegalindia.com/services/trademark-objection-reply/',
    'trademark-opposition'           => 'https://www.onlinelegalindia.com/services/trademark-opposition-india/',
    'trademark-assignment'           => 'https://www.onlinelegalindia.com/services/trademark-assignment/',
    'logo-design'                    => 'https://www.onlinelegalindia.com/services/logo-design/',
    'series-trademark-registration'  => 'https://www.onlinelegalindia.com/services/series-trademark/',
    'global-trademark-registration'  => 'https://www.onlinelegalindia.com/services/trademark-global/',
    'pvt-ltd-registration'           => 'https://www.onlinelegalindia.com/services/private-limited-company-registration/',
    'opc-registration'               => 'https://www.onlinelegalindia.com/services/one-person-company-registration/',
    'public-ltd-registration'        => 'https://www.onlinelegalindia.com/services/public-limited-company/',
    'section-8-registration'         => 'https://www.onlinelegalindia.com/services/section-8-company-registration/',
    'nidhi-company-registration'     => 'https://www.onlinelegalindia.com/services/nidhi-company-registration/',
    'indian-subsidiary-registration' => 'https://www.onlinelegalindia.com/services/indian-subsidiary/',
    'director-din-ekyc-update'       => 'https://www.onlinelegalindia.com/services/update-din-dir-3-ekyc-director/',
    'appoint-director'               => 'https://www.onlinelegalindia.com/services/appointment-of-director/',
    'remove-director'                => 'https://www.onlinelegalindia.com/services/removal-of-director/',
    'company-closure'                => 'https://www.onlinelegalindia.com/services/windingup-closure-private-limited-company/',
    'llp-closure'                    => 'https://www.onlinelegalindia.com/services/windingup-closure-llp-company/',
    'section-8-closure'              => 'https://www.onlinelegalindia.com/services/company-compl-windingup-sec8/',
    'nidhi-winding-up'               => 'https://www.onlinelegalindia.com/services/company-compl-windingup-nidhi/',
    'indian-subsidiary-windup'       => 'https://www.onlinelegalindia.com/services/company-compl-windingup-subsidiary/',
    'iso-certification'              => 'https://www.onlinelegalindia.com/services/iso-certification/',
    'fssai-renewal'                  => 'https://www.onlinelegalindia.com/services/fssai-renewal/',
    'fssai-modification'             => 'https://www.onlinelegalindia.com/services/fssai-modification/',
    'fssai-food-label-compliance'    => 'https://www.onlinelegalindia.com/services/fssai-food-labeling-compliance/',
    'fssai-annual-return'            => 'https://www.onlinelegalindia.com/services/fssai-annual-return-filing/',
    'iec-code-registration'          => 'https://www.onlinelegalindia.com/services/online-iec-code-import-export-license/',
    'iec-code-renewal'               => 'https://www.onlinelegalindia.com/services/iec-certificate-modification/',
    'bis-certification'              => 'https://www.onlinelegalindia.com/services/bis-certificate/',
    'gst-registration'               => 'https://www.onlinelegalindia.com/services/gst-registration/',
    'gst-return-filing'              => 'https://www.onlinelegalindia.com/services/gst-return-filing/',
    'gst-modification'               => 'https://www.onlinelegalindia.com/services/gst-modification/',
    'gst-nil-return-filing'          => 'https://www.onlinelegalindia.com/services/online-gst-nil-return-filing/',
    'gstr-9-annual-return'           => 'https://www.onlinelegalindia.com/services/gstr-9-annual-filing/',
    'gst-eway-bill'                  => 'https://www.onlinelegalindia.com/services/gst-eway-bill-generation/',
    'gst-lut-filing'                 => 'https://www.onlinelegalindia.com/services/gst-lut-filing/',
    'annual-compliance-filing'       => 'https://www.onlinelegalindia.com/services/online-annual-compliance-filing/',
    'annual-filing-bookkeeping'      => 'https://www.onlinelegalindia.com/services/annual-compliance-bookkeeping/',
    'dpt-3-filing'                   => 'https://www.onlinelegalindia.com/services/online-tax-dpt-3/',
    'bookkeeping-services'           => 'https://www.onlinelegalindia.com/services/online-bookkeeping-service/',
    'tax-planning-consultancy'       => 'https://www.onlinelegalindia.com/services/online-tax-planning-consultancy/',
    'cma-credit-management-analysis' => 'https://www.onlinelegalindia.com/services/online-tax-cma/',
    'pf-esic-registration'           => 'https://www.onlinelegalindia.com/services/online-tax-pfesi-registration/',
    'pf-esic-return-filing'          => 'https://www.onlinelegalindia.com/services/online-tax-pfesi-return/',
    'jansamarth-registration'        => 'https://www.onlinelegalindia.com/services/online-tax-jansamarth/',
    'project-report-preparation'     => 'https://www.onlinelegalindia.com/services/online-tax-project-report/',
    'hr-payroll-compliance'          => 'https://www.onlinelegalindia.com/services/hr-compliance/',
    'resolve-consumer-dispute'       => 'https://www.onlinelegalindia.com/services/consumer-dispute-odr/',
    'labour-dispute-support'         => 'https://www.onlinelegalindia.com/services/labour-dispute-odr/',
    'settle-insurance-disputes'      => 'https://www.onlinelegalindia.com/services/insurance-claim-dispute-odr/',
    'settle-business-disputes'       => 'https://www.onlinelegalindia.com/services/business-dispute/',
    'settle-real-estate-disputes'    => 'https://www.onlinelegalindia.com/services/property-dispute/',
    'share-transfer'                 => 'https://www.onlinelegalindia.com/services/share-transfer/',
    'moa-amendment-pvt-ltd'          => 'https://www.onlinelegalindia.com/services/moa-amendment-private-limited-company/',
    'moa-amendment-public-limited'   => 'https://www.onlinelegalindia.com/services/moa-amendment-public-limited-company/',
    'moa-amendment-section-8'        => 'https://www.onlinelegalindia.com/services/moa-amendment-section-8-company/',
    'increase-authorized-capital'    => 'https://www.onlinelegalindia.com/services/increasing-authorized-capital/',
    'registered-office-change'       => 'https://www.onlinelegalindia.com/services/registered-office-change-roc/',
    'company-name-change'            => 'https://www.onlinelegalindia.com/services/company-name-change/',
    'ngo-darpan-registration'        => 'https://www.onlinelegalindia.com/services/ngo-darpan/',
    'llp-to-pvt-ltd'                 => 'https://www.onlinelegalindia.com/services/company-compl-llptopvt/',
    'opc-to-pvt-ltd'                 => 'https://www.onlinelegalindia.com/services/company-compl-opctopvt/',
    'pvt-ltd-to-public-ltd'          => 'https://www.onlinelegalindia.com/services/company-compl-pvttopubc/',
    'tax-compliance'                 => 'https://www.onlinelegalindia.com/services/section-8-company-compliance-filing/',
    'business-compliance-check'      => 'https://www.onlinelegalindia.com/services/free-compliance/',
    '12a-80g-csr-registration'       => 'https://www.onlinelegalindia.com/services/12a-80g-csr-registration/',
    'contact-experts'                => 'https://www.onlinelegalindia.com/contact/',
    'blogs'                          => 'https://www.onlinelegalindia.com/blog/',
    'business-registration'          => 'https://www.onlinelegalindia.com/services/legal/',
    'expert-guidance'                => 'https://www.onlinelegalindia.com/services/free-compliance/',
    'online-business-compliance'     => 'https://www.onlinelegalindia.com/services/registration-gst-compliance/',
    'online-dispute-resolution'      => 'https://www.onlinelegalindia.com/services/online-dispute-resolution/',
    'registration-gst-compliance'    => 'https://www.onlinelegalindia.com/services/registration-gst-compliance/',
];

$success = 0;
$failed = [];

foreach ($pages as $bladeName => $url) {
    $outputFile = $viewsDir . '/' . $bladeName . '.blade.php';
    
    echo "Downloading: $bladeName ... ";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 Chrome/120.0.0.0 Safari/537.36');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: text/html,application/xhtml+xml',
        'Accept-Language: en-US,en;q=0.9',
    ]);
    
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);
    
    if ($html && $httpCode == 200 && strlen($html) > 1000) {
        // Fix Blade @context and @type in JSON-LD
        $html = str_replace('"@context"', '"@@context"', $html);
        $html = str_replace('"@type"', '"@@type"', $html);
        
        file_put_contents($outputFile, $html);
        $size = strlen($html);
        echo "OK ({$size} bytes)\n";
        $success++;
    } else {
        echo "FAILED (HTTP $httpCode, error: $error)\n";
        $failed[] = $bladeName;
        // Write a placeholder so file isn't empty
        file_put_contents($outputFile, "<!-- Download failed for $url -->\n<h1>Page coming soon: $bladeName</h1>");
    }
    
    // Small delay to be polite
    usleep(300000); // 300ms
}

echo "\n\n=== DONE ===\n";
echo "Success: $success\n";
echo "Failed: " . count($failed) . "\n";
if (!empty($failed)) {
    echo "Failed pages:\n";
    foreach ($failed as $f) echo "  - $f\n";
}
