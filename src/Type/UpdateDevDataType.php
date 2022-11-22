<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateDevDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * @var string
     */
    protected $deviceId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ServerIdsType
     */
    protected $serverIds;

    /**
     * @var string
     */
    protected $deviceIdType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier
     */
    protected $hostTypeName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier
     */
    protected $publisherIdName;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType
     */
    protected $updateChannelPartners;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @var string
     */
    protected $user;

    /**
     * @var string
     */
    protected $siteName;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  string  $deviceId
     * @param  \Flexsim\FlexnetOperations\Type\ServerIdsType  $serverIds
     * @param  string  $deviceIdType
     * @param  \Flexsim\FlexnetOperations\Type\HostTypeIdentifier  $hostTypeName
     * @param  \Flexsim\FlexnetOperations\Type\PublisherIdentifier  $publisherIdName
     * @param  string  $description
     * @param  \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType  $updateChannelPartners
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $customAttributes
     * @param  string  $alias
     * @param  string  $user
     * @param  string  $siteName
     */
    public function __construct(DeviceIdentifier $deviceIdentifier, string $deviceId = null, ServerIdsType $serverIds = null, string $deviceIdType = null, HostTypeIdentifier $hostTypeName = null, PublisherIdentifier $publisherIdName = null, string $description = null, UpdateChannelPartnerDataListType $updateChannelPartners = null, AttributeDescriptorDataType $customAttributes = null, string $alias = null, string $user = null, string $siteName = null)
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
        $this->user = $user;
        $this->siteName = $siteName;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  string  $deviceId
     * @param  \Flexsim\FlexnetOperations\Type\ServerIdsType  $serverIds
     * @param  string  $deviceIdType
     * @param  \Flexsim\FlexnetOperations\Type\HostTypeIdentifier  $hostTypeName
     * @param  \Flexsim\FlexnetOperations\Type\PublisherIdentifier  $publisherIdName
     * @param  string  $description
     * @param  \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType  $updateChannelPartners
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $customAttributes
     * @param  string  $alias
     * @param  string  $user
     * @param  string  $siteName
     */
    public static function create(DeviceIdentifier $deviceIdentifier, string $deviceId = null, ServerIdsType $serverIds = null, string $deviceIdType = null, HostTypeIdentifier $hostTypeName = null, PublisherIdentifier $publisherIdName = null, string $description = null, UpdateChannelPartnerDataListType $updateChannelPartners = null, AttributeDescriptorDataType $customAttributes = null, string $alias = null, string $user = null, string $siteName = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
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
     * @param  string  $deviceId
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
     * @param  \Flexsim\FlexnetOperations\Type\ServerIdsType  $serverIds
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
     * @param  string  $deviceIdType
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
     * @param  \Flexsim\FlexnetOperations\Type\HostTypeIdentifier  $hostTypeName
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
     * @param  \Flexsim\FlexnetOperations\Type\PublisherIdentifier  $publisherIdName
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
     * @param  string  $description
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
     * @param  \Flexsim\FlexnetOperations\Type\UpdateChannelPartnerDataListType  $updateChannelPartners
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
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $customAttributes
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
     * @param  string  $alias
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param  string  $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param  string  $siteName
     * @return $this
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }
}
