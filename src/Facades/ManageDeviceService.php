<?php

namespace Flexsim\FlexnetOperations\Facades;

use Illuminate\Support\Facades\Facade;

class ManageDeviceService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexnet-operations.manage-device-service';
    }
}
