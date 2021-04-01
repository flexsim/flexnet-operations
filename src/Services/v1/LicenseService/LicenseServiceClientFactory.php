<?php

namespace Flexsim\FlexnetOperations\Services\v1\LicenseService;

use Phpro\SoapClient\Middleware\BasicAuthMiddleware;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;

class LicenseServiceClientFactory
{

    public static function factory(string $wsdl, string $username, string $password): LicenseServiceClient
    {
        $handler = HttPlugHandle::createWithDefaultClient();

        $handler->addMiddleware(new BasicAuthMiddleware($username, $password));

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(LicenseServiceClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new LicenseServiceClient($engine, $eventDispatcher);
    }
}
