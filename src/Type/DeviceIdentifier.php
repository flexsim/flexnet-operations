<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceIdentifier
{

    /**
     * @var string
     */
    private $deviceType;

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $deviceId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ServerIdsType
     */
    private $serverIds;

    /**
     * @var string
     */
    private $deviceIdType;

    /**
     * @var string
     */
    private $publisherName;

    /**
     * Constructor
     *
     * @var string $deviceType
     * @var string $uniqueId
     * @var string $deviceId
     * @var \Flexsim\FlexnetOperations\Type\ServerIdsType $serverIds
     * @var string $deviceIdType
     * @var string $publisherName
     */
    public function __construct(string $deviceType, string $uniqueId = null, string $deviceId = null, \Flexsim\FlexnetOperations\Type\ServerIdsType $serverIds = null, string $deviceIdType = null, string $publisherName = null)
    {
        $this->deviceType = $deviceType;
        $this->uniqueId = $uniqueId;
        $this->deviceId = $deviceId;
        $this->serverIds = $serverIds;
        $this->deviceIdType = $deviceIdType;
        $this->publisherName = $publisherName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $deviceType
     * @var string $uniqueId
     * @var string $deviceId
     * @var \Flexsim\FlexnetOperations\Type\ServerIdsType $serverIds
     * @var string $deviceIdType
     * @var string $publisherName
     */
    public static function create(string $deviceType, string $uniqueId = null, string $deviceId = null, \Flexsim\FlexnetOperations\Type\ServerIdsType $serverIds = null, string $deviceIdType = null, string $publisherName = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param string $deviceId
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ServerIdsType
     */
    public function getServerIds()
    {
        return $this->serverIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ServerIdsType $serverIds
     * @return $this
     */
    public function setServerIds($serverIds)
    {
        $this->serverIds = $serverIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceIdType()
    {
        return $this->deviceIdType;
    }

    /**
     * @param string $deviceIdType
     * @return $this
     */
    public function setDeviceIdType($deviceIdType)
    {
        $this->deviceIdType = $deviceIdType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublisherName()
    {
        return $this->publisherName;
    }

    /**
     * @param string $publisherName
     * @return $this
     */
    public function setPublisherName($publisherName)
    {
        $this->publisherName = $publisherName;
        return $this;
    }


}

