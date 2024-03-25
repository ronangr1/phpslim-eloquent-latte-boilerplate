<?php

use Slim\App;

return function (App $app) {
    $app->add(
        function ($request, $next) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            $this->get('flash')->__construct($_SESSION);

            return $next->handle($request);
        }
    );
};