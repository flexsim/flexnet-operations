<?php

namespace Flexsim\FlexnetOperations\Facades;

use Illuminate\Support\Facades\Facade;

class ProductPackagingService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexnet-operations.product-packaging-service';
    }
}
