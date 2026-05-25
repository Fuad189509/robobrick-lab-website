<?php
echo "PHP is running!<br>";
echo "PHP Version: " . phpversion() . "<br>";
echo "<hr>";
echo "Environment Variables:<br>";
echo "APP_NAME: " . getenv('APP_NAME') . "<br>";
echo "APP_ENV: " . getenv('APP_ENV') . "<br>";
echo "APP_DEBUG: " . getenv('APP_DEBUG') . "<br>";
echo "VIEW_COMPILED_PATH: " . getenv('VIEW_COMPILED_PATH') . "<br>";
echo "<hr>";
echo "Directories:<br>";
echo "Current dir: " . __DIR__ . "<br>";
echo "Parent dir: " . dirname(__DIR__) . "<br>";
echo "Vendor exists: " . (file_exists(dirname(__DIR__) . '/vendor/autoload.php') ? 'YES' : 'NO') . "<br>";
echo "Public index exists: " . (file_exists(dirname(__DIR__) . '/public/index.php') ? 'YES' : 'NO') . "<br>";
