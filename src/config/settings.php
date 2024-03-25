<?php

// Should be set to 0 in production
error_reporting(E_ALL);

// Should be set to '0' in production
ini_set('display_errors', '1');

// Settings
$settings = [
    'determineRouteBeforeAppMiddleware' => false,
    'displayErrorDetails' => true,
    'db' => [
        'driver' => 'pgsql',
        'host' => 'db',
        'database' => 'postgres',
        'username' => 'postgres',
        'password' => 'postgres',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]
];

return $settings;