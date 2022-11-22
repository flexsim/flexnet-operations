<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MoveDeviceResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMoveDeviceListDataType
     */
    protected $failedData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedMoveDeviceListDataType  $failedData
     */
    public function __construct(OpsEmbeddedStatusInfoType $statusInfo, FailedMoveDeviceListDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedMoveDeviceListDataType  $failedData
     */
    public static function create(OpsEmbeddedStatusInfoType $statusInfo, FailedMoveDeviceListDataType $failedData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\FailedMoveDeviceListDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedMoveDeviceListDataType  $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }
}
