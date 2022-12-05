<?php

namespace Flexsim\FlexnetOperations;

use Flexnet\EntitlementOrderService\EntitlementOrderServiceClient;
use Flexnet\EntitlementOrderService\EntitlementOrderServiceClientFactory;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FlexnetOperationsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('flexnet-operations')
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->singleton(EntitlementOrderServiceClient::class, function () {
            return EntitlementOrderServiceClientFactory::factory(config('flexnet-operations.entitlementOrderService.wsdl'), config('flexnet-operations.username'), config('flexnet-operations.password'));
        });
    }
}
