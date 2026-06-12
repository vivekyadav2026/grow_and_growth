<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$viewsDir = __DIR__ . '/resources/views/pages';
$files = glob($viewsDir . '/*.blade.php');

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

$count = 0;

foreach ($files as $file) {
    $html = file_get_contents($file);
    if (empty($html) || filesize($file) < 500) continue;
    
    $originalHtml = $html;

    // We must map the relative versions (which fix_pages_safe.php produced) as well as any leftover absolute URLs.
    // e.g. "/services/fssai-registration/" -> "{{ url('/fssai-registration') }}"
    
    foreach ($pages as $routeName => $originalUrl) {
        $path = parse_url($originalUrl, PHP_URL_PATH); // e.g. "/services/fssai-registration/"
        $localUrl = ($routeName === 'index') ? '/' : '/' . $routeName; // e.g. "/" or "/fssai-registration"
        
        // Exact replacements
        $html = str_replace('href="' . $originalUrl . '"', 'href="{{ url(\'' . $localUrl . '\') }}"', $html);
        $html = str_replace('href="' . rtrim($originalUrl, '/') . '"', 'href="{{ url(\'' . $localUrl . '\') }}"', $html);
        
        // Replace relative versions created in the previous run
        $html = str_replace('href="' . $path . '"', 'href="{{ url(\'' . $localUrl . '\') }}"', $html);
        $html = str_replace('href="' . rtrim($path, '/') . '"', 'href="{{ url(\'' . $localUrl . '\') }}"', $html);
        
        // Also http variants
        $httpUrl = str_replace('https://', 'http://', $originalUrl);
        $html = str_replace('href="' . $httpUrl . '"', 'href="{{ url(\'' . $localUrl . '\') }}"', $html);
        $html = str_replace('href="' . rtrim($httpUrl, '/') . '"', 'href="{{ url(\'' . $localUrl . '\') }}"', $html);
    }
    
    // Also remove generic non-mapped services to # to prevent 404s
    $newHtml = preg_replace('/href="\/services\/[^"]*"/i', 'href="#"', $html);
    if ($newHtml !== null) $html = $newHtml;

    if ($html !== $originalHtml) {
        file_put_contents($file, $html);
        $count++;
    }
}

echo "Successfully mapped internal links in $count files.\n";
