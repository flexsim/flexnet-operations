<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\FlexnetAuthentication;
use Flexsim\FlexnetOperations\Services\FlexnetAuthentication\FlexnetAuthenticationClient;
use Flexsim\FlexnetOperations\Services\FlexnetAuthentication\v1\FlexnetAuthenticationClient as V1FlexnetAuthenticationClient;
use Orchestra\Testbench\TestCase;

class FlexnetAuthenticationFacadeTest extends TestCase
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
        $client = FlexnetAuthentication::client();

        $this->assertInstanceOf(V1FlexnetAuthenticationClient::class, $client);

        $client = FlexnetAuthentication::version('base')->client();

        $this->assertInstanceOf(FlexnetAuthenticationClient::class, $client);

        $client = FlexnetAuthentication::version('v1')->client();

        $this->assertInstanceOf(V1FlexnetAuthenticationClient::class, $client);
    }
}
