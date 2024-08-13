<?php

namespace Flexnet\EntitlementOrderService;

use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\Plugin\HeaderRemovePlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Authentication\BasicAuth;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Psr18Transport;
use Symfony\Component\EventDispatcher\EventDispatcher;

class EntitlementOrderServiceClientFactory
{
    public static function factory(string $wsdl, string $username, string $password): \Flexnet\EntitlementOrderService\EntitlementOrderServiceClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(EntitlementOrderServiceClassmap::getCollection()),
            Psr18Transport::createForClient(
                new PluginClient(
                    Psr18ClientDiscovery::find(),
                    [
                        new AuthenticationPlugin(new BasicAuth($username, $password)),
                        new HeaderRemovePlugin(['User-Agent']),
                        new HeaderAppendPlugin(['User-Agent' => 'flexnet-soap']),

                    ]
                )
            )
        );

        $eventDispatcher = new EventDispatcher;
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new EntitlementOrderServiceClient($caller);
    }
}
