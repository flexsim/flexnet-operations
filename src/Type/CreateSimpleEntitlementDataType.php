<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateSimpleEntitlementDataType
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
     * @var \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType
     */
    private $lineItems;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType
     */
    private $maintenanceLineItems;

    /**
     * @var bool
     */
    private $autoDeploy;

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
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @var string $description
     * @var string $soldTo
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType|array $lineItems
     * @var \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType|array $maintenanceLineItems
     * @var bool $autoDeploy
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var bool $allowPortalLogin
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\IdType $entitlementId, string $description = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, $lineItems = null, $maintenanceLineItems = null, bool $autoDeploy = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes = null)
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
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @var string $description
     * @var string $soldTo
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType|array $lineItems
     * @var \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType|array $maintenanceLineItems
     * @var bool $autoDeploy
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var bool $allowPortalLogin
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\IdType $entitlementId, string $description = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, $lineItems = null, $maintenanceLineItems = null, bool $autoDeploy = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes = null)
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


}
