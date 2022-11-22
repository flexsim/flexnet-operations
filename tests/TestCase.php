<?php

namespace Flexsim\FlexnetOperations\Tests;

use Flexsim\FlexnetOperations\FlexnetOperationsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FlexnetOperationsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('flexnet-operations.connections.flexnet.url', 'https://example.flexnet.com');
        config()->set('flexnet-operations.connections.flexnet.user', 'admin');
        config()->set('flexnet-operations.connections.flexnet.password', 'password');
    }
}
