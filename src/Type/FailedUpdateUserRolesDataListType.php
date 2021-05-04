<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateUserRolesDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateUserRolesDataType|array 
     */
    private $failedUser;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateUserRolesDataType|array $failedUser
     */
    public function __construct($failedUser = null)
    {
        $this->failedUser = $failedUser;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateUserRolesDataType|array $failedUser
     */
    public static function create($failedUser = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateUserRolesDataType|array 
     */
    public function getFailedUser()
    {
        return $this->failedUser;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateUserRolesDataType|array $failedUser
     * @return $this
     */
    public function setFailedUser($failedUser)
    {
        $this->failedUser = $failedUser;
        return $this;
    }
}
