<?php

namespace Flexsim\FlexnetOperations\Services\v1\FlexnetAuthentication;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class FlexnetAuthenticationClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\IdentityType $secureTokenRequest
     * @return ResultInterface|Type\TokenResponseType
     * @throws SoapException
     */
    public function getSecureToken(\Flexsim\FlexnetOperations\Type\IdentityType $secureTokenRequest) : \Flexsim\FlexnetOperations\Type\TokenResponseType
    {
        return $this->call('getSecureToken', $secureTokenRequest);
    }

    /**
     * @param RequestInterface|Type\AuthenticateUserInputType $AuthenticateUserInput
     * @return ResultInterface|Type\AuthenticateUserReturnType
     * @throws SoapException
     */
    public function authenticateUser(\Flexsim\FlexnetOperations\Type\AuthenticateUserInputType $AuthenticateUserInput) : \Flexsim\FlexnetOperations\Type\AuthenticateUserReturnType
    {
        return $this->call('authenticateUser', $AuthenticateUserInput);
    }

    /**
     * @param RequestInterface|Type\TokenType $validateTokenRequest
     * @return ResultInterface|Type\StatusResponse
     * @throws SoapException
     */
    public function validateToken(\Flexsim\FlexnetOperations\Type\TokenType $validateTokenRequest) : \Flexsim\FlexnetOperations\Type\StatusResponse
    {
        return $this->call('validateToken', $validateTokenRequest);
    }


}

