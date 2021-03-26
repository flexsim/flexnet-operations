<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TokenType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\IdentityType
     */
    private $identity;

    /**
     * @var string
     */
    private $token;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\IdentityType $identity
     * @var string $token
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\IdentityType $identity = null, string $token)
    {
        $this->identity = $identity;
        $this->token = $token;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\IdentityType $identity
     * @var string $token
     */
    public static function create(\Flexsim\FlexnetOperations\Type\IdentityType $identity = null, string $token)
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

