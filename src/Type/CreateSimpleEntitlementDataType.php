<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateSimpleEntitlementDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\IdType
     */
    protected $entitlementId;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $soldTo;

    /**
     * @var string
     */
    protected $shipToEmail;

    /**
     * @var string
     */
    protected $shipToAddress;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType
     */
    protected $lineItems;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType
     */
    protected $maintenanceLineItems;

    /**
     * @var bool
     */
    protected $autoDeploy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    protected $channelPartners;

    /**
     * @var bool
     */
    protected $allowPortalLogin;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $entitlementAttributes;

    /**
     * @var string
     */
    protected $emailTemplateVariation;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @param string $description
     * @param string $soldTo
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType|array $lineItems
     * @param \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType|array $maintenanceLineItems
     * @param bool $autoDeploy
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param bool $allowPortalLogin
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes
     * @param string $emailTemplateVariation
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\IdType $entitlementId, string $description = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, $lineItems = null, $maintenanceLineItems = null, bool $autoDeploy = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes = null, string $emailTemplateVariation = null)
    {
        $this->entitlementId = $entitlementId;
        $this->description = $description;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->lineItems = $lineItems;
        $this->maintenanceLineItems = $maintenanceLineItems;
        $this->autoDeploy = $autoDeploy;
        $this->channelPartners = $channelPartners;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->entitlementAttributes = $entitlementAttributes;
        $this->emailTemplateVariation = $emailTemplateVariation;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @param string $description
     * @param string $soldTo
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType|array $lineItems
     * @param \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType|array $maintenanceLineItems
     * @param bool $autoDeploy
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param bool $allowPortalLogin
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes
     * @param string $emailTemplateVariation
     */
    public static function create(\Flexsim\FlexnetOperations\Type\IdType $entitlementId, string $description = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, $lineItems = null, $maintenanceLineItems = null, bool $autoDeploy = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes = null, string $emailTemplateVariation = null)
    {
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
     * @return \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType $lineItems
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType
     */
    public function getMaintenanceLineItems()
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType $maintenanceLineItems
     * @return $this
     */
    public function setMaintenanceLineItems($maintenanceLineItems)
    {
        $this->maintenanceLineItems = $maintenanceLineItems;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoDeploy()
    {
        return $this->autoDeploy;
    }

    /**
     * @param bool $autoDeploy
     * @return $this
     */
    public function setAutoDeploy($autoDeploy)
    {
        $this->autoDeploy = $autoDeploy;

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
