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
        $this->app->singleton('flexnet-operations.entitlement-order-service', function ($app) {
            return new EntitlementOrderServiceClientManager($app);
        });

        // Register the main class to use with the facade
        $this->app->singleton('flexnet-operations.flexnet-authentication', function ($app) {
            return new FlexnetAuthenticationClientManager($app);
        });

        // Register the main class to use with the facade
        $this->app->singleton('flexnet-operations.license-service', function ($app) {
            return new LicenseServiceClientManager($app);
        });

        // Register the main class to use with the facade
        $this->app->singleton('flexnet-operations.manage-device-service', function ($app) {
            return new ManageDeviceServiceClientManager($app);
        });

        // Register the main class to use with the facade
        $this->app->singleton('flexnet-operations.product-packaging-service', function ($app) {
            return new ProductPackagingServiceClientManager($app);
        });

        // Register the main class to use with the facade
        $this->app->singleton('flexnet-operations.usage-service', function ($app) {
            return new UsageServiceClientManager($app);
        });

        // Register the main class to use with the facade
        $this->app->singleton('flexnet-operations.user-acct-hierarchy-service', function ($app) {
            return new UserAcctHierarchyServiceClientManager($app);
        });

        // Register the main class to use with the facade
        $this->app->singleton('flexnet-operations.user-org-hierarchy-service', function ($app) {
            return new UserOrgHierarchyServiceClientManager($app);
        });
    }
}
