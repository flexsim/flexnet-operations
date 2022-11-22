<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedAddDomainUserDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataType|array
     */
    protected $failedUser;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataType|array  $failedUser
     */
    public function __construct($failedUser = null)
    {
        $this->failedUser = $failedUser;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataType|array  $failedUser
     */
    public static function create($failedUser = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataType|array
     */
    public function getFailedUser()
    {
        return $this->failedUser;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataType|array  $failedUser
     * @return $this
     */
    public function setFailedUser($failedUser)
    {
        $this->failedUser = $failedUser;

        return $this;
    }
}
