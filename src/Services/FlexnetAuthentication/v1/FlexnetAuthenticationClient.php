<?php

namespace Flexsim\FlexnetOperations\Services\FlexnetAuthentication\v1;

use Flexsim\FlexnetOperations\Type;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class FlexnetAuthenticationClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface|Type\IdentityType  $secureTokenRequest
     * @return ResultInterface|Type\TokenResponseType
     *
     * @throws SoapException
     */
    public function getSecureToken(\Flexsim\FlexnetOperations\Type\IdentityType $secureTokenRequest): \Flexsim\FlexnetOperations\Type\TokenResponseType
    {
        return ($this->caller)('getSecureToken', $secureTokenRequest);
    }

    /**
     * @param  RequestInterface|Type\AuthenticateUserInputType  $AuthenticateUserInput
     * @return ResultInterface|Type\AuthenticateUserReturnType
     *
     * @throws SoapException
     */
    public function authenticateUser(\Flexsim\FlexnetOperations\Type\AuthenticateUserInputType $AuthenticateUserInput): \Flexsim\FlexnetOperations\Type\AuthenticateUserReturnType
    {
        return ($this->caller)('authenticateUser', $AuthenticateUserInput);
    }

    /**
     * @param  RequestInterface|Type\TokenType  $validateTokenRequest
     * @return ResultInterface|Type\StatusResponse
     *
     * @throws SoapException
     */
    public function validateToken(\Flexsim\FlexnetOperations\Type\TokenType $validateTokenRequest): \Flexsim\FlexnetOperations\Type\StatusResponse
    {
        return ($this->caller)('validateToken', $validateTokenRequest);
    }
}
