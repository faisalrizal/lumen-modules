<?php

namespace DummyNamespace\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'DummyNamespace\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->map();
    }

    /**
     * Define the routes for the module.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();

        $this->mapApiRoutes();

        //
    }

    /**
     * Define the "web" routes for the module.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        global $app;

        $app->router->group(['namespace'  => $this->namespace, 'prefix' => 'DummySlug'], function ($router) {
            require module_path('DummySlug', 'Routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the module.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        global $app;

        $app->api->version('DummyVersion', function ($api) {
            $api->group(['namespace'  => $this->namespace, 'prefix' => 'DummySlug'], function ($api) {
                require module_path('DummySlug', 'Routes/api.php');
            });
        });
    }
}
