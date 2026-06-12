<?php
$files = glob('c:/xampp/htdocs/grow_and_growth/public/assets/css/*.css');
$colors = [];
foreach($files as $file) {
    $css = file_get_contents($file);
    preg_match_all('/#([a-fA-F0-9]{3,6})\b/', $css, $matches);
    foreach($matches[1] as $c) {
        $c = strtolower($c);
        if (strlen($c) == 3) {
            $c = $c[0].$c[0].$c[1].$c[1].$c[2].$c[2];
        }
        if (strlen($c) != 6) continue;
        if (!isset($colors[$c])) $colors[$c] = 0;
        $colors[$c]++;
    }
}
arsort($colors);
print_r(array_slice($colors, 0, 30));
