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
global $app;

$app->router->get('/DummySlug', function () {
    dd('This is the DummyName module index page. Build something great!');exit;
});
