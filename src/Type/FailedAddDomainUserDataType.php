<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedAddDomainUserDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AddDomainUserDataType
     */
    protected $user;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user = null, string $reason = null)
    {
        $this->user = $user;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddDomainUserDataType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user
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
