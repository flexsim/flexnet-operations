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
     */
    public function __construct(string $activatableItemType, string $entitlementId, string $soldTo, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType $activatableItemData, ?string $parentBulkEntitlementId = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $entitlementState = null, ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $entitlementAttributes = null)
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

    public static function create(string $activatableItemType, string $entitlementId, string $soldTo, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType $activatableItemData, ?string $parentBulkEntitlementId = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $entitlementState = null, ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $entitlementAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivatableItemType(): string
    {
        return $this->activatableItemType;
    }

    public function withActivatableItemType(string $activatableItemType): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    public function getParentBulkEntitlementId(): ?string
    {
        return $this->parentBulkEntitlementId;
    }

    public function withParentBulkEntitlementId(?string $parentBulkEntitlementId): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    public function getEntitlementId(): string
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(string $entitlementId): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    public function withSoldTo(string $soldTo): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEntitlementState(): ?string
    {
        return $this->entitlementState;
    }

    public function withEntitlementState(?string $entitlementState): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->entitlementState = $entitlementState;

        return $new;
    }

    public function getActivatableItemData(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType
    {
        return $this->activatableItemData;
    }

    public function withActivatableItemData(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType $activatableItemData): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->activatableItemData = $activatableItemData;

        return $new;
    }

    public function getChannelPartners(): ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getEntitlementAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $entitlementAttributes): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
