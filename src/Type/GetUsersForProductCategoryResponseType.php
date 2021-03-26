<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUsersForProductCategoryResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType
     */
    private $userData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType $userData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType $userData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->userData = $userData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType $userData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType $userData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType $userData
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;
        return $this;
    }


}

