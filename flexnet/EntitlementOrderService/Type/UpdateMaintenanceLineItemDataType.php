<?php

namespace Flexnet\EntitlementOrderService\Type;

class UpdateMaintenanceLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType|null
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
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $maintenanceLineItemAttributes;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, ?\Flexnet\EntitlementOrderService\Type\IdType $activationId = null, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $maintenanceProduct = null, ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $expirationDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItem = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->activationId = $activationId;
        $this->maintenanceProduct = $maintenanceProduct;
        $this->partNumber = $partNumber;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->startDate = $startDate;
        $this->expirationDate = $expirationDate;
        $this->isPermanent = $isPermanent;
        $this->parentLineItem = $parentLineItem;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, ?\Flexnet\EntitlementOrderService\Type\IdType $activationId = null, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $maintenanceProduct = null, ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $expirationDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItem = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getActivationId(): ?\Flexnet\EntitlementOrderService\Type\IdType
    {
        return $this->activationId;
    }

    public function withActivationId(?\Flexnet\EntitlementOrderService\Type\IdType $activationId): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getMaintenanceProduct(): ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType
    {
        return $this->maintenanceProduct;
    }

    public function withMaintenanceProduct(?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $maintenanceProduct): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getParentLineItem(): ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItem): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes): \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }
}
