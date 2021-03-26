<?php

namespace  Flexsim\FlexnetOperations;

use Illuminate\Support\ServiceProvider;

class FlexnetOperationsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('flexnet-operations.php'),
            ], 'config');
        }
    }

    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'flexnet-operations');

        // Register the main class to use with the facade
        $this->app->singleton('flexnet-operations', function ($app) {
            return new FlexnetOperationsManager($app);
        });

        $this->app->bind('flexnet-operations.entitlement-order-service', function ($app) {
            return $app['flexnet-operations']->connection();
        });
    }
}
