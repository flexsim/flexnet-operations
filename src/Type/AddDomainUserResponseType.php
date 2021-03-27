<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddDomainUserResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataListType
     */
    private $failedData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddedDomainUserDataListType
     */
    private $responseData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataListType $failedData
     * @var \Flexsim\FlexnetOperations\Type\AddedDomainUserDataListType $responseData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataListType $failedData = null, \Flexsim\FlexnetOperations\Type\AddedDomainUserDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataListType $failedData
     * @var \Flexsim\FlexnetOperations\Type\AddedDomainUserDataListType $responseData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataListType $failedData = null, \Flexsim\FlexnetOperations\Type\AddedDomainUserDataListType $responseData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataListType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedAddDomainUserDataListType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddedDomainUserDataListType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddedDomainUserDataListType $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;
        return $this;
    }


}

