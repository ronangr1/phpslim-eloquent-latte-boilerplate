<?php

if (@!include __DIR__ . '/../vendor/autoload.php') {
    echo 'Vendor autoload is not found. Please run `composer install`';
    exit(1);
}

\define('BP', \dirname(__DIR__));

$app = (require BP . '/config/bootstrap.php');

$app->run();