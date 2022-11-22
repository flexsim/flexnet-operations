<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\LicenseService;
use Flexsim\FlexnetOperations\Services\LicenseService\LicenseServiceClient;
use Flexsim\FlexnetOperations\Services\LicenseService\v1\LicenseServiceClient as V1LicenseServiceClient;

it('resolves LicenseServiceClient client', function () {
    $client = LicenseService::client();

    $this->assertInstanceOf(V1LicenseServiceClient::class, $client);

    $client = LicenseService::version('base')->client();

    $this->assertInstanceOf(LicenseServiceClient::class, $client);

    $client = LicenseService::version('v1')->client();

    $this->assertInstanceOf(V1LicenseServiceClient::class, $client);
});
