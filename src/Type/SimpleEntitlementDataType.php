<?php

namespace Flexsim\FlexnetOperations\Type;

class SimpleEntitlementDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\IdType
     */
    private $entitlementId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $soldTo;

    /**
     * @var string
     */
    private $shipToEmail;

    /**
     * @var string
     */
    private $shipToAddress;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $createdUserId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType
     */
    private $lineItems;

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemDataType
     */
    private $maintenanceLineItems;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    private $channelPartners;

    /**
     * @var bool
     */
    private $allowPortalLogin;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $entitlementAttributes;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDateTime;

    /**
     * @var string
     */
    private $soldToName;

    /**
     * @var string
     */
    private $emailTemplateVariation;


    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @var string $description
     * @var string $soldTo
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var string $state
     * @var string $createdUserId
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType|array $lineItems
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemDataType|array $maintenanceLineItems
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var bool $allowPortalLogin
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var string $soldToName
     * @var string $emailTemplateVariation
     */
    public function __construct(
        \Flexsim\FlexnetOperations\Type\IdType $entitlementId,
        string $description = null,
        string $soldTo,
        string $shipToEmail = null,
        string $shipToAddress = null,
        string $state = null,
        string $createdUserId = null,
        $lineItems = null,
        $maintenanceLineItems = null,
        \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null,
        bool $allowPortalLogin = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes = null,
        \DateTimeInterface $lastModifiedDateTime = null,
        string $soldToName = null,
        string $emailTemplateVariation = null
    ) {
        $this->entitlementId = $entitlementId;
        $this->description = $description;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->state = $state;
        $this->createdUserId = $createdUserId;
        $this->lineItems = $lineItems;
        $this->maintenanceLineItems = $maintenanceLineItems;
        $this->channelPartners = $channelPartners;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->entitlementAttributes = $entitlementAttributes;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->soldToName = $soldToName;
        $this->emailTemplateVariation = $emailTemplateVariation;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @var string $description
     * @var string $soldTo
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var string $state
     * @var string $createdUserId
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType|array $lineItems
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemDataType|array $maintenanceLineItems
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var bool $allowPortalLogin
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var string $soldToName
     * @var string $emailTemplateVariation
     */
    public static function create(
        \Flexsim\FlexnetOperations\Type\IdType $entitlementId,
        string $description = null,
        string $soldTo,
        string $shipToEmail = null,
        string $shipToAddress = null,
        string $state = null,
        string $createdUserId = null,
        $lineItems = null,
        $maintenanceLineItems = null,
        \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null,
        bool $allowPortalLogin = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes = null,
        \DateTimeInterface $lastModifiedDateTime = null,
        string $soldToName = null,
        string $emailTemplateVariation = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\IdType
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;
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
     * @return string
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param string $shipToEmail
     * @return $this
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param string $shipToAddress
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedUserId()
    {
        return $this->createdUserId;
    }

    /**
     * @param string $createdUserId
     * @return $this
     */
    public function setCreatedUserId($createdUserId)
    {
        $this->createdUserId = $createdUserId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType $lineItems
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MaintenanceLineItemDataType
     */
    public function getMaintenanceLineItems()
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceLineItemDataType $maintenanceLineItems
     * @return $this
     */
    public function setMaintenanceLineItems($maintenanceLineItems)
    {
        $this->maintenanceLineItems = $maintenanceLineItems;
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
     * @return bool
     */
    public function getAllowPortalLogin()
    {
        return $this->allowPortalLogin;
    }

    /**
     * @param bool $allowPortalLogin
     * @return $this
     */
    public function setAllowPortalLogin($allowPortalLogin)
    {
        $this->allowPortalLogin = $allowPortalLogin;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getEntitlementAttributes()
    {
        return $this->entitlementAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes
     * @return $this
     */
    public function setEntitlementAttributes($entitlementAttributes)
    {
        $this->entitlementAttributes = $entitlementAttributes;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getSoldToName()
    {
        return $this->soldToName;
    }

    /**
     * @param string $soldToName
     * @return $this
     */
    public function setSoldToName($soldToName)
    {
        $this->soldToName = $soldToName;
        return $this;
    }
    /**
     * @return string
     */
    public function getEmailTemplateVariation()
    {
        return $this->emailTemplateVariation;
    }

    /**
     * @param string $emailTemplateVariation
     * @return $this
     */
    public function setEmailTemplateVariation($emailTemplateVariation)
    {
        $this->emailTemplateVariation = $emailTemplateVariation;
        return $this;
    }
}
