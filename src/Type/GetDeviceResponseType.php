<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDeviceResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedGetDeviceDataType
     */
    protected $failedDevice;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetDeviceResponseData
     */
    protected $device;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedGetDeviceDataType  $failedDevice
     * @param  \Flexsim\FlexnetOperations\Type\GetDeviceResponseData  $device
     */
    public function __construct(OpsEmbeddedStatusInfoType $statusInfo, FailedGetDeviceDataType $failedDevice = null, GetDeviceResponseData $device = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedDevice = $failedDevice;
        $this->device = $device;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedGetDeviceDataType  $failedDevice
     * @param  \Flexsim\FlexnetOperations\Type\GetDeviceResponseData  $device
     */
    public static function create(OpsEmbeddedStatusInfoType $statusInfo, FailedGetDeviceDataType $failedDevice = null, GetDeviceResponseData $device = null)
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
     * @return \Flexsim\FlexnetOperations\Type\FailedGetDeviceDataType
     */
    public function getFailedDevice()
    {
        return $this->failedDevice;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedGetDeviceDataType  $failedDevice
     * @return $this
     */
    public function setFailedDevice($failedDevice)
    {
        $this->failedDevice = $failedDevice;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetDeviceResponseData
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\GetDeviceResponseData  $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }
}
