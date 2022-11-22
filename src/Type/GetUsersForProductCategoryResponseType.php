<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUsersForProductCategoryResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType
     */
    protected $userData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType  $userData
     */
    public function __construct(StatusInfoType $statusInfo, GetUsersForProductCategoryResponseDataType $userData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->userData = $userData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType  $userData
     */
    public static function create(StatusInfoType $statusInfo, GetUsersForProductCategoryResponseDataType $userData = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
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
     * @param  \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseDataType  $userData
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;

        return $this;
    }
}
