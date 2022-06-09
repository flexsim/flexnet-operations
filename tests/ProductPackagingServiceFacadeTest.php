<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\ProductPackagingService;
use Flexsim\FlexnetOperations\Services\ProductPackagingService\ProductPackagingServiceClient;
use Flexsim\FlexnetOperations\Services\ProductPackagingService\v1\ProductPackagingServiceClient as V1ProductPackagingServiceClient;
use Flexsim\FlexnetOperations\Services\ProductPackagingService\v2\ProductPackagingServiceClient as V2ProductPackagingServiceClient;
use Orchestra\Testbench\TestCase;

class ProductPackagingServiceFacadeTest extends TestCase
{
    protected $loadEnvironmentVariables = true;

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            'Flexsim\FlexnetOperations\FlexnetOperationsServiceProvider',
        ];
    }

    public function testClientFunction()
    {
        $client = ProductPackagingService::client();

        $this->assertInstanceOf(V2ProductPackagingServiceClient::class, $client);

        $client = ProductPackagingService::version('base')->client();

        $this->assertInstanceOf(ProductPackagingServiceClient::class, $client);

        $client = ProductPackagingService::version('v1')->client();

        $this->assertInstanceOf(V1ProductPackagingServiceClient::class, $client);

        $client = ProductPackagingService::version('v2')->client();

        $this->assertInstanceOf(V2ProductPackagingServiceClient::class, $client);
    }
}
