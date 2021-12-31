<?php

/** @var Router $router */

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

use Laravel\Lumen\Routing\Router;

$router->get('/', function () use ($router) {
    return "Primeira API Rest com {$router->app->version()}";
});

$router->group(['prefix' => 'courses'], function() use ($router){
    /**
     * Recurso: Curso (course)
     * Endpoint: /courses (cursos)
     * GET, POST, PUT/PATCH, DELETE
     */

    $router->get('/', 'CourseController@index');
    $router->get('/{id}', 'CourseController@show');

    $router->post('/', 'CourseController@store');
    $router->put('/{id}', 'CourseController@update');
    $router->delete('/{id}', 'CourseController@destroy');

});
