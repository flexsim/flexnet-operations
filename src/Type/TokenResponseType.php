<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TokenResponseType extends FlexnetType implements ResultInterface
{

    /**
     * @var string
     */
    protected $token;

    /**
     * Constructor
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * create a new instance of this class
     *
     * @param string $token
     */
    public static function create(string $token)
    {
        return new self(...func_get_args());
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
