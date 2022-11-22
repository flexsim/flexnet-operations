<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateUserRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserDataType
     */
    protected $userData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateUserDataType  $userData
     */
    public function __construct(UpdateUserDataType $userData)
    {
        $this->userData = $userData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateUserDataType  $userData
     */
    public static function create(UpdateUserDataType $userData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserDataType
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\UpdateUserDataType  $userData
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;

        return $this;
    }
}
