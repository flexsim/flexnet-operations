<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AdvancedFulfillmentLCResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataListType
     */
    private $responseData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCResponseDataType
     */
    private $failedData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataListType $responseData
     * @var \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCResponseDataType $failedData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataListType $responseData = null, \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCResponseDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataListType $responseData
     * @var \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCResponseDataType $failedData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataListType $responseData = null, \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCResponseDataType $failedData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataListType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AdvancedFmtLCResponseDataListType $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCResponseDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCResponseDataType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;
        return $this;
    }


}

