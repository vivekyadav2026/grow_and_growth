<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$logOutput = "404: http://127.0.0.1:8001/assets/icon/favicon.ico
404: http://127.0.0.1:8001/assets/css/cut.css
404: http://127.0.0.1:8001/assets/css/alternative-contact-popup.css
404: http://127.0.0.1:8001/assets/css/fontawesome.min.css
404: http://127.0.0.1:8001/assets/css/fontawesome-5.13.1/css/all.css
404: http://127.0.0.1:8001/assets/js/fontawesome.min.js
404: http://127.0.0.1:8001/assets/images/logos/alternative-contact-popup-logo.webp
404: http://127.0.0.1:8001/assets/images/logo6-1.svg
404: http://127.0.0.1:8001/assets/images/Online-legal-india-republic.png
404: http://127.0.0.1:8001/assets/images/trademark-search-block/legal-corporate-CC/google-rating-new.webp
404: http://127.0.0.1:8001/assets/images/home-modification-new/sourav-ganguly-oli-banner.webp
404: http://127.0.0.1:8001/assets/images/home-modification-new/about-saurabh-shukla-new.webp
404: http://127.0.0.1:8001/assets/images/home-modification/about-us.webp
404: http://127.0.0.1:8001/assets/images/home-modification/trademark-registration.webp
404: http://127.0.0.1:8001/assets/images/home-modification/iso-registration-home-image.webp
404: http://127.0.0.1:8001/assets/images/home-modification/GST-registration.webp
404: http://127.0.0.1:8001/assets/images/home-modification/company-registration.webp
404: http://127.0.0.1:8001/assets/images/home-modification/import-export-code.webp
404: http://127.0.0.1:8001/assets/images/home-modification/consumer-complaint-odr.webp
404: http://127.0.0.1:8001/assets/images/home-modification/fssai-registration.webp
404: http://127.0.0.1:8001/assets/images/home-modification/odr.webp
404: http://127.0.0.1:8001/assets/images/home-modification/virtual-cxo-service-all-service.webp
404: http://127.0.0.1:8001/assets/images/home-modification/big-corporate-services-image.webp
404: http://127.0.0.1:8001/assets/images/home-modification/hr-compliance-homepage.webp
404: http://127.0.0.1:8001/assets/images/home-modification/gem-registration.webp
404: http://127.0.0.1:8001/assets/images/home-modification-new/raid.webp
404: http://127.0.0.1:8001/assets/images/home-modification-new/monday-meeting.webp
404: http://127.0.0.1:8001/assets/images/home-modification-new/trademark.webp
404: http://127.0.0.1:8001/assets/images/home-modification/mediator-and-arbitrator.webp
404: http://127.0.0.1:8001/assets/images/home-modification-new/tedx-videoo.webp
404: http://127.0.0.1:8001/assets/images/home-modification-new/podcast-creative.webp
404: http://127.0.0.1:8001/assets/images/home-modification-new/podcastt.webp
404: http://127.0.0.1:8001/assets/images/banner/md-new3.webp
404: http://127.0.0.1:8001/assets/images/about-us/zeenews.webp
404: http://127.0.0.1:8001/assets/images/about-us/footer-forbes-logo-new.webp
404: http://127.0.0.1:8001/assets/images/home-modification/businessman-of-the-year-one.webp
404: http://127.0.0.1:8001/assets/images/home-modification/TEDx.webp
404: http://127.0.0.1:8001/assets/images/home-modification/IIT.webp
404: http://127.0.0.1:8001/assets/images/logos/google.webp
404: http://127.0.0.1:8001/assets/images/logos/paytm.webp
404: http://127.0.0.1:8001/assets/images/banner/meta-logo.webp
404: http://127.0.0.1:8001/assets/images/banner/aws-logo.webp
404: http://127.0.0.1:8001/assets/images/banner/tata-home-logo.webp
404: http://127.0.0.1:8001/assets/images/banner/truecaller-home-logo.webp
404: http://127.0.0.1:8001/assets/images/home-modification/recognized.webp
404: http://127.0.0.1:8001/assets/images/home-modification/happy_customers.webp
404: http://127.0.0.1:8001/assets/images/home-modification/iso-mark.webp
404: http://127.0.0.1:8001/assets/images/home-modification/data_security.webp
404: http://127.0.0.1:8001/assets/images/home-modification/experts.webp
404: http://127.0.0.1:8001/assets/images/home-modification/on-time.webp
404: http://127.0.0.1:8001/assets/images/home-modification/quick.webp
404: http://127.0.0.1:8001/assets/images/home-modification/users_oli_Jan_22.webp
404: http://127.0.0.1:8001/assets/images/home-modification/affordable.webp
404: http://127.0.0.1:8001/assets/images/footer-logo.png
404: http://127.0.0.1:8001/assets/images/fastinfo-group.svg
404: http://127.0.0.1:8001/assets/js/main.js
404: http://127.0.0.1:8001/assets/js/header.js
404: http://127.0.0.1:8001/assets/js/owl.carousel.min.js
404: http://127.0.0.1:8001/assets/js/jquery.validate.js
404: http://127.0.0.1:8001/assets/images/awrad-asia.png";

$lines = explode("\n", trim($logOutput));
$success = 0;
$failed = 0;

foreach ($lines as $line) {
    if (strpos($line, '404: http://127.0.0.1:8001/assets/') !== false) {
        $path = str_replace('404: http://127.0.0.1:8001/assets/', '', $line);
        $path = trim($path);
        
        $onlineUrl = "https://www.onlinelegalindia.com/" . $path;
        $localPath = __DIR__ . '/public/assets/' . $path;
        
        // Ensure directory exists
        $dir = dirname($localPath);
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        
        // Download
        echo "Downloading: $onlineUrl\n";
        
        $ch = curl_init($onlineUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        
        $data = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($code == 200 && $data) {
            file_put_contents($localPath, $data);
            echo " -> Saved to $localPath\n";
            $success++;
        } else {
            echo " -> FAILED ($code)\n";
            $failed++;
        }
    }
}

echo "\nDone! Downloaded $success files, $failed failed.\n";

