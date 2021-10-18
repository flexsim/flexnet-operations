<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateUserRolesRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType
     */
    protected $userData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType $userData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType $userData)
    {
        $this->userData = $userData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType $userData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType $userData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType $userData
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;
        return $this;
    }
}
