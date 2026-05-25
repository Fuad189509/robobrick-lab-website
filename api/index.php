<?php

// Set Vercel environment variables FIRST
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

// Make sure storage directories exist in /tmp
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/logs',
];
foreach ($dirs as $d) {
    if (!is_dir($d)) {
        mkdir($d, 0777, true);
    }
}

// Define custom storage path for Laravel
define('LARAVEL_STORAGE_PATH', '/tmp/storage');

// Now load Laravel's public index
require __DIR__ . '/../public/index.php';
