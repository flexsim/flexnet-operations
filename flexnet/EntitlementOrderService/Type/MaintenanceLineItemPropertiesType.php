<?php

namespace Flexnet\EntitlementOrderService\Type;

class MaintenanceLineItemPropertiesType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
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
     * @var string|null
     */
    private $state;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $maintenanceLineItemAttributes;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $activationId
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $maintenanceProduct
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  bool|null  $isPermanent
     * @param  string|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $maintenanceLineItemAttributes
     */
    public function __construct(EntitlementLineItemIdentifierType $activationId, ProductIdentifierType|null $maintenanceProduct = null, PartNumberIdentifierType|null $partNumber = null, string|null $orderId = null, string|null $orderLineNumber = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, bool|null $isPermanent = null, string|null $state = null, AttributeDescriptorDataType|null $maintenanceLineItemAttributes = null)
    {
        $this->activationId = $activationId;
        $this->maintenanceProduct = $maintenanceProduct;
        $this->partNumber = $partNumber;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->startDate = $startDate;
        $this->expirationDate = $expirationDate;
        $this->isPermanent = $isPermanent;
        $this->state = $state;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $activationId
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $maintenanceProduct
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  bool|null  $isPermanent
     * @param  string|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $maintenanceLineItemAttributes
     */
    public static function create(EntitlementLineItemIdentifierType $activationId, ProductIdentifierType|null $maintenanceProduct = null, PartNumberIdentifierType|null $partNumber = null, string|null $orderId = null, string|null $orderLineNumber = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, bool|null $isPermanent = null, string|null $state = null, AttributeDescriptorDataType|null $maintenanceLineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): EntitlementLineItemIdentifierType
    {
        return $this->activationId;
    }

    public function withActivationId(EntitlementLineItemIdentifierType $activationId): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getMaintenanceProduct(): ProductIdentifierType|null
    {
        return $this->maintenanceProduct;
    }

    public function withMaintenanceProduct(ProductIdentifierType|null $maintenanceProduct): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    public function getPartNumber(): PartNumberIdentifierType|null
    {
        return $this->partNumber;
    }

    public function withPartNumber(PartNumberIdentifierType|null $partNumber): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getOrderId(): string|null
    {
        return $this->orderId;
    }

    public function withOrderId(string|null $orderId): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): string|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(string|null $orderLineNumber): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface|null $startDate): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(\DateTimeInterface|null $expirationDate): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getState(): string|null
    {
        return $this->state;
    }

    public function withState(string|null $state): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): AttributeDescriptorDataType|null
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(AttributeDescriptorDataType|null $maintenanceLineItemAttributes): MaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }
}
