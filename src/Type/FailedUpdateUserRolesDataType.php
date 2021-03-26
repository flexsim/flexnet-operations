<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateUserRolesDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType
     */
    private $userData;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType $userData
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType $userData = null, string $reason = null)
    {
        $this->userData = $userData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType $userData
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateUserRolesDataType $userData = null, string $reason = null)
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

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

