<?php

namespace Flexsim\FlexnetOperations;

class UserOrgHierarchyServiceClientManager extends FlexnetOperationsClientManager
{
    /**
     * get the service client namespace
     *
     * @return string 
     */
    protected function getServiceNamespace()
    {
        return "Flexsim\FlexnetOperations\Services\UserOrgHierarchyService";
    }
}
