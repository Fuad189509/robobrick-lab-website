<?php

// Set environment variables for Vercel
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');
putenv('APP_CONFIG_CACHE=/dev/null');
putenv('APP_ROUTES_CACHE=/dev/null');
putenv('APP_EVENTS_CACHE=/dev/null');

// Cleanup any existing cache files in /tmp
$cacheFiles = glob('/tmp/*.php');
if ($cacheFiles) {
    foreach ($cacheFiles as $file) {
        @unlink($file);
    }
}

// Ensure the tmp directory is writable and clean
$directories = [
    '/tmp/views',
    '/tmp/cache',
];
foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

// Require Laravel's public index
require __DIR__ . '/../public/index.php';
