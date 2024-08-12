<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreateMaintenanceLineItemDataType
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
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $associatedLineItems
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\IdType $activationId, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $maintenanceProduct = null, ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $expirationDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItem = null, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array|null $associatedLineItems = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
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
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $associatedLineItems
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\IdType $activationId, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $maintenanceProduct = null, ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $expirationDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItem = null, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array|null $associatedLineItems = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): \Flexnet\EntitlementOrderService\Type\IdType
    {
        return $this->activationId;
    }

    public function withActivationId(\Flexnet\EntitlementOrderService\Type\IdType $activationId): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getMaintenanceProduct(): ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType
    {
        return $this->maintenanceProduct;
    }

    public function withMaintenanceProduct(?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $maintenanceProduct): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getParentLineItem(): ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItem): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null
     */
    public function getAssociatedLineItems(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array|null
    {
        return $this->associatedLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $associatedLineItems
     */
    public function withAssociatedLineItems(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array|null $associatedLineItems): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->associatedLineItems = $associatedLineItems;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }
}
