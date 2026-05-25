<?php

// Set ONLY the essential environment variables for Vercel
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

// Require Laravel's public index directly - keep it simple!
require __DIR__ . '/../public/index.php';
