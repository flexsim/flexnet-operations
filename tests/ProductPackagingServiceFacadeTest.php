<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\ProductPackagingService;
use Flexsim\FlexnetOperations\Services\ProductPackagingService\ProductPackagingServiceClient;
use Flexsim\FlexnetOperations\Services\ProductPackagingService\v1\ProductPackagingServiceClient as V1ProductPackagingServiceClient;
use Flexsim\FlexnetOperations\Services\ProductPackagingService\v2\ProductPackagingServiceClient as V2ProductPackagingServiceClient;

it('resolves ProductPackagingServiceClient client', function () {
    $client = ProductPackagingService::client();

    $this->assertInstanceOf(V2ProductPackagingServiceClient::class, $client);

    $client = ProductPackagingService::version('base')->client();

    $this->assertInstanceOf(ProductPackagingServiceClient::class, $client);

    $client = ProductPackagingService::version('v1')->client();

    $this->assertInstanceOf(V1ProductPackagingServiceClient::class, $client);

    $client = ProductPackagingService::version('v2')->client();

    $this->assertInstanceOf(V2ProductPackagingServiceClient::class, $client);
});
