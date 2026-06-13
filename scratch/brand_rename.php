<?php

/**
 * Brand Rename Script: "Online Legal India" → "Foundida"
 * Covers all case variations and URL formats
 */

$directory = 'resources/views';
$extensions = ['blade.php', 'php'];

// Define all replacement pairs [old => new]
$replacements = [
    // Display names (case-sensitive order: most specific first)
    'Online Legal India'           => 'Foundida',
    'OnlineLegalIndia'             => 'Foundida',
    'ONLINE LEGAL INDIA'           => 'FOUNDIDA',
    'online legal india'           => 'Foundida',
    'Online legal india'           => 'Foundida',

    // URL/slug formats
    'onlinelegalindia.com'         => 'foundida.com',
    'www.onlinelegalindia.com'     => 'www.foundida.com',
    'https://onlinelegalindia.com' => 'https://foundida.com',
    'onlinelegalindia'             => 'foundida',

    // Social/username formats
    'online_legal_india'           => 'foundida',
    'OnlineLegalIndia/'            => 'Foundida/',
];

$totalFiles = 0;
$totalReplacements = 0;

// Walk all files recursively
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if (!$file->isFile()) continue;

    // Check if extension matches
    $ext = strtolower($file->getExtension());
    // blade.php files have extension "php" with "blade" in the basename
    $filename = $file->getFilename();
    $isValid = in_array($ext, ['php']) || str_ends_with($filename, '.blade.php');
    if (!$isValid) continue;

    $path = $file->getRealPath();
    $original = file_get_contents($path);
    $updated = $original;

    foreach ($replacements as $old => $new) {
        $updated = str_replace($old, $new, $updated);
    }

    if ($updated !== $original) {
        file_put_contents($path, $updated);
        $count = substr_count($updated, 'Foundida') - substr_count($original, 'Foundida');
        echo "[UPDATED] " . $file->getFilename() . "\n";
        $totalFiles++;
    }
}

echo "\n✅ Done! Updated $totalFiles files.\n";
echo "Brand renamed: 'Online Legal India' → 'Foundida' across the entire project.\n";
