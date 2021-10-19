<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteDomainUserDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteDomainUserDataType|array 
     */
    protected $failedUser;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteDomainUserDataType|array $failedUser
     */
    public function __construct($failedUser = null)
    {
        $this->failedUser = $failedUser;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteDomainUserDataType|array $failedUser
     */
    public static function create($failedUser = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteDomainUserDataType|array 
     */
    public function getFailedUser()
    {
        return $this->failedUser;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteDomainUserDataType|array $failedUser
     * @return $this
     */
    public function setFailedUser($failedUser)
    {
        $this->failedUser = $failedUser;
        return $this;
    }
}
