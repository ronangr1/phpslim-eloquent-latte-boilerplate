<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();
    $dbSettings = $container->get('settings')['db'];
    $capsule = new Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($dbSettings);
    $capsule->bootEloquent();
    $capsule->setAsGlobal();
};