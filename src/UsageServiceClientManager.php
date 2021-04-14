<?php

namespace Flexsim\FlexnetOperations;

class UsageServiceClientManager extends FlexnetOperationsClientManager
{
    /**
     * get the service client namespace
     *
     * @return string 
     */
    protected function getServiceNamespace()
    {
        return "Flexsim\FlexnetOperations\Services\UsageService";
    }
}
