<?php

/** @var Router $router */

use Laravel\Lumen\Routing\Router;

$router->get('/', function () {
    return view('index');
});
