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

//unsecure routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users',['uses' => 'UserController@getUsers']);
});

// more simple routes
$router->get('/users',['uses' => 'UserController@index']);

$router->post('/Adduser', 'UserController@addUsers'); // create new user record

$router->get('/Getuser/{id}', 'UserController@showUsers'); // get user by id

$router->put('/Updateuser/{id}', 'UserController@updateUsers'); // update user record

$router->patch('/Updateuser/{id}', 'UserController@updateUsers'); // update user record

$router->delete('/Deleteuser/{id}', 'UserController@deleteUsers'); // delete record 

