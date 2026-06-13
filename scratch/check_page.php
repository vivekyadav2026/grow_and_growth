<?php
$html = @file_get_contents('http://127.0.0.1:8000');
if ($html === false) {
    echo "Error fetching page\n";
    exit(1);
}
$start = strpos($html, '<section class="foundida-services-sec">');
if ($start === false) {
    echo "Services section not found\n";
    exit(1);
}
$end = strpos($html, '</section>', $start) + 10;
echo substr($html, $start, $end - $start) . "\n";
