<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UserTokenReturnType extends FlexnetType implements ResultInterface
{
    /**
     * @var string
     */
    protected $Token;

    /**
     * Constructor
     *
     * @param string $Token
     */
    public function __construct(string $Token)
    {
        $this->Token = $Token;
    }

    /**
     * create a new instance of this class
     *
     * @param string $Token
     */
    public static function create(string $Token)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return $this
     */
    public function setToken($Token)
    {
        $this->Token = $Token;

        return $this;
    }
}
