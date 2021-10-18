<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAutoProvisionedServerResponse extends FlexnetType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $cloudLicenseServer;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $cloudLicenseServer
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\DeviceIdentifier $cloudLicenseServer = null)
    {
        $this->statusInfo = $statusInfo;
        $this->cloudLicenseServer = $cloudLicenseServer;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $cloudLicenseServer
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType $statusInfo, \Flexsim\FlexnetOperations\Type\DeviceIdentifier $cloudLicenseServer = null)
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
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getCloudLicenseServer()
    {
        return $this->cloudLicenseServer;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $cloudLicenseServer
     * @return $this
     */
    public function setCloudLicenseServer($cloudLicenseServer)
    {
        $this->cloudLicenseServer = $cloudLicenseServer;
        return $this;
    }
}
