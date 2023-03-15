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
     *
     * @param  bool|null  $activationId
     * @param  bool|null  $state
     * @param  bool|null  $orderId
     * @param  bool|null  $orderLineNumber
     * @param  bool|null  $entitlementId
     * @param  bool|null  $maintenanceProduct
     * @param  bool|null  $maintenancePartNumber
     * @param  bool|null  $maintenancePartNumberDescription
     * @param  bool|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  bool|null  $expirationDate
     * @param  bool|null  $createdOnDateTime
     * @param  bool|null  $lastModifiedDateTime
     * @param  bool|null  $maintenanceLineItemAttributes
     * @param  bool|null  $linkedEntitlementLineItem
     * @param  bool|null  $fetchCreatedBy
     * @param  bool|null  $fetchLastModifiedBy
     */
    public function __construct(bool|null $activationId = null, bool|null $state = null, bool|null $orderId = null, bool|null $orderLineNumber = null, bool|null $entitlementId = null, bool|null $maintenanceProduct = null, bool|null $maintenancePartNumber = null, bool|null $maintenancePartNumberDescription = null, bool|null $startDate = null, bool|null $isPermanent = null, bool|null $expirationDate = null, bool|null $createdOnDateTime = null, bool|null $lastModifiedDateTime = null, bool|null $maintenanceLineItemAttributes = null, bool|null $linkedEntitlementLineItem = null, bool|null $fetchCreatedBy = null, bool|null $fetchLastModifiedBy = null)
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

    /**
     * @param  bool|null  $activationId
     * @param  bool|null  $state
     * @param  bool|null  $orderId
     * @param  bool|null  $orderLineNumber
     * @param  bool|null  $entitlementId
     * @param  bool|null  $maintenanceProduct
     * @param  bool|null  $maintenancePartNumber
     * @param  bool|null  $maintenancePartNumberDescription
     * @param  bool|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  bool|null  $expirationDate
     * @param  bool|null  $createdOnDateTime
     * @param  bool|null  $lastModifiedDateTime
     * @param  bool|null  $maintenanceLineItemAttributes
     * @param  bool|null  $linkedEntitlementLineItem
     * @param  bool|null  $fetchCreatedBy
     * @param  bool|null  $fetchLastModifiedBy
     */
    public static function create(bool|null $activationId = null, bool|null $state = null, bool|null $orderId = null, bool|null $orderLineNumber = null, bool|null $entitlementId = null, bool|null $maintenanceProduct = null, bool|null $maintenancePartNumber = null, bool|null $maintenancePartNumberDescription = null, bool|null $startDate = null, bool|null $isPermanent = null, bool|null $expirationDate = null, bool|null $createdOnDateTime = null, bool|null $lastModifiedDateTime = null, bool|null $maintenanceLineItemAttributes = null, bool|null $linkedEntitlementLineItem = null, bool|null $fetchCreatedBy = null, bool|null $fetchLastModifiedBy = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): bool|null
    {
        return $this->activationId;
    }

    public function withActivationId(bool|null $activationId): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getState(): bool|null
    {
        return $this->state;
    }

    public function withState(bool|null $state): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getOrderId(): bool|null
    {
        return $this->orderId;
    }

    public function withOrderId(bool|null $orderId): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): bool|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(bool|null $orderLineNumber): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getEntitlementId(): bool|null
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(bool|null $entitlementId): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getMaintenanceProduct(): bool|null
    {
        return $this->maintenanceProduct;
    }

    public function withMaintenanceProduct(bool|null $maintenanceProduct): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    public function getMaintenancePartNumber(): bool|null
    {
        return $this->maintenancePartNumber;
    }

    public function withMaintenancePartNumber(bool|null $maintenancePartNumber): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenancePartNumber = $maintenancePartNumber;

        return $new;
    }

    public function getMaintenancePartNumberDescription(): bool|null
    {
        return $this->maintenancePartNumberDescription;
    }

    public function withMaintenancePartNumberDescription(bool|null $maintenancePartNumberDescription): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenancePartNumberDescription = $maintenancePartNumberDescription;

        return $new;
    }

    public function getStartDate(): bool|null
    {
        return $this->startDate;
    }

    public function withStartDate(bool|null $startDate): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): bool|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(bool|null $expirationDate): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOnDateTime(): bool|null
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(bool|null $createdOnDateTime): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): bool|null
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(bool|null $lastModifiedDateTime): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): bool|null
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(bool|null $maintenanceLineItemAttributes): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }

    public function getLinkedEntitlementLineItem(): bool|null
    {
        return $this->linkedEntitlementLineItem;
    }

    public function withLinkedEntitlementLineItem(bool|null $linkedEntitlementLineItem): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->linkedEntitlementLineItem = $linkedEntitlementLineItem;

        return $new;
    }

    public function getFetchCreatedBy(): bool|null
    {
        return $this->fetchCreatedBy;
    }

    public function withFetchCreatedBy(bool|null $fetchCreatedBy): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchCreatedBy = $fetchCreatedBy;

        return $new;
    }

    public function getFetchLastModifiedBy(): bool|null
    {
        return $this->fetchLastModifiedBy;
    }

    public function withFetchLastModifiedBy(bool|null $fetchLastModifiedBy): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchLastModifiedBy = $fetchLastModifiedBy;

        return $new;
    }
}
