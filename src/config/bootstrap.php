<?php

use DI\ContainerBuilder;
use Slim\App;
use Slim\Flash\Messages;

session_start();

require_once BP . '/vendor/autoload.php';

$container = (new ContainerBuilder())
    ->addDefinitions(__DIR__ . '/container.php')
    ->addDefinitions(
        [
            'flash' => function () {
                $storage = [];
                return new Messages($storage);
            }
        ]
    )
    ->build();

return $container->get(App::class);
