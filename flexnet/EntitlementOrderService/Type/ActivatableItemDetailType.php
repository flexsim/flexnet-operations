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
     * @param  string|null  $parentBulkEntitlementId
     * @param  string  $entitlementId
     * @param  string  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $entitlementState
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType  $activatableItemData
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public function __construct(string $activatableItemType, string|null $parentBulkEntitlementId = null, string $entitlementId, string $soldTo, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $entitlementState = null, EntitlementLineItemDataType $activatableItemData, ChannelPartnerDataListType|null $channelPartners = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
    {
        $this->activatableItemType = $activatableItemType;
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;
        $this->entitlementId = $entitlementId;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->entitlementState = $entitlementState;
        $this->activatableItemData = $activatableItemData;
        $this->channelPartners = $channelPartners;
        $this->entitlementAttributes = $entitlementAttributes;
    }

    /**
     * @param  string  $activatableItemType
     * @param  string|null  $parentBulkEntitlementId
     * @param  string  $entitlementId
     * @param  string  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $entitlementState
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType  $activatableItemData
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public static function create(string $activatableItemType, string|null $parentBulkEntitlementId = null, string $entitlementId, string $soldTo, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $entitlementState = null, EntitlementLineItemDataType $activatableItemData, ChannelPartnerDataListType|null $channelPartners = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivatableItemType(): string
    {
        return $this->activatableItemType;
    }

    public function withActivatableItemType(string $activatableItemType): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    public function getParentBulkEntitlementId(): string|null
    {
        return $this->parentBulkEntitlementId;
    }

    public function withParentBulkEntitlementId(string|null $parentBulkEntitlementId): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    public function getEntitlementId(): string
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(string $entitlementId): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    public function withSoldTo(string $soldTo): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(string|null $shipToAddress): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEntitlementState(): string|null
    {
        return $this->entitlementState;
    }

    public function withEntitlementState(string|null $entitlementState): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->entitlementState = $entitlementState;

        return $new;
    }

    public function getActivatableItemData(): EntitlementLineItemDataType
    {
        return $this->activatableItemData;
    }

    public function withActivatableItemData(EntitlementLineItemDataType $activatableItemData): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->activatableItemData = $activatableItemData;

        return $new;
    }

    public function getChannelPartners(): ChannelPartnerDataListType|null
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getEntitlementAttributes(): AttributeDescriptorDataType|null
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(AttributeDescriptorDataType|null $entitlementAttributes): ActivatableItemDetailType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
