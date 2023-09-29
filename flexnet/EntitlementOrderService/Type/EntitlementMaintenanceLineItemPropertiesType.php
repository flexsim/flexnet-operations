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
     * @param  string|array<string>|null  $linkedLineItemActivationId
     */
    public function __construct(EntitlementLineItemIdentifierType $activationId = null, string $state = null, string $orderId = null, string $orderLineNumber = null, EntitlementIdentifierType $entitlementId = null, ProductIdentifierType $maintenanceProduct = null, string $maintenanceProductDescription = null, PartNumberIdentifierType $maintenancePartNumber = null, string $maintenancePartNumberDescription = null, \DateTimeInterface $startDate = null, bool $isPermanent = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, string|array $linkedLineItemActivationId = null, AttributeDescriptorDataType $maintenanceLineItemAttributes = null, string $createdBy = null, string $lastModifiedBy = null)
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
     * @param  string|array<string>|null  $linkedLineItemActivationId
     */
    public static function create(EntitlementLineItemIdentifierType $activationId = null, string $state = null, string $orderId = null, string $orderLineNumber = null, EntitlementIdentifierType $entitlementId = null, ProductIdentifierType $maintenanceProduct = null, string $maintenanceProductDescription = null, PartNumberIdentifierType $maintenancePartNumber = null, string $maintenancePartNumberDescription = null, \DateTimeInterface $startDate = null, bool $isPermanent = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, string|array $linkedLineItemActivationId = null, AttributeDescriptorDataType $maintenanceLineItemAttributes = null, string $createdBy = null, string $lastModifiedBy = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): ?EntitlementLineItemIdentifierType
    {
        return $this->activationId;
    }

    public function withActivationId(?EntitlementLineItemIdentifierType $activationId): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getEntitlementId(): ?EntitlementIdentifierType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?EntitlementIdentifierType $entitlementId): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getMaintenanceProduct(): ?ProductIdentifierType
    {
        return $this->maintenanceProduct;
    }

    public function withMaintenanceProduct(?ProductIdentifierType $maintenanceProduct): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    public function getMaintenanceProductDescription(): ?string
    {
        return $this->maintenanceProductDescription;
    }

    public function withMaintenanceProductDescription(?string $maintenanceProductDescription): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceProductDescription = $maintenanceProductDescription;

        return $new;
    }

    public function getMaintenancePartNumber(): ?PartNumberIdentifierType
    {
        return $this->maintenancePartNumber;
    }

    public function withMaintenancePartNumber(?PartNumberIdentifierType $maintenancePartNumber): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenancePartNumber = $maintenancePartNumber;

        return $new;
    }

    public function getMaintenancePartNumberDescription(): ?string
    {
        return $this->maintenancePartNumberDescription;
    }

    public function withMaintenancePartNumberDescription(?string $maintenancePartNumberDescription): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenancePartNumberDescription = $maintenancePartNumberDescription;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOnDateTime(): ?\DateTimeInterface
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(?\DateTimeInterface $createdOnDateTime): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return string|array<string>|null
     */
    public function getLinkedLineItemActivationId(): string|array|null
    {
        return $this->linkedLineItemActivationId;
    }

    /**
     * @param  string|array<string>|null  $linkedLineItemActivationId
     */
    public function withLinkedLineItemActivationId(string|array|null $linkedLineItemActivationId): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->linkedLineItemActivationId = $linkedLineItemActivationId;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): ?AttributeDescriptorDataType
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(?AttributeDescriptorDataType $maintenanceLineItemAttributes): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function withCreatedBy(?string $createdBy): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->createdBy = $createdBy;

        return $new;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function withLastModifiedBy(?string $lastModifiedBy): EntitlementMaintenanceLineItemPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedBy = $lastModifiedBy;

        return $new;
    }
}
