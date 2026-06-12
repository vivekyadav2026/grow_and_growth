<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Scan index.blade.php for problematic Blade patterns that cause silent failure

$file = __DIR__ . '/resources/views/pages/index.blade.php';
$content = file_get_contents($file);

echo "File size: " . strlen($content) . " bytes\n";
echo "Line count: " . substr_count($content, "\n") . "\n\n";

// Check for @if without @endif
$ifCount = preg_match_all('/@if\s*\(/', $content);
$endifCount = preg_match_all('/@endif/', $content);
echo "@if count: $ifCount\n";
echo "@endif count: $endifCount\n\n";

// Check for @foreach without @endforeach
$foreachCount = preg_match_all('/@foreach\s*\(/', $content);
$endforeachCount = preg_match_all('/@endforeach/', $content);
echo "@foreach count: $foreachCount\n";
echo "@endforeach count: $endforeachCount\n\n";

// Check for @for without @endfor
$forCount = preg_match_all('/@for\s*\(/', $content);
$endforCount = preg_match_all('/@endfor[^e]/', $content);
echo "@for count: $forCount\n";
echo "@endfor count: $endforCount\n\n";

// Check for @while without @endwhile
$whileCount = preg_match_all('/@while\s*\(/', $content);
$endwhileCount = preg_match_all('/@endwhile/', $content);
echo "@while count: $whileCount\n";
echo "@endwhile count: $endwhileCount\n\n";

// Check for unescaped Blade-like @ directives that might cause issues
preg_match_all('/@([a-zA-Z]+)\s*[\(\{]/', $content, $allDirectives);
$directives = array_unique($allDirectives[1]);
echo "All found Blade-like @ directives: " . implode(', ', $directives) . "\n\n";

// Check for {{ url()->current() }} to ensure it was inserted correctly
$urlCurrentCount = substr_count($content, "url()->current()");
echo "url()->current() occurrences: $urlCurrentCount\n";

// Look for any remaining @context that wasn't escaped
$atContextCount = substr_count($content, '"@context"');
$atTypeCount = substr_count($content, '"@type"');
echo "@context (unescaped): $atContextCount\n";
echo "@type (unescaped): $atTypeCount\n\n";

// Check for malformed {{ asset() }} calls
preg_match_all('/\{\{[^}]+\}\}/', $content, $bladeEchos);
$malformed = array_filter($bladeEchos[0], function($echo) {
    // Contains a newline inside {{ }} which could cause issues
    return strpos($echo, "\n") !== false;
});
echo "Malformed {{ }} blocks: " . count($malformed) . "\n";
foreach (array_slice($malformed, 0, 5) as $m) {
    echo "  -> " . substr($m, 0, 100) . "\n";
}
