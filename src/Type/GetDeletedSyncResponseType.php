<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDeletedSyncResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedGetDeletedSyncDataType
     */
    protected $failedData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetDeletedSyncDataType
     */
    protected $responseData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedGetDeletedSyncDataType  $failedData
     * @param  \Flexsim\FlexnetOperations\Type\GetDeletedSyncDataType  $responseData
     */
    public function __construct(OpsEmbeddedStatusInfoType $statusInfo, FailedGetDeletedSyncDataType $failedData = null, GetDeletedSyncDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedGetDeletedSyncDataType  $failedData
     * @param  \Flexsim\FlexnetOperations\Type\GetDeletedSyncDataType  $responseData
     */
    public static function create(OpsEmbeddedStatusInfoType $statusInfo, FailedGetDeletedSyncDataType $failedData = null, GetDeletedSyncDataType $responseData = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedGetDeletedSyncDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedGetDeletedSyncDataType  $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetDeletedSyncDataType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\GetDeletedSyncDataType  $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;

        return $this;
    }
}
