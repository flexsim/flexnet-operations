<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDeviceRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceId
     */
    private $deviceId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetDeviceResponseConfigType
     */
    private $responseConfig;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceId $deviceId
     * @var \Flexsim\FlexnetOperations\Type\GetDeviceResponseConfigType $responseConfig
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceId $deviceId, \Flexsim\FlexnetOperations\Type\GetDeviceResponseConfigType $responseConfig = null)
    {
        $this->deviceId = $deviceId;
        $this->responseConfig = $responseConfig;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceId $deviceId
     * @var \Flexsim\FlexnetOperations\Type\GetDeviceResponseConfigType $responseConfig
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceId $deviceId, \Flexsim\FlexnetOperations\Type\GetDeviceResponseConfigType $responseConfig = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceId
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceId $deviceId
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetDeviceResponseConfigType
     */
    public function getResponseConfig()
    {
        return $this->responseConfig;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetDeviceResponseConfigType $responseConfig
     * @return $this
     */
    public function setResponseConfig($responseConfig)
    {
        $this->responseConfig = $responseConfig;
        return $this;
    }


}
