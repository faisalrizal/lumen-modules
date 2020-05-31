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
$api->group(['prefix' => 'DummySlug', 'middleware' => 'api.auth'], function($api) { 
	$api->get('/', ['as' => 'api.DummySlug.all', 'uses' => 'DummyNameController@all']);
	$api->get('/{id}', ['as' => 'api.DummySlug.get', 'uses' => 'DummyNameController@get']);
	$api->post('/', ['as' => 'api.DummySlug.add', 'uses' => 'DummyNameController@add']);
	$api->put('/{id}', ['as' => 'api.DummySlug.put', 'uses' => 'DummyNameController@put']);
	$api->delete('/{id}', ['as' => 'api.DummySlug.del', 'uses' => 'DummyNameController@del']);
});