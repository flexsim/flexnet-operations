<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementMaintenanceLineItemPropertiesType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    private $activationId;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $orderLineNumber;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    private $entitlementId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null
     */
    private $maintenanceProduct;

    /**
     * @var string|null
     */
    private $maintenanceProductDescription;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null
     */
    private $maintenancePartNumber;

    /**
     * @var string|null
     */
    private $maintenancePartNumberDescription;

    /**
     * @var \DateTimeInterface|null
     */
    private $startDate;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var \DateTimeInterface|null
     */
    private $expirationDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $createdOnDateTime;

    /**
     * @var \DateTimeInterface|null
     */
    private $lastModifiedDateTime;

    /**
     * @var string|array<string>|null
     */
    private $linkedLineItemActivationId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $maintenanceLineItemAttributes;

    /**
     * @var string|null
     */
    private $createdBy;

    /**
     * @var string|null
     */
    private $lastModifiedBy;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $activationId
     * @param  string|null  $state
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $maintenanceProduct
     * @param  string|null  $maintenanceProductDescription
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $maintenancePartNumber
     * @param  string|null  $maintenancePartNumberDescription
     * @param  \DateTimeInterface|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $createdOnDateTime
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @param  string|array<string>|null  $linkedLineItemActivationId
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $maintenanceLineItemAttributes
     * @param  string|null  $createdBy
     * @param  string|null  $lastModifiedBy
     */
    public function __construct(EntitlementLineItemIdentifierType|null $activationId = null, string|null $state = null, string|null $orderId = null, string|null $orderLineNumber = null, EntitlementIdentifierType|null $entitlementId = null, ProductIdentifierType|null $maintenanceProduct = null, string|null $maintenanceProductDescription = null, PartNumberIdentifierType|null $maintenancePartNumber = null, string|null $maintenancePartNumberDescription = null, \DateTimeInterface|null $startDate = null, bool|null $isPermanent = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $createdOnDateTime = null, \DateTimeInterface|null $lastModifiedDateTime = null, string|array|null $linkedLineItemActivationId = null, AttributeDescriptorDataType|null $maintenanceLineItemAttributes = null, string|null $createdBy = null, string|null $lastModifiedBy = null)
    {
        $this->activationId = $activationId;
        $this->state = $state;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->entitlementId = $entitlementId;
        $this->maintenanceProduct = $maintenanceProduct;
        $this->maintenanceProductDescription = $maintenanceProductDescription;
        $this->maintenancePartNumber = $maintenancePartNumber;
        $this->maintenancePartNumberDescription = $maintenancePartNumberDescription;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->linkedLineItemActivationId = $linkedLineItemActivationId;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $activationId
     * @param  string|null  $state
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $maintenanceProduct
     * @param  string|null  $maintenanceProductDescription
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $maintenancePartNumber
     * @param  string|null  $maintenancePartNumberDescription
     * @param  \DateTimeInterface|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $createdOnDateTime
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @param  string|array<string>|null  $linkedLineItemActivationId
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $maintenanceLineItemAttributes
     * @param  string|null  $createdBy
     * @param  string|null  $lastModifiedBy
     */
    public static function create(EntitlementLineItemIdentifierType|null $activationId = null, string|null $state = null, string|null $orderId = null, string|null $orderLineNumber = null, EntitlementIdentifierType|null $entitlementId = null, ProductIdentifierType|null $maintenanceProduct = null, string|null $maintenanceProductDescription = null, PartNumberIdentifierType|null $maintenancePartNumber = null, string|null $maintenancePartNumberDescription = null, \DateTimeInterface|null $startDate = null, bool|null $isPermanent = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $createdOnDateTime = null, \DateTimeInterface|null $lastModifiedDateTime = null, string|array|null $linkedLineItemActivationId = null, AttributeDescriptorDataType|null $maintenanceLineItemAttributes = null, string|null $createdBy = null, string|null $lastModifiedBy = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): EntitlementLineItemIdentifierType|null
    {
        return $this->activationId;
    }

    public function withActivationId(EntitlementLineItemIdentifierType|null $activationId): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getState(): string|null
    {
        return $this->state;
    }

    public function withState(string|null $state): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getOrderId(): string|null
    {
        return $this->orderId;
    }

    public function withOrderId(string|null $orderId): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): string|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(string|null $orderLineNumber): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getEntitlementId(): EntitlementIdentifierType|null
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(EntitlementIdentifierType|null $entitlementId): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getMaintenanceProduct(): ProductIdentifierType|null
    {
        return $this->maintenanceProduct;
    }

    public function withMaintenanceProduct(ProductIdentifierType|null $maintenanceProduct): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    public function getMaintenanceProductDescription(): string|null
    {
        return $this->maintenanceProductDescription;
    }

    public function withMaintenanceProductDescription(string|null $maintenanceProductDescription): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceProductDescription = $maintenanceProductDescription;

        return $new;
    }

    public function getMaintenancePartNumber(): PartNumberIdentifierType|null
    {
        return $this->maintenancePartNumber;
    }

    public function withMaintenancePartNumber(PartNumberIdentifierType|null $maintenancePartNumber): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenancePartNumber = $maintenancePartNumber;

        return $new;
    }

    public function getMaintenancePartNumberDescription(): string|null
    {
        return $this->maintenancePartNumberDescription;
    }

    public function withMaintenancePartNumberDescription(string|null $maintenancePartNumberDescription): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenancePartNumberDescription = $maintenancePartNumberDescription;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface|null $startDate): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(\DateTimeInterface|null $expirationDate): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOnDateTime(): \DateTimeInterface|null
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(\DateTimeInterface|null $createdOnDateTime): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): \DateTimeInterface|null
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(\DateTimeInterface|null $lastModifiedDateTime): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getLinkedLineItemActivationId(): string|array|null
    {
        return $this->linkedLineItemActivationId;
    }

    public function withLinkedLineItemActivationId(string|array|null $linkedLineItemActivationId): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->linkedLineItemActivationId = $linkedLineItemActivationId;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): AttributeDescriptorDataType|null
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(AttributeDescriptorDataType|null $maintenanceLineItemAttributes): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }

    public function getCreatedBy(): string|null
    {
        return $this->createdBy;
    }

    public function withCreatedBy(string|null $createdBy): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->createdBy = $createdBy;

        return $new;
    }

    public function getLastModifiedBy(): string|null
    {
        return $this->lastModifiedBy;
    }

    public function withLastModifiedBy(string|null $lastModifiedBy): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedBy = $lastModifiedBy;

        return $new;
    }
}
