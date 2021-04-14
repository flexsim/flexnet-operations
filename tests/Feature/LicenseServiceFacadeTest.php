<?php

namespace Flexsim\FlexnetOperations\Tests\Feature;

use Flexsim\FlexnetOperations\Facades\LicenseService;
use Flexsim\FlexnetOperations\Services\LicenseService\LicenseServiceClient;
use Flexsim\FlexnetOperations\Services\LicenseService\v1\LicenseServiceClient as V1LicenseServiceClient;
use Orchestra\Testbench\TestCase;

class LicenseServiceFacadeTest extends TestCase
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
        $client = LicenseService::client();

        $this->assertInstanceOf(V1LicenseServiceClient::class, $client);

        $client = LicenseService::version('base')->client();

        $this->assertInstanceOf(LicenseServiceClient::class, $client);

        $client = LicenseService::version('v1')->client();

        $this->assertInstanceOf(V1LicenseServiceClient::class, $client);
    }
}
