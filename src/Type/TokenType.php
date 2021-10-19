<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TokenType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\IdentityType
     */
    protected $identity;

    /**
     * @var string
     */
    protected $token;

    /**
     * Constructor
     *
     * @param string $token
     * @param \Flexsim\FlexnetOperations\Type\IdentityType $identity
     */
    public function __construct(string $token, \Flexsim\FlexnetOperations\Type\IdentityType $identity = null)
    {
        $this->token = $token;
        $this->identity = $identity;
    }

    /**
     * create a new instance of this class
     *
     * @param string $token
     * @param \Flexsim\FlexnetOperations\Type\IdentityType $identity
     */
    public static function create(string $token, \Flexsim\FlexnetOperations\Type\IdentityType $identity = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\IdentityType
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\IdentityType $identity
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
