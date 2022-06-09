<?php

namespace Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v3;

use Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v3\UserAcctHierarchyServiceClient;
use Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v3\UserAcctHierarchyServiceClassmap;
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

class UserAcctHierarchyServiceClientFactory
{
    public static function factory(string $wsdl, string $username, string $password): \Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v3\UserAcctHierarchyServiceClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(UserAcctHierarchyServiceClassmap::getCollection()),
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

        return new UserAcctHierarchyServiceClient($caller);
    }
}
