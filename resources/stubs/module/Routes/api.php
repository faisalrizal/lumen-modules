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

$api->get('/', ['as' => 'api.users.all', 'uses' => 'ApiDummyNameController@all']);
$api->get('/{id}', ['as' => 'api.users.get', 'uses' => 'ApiDummyNameController@get']);
$api->post('/', ['as' => 'api.users.add', 'uses' => 'ApiDummyNameController@add']);
$api->put('/{id}', ['as' => 'api.users.put', 'uses' => 'ApiDummyNameController@put']);
$api->delete('/{id}', ['as' => 'api.users.del', 'uses' => 'ApiDummyNameController@del']);