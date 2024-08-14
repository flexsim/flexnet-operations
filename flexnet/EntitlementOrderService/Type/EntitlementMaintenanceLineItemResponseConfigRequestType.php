<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementMaintenanceLineItemResponseConfigRequestType
{
    /**
     * @var bool|null
     */
    private $activationId;

    /**
     * @var bool|null
     */
    private $state;

    /**
     * @var bool|null
     */
    private $orderId;

    /**
     * @var bool|null
     */
    private $orderLineNumber;

    /**
     * @var bool|null
     */
    private $entitlementId;

    /**
     * @var bool|null
     */
    private $maintenanceProduct;

    /**
     * @var bool|null
     */
    private $maintenancePartNumber;

    /**
     * @var bool|null
     */
    private $maintenancePartNumberDescription;

    /**
     * @var bool|null
     */
    private $startDate;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var bool|null
     */
    private $expirationDate;

    /**
     * @var bool|null
     */
    private $createdOnDateTime;

    /**
     * @var bool|null
     */
    private $lastModifiedDateTime;

    /**
     * @var bool|null
     */
    private $maintenanceLineItemAttributes;

    /**
     * @var bool|null
     */
    private $linkedEntitlementLineItem;

    /**
     * @var bool|null
     */
    private $fetchCreatedBy;

    /**
     * @var bool|null
     */
    private $fetchLastModifiedBy;

    /**
     * Constructor
     */
    public function __construct(?bool $activationId = null, ?bool $state = null, ?bool $orderId = null, ?bool $orderLineNumber = null, ?bool $entitlementId = null, ?bool $maintenanceProduct = null, ?bool $maintenancePartNumber = null, ?bool $maintenancePartNumberDescription = null, ?bool $startDate = null, ?bool $isPermanent = null, ?bool $expirationDate = null, ?bool $createdOnDateTime = null, ?bool $lastModifiedDateTime = null, ?bool $maintenanceLineItemAttributes = null, ?bool $linkedEntitlementLineItem = null, ?bool $fetchCreatedBy = null, ?bool $fetchLastModifiedBy = null)
    {
        $this->activationId = $activationId;
        $this->state = $state;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->entitlementId = $entitlementId;
        $this->maintenanceProduct = $maintenanceProduct;
        $this->maintenancePartNumber = $maintenancePartNumber;
        $this->maintenancePartNumberDescription = $maintenancePartNumberDescription;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
        $this->linkedEntitlementLineItem = $linkedEntitlementLineItem;
        $this->fetchCreatedBy = $fetchCreatedBy;
        $this->fetchLastModifiedBy = $fetchLastModifiedBy;
    }

    public static function create(?bool $activationId = null, ?bool $state = null, ?bool $orderId = null, ?bool $orderLineNumber = null, ?bool $entitlementId = null, ?bool $maintenanceProduct = null, ?bool $maintenancePartNumber = null, ?bool $maintenancePartNumberDescription = null, ?bool $startDate = null, ?bool $isPermanent = null, ?bool $expirationDate = null, ?bool $createdOnDateTime = null, ?bool $lastModifiedDateTime = null, ?bool $maintenanceLineItemAttributes = null, ?bool $linkedEntitlementLineItem = null, ?bool $fetchCreatedBy = null, ?bool $fetchLastModifiedBy = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): ?bool
    {
        return $this->activationId;
    }

    public function withActivationId(?bool $activationId): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getState(): ?bool
    {
        return $this->state;
    }

    public function withState(?bool $state): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getOrderId(): ?bool
    {
        return $this->orderId;
    }

    public function withOrderId(?bool $orderId): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?bool
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?bool $orderLineNumber): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getEntitlementId(): ?bool
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?bool $entitlementId): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getMaintenanceProduct(): ?bool
    {
        return $this->maintenanceProduct;
    }

    public function withMaintenanceProduct(?bool $maintenanceProduct): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    public function getMaintenancePartNumber(): ?bool
    {
        return $this->maintenancePartNumber;
    }

    public function withMaintenancePartNumber(?bool $maintenancePartNumber): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenancePartNumber = $maintenancePartNumber;

        return $new;
    }

    public function getMaintenancePartNumberDescription(): ?bool
    {
        return $this->maintenancePartNumberDescription;
    }

    public function withMaintenancePartNumberDescription(?bool $maintenancePartNumberDescription): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenancePartNumberDescription = $maintenancePartNumberDescription;

        return $new;
    }

    public function getStartDate(): ?bool
    {
        return $this->startDate;
    }

    public function withStartDate(?bool $startDate): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?bool
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?bool $expirationDate): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOnDateTime(): ?bool
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(?bool $createdOnDateTime): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): ?bool
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?bool $lastModifiedDateTime): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): ?bool
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(?bool $maintenanceLineItemAttributes): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }

    public function getLinkedEntitlementLineItem(): ?bool
    {
        return $this->linkedEntitlementLineItem;
    }

    public function withLinkedEntitlementLineItem(?bool $linkedEntitlementLineItem): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->linkedEntitlementLineItem = $linkedEntitlementLineItem;

        return $new;
    }

    public function getFetchCreatedBy(): ?bool
    {
        return $this->fetchCreatedBy;
    }

    public function withFetchCreatedBy(?bool $fetchCreatedBy): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchCreatedBy = $fetchCreatedBy;

        return $new;
    }

    public function getFetchLastModifiedBy(): ?bool
    {
        return $this->fetchLastModifiedBy;
    }

    public function withFetchLastModifiedBy(?bool $fetchLastModifiedBy): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchLastModifiedBy = $fetchLastModifiedBy;

        return $new;
    }
}
