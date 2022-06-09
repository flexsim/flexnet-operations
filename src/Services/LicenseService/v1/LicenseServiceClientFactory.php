<?php

namespace Flexsim\FlexnetOperations\Services\LicenseService\v1;

use Flexsim\FlexnetOperations\Services\LicenseService\v1\LicenseServiceClient;
use Flexsim\FlexnetOperations\Services\LicenseService\v1\LicenseServiceClassmap;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Authentication\BasicAuth;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Psr18Transport\Psr18Transport;

class LicenseServiceClientFactory
{
    public static function factory(string $wsdl, string $username, string $password): \Flexsim\FlexnetOperations\Services\LicenseService\v1\LicenseServiceClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(LicenseServiceClassmap::getCollection()),
            Psr18Transport::createForClient(
                new PluginClient(
                    Psr18ClientDiscovery::find(),
                    [
                        new AuthenticationPlugin(new BasicAuth($username, $password)),
                    ]
                )
            )
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new LicenseServiceClient($caller);
    }
}
