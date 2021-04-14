<?php

namespace Flexsim\FlexnetOperations\Facades;

use Illuminate\Support\Facades\Facade;

class FlexnetAuthentication extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexnet-operations.flexnet-authentication';
    }
}
