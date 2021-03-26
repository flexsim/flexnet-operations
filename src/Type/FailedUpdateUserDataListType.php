<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateUserDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateUserDataType
     */
    private $failedUser;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateUserDataType|array $failedUser
     */
    public function __construct($failedUser = null)
    {
        $this->failedUser = $failedUser;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateUserDataType|array $failedUser
     */
    public static function create($failedUser = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateUserDataType
     */
    public function getFailedUser()
    {
        return $this->failedUser;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateUserDataType $failedUser
     * @return $this
     */
    public function setFailedUser($failedUser)
    {
        $this->failedUser = $failedUser;
        return $this;
    }


}
