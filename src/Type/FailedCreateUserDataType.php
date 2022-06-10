<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedCreateUserDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserDataType
     */
    protected $user;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateUserDataType $user
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateUserDataType $user = null, string $reason = null)
    {
        $this->user = $user;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateUserDataType $user
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateUserDataType $user = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserDataType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUserDataType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

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
