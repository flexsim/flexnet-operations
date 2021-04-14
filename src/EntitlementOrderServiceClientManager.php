<?php

namespace Flexsim\FlexnetOperations;

class EntitlementOrderServiceClientManager extends FlexnetOperationsClientManager
{
    /**
     * get the service client namespace
     *
     * @return string 
     */
    protected function getServiceNamespace()
    {
        return "Flexsim\FlexnetOperations\Services\EntitlementOrderService";
    }
}
