<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier
     */
    private $deviceIdentifier;

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
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    private $channelPartners;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $deployment;

    /**
     * @var string
     */
    private $siteName;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier $deviceIdentifier
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var string $alias
     * @var string $user
     * @var string $deployment
     * @var string $siteName
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier $deviceIdentifier, \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName = null, \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName = null, string $description = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, string $alias = null, string $user = null, string $deployment = null, string $siteName = null)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->hostTypeName = $hostTypeName;
        $this->publisherIdName = $publisherIdName;
        $this->description = $description;
        $this->channelPartners = $channelPartners;
        $this->customAttributes = $customAttributes;
        $this->alias = $alias;
        $this->user = $user;
        $this->deployment = $deployment;
        $this->siteName = $siteName;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier $deviceIdentifier
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var string $alias
     * @var string $user
     * @var string $deployment
     * @var string $siteName
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier $deviceIdentifier, \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName = null, \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName = null, string $description = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, string $alias = null, string $user = null, string $deployment = null, string $siteName = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier $deviceIdentifier
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;
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
     * @return \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    public function getChannelPartners()
    {
        return $this->channelPartners;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @return $this
     */
    public function setChannelPartners($channelPartners)
    {
        $this->channelPartners = $channelPartners;
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

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
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
    public function getDeployment()
    {
        return $this->deployment;
    }

    /**
     * @param string $deployment
     * @return $this
     */
    public function setDeployment($deployment)
    {
        $this->deployment = $deployment;
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
     * @param string $siteName
     * @return $this
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
        return $this;
    }


}

