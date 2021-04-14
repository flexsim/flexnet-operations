<?php

namespace Flexsim\FlexnetOperations\Tests\Feature;

use Flexsim\FlexnetOperations\Facades\ManageDeviceService;
use Flexsim\FlexnetOperations\Services\ManageDeviceService\ManageDeviceServiceClient;
use Flexsim\FlexnetOperations\Services\ManageDeviceService\v1\ManageDeviceServiceClient as V1ManageDeviceServiceClient;
use Flexsim\FlexnetOperations\Services\ManageDeviceService\v2\ManageDeviceServiceClient as V2ManageDeviceServiceClient;
use Flexsim\FlexnetOperations\Services\ManageDeviceService\v3\ManageDeviceServiceClient as V3ManageDeviceServiceClient;
use Orchestra\Testbench\TestCase;

class ManageDeviceServiceFacadeTest extends TestCase
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
        $client = ManageDeviceService::client();

        $this->assertInstanceOf(V3ManageDeviceServiceClient::class, $client);

        $client = ManageDeviceService::version('base')->client();

        $this->assertInstanceOf(ManageDeviceServiceClient::class, $client);

        $client = ManageDeviceService::version('v1')->client();

        $this->assertInstanceOf(V1ManageDeviceServiceClient::class, $client);

        $client = ManageDeviceService::version('v2')->client();

        $this->assertInstanceOf(V2ManageDeviceServiceClient::class, $client);

        $client = ManageDeviceService::version('v3')->client();

        $this->assertInstanceOf(V3ManageDeviceServiceClient::class, $client);
    }
}
