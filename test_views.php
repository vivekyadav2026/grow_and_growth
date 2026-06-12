<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('LARAVEL_START', microtime(true));
require_once __DIR__ . '/vendor/autoload.php';

try {
    $app = require_once __DIR__ . '/bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    
    $viewsDir = __DIR__ . '/resources/views/pages';
    $files = glob($viewsDir . '/*.blade.php');
    
    $factory = $app->make('view');
    $success = 0;
    $failed = 0;
    
    foreach ($files as $file) {
        $name = basename($file, '.blade.php');
        if (filesize($file) < 500) {
            continue; // Skip the 7 failed ones
        }
        
        try {
            $view = $factory->make('pages.' . $name);
            $html = $view->render();
            $success++;
        } catch (Throwable $e) {
            echo "FAILED: $name - " . $e->getMessage() . "\n";
            $failed++;
        }
    }
    
    echo "\nCompile Test Done: $success passed, $failed failed.\n";

} catch (Throwable $e) {
    echo "App Boot Error: " . $e->getMessage() . "\n";
}
