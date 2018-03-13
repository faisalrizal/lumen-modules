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
$api->get('/', ['as' => 'api.DummySlug.all', 'uses' => 'ApiDummyNameController@all']);
$api->get('/{id}', ['as' => 'api.DummySlug.get', 'uses' => 'ApiDummyNameController@get']);
$api->post('/', ['as' => 'api.DummySlug.add', 'uses' => 'ApiDummyNameController@add']);
$api->put('/{id}', ['as' => 'api.DummySlug.put', 'uses' => 'ApiDummyNameController@put']);
$api->delete('/{id}', ['as' => 'api.DummySlug.del', 'uses' => 'ApiDummyNameController@del']);