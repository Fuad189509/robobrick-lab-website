<?php

// Set environment variables for Vercel
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

// Override storage paths to use /tmp (writable on Vercel)
$app = require __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath('/tmp/storage');

// Ensure necessary directories exist in /tmp
$directories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/logs',
];

foreach ($directories as $dir) {
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Handle the request
$app->handleRequest(Illuminate\Http\Request::capture());
