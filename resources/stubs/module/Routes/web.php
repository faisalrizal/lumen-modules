<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
$router->get('/', ['as' => 'users.index', 'uses' => 'DummyNameController@index']);
$router->get('/', ['as' => 'users.create', 'uses' => 'DummyNameController@create']);
$router->post('/', ['as' => 'users.store', 'uses' => 'DummyNameController@add']);
$router->get('/{id}', ['as' => 'users.show', 'uses' => 'DummyNameController@show']);
$router->get('/{id}', ['as' => 'users.edit', 'uses' => 'DummyNameController@edit']);
$router->post('/{id}', ['as' => 'users.update', 'uses' => 'DummyNameController@update']);
$router->get('/{id}', ['as' => 'users.destroy', 'uses' => 'DummyNameController@destroy']);