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
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, IdType $activationId = null, ProductIdentifierType $maintenanceProduct = null, PartNumberIdentifierType $partNumber = null, string $orderId = null, string $orderLineNumber = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, bool $isPermanent = null, EntitlementLineItemIdentifierType $parentLineItem = null, AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
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

    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, IdType $activationId = null, ProductIdentifierType $maintenanceProduct = null, PartNumberIdentifierType $partNumber = null, string $orderId = null, string $orderLineNumber = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, bool $isPermanent = null, EntitlementLineItemIdentifierType $parentLineItem = null, AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getActivationId(): ?IdType
    {
        return $this->activationId;
    }

    public function withActivationId(?IdType $activationId): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getMaintenanceProduct(): ?ProductIdentifierType
    {
        return $this->maintenanceProduct;
    }

    public function withMaintenanceProduct(?ProductIdentifierType $maintenanceProduct): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    public function getPartNumber(): ?PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?PartNumberIdentifierType $partNumber): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getParentLineItem(): ?EntitlementLineItemIdentifierType
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(?EntitlementLineItemIdentifierType $parentLineItem): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): ?AttributeDescriptorDataType
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(?AttributeDescriptorDataType $maintenanceLineItemAttributes): UpdateMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }
}
