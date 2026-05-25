<?php

// Set basic environment variables for Vercel
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

// Just require Laravel's public index directly
require __DIR__ . '/../public/index.php';
