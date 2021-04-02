<?php

namespace Flexsim\FlexnetOperations\Services\EntitlementOrderService\v2;

use Phpro\SoapClient\Middleware\BasicAuthMiddleware;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;

class EntitlementOrderServiceClientFactory
{

    public static function factory(string $wsdl, string $username, string $password): EntitlementOrderServiceClient
    {
        $handler = HttPlugHandle::createWithDefaultClient();

        $handler->addMiddleware(new BasicAuthMiddleware($username, $password));

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(EntitlementOrderServiceClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new EntitlementOrderServiceClient($engine, $eventDispatcher);
    }
}
