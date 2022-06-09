<?php

namespace Flexsim\FlexnetOperations\Services\FlexnetAuthentication;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class FlexnetAuthenticationClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|string $UserTokenInput
     * @return ResultInterface|Type\UserTokenReturnType
     * @throws SoapException
     */
    public function getUserToken(string $UserTokenInput) : \Flexsim\FlexnetOperations\Type\UserTokenReturnType
    {
        return ($this->caller)('getUserToken', $UserTokenInput);
    }

    /**
     * @param RequestInterface|Type\IdentityType $secureTokenRequest
     * @return ResultInterface|Type\TokenResponseType
     * @throws SoapException
     */
    public function getSecureToken(\Flexsim\FlexnetOperations\Type\IdentityType $secureTokenRequest) : \Flexsim\FlexnetOperations\Type\TokenResponseType
    {
        return ($this->caller)('getSecureToken', $secureTokenRequest);
    }

    /**
     * @param RequestInterface|Type\AuthenticateUserInputType $AuthenticateUserInput
     * @return ResultInterface|Type\AuthenticateUserReturnType
     * @throws SoapException
     */
    public function authenticateUser(\Flexsim\FlexnetOperations\Type\AuthenticateUserInputType $AuthenticateUserInput) : \Flexsim\FlexnetOperations\Type\AuthenticateUserReturnType
    {
        return ($this->caller)('authenticateUser', $AuthenticateUserInput);
    }

    /**
     * @param RequestInterface|Type\TokenType $validateTokenRequest
     * @return ResultInterface|Type\StatusResponse
     * @throws SoapException
     */
    public function validateToken(\Flexsim\FlexnetOperations\Type\TokenType $validateTokenRequest) : \Flexsim\FlexnetOperations\Type\StatusResponse
    {
        return ($this->caller)('validateToken', $validateTokenRequest);
    }
}

