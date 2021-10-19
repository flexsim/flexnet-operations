<?php

namespace Flexsim\FlexnetOperations\Type;

class ActivatableItemDetailType extends FlexnetType
{

    /**
     * @var string
     */
    protected $activatableItemType;

    /**
     * @var string
     */
    protected $parentBulkEntitlementId;

    /**
     * @var string
     */
    protected $entitlementId;

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
     * @var string
     */
    protected $entitlementState;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType
     */
    protected $activatableItemData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    protected $channelPartners;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $entitlementAttributes;

    /**
     * Constructor
     *
     * @param string $activatableItemType
     * @param string $entitlementId
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType $activatableItemData
     * @param string $parentBulkEntitlementId
     * @param string $soldTo
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param string $entitlementState
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes
     */
    public function __construct(
        string $activatableItemType,
        string $entitlementId,
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType $activatableItemData,
        string $parentBulkEntitlementId = null,
        string $soldTo = null,
        string $shipToEmail = null,
        string $shipToAddress = null,
        string $entitlementState = null,
        \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes = null
    ) {
        $this->activatableItemType = $activatableItemType;
        $this->entitlementId = $entitlementId;
        $this->activatableItemData = $activatableItemData;
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->entitlementState = $entitlementState;
        $this->channelPartners = $channelPartners;
        $this->entitlementAttributes = $entitlementAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param string $activatableItemType
     * @param string $entitlementId
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType $activatableItemData
     * @param string $parentBulkEntitlementId
     * @param string $soldTo
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param string $entitlementState
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes
     */
    public static function create(
        string $activatableItemType,
        string $entitlementId,
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType $activatableItemData,
        string $parentBulkEntitlementId = null,
        string $soldTo = null,
        string $shipToEmail = null,
        string $shipToAddress = null,
        string $entitlementState = null,
        \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $entitlementAttributes = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivatableItemType()
    {
        return $this->activatableItemType;
    }

    /**
     * @param string $activatableItemType
     * @return $this
     */
    public function setActivatableItemType($activatableItemType)
    {
        $this->activatableItemType = $activatableItemType;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentBulkEntitlementId()
    {
        return $this->parentBulkEntitlementId;
    }

    /**
     * @param string $parentBulkEntitlementId
     * @return $this
     */
    public function setParentBulkEntitlementId($parentBulkEntitlementId)
    {
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param string $entitlementId
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
    public function getEntitlementState()
    {
        return $this->entitlementState;
    }

    /**
     * @param string $entitlementState
     * @return $this
     */
    public function setEntitlementState($entitlementState)
    {
        $this->entitlementState = $entitlementState;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType
     */
    public function getActivatableItemData()
    {
        return $this->activatableItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemDataType $activatableItemData
     * @return $this
     */
    public function setActivatableItemData($activatableItemData)
    {
        $this->activatableItemData = $activatableItemData;
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
