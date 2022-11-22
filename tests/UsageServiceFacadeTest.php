<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\UsageService;
use Flexsim\FlexnetOperations\Services\UsageService\UsageServiceClient;
use Flexsim\FlexnetOperations\Services\UsageService\v1\UsageServiceClient as V1UsageServiceClient;

it('resolves UsageServiceClient client', function () {
    $client = UsageService::client();

    $this->assertInstanceOf(V1UsageServiceClient::class, $client);

    $client = UsageService::version('base')->client();

    $this->assertInstanceOf(UsageServiceClient::class, $client);

    $client = UsageService::version('v1')->client();

    $this->assertInstanceOf(V1UsageServiceClient::class, $client);
});
