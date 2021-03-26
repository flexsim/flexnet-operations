<?php

namespace Flexsim\FlexnetOperations\Services\FlexnetAuthentication;

use Phpro\SoapClient\Middleware\BasicAuthMiddleware;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;

class FlexnetAuthenticationClientFactory
{

    public static function factory(string $wsdl, string $username, string $password): FlexnetAuthenticationClient
    {
        $handler = HttPlugHandle::createWithDefaultClient();

        $handler->addMiddleware(new BasicAuthMiddleware($username, $password));

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(FlexnetAuthenticationClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new FlexnetAuthenticationClient($engine, $eventDispatcher);
    }
}
