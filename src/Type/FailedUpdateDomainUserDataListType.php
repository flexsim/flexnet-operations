<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateDomainUserDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateDomainUserDataType
     */
    private $failedUser;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateDomainUserDataType|array $failedUser
     */
    public function __construct($failedUser = null)
    {
        $this->failedUser = $failedUser;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateDomainUserDataType|array $failedUser
     */
    public static function create($failedUser = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateDomainUserDataType
     */
    public function getFailedUser()
    {
        return $this->failedUser;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateDomainUserDataType $failedUser
     * @return $this
     */
    public function setFailedUser($failedUser)
    {
        $this->failedUser = $failedUser;
        return $this;
    }


}
