<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUserAccountsExpiryQueryResponseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserAccountExpiryType
     */
    protected $userAccountExpiryData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UserAccountExpiryType|array $userAccountExpiryData
     */
    public function __construct($userAccountExpiryData = null)
    {
        $this->userAccountExpiryData = $userAccountExpiryData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UserAccountExpiryType|array $userAccountExpiryData
     */
    public static function create($userAccountExpiryData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserAccountExpiryType
     */
    public function getUserAccountExpiryData()
    {
        return $this->userAccountExpiryData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserAccountExpiryType $userAccountExpiryData
     * @return $this
     */
    public function setUserAccountExpiryData($userAccountExpiryData)
    {
        $this->userAccountExpiryData = $userAccountExpiryData;
        return $this;
    }
}
