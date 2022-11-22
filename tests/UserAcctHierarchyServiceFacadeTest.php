<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\UserAcctHierarchyService;
use Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v2\UserAcctHierarchyServiceClient as v2UserAcctHierarchyServiceClient;
use Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v3\UserAcctHierarchyServiceClient as v3UserAcctHierarchyServiceClient;

it('resolves UserAcctHierarchyServiceClient client', function () {
    $client = UserAcctHierarchyService::client();

    $this->assertInstanceOf(v3UserAcctHierarchyServiceClient::class, $client);

    $client = UserAcctHierarchyService::version('v2')->client();

    $this->assertInstanceOf(v2UserAcctHierarchyServiceClient::class, $client);

    $client = UserAcctHierarchyService::version('v3')->client();

    $this->assertInstanceOf(v3UserAcctHierarchyServiceClient::class, $client);
});
