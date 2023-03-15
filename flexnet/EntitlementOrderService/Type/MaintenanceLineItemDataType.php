<?php

namespace Flexnet\EntitlementOrderService\Type;

class MaintenanceLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType
     */
    private $activationId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null
     */
    private $maintenanceProduct;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null
     */
    private $partNumber;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $orderLineNumber;

    /**
     * @var \DateTimeInterface|null
     */
    private $startDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $expirationDate;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    private $parentLineItem;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null
     */
    private $associatedLineItems;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $maintenanceLineItemAttributes;

    /**
     * @var string|null
     */
    private $state;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $activationId
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $maintenanceProduct
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $associatedLineItems
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $maintenanceLineItemAttributes
     * @param  string|null  $state
     */
    public function __construct(IdType $activationId, ProductIdentifierType|null $maintenanceProduct = null, PartNumberIdentifierType|null $partNumber = null, string|null $orderId = null, string|null $orderLineNumber = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, bool|null $isPermanent = null, EntitlementLineItemIdentifierType|null $parentLineItem = null, EntitlementLineItemIdentifierType|array|null $associatedLineItems = null, AttributeDescriptorDataType|null $maintenanceLineItemAttributes = null, string|null $state = null)
    {
        $this->activationId = $activationId;
        $this->maintenanceProduct = $maintenanceProduct;
        $this->partNumber = $partNumber;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->startDate = $startDate;
        $this->expirationDate = $expirationDate;
        $this->isPermanent = $isPermanent;
        $this->parentLineItem = $parentLineItem;
        $this->associatedLineItems = $associatedLineItems;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
        $this->state = $state;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $activationId
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $maintenanceProduct
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $associatedLineItems
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $maintenanceLineItemAttributes
     * @param  string|null  $state
     */
    public static function create(IdType $activationId, ProductIdentifierType|null $maintenanceProduct = null, PartNumberIdentifierType|null $partNumber = null, string|null $orderId = null, string|null $orderLineNumber = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, bool|null $isPermanent = null, EntitlementLineItemIdentifierType|null $parentLineItem = null, EntitlementLineItemIdentifierType|array|null $associatedLineItems = null, AttributeDescriptorDataType|null $maintenanceLineItemAttributes = null, string|null $state = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\IdType
     */
    public function getActivationId(): IdType
    {
        return $this->activationId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $activationId
     */
    public function withActivationId(IdType $activationId): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null
     */
    public function getMaintenanceProduct(): ProductIdentifierType|null
    {
        return $this->maintenanceProduct;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $maintenanceProduct
     */
    public function withMaintenanceProduct(ProductIdentifierType|null $maintenanceProduct): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null
     */
    public function getPartNumber(): PartNumberIdentifierType|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     */
    public function withPartNumber(PartNumberIdentifierType|null $partNumber): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getOrderId(): string|null
    {
        return $this->orderId;
    }

    public function withOrderId(string|null $orderId): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): string|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(string|null $orderLineNumber): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface|null $startDate): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(\DateTimeInterface|null $expirationDate): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    public function getParentLineItem(): EntitlementLineItemIdentifierType|null
    {
        return $this->parentLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     */
    public function withParentLineItem(EntitlementLineItemIdentifierType|null $parentLineItem): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null
     */
    public function getAssociatedLineItems(): EntitlementLineItemIdentifierType|array|null
    {
        return $this->associatedLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $associatedLineItems
     */
    public function withAssociatedLineItems(EntitlementLineItemIdentifierType|array|null $associatedLineItems): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->associatedLineItems = $associatedLineItems;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    public function getMaintenanceLineItemAttributes(): AttributeDescriptorDataType|null
    {
        return $this->maintenanceLineItemAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $maintenanceLineItemAttributes
     */
    public function withMaintenanceLineItemAttributes(AttributeDescriptorDataType|null $maintenanceLineItemAttributes): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }

    public function getState(): string|null
    {
        return $this->state;
    }

    public function withState(string|null $state): MaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }
}
