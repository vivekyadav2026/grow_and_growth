<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$viewsDir = __DIR__ . '/resources/views/pages';
$files = glob($viewsDir . '/*.blade.php');

$count = 0;
$injectString = "\n    <!-- Foundida Custom Theme -->\n    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/foundida-theme.css') }}?v=1.0\">\n</head>";

foreach ($files as $file) {
    $html = file_get_contents($file);
    if (empty($html) || filesize($file) < 500) continue;
    
    // Check if already injected
    if (strpos($html, 'foundida-theme.css') !== false) {
        continue;
    }
    
    // Inject right before </head>
    $html = str_ireplace('</head>', $injectString, $html);

    file_put_contents($file, $html);
    $count++;
}

echo "Successfully injected foundida-theme.css into $count files.\n";
