<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'products'], function () use ($router) {
        $router->get('list', ['uses' => 'ProductController@list']);
        $router->get('list/{id}', ['uses' => 'ProductController@info']);
    });

    $router->group(['prefix' => 'slider'], function () use ($router) {
        $router->get('list', ['uses' => 'SliderController@list']);
    });

    // http://localhost/api/products/list/77

});
