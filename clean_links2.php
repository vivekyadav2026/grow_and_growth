<?php

$viewsDir = __DIR__ . '/resources/views/pages';
$bladeFiles = glob($viewsDir . '/*.blade.php');
$totalReplaced = 0;

foreach ($bladeFiles as $bladePath) {
    $content = file_get_contents($bladePath);
    $originalContent = $content;

    // Fix JSON-LD logo and image still pointing to old domain
    $content = preg_replace(
        '/"logo"\s*:\s*"https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)\/images\/([^"]+)"/',
        '"logo": "{{ asset(\'assets/images/$1\') }}"',
        $content
    );
    $content = preg_replace(
        '/"image"\s*:\s*"https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)\/images\/([^"]+)"/',
        '"image": "{{ asset(\'assets/images/$1\') }}"',
        $content
    );

    // Fix background-image: url(https://www.onlinelegalindia.com/...)
    $content = preg_replace_callback(
        '/background-image:\s*url\(https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)\/[^)]+\/([^)\/]+)\)/',
        function($matches) use (&$totalReplaced) {
            $filename = $matches[1];
            $totalReplaced++;
            return "background-image: url({{ asset('assets/images/{$filename}') }})";
        },
        $content
    );

    // Fix mailto:info@onlinelegalindia.com -> keep as contact info (replace with generic email or #)
    $content = str_replace(
        'href="mailto:info@onlinelegalindia.com"',
        'href="mailto:info@growandgrowth.com"',
        $content
    );
    $content = str_replace(
        '>info@onlinelegalindia.com<',
        '>info@growandgrowth.com<',
        $content
    );
    $content = str_replace(
        '"email": "info@onlinelegalindia.com"',
        '"email": "info@growandgrowth.com"',
        $content
    );

    // Fix any remaining src="https://onlinelegalindia.com/..." that wasn't caught before
    $content = preg_replace_callback(
        '/src="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)\/(?:[^"\/]+\/)*([^"\/]+\.[a-zA-Z]{2,5})"/',
        function($matches) use (&$totalReplaced) {
            $filename = $matches[1];
            $totalReplaced++;
            return "src=\"{{ asset('assets/images/{$filename}') }}\"";
        },
        $content
    );

    // Fix any remaining href="https://onlinelegalindia.com/..." that wasn't mapped
    $content = preg_replace(
        '/href="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)[^"]*"/',
        'href="#"',
        $content
    );

    // Fix remaining content= meta tags still using old domain
    $content = preg_replace_callback(
        '/content="https?:\/\/(?:www\.)?onlinelegalindia\.(?:com|in)\/(?:[^"\/]+\/)*([^"\/]+\.[a-zA-Z]{2,5})"/',
        function($matches) use (&$totalReplaced) {
            $filename = $matches[1];
            $totalReplaced++;
            return "content=\"{{ asset('assets/images/{$filename}') }}\"";
        },
        $content
    );

    if ($content !== $originalContent) {
        file_put_contents($bladePath, $content);
        echo "Pass 2 Cleaned: " . basename($bladePath) . "\n";
    }
}

echo "\nPass 2 Done! Additional replacements: $totalReplaced\n";
