<?php

namespace Flexsim\FlexnetOperations\Tests\Feature;

use Flexsim\FlexnetOperations\Facades\UsageService;
use Flexsim\FlexnetOperations\Services\UsageService\UsageServiceClient;
use Flexsim\FlexnetOperations\Services\UsageService\v1\UsageServiceClient as V1UsageServiceClient;
use Orchestra\Testbench\TestCase;

class UsageServiceFacadeTest extends TestCase
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
        $client = UsageService::client();

        $this->assertInstanceOf(V1UsageServiceClient::class, $client);

        $client = UsageService::version('base')->client();

        $this->assertInstanceOf(UsageServiceClient::class, $client);

        $client = UsageService::version('v1')->client();

        $this->assertInstanceOf(V1UsageServiceClient::class, $client);
    }
}
