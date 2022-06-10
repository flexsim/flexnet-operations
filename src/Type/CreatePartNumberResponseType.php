<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreatePartNumberResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedPartNumberDataListType
     */
    protected $failedData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataListType
     */
    protected $responseData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @param \Flexsim\FlexnetOperations\Type\FailedPartNumberDataListType $failedData
     * @param \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataListType $responseData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedPartNumberDataListType $failedData = null, \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @param \Flexsim\FlexnetOperations\Type\FailedPartNumberDataListType $failedData
     * @param \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataListType $responseData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedPartNumberDataListType $failedData = null, \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataListType $responseData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\FailedPartNumberDataListType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedPartNumberDataListType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataListType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedPartNumberDataListType $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;

        return $this;
    }
}
