<?php

$html = file_get_contents('http://127.0.0.1:8001');
preg_match_all('/(?:href|src)=["\']([^"\']+)["\']/i', $html, $matches);

$links = array_filter($matches[1], function($u) { 
    return strpos($u, '127.0.0.1') !== false || substr($u, 0, 1) === '/'; 
});

$count = 0;
foreach(array_unique($links) as $url) { 
    if (substr($url, 0, 1) === '/') $url = 'http://127.0.0.1:8001' . $url; 
    $h = @get_headers($url); 
    if (!$h || strpos($h[0], '200') === false) {
        echo "404: $url\n"; 
        $count++;
    }
}
echo "Total 404s found: $count\n";
