<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUsageHistoryResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedGetUsageHistoryDataType
     */
    private $failedData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryDataType
     */
    private $responseData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\FailedGetUsageHistoryDataType $failedData
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryDataType $responseData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedGetUsageHistoryDataType $failedData = null, \Flexsim\FlexnetOperations\Type\GetUsageHistoryDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\FailedGetUsageHistoryDataType $failedData
     * @var \Flexsim\FlexnetOperations\Type\GetUsageHistoryDataType $responseData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedGetUsageHistoryDataType $failedData = null, \Flexsim\FlexnetOperations\Type\GetUsageHistoryDataType $responseData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedGetUsageHistoryDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedGetUsageHistoryDataType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetUsageHistoryDataType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetUsageHistoryDataType $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;
        return $this;
    }


}

