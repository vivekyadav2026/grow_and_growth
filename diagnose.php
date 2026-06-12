<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('LARAVEL_START', microtime(true));
require_once __DIR__ . '/vendor/autoload.php';

try {
    $app = require_once __DIR__ . '/bootstrap/app.php';
    
    // Try to compile the index view
    $factory = $app->make('view');
    $view = $factory->make('pages.index');
    $html = $view->render();
    echo "SUCCESS! HTML length: " . strlen($html) . "\n";
    echo "First 500 chars:\n" . substr($html, 0, 500) . "\n";
} catch (Throwable $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . " line " . $e->getLine() . "\n";
    echo "Trace:\n" . $e->getTraceAsString() . "\n";
}
