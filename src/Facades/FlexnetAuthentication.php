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
 * @method static \Flexsim\FlexnetOperations\Type\TokenResponseType getSecureToken(Flexsim\FlexnetOperations\Type\IdentityType $secureTokenRequest) 
 * @method static \Flexsim\FlexnetOperations\Type\AuthenticateUserReturnType authenticateUser(Flexsim\FlexnetOperations\Type\AuthenticateUserInputType $AuthenticateUserInput) 
 * @method static \Flexsim\FlexnetOperations\Type\StatusResponse validateToken(Flexsim\FlexnetOperations\Type\TokenType $validateTokenRequest) 
 *
 * @see \Flexsim\FlexnetOperations\FlexnetOperationsClientManager
 * @see \Flexsim\FlexnetOperations\Services\FlexnetAuthenticationService
 * @see \Flexsim\FlexnetOperations\Services\FlexnetAuthenticationService\v1
 */
class FlexnetAuthentication extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexnet-operations.flexnet-authentication';
    }
}
