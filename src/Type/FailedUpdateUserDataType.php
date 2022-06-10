<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateUserDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserDataType
     */
    protected $userData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserDataType $userData
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateUserDataType $userData = null, string $reason = null)
    {
        $this->userData = $userData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserDataType $userData
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateUserDataType $userData = null, string $reason = null)
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
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserDataType $userData
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
