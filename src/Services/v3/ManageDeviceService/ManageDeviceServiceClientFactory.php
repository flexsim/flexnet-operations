<?php

namespace Flexsim\FlexnetOperations\Services\v3\ManageDeviceService;

use Flexsim\FlexnetOperations\Services\v2\ManageDeviceService\ManageDeviceServiceClient;
use Phpro\SoapClient\Middleware\BasicAuthMiddleware;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;

class ManageDeviceServiceClientFactory
{

    public static function factory(string $wsdl, string $username, string $password): ManageDeviceServiceClient
    {
        $handler = HttPlugHandle::createWithDefaultClient();

        $handler->addMiddleware(new BasicAuthMiddleware($username, $password));

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ManageDeviceServiceClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new ManageDeviceServiceClient($engine, $eventDispatcher);
    }
}
