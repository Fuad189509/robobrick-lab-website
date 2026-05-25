<?php

// Require Composer autoloader FIRST!
require __DIR__ . '/../vendor/autoload.php';

// Set environment variables for Vercel
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

// Define storage paths to use /tmp (writable on Vercel)
define('LARAVEL_STORAGE_PATH', '/tmp/storage');

// Ensure necessary directories exist in /tmp
$directories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/logs',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
];

foreach ($directories as $dir) {
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Now require Laravel's public index.php
require __DIR__ . '/../public/index.php';
