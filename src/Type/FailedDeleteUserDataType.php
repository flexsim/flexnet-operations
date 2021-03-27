<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteUserDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $user;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var string $reason
     */
    public function __construct($user = null, string $reason = null)
    {
        $this->user = $user;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var string $reason
     */
    public static function create($user = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType $user
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
