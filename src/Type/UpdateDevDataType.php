<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateDevDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    private $deviceIdentifier;

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
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier
     */
    private $hostTypeName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier
     */
    private $publisherIdName;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType
     */
    private $updateChannelPartners;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var string
     */
    private $alias;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var string $deviceId
     * @var \Flexsim\FlexnetOperations\Type\ServerIdsType $serverIds
     * @var string $deviceIdType
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType $updateChannelPartners
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var string $alias
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier, string $deviceId = null, \Flexsim\FlexnetOperations\Type\ServerIdsType $serverIds = null, string $deviceIdType = null, \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName = null, \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName = null, string $description = null, \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType $updateChannelPartners = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, string $alias = null)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->deviceId = $deviceId;
        $this->serverIds = $serverIds;
        $this->deviceIdType = $deviceIdType;
        $this->hostTypeName = $hostTypeName;
        $this->publisherIdName = $publisherIdName;
        $this->description = $description;
        $this->updateChannelPartners = $updateChannelPartners;
        $this->customAttributes = $customAttributes;
        $this->alias = $alias;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var string $deviceId
     * @var \Flexsim\FlexnetOperations\Type\ServerIdsType $serverIds
     * @var string $deviceIdType
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType $updateChannelPartners
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var string $alias
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier, string $deviceId = null, \Flexsim\FlexnetOperations\Type\ServerIdsType $serverIds = null, string $deviceIdType = null, \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName = null, \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName = null, string $description = null, \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType $updateChannelPartners = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, string $alias = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;
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
     * @return \Flexsim\FlexnetOperations\Type\HostTypeIdentifier
     */
    public function getHostTypeName()
    {
        return $this->hostTypeName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @return $this
     */
    public function setHostTypeName($hostTypeName)
    {
        $this->hostTypeName = $hostTypeName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PublisherIdentifier
     */
    public function getPublisherIdName()
    {
        return $this->publisherIdName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @return $this
     */
    public function setPublisherIdName($publisherIdName)
    {
        $this->publisherIdName = $publisherIdName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType
     */
    public function getUpdateChannelPartners()
    {
        return $this->updateChannelPartners;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType $updateChannelPartners
     * @return $this
     */
    public function setUpdateChannelPartners($updateChannelPartners)
    {
        $this->updateChannelPartners = $updateChannelPartners;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }


}

