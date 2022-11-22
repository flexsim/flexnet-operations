<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\Facades\FlexnetAuthentication;
use Flexsim\FlexnetOperations\Services\FlexnetAuthentication\FlexnetAuthenticationClient;
use Flexsim\FlexnetOperations\Services\FlexnetAuthentication\v1\FlexnetAuthenticationClient as V1FlexnetAuthenticationClient;

it('resolves FlexnetAuthenticationClient client', function () {
    $client = FlexnetAuthentication::client();

    $this->assertInstanceOf(V1FlexnetAuthenticationClient::class, $client);

    $client = FlexnetAuthentication::version('base')->client();

    $this->assertInstanceOf(FlexnetAuthenticationClient::class, $client);

    $client = FlexnetAuthentication::version('v1')->client();

    $this->assertInstanceOf(V1FlexnetAuthenticationClient::class, $client);
});
