<?php

use Psr\Container\ContainerInterface;
use Slim\App;
use Slim\Factory\AppFactory;

return [
    'settings' => function () {
        return require __DIR__ . '/settings.php';
    },

    App::class => function (ContainerInterface $container) {
        $app = AppFactory::createFromContainer($container);

        // Register routes
        (require __DIR__ . '/routes.php')($app);

        // Register Flash Message
        (require __DIR__ . '/flash.php')($app);

        // Register middleware
        (require __DIR__ . '/middleware.php')($app);

        // Register Db
        (require __DIR__ . '/db.php')($app);

        return $app;
    },
];