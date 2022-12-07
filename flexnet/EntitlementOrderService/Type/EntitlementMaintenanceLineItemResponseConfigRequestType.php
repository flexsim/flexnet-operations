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

    /**
     * @return bool|null
     */
    public function getActivationId(): bool|null
    {
        return $this->activationId;
    }

    /**
     * @param  bool|null  $activationId
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withActivationId(bool|null $activationId): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getState(): bool|null
    {
        return $this->state;
    }

    /**
     * @param  bool|null  $state
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withState(bool|null $state): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOrderId(): bool|null
    {
        return $this->orderId;
    }

    /**
     * @param  bool|null  $orderId
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withOrderId(bool|null $orderId): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOrderLineNumber(): bool|null
    {
        return $this->orderLineNumber;
    }

    /**
     * @param  bool|null  $orderLineNumber
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withOrderLineNumber(bool|null $orderLineNumber): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getEntitlementId(): bool|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  bool|null  $entitlementId
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withEntitlementId(bool|null $entitlementId): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getMaintenanceProduct(): bool|null
    {
        return $this->maintenanceProduct;
    }

    /**
     * @param  bool|null  $maintenanceProduct
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withMaintenanceProduct(bool|null $maintenanceProduct): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenanceProduct = $maintenanceProduct;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getMaintenancePartNumber(): bool|null
    {
        return $this->maintenancePartNumber;
    }

    /**
     * @param  bool|null  $maintenancePartNumber
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withMaintenancePartNumber(bool|null $maintenancePartNumber): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenancePartNumber = $maintenancePartNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getMaintenancePartNumberDescription(): bool|null
    {
        return $this->maintenancePartNumberDescription;
    }

    /**
     * @param  bool|null  $maintenancePartNumberDescription
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withMaintenancePartNumberDescription(bool|null $maintenancePartNumberDescription): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenancePartNumberDescription = $maintenancePartNumberDescription;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getStartDate(): bool|null
    {
        return $this->startDate;
    }

    /**
     * @param  bool|null  $startDate
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withStartDate(bool|null $startDate): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    /**
     * @param  bool|null  $isPermanent
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withIsPermanent(bool|null $isPermanent): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getExpirationDate(): bool|null
    {
        return $this->expirationDate;
    }

    /**
     * @param  bool|null  $expirationDate
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withExpirationDate(bool|null $expirationDate): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getCreatedOnDateTime(): bool|null
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param  bool|null  $createdOnDateTime
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withCreatedOnDateTime(bool|null $createdOnDateTime): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLastModifiedDateTime(): bool|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  bool|null  $lastModifiedDateTime
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withLastModifiedDateTime(bool|null $lastModifiedDateTime): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getMaintenanceLineItemAttributes(): bool|null
    {
        return $this->maintenanceLineItemAttributes;
    }

    /**
     * @param  bool|null  $maintenanceLineItemAttributes
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withMaintenanceLineItemAttributes(bool|null $maintenanceLineItemAttributes): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLinkedEntitlementLineItem(): bool|null
    {
        return $this->linkedEntitlementLineItem;
    }

    /**
     * @param  bool|null  $linkedEntitlementLineItem
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withLinkedEntitlementLineItem(bool|null $linkedEntitlementLineItem): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->linkedEntitlementLineItem = $linkedEntitlementLineItem;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFetchCreatedBy(): bool|null
    {
        return $this->fetchCreatedBy;
    }

    /**
     * @param  bool|null  $fetchCreatedBy
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withFetchCreatedBy(bool|null $fetchCreatedBy): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchCreatedBy = $fetchCreatedBy;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFetchLastModifiedBy(): bool|null
    {
        return $this->fetchLastModifiedBy;
    }

    /**
     * @param  bool|null  $fetchLastModifiedBy
     * @return EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function withFetchLastModifiedBy(bool|null $fetchLastModifiedBy): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchLastModifiedBy = $fetchLastModifiedBy;

        return $new;
    }
}
