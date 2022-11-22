<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateDomainUserDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType
     */
    protected $user;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType  $user
     * @param  string  $reason
     */
    public function __construct(UpdateDomainUserDataType $user = null, string $reason = null)
    {
        $this->user = $user;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType  $user
     * @param  string  $reason
     */
    public static function create(UpdateDomainUserDataType $user = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType  $user
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
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
