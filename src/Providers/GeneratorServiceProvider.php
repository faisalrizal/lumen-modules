<?php

namespace Tokolabs\Modules\Providers;

use Illuminate\Support\ServiceProvider;

class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $generators = [
            'command.make.module'               => \Tokolabs\Modules\Console\Generators\MakeModuleCommand::class,
            'command.make.module.controller-web'    => \Tokolabs\Modules\Console\Generators\MakeControllerWebCommand::class,
            'command.make.module.controller-api'    => \Tokolabs\Modules\Console\Generators\MakeControllerApiCommand::class,
            'command.make.module.middleware'    => \Tokolabs\Modules\Console\Generators\MakeMiddlewareCommand::class,
            'command.make.module.migration'     => \Tokolabs\Modules\Console\Generators\MakeMigrationCommand::class,
            'command.make.module.model'         => \Tokolabs\Modules\Console\Generators\MakeModelCommand::class,
            'command.make.module.policy'        => \Tokolabs\Modules\Console\Generators\MakePolicyCommand::class,
            'command.make.module.provider'      => \Tokolabs\Modules\Console\Generators\MakeProviderCommand::class,
            'command.make.module.repository'    => \Tokolabs\Modules\Console\Generators\MakeRepositoryCommand::class,
            'command.make.module.request'       => \Tokolabs\Modules\Console\Generators\MakeRequestCommand::class,
            'command.make.module.seeder'        => \Tokolabs\Modules\Console\Generators\MakeSeederCommand::class,
            'command.make.module.test'          => \Tokolabs\Modules\Console\Generators\MakeTestCommand::class,
            'command.make.module.transformer'   => \Tokolabs\Modules\Console\Generators\MakeTransformerCommand::class,
        ];

        foreach ($generators as $slug => $class) {
            $this->app->singleton($slug, function ($app) use ($slug, $class) {
                return $app[$class];
            });

            $this->commands($slug);
        }
    }
}
