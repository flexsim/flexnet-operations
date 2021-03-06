<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\EntitlementOrderService;
use Flexsim\FlexnetOperations\Services\EntitlementOrderService\EntitlementOrderServiceClient;
use Flexsim\FlexnetOperations\Services\EntitlementOrderService\v1\EntitlementOrderServiceClient as V1EntitlementOrderServiceClient;
use Flexsim\FlexnetOperations\Services\EntitlementOrderService\v2\EntitlementOrderServiceClient as V2EntitlementOrderServiceClient;
use Flexsim\FlexnetOperations\Services\EntitlementOrderService\v3\EntitlementOrderServiceClient as V3EntitlementOrderServiceClient;
use Orchestra\Testbench\TestCase;

class EntitlementOrderServiceFacadeTest extends TestCase
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
        $client = EntitlementOrderService::client();

        $this->assertInstanceOf(V3EntitlementOrderServiceClient::class, $client);

        $client = EntitlementOrderService::version('base')->client();

        $this->assertInstanceOf(EntitlementOrderServiceClient::class, $client);

        $client = EntitlementOrderService::version('v1')->client();

        $this->assertInstanceOf(V1EntitlementOrderServiceClient::class, $client);

        $client = EntitlementOrderService::version('v2')->client();

        $this->assertInstanceOf(V2EntitlementOrderServiceClient::class, $client);

        $client = EntitlementOrderService::version('v3')->client();

        $this->assertInstanceOf(V3EntitlementOrderServiceClient::class, $client);
    }
}
