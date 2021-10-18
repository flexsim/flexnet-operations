<?php

namespace Flexsim\FlexnetOperations\Type;

class UserAccountExpiryType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserDetailDataType
     */
    protected $userData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountExpiryType
     */
    protected $accountExpiryData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserDetailDataType $userData
     * @var \Flexsim\FlexnetOperations\Type\AccountExpiryType $accountExpiryData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UserDetailDataType $userData = null, \Flexsim\FlexnetOperations\Type\AccountExpiryType $accountExpiryData = null)
    {
        $this->userData = $userData;
        $this->accountExpiryData = $accountExpiryData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserDetailDataType $userData
     * @var \Flexsim\FlexnetOperations\Type\AccountExpiryType $accountExpiryData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UserDetailDataType $userData = null, \Flexsim\FlexnetOperations\Type\AccountExpiryType $accountExpiryData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserDetailDataType
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserDetailDataType $userData
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountExpiryType
     */
    public function getAccountExpiryData()
    {
        return $this->accountExpiryData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountExpiryType $accountExpiryData
     * @return $this
     */
    public function setAccountExpiryData($accountExpiryData)
    {
        $this->accountExpiryData = $accountExpiryData;
        return $this;
    }
}
