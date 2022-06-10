<?php

namespace Flexsim\FlexnetOperations\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Phpro\SoapClient\Client client()
 * @method static self connection( $name = NULL)
 * @method static self version( $version = NULL)
 * @method static string getDefaultConnection()
 * @method static setDefaultConnection( $name)
 * @method static string getDefaultVersion( $connection = NULL)
 * @method static setDefaultVersion( $version,  $connection = NULL)
 * @method static array getClients()
 *
 * @method static \Flexsim\FlexnetOperations\Type\TokenResponseType getSecureToken(\Flexsim\FlexnetOperations\Type\IdentityType $secureTokenRequest)
 * @method static \Flexsim\FlexnetOperations\Type\AuthenticateUserReturnType authenticateUser(\Flexsim\FlexnetOperations\Type\AuthenticateUserInputType $AuthenticateUserInput)
 * @method static \Flexsim\FlexnetOperations\Type\StatusResponse validateToken(\Flexsim\FlexnetOperations\Type\TokenType $validateTokenRequest)
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
