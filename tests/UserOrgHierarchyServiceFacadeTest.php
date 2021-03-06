<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\UserOrgHierarchyService;
use Flexsim\FlexnetOperations\Services\UserOrgHierarchyService\UserOrgHierarchyServiceClient as UserOrgHierarchyServiceClient;
use Flexsim\FlexnetOperations\Services\UserOrgHierarchyService\v1\UserOrgHierarchyServiceClient as v1UserOrgHierarchyServiceClient;
use Orchestra\Testbench\TestCase;

class UserOrgHierarchyServiceFacadeTest extends TestCase
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
        $client = UserOrgHierarchyService::client();

        $this->assertInstanceOf(v1UserOrgHierarchyServiceClient::class, $client);

        $client = UserOrgHierarchyService::version('base')->client();

        $this->assertInstanceOf(UserOrgHierarchyServiceClient::class, $client);

        $client = UserOrgHierarchyService::version('v1')->client();

        $this->assertInstanceOf(v1UserOrgHierarchyServiceClient::class, $client);
    }
}
