<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchDevicesResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData
     */
    private $failed;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData
     */
    private $devices;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData $failed
     * @var \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData $devices
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData $failed = null, \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData $devices = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failed = $failed;
        $this->devices = $devices;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData $failed
     * @var \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData $devices
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData $failed = null, \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData $devices = null)
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
     * @return \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData
     */
    public function getFailed()
    {
        return $this->failed;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData $failed
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->failed = $failed;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData $devices
     * @return $this
     */
    public function setDevices($devices)
    {
        $this->devices = $devices;
        return $this;
    }


}

