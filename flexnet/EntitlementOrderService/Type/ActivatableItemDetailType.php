<?php

namespace Flexnet\EntitlementOrderService\Type;

class ActivatableItemDetailType
{
    /**
     * @var string
     */
    private $activatableItemType;

    /**
     * @var string|null
     */
    private $parentBulkEntitlementId;

    /**
     * @var string
     */
    private $entitlementId;

    /**
     * @var string
     */
    private $soldTo;

    /**
     * @var string|null
     */
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * @var string|null
     */
    private $entitlementState;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType
     */
    private $activatableItemData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null
     */
    private $channelPartners;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $entitlementAttributes;

    /**
     * Constructor
     *
     * @param  string  $activatableItemType
     * @param  string  $entitlementId
     * @param  string  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType  $activatableItemData
     * @param  string|null  $parentBulkEntitlementId
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $entitlementState
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public function __construct(string $activatableItemType, string $entitlementId, string $soldTo, EntitlementLineItemDataType $activatableItemData, string|null $parentBulkEntitlementId = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $entitlementState = null, ChannelPartnerDataListType|null $channelPartners = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
    {
        $this->activatableItemType = $activatableItemType;
        $this->entitlementId = $entitlementId;
        $this->soldTo = $soldTo;
        $this->activatableItemData = $activatableItemData;
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->entitlementState = $entitlementState;
        $this->channelPartners = $channelPartners;
        $this->entitlementAttributes = $entitlementAttributes;
    }

    /**
     * @param  string  $activatableItemType
     * @param  string  $entitlementId
     * @param  string  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType  $activatableItemData
     * @param  string|null  $parentBulkEntitlementId
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $entitlementState
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public static function create(string $activatableItemType, string $entitlementId, string $soldTo, EntitlementLineItemDataType $activatableItemData, string|null $parentBulkEntitlementId = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $entitlementState = null, ChannelPartnerDataListType|null $channelPartners = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getActivatableItemType(): string
    {
        return $this->activatableItemType;
    }

    /**
     * @param  string  $activatableItemType
     * @return ActivatableItemDetailType
     */
    public function withActivatableItemType(string $activatableItemType): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getParentBulkEntitlementId(): string|null
    {
        return $this->parentBulkEntitlementId;
    }

    /**
     * @param  string|null  $parentBulkEntitlementId
     * @return ActivatableItemDetailType
     */
    public function withParentBulkEntitlementId(string|null $parentBulkEntitlementId): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    /**
     * @return string
     */
    public function getEntitlementId(): string
    {
        return $this->entitlementId;
    }

    /**
     * @param  string  $entitlementId
     * @return ActivatableItemDetailType
     */
    public function withEntitlementId(string $entitlementId): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    /**
     * @param  string  $soldTo
     * @return ActivatableItemDetailType
     */
    public function withSoldTo(string $soldTo): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  string|null  $shipToEmail
     * @return ActivatableItemDetailType
     */
    public function withShipToEmail(string|null $shipToEmail): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  string|null  $shipToAddress
     * @return ActivatableItemDetailType
     */
    public function withShipToAddress(string|null $shipToAddress): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getEntitlementState(): string|null
    {
        return $this->entitlementState;
    }

    /**
     * @param  string|null  $entitlementState
     * @return ActivatableItemDetailType
     */
    public function withEntitlementState(string|null $entitlementState): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->entitlementState = $entitlementState;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType
     */
    public function getActivatableItemData(): EntitlementLineItemDataType
    {
        return $this->activatableItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType  $activatableItemData
     * @return ActivatableItemDetailType
     */
    public function withActivatableItemData(EntitlementLineItemDataType $activatableItemData): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->activatableItemData = $activatableItemData;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null
     */
    public function getChannelPartners(): ChannelPartnerDataListType|null
    {
        return $this->channelPartners;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @return ActivatableItemDetailType
     */
    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    public function getEntitlementAttributes(): AttributeDescriptorDataType|null
    {
        return $this->entitlementAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     * @return ActivatableItemDetailType
     */
    public function withEntitlementAttributes(AttributeDescriptorDataType|null $entitlementAttributes): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
