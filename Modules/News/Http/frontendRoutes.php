<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix'=>'/news'] , function(Router $router) {
    $router->get('/' , 'PublicController@home');
});