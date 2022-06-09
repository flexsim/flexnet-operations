<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RestoreServedClientResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedRestoreServedClientDataType
     */
    protected $failedData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\RestoreServedClientDataType
     */
    protected $responseData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo
     * @param \Flexsim\FlexnetOperations\Type\FailedRestoreServedClientDataType $failedData
     * @param \Flexsim\FlexnetOperations\Type\RestoreServedClientDataType $responseData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedRestoreServedClientDataType $failedData = null, \Flexsim\FlexnetOperations\Type\RestoreServedClientDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo
     * @param \Flexsim\FlexnetOperations\Type\FailedRestoreServedClientDataType $failedData
     * @param \Flexsim\FlexnetOperations\Type\RestoreServedClientDataType $responseData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedRestoreServedClientDataType $failedData = null, \Flexsim\FlexnetOperations\Type\RestoreServedClientDataType $responseData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\FailedRestoreServedClientDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedRestoreServedClientDataType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RestoreServedClientDataType
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RestoreServedClientDataType $responseData
     * @return $this
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;

        return $this;
    }
}
