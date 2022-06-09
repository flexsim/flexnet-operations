<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier
     */
    protected $deviceIdentifier;

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
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    protected $channelPartners;

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
    protected $deployment;

    /**
     * @var string
     */
    protected $siteName;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier $deviceIdentifier
     * @param \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @param \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @param string $alias
     * @param string $user
     * @param string $deployment
     * @param string $siteName
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
     * @param \Flexsim\FlexnetOperations\Type\CreateDeviceIdentifier $deviceIdentifier
     * @param \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @param \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @param string $alias
     * @param string $user
     * @param string $deployment
     * @param string $siteName
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
