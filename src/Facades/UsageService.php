<?php

namespace Flexsim\FlexnetOperations\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static client()
 * @method static activeConnection()
 * @method static activeVersion()
 * @method static createClient( $connection,  $version)
 * @method static configuration( $connection)
 * @method static validateConfig( $config,  $connection)
 * @method static createWsdlPath( $config)
 * @method static getFactoryClass( $version)
 * @method static connection( $name = NULL)
 * @method static version( $version = NULL)
 * @method static getDefaultConnection()
 * @method static setDefaultConnection( $name)
 * @method static getDefaultVersion( $connection = NULL)
 * @method static setDefaultVersion( $version,  $connection = NULL)
 * @method static getServiceName()
 * @method static getClients()
 *
 * @method static \Flexsim\FlexnetOperations\Type\GetUsageResponse getUsage(Flexsim\FlexnetOperations\Type\GetUsageRequest $GetUsageRequest)
 *
 * @see \Flexsim\FlexnetOperations\FlexnetOperationsClientManager
 * @see \Flexsim\FlexnetOperations\Services\UsageService
 * @see \Flexsim\FlexnetOperations\Services\UsageService\v1
 */
class UsageService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexnet-operations.usage-service';
    }
}
