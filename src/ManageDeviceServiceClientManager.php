<?php

namespace Flexsim\FlexnetOperations;

class ManageDeviceServiceClientManager extends FlexnetOperationsClientManager
{
    /**
     * get the service client namespace
     *
     * @return string 
     */
    protected function getServiceNamespace()
    {
        return "Flexsim\FlexnetOperations\Services\ManageDeviceService";
    }
}
