<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedCreateUserDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedCreateUserDataType
     */
    private $failedUser;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedCreateUserDataType|array $failedUser
     */
    public function __construct($failedUser = null)
    {
        $this->failedUser = $failedUser;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedCreateUserDataType|array $failedUser
     */
    public static function create($failedUser = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedCreateUserDataType
     */
    public function getFailedUser()
    {
        return $this->failedUser;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedCreateUserDataType $failedUser
     * @return $this
     */
    public function setFailedUser($failedUser)
    {
        $this->failedUser = $failedUser;
        return $this;
    }


}

