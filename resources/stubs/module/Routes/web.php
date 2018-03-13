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
$router->get('/', ['as' => 'DummySlug.index', 'uses' => 'DummyNameController@index']);
$router->get('/{id}', ['as' => 'DummySlug.show', 'uses' => 'DummyNameController@show']);
$router->get('/create', ['as' => 'DummySlug.create', 'uses' => 'DummyNameController@create']);
$router->post('/create', ['as' => 'DummySlug.store', 'uses' => 'DummyNameController@add']);
$router->get('/{id}/update', ['as' => 'DummySlug.edit', 'uses' => 'DummyNameController@edit']);
$router->post('/{id}/update', ['as' => 'DummySlug.update', 'uses' => 'DummyNameController@update']);
$router->get('/{id}/delete', ['as' => 'DummySlug.destroy', 'uses' => 'DummyNameController@destroy']);
