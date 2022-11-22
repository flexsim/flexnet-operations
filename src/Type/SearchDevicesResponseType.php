<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchDevicesResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData
     */
    protected $failed;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData
     */
    protected $devices;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData  $failed
     * @param  \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData  $devices
     */
    public function __construct(OpsEmbeddedStatusInfoType $statusInfo, FailedSearchDevicesData $failed = null, SearchDevicesResponseData $devices = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failed = $failed;
        $this->devices = $devices;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData  $failed
     * @param  \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData  $devices
     */
    public static function create(OpsEmbeddedStatusInfoType $statusInfo, FailedSearchDevicesData $failed = null, SearchDevicesResponseData $devices = null)
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
     * @return \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData
     */
    public function getFailed()
    {
        return $this->failed;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedSearchDevicesData  $failed
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
     * @param  \Flexsim\FlexnetOperations\Type\SearchDevicesResponseData  $devices
     * @return $this
     */
    public function setDevices($devices)
    {
        $this->devices = $devices;

        return $this;
    }
}
