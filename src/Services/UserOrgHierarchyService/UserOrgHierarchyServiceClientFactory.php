<?php

namespace Flexsim\FlexnetOperations\Services\UserOrgHierarchyService;

use Phpro\SoapClient\Middleware\BasicAuthMiddleware;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;

class UserOrgHierarchyServiceClientFactory
{

    public static function factory(string $wsdl, string $username, string $password): UserOrgHierarchyServiceClient
    {
        $handler = HttPlugHandle::createWithDefaultClient();

        $handler->addMiddleware(new BasicAuthMiddleware($username, $password));

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(UserOrgHierarchyServiceClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new UserOrgHierarchyServiceClient($engine, $eventDispatcher);
    }
}
