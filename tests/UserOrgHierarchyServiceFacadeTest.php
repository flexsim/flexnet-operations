<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\UserOrgHierarchyService;
use Flexsim\FlexnetOperations\Services\UserOrgHierarchyService\UserOrgHierarchyServiceClient as UserOrgHierarchyServiceClient;
use Flexsim\FlexnetOperations\Services\UserOrgHierarchyService\v1\UserOrgHierarchyServiceClient as v1UserOrgHierarchyServiceClient;

it('resolves UserOrgHierarchyServiceClient client', function () {
    $client = UserOrgHierarchyService::client();

    $this->assertInstanceOf(v1UserOrgHierarchyServiceClient::class, $client);

    $client = UserOrgHierarchyService::version('base')->client();

    $this->assertInstanceOf(UserOrgHierarchyServiceClient::class, $client);

    $client = UserOrgHierarchyService::version('v1')->client();

    $this->assertInstanceOf(v1UserOrgHierarchyServiceClient::class, $client);
});
