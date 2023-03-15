<?php

namespace Flexnet\EntitlementOrderService\Type;

class SearchActivatableItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $parentBulkEntitlementId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $entitlementId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $activationId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $productName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $productVersion;

    /**
     * @var string|null
     */
    private $productType;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $partNumber;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $startDate;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $expirationDate;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $versionDate;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $licenseTechnology;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $orderId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $orderLineNumber;

    /**
     * @var bool|null
     */
    private $withNoOrderId;

    /**
     * @var bool|null
     */
    private $restrictToItemsWithCount;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\NumberQueryType|null
     */
    private $fulfilledAmount;

    /**
     * @var string|null
     */
    private $userId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null
     */
    private $customAttributes;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $soldTo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $parentBulkEntSoldTo;

    /**
     * @var string|null
     */
    private $activatableItemType;

    /**
     * @var bool|null
     */
    private $allowPortalLogin;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null
     */
    private $accountUnitName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $currentOwnerName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $lineItemParentLineItemId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null
     */
    private $createdOnDateTime;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null
     */
    private $lastModifiedDateTime;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType|null
     */
    private $lineItemAttributes;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $parentBulkEntitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $activationId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productVersion
     * @param  string|null  $productType
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderLineNumber
     * @param  bool|null  $withNoOrderId
     * @param  bool|null  $restrictToItemsWithCount
     * @param  \Flexnet\EntitlementOrderService\Type\NumberQueryType|null  $fulfilledAmount
     * @param  string|null  $userId
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null  $customAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $parentBulkEntSoldTo
     * @param  string|null  $activatableItemType
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null  $accountUnitName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $currentOwnerName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $lineItemParentLineItemId
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $createdOnDateTime
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $lastModifiedDateTime
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType|null  $lineItemAttributes
     */
    public function __construct(SimpleQueryType|null $parentBulkEntitlementId = null, SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $activationId = null, SimpleQueryType|null $productName = null, SimpleQueryType|null $productVersion = null, string|null $productType = null, SimpleQueryType|null $partNumber = null, DateQueryType|null $startDate = null, bool|null $isPermanent = null, DateQueryType|null $expirationDate = null, DateQueryType|null $versionDate = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $orderId = null, SimpleQueryType|null $orderLineNumber = null, bool|null $withNoOrderId = null, bool|null $restrictToItemsWithCount = null, NumberQueryType|null $fulfilledAmount = null, string|null $userId = null, CustomAttributesQueryListType|null $customAttributes = null, SimpleQueryType|null $soldTo = null, SimpleQueryType|null $parentBulkEntSoldTo = null, string|null $activatableItemType = null, bool|null $allowPortalLogin = null, PartnerTierQueryType|null $accountUnitName = null, SimpleQueryType|null $currentOwnerName = null, SimpleQueryType|null $lineItemParentLineItemId = null, DateTimeQueryType|null $createdOnDateTime = null, DateTimeQueryType|null $lastModifiedDateTime = null, LineItemCustomAttributesQueryListType|null $lineItemAttributes = null)
    {
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;
        $this->entitlementId = $entitlementId;
        $this->activationId = $activationId;
        $this->productName = $productName;
        $this->productVersion = $productVersion;
        $this->productType = $productType;
        $this->partNumber = $partNumber;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->licenseTechnology = $licenseTechnology;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->withNoOrderId = $withNoOrderId;
        $this->restrictToItemsWithCount = $restrictToItemsWithCount;
        $this->fulfilledAmount = $fulfilledAmount;
        $this->userId = $userId;
        $this->customAttributes = $customAttributes;
        $this->soldTo = $soldTo;
        $this->parentBulkEntSoldTo = $parentBulkEntSoldTo;
        $this->activatableItemType = $activatableItemType;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->accountUnitName = $accountUnitName;
        $this->currentOwnerName = $currentOwnerName;
        $this->lineItemParentLineItemId = $lineItemParentLineItemId;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->lineItemAttributes = $lineItemAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $parentBulkEntitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $activationId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productVersion
     * @param  string|null  $productType
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderLineNumber
     * @param  bool|null  $withNoOrderId
     * @param  bool|null  $restrictToItemsWithCount
     * @param  \Flexnet\EntitlementOrderService\Type\NumberQueryType|null  $fulfilledAmount
     * @param  string|null  $userId
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null  $customAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $parentBulkEntSoldTo
     * @param  string|null  $activatableItemType
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null  $accountUnitName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $currentOwnerName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $lineItemParentLineItemId
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $createdOnDateTime
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $lastModifiedDateTime
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType|null  $lineItemAttributes
     */
    public static function create(SimpleQueryType|null $parentBulkEntitlementId = null, SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $activationId = null, SimpleQueryType|null $productName = null, SimpleQueryType|null $productVersion = null, string|null $productType = null, SimpleQueryType|null $partNumber = null, DateQueryType|null $startDate = null, bool|null $isPermanent = null, DateQueryType|null $expirationDate = null, DateQueryType|null $versionDate = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $orderId = null, SimpleQueryType|null $orderLineNumber = null, bool|null $withNoOrderId = null, bool|null $restrictToItemsWithCount = null, NumberQueryType|null $fulfilledAmount = null, string|null $userId = null, CustomAttributesQueryListType|null $customAttributes = null, SimpleQueryType|null $soldTo = null, SimpleQueryType|null $parentBulkEntSoldTo = null, string|null $activatableItemType = null, bool|null $allowPortalLogin = null, PartnerTierQueryType|null $accountUnitName = null, SimpleQueryType|null $currentOwnerName = null, SimpleQueryType|null $lineItemParentLineItemId = null, DateTimeQueryType|null $createdOnDateTime = null, DateTimeQueryType|null $lastModifiedDateTime = null, LineItemCustomAttributesQueryListType|null $lineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getParentBulkEntitlementId(): SimpleQueryType|null
    {
        return $this->parentBulkEntitlementId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $parentBulkEntitlementId
     */
    public function withParentBulkEntitlementId(SimpleQueryType|null $parentBulkEntitlementId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getEntitlementId(): SimpleQueryType|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     */
    public function withEntitlementId(SimpleQueryType|null $entitlementId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getActivationId(): SimpleQueryType|null
    {
        return $this->activationId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $activationId
     */
    public function withActivationId(SimpleQueryType|null $activationId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getProductName(): SimpleQueryType|null
    {
        return $this->productName;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productName
     */
    public function withProductName(SimpleQueryType|null $productName): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getProductVersion(): SimpleQueryType|null
    {
        return $this->productVersion;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productVersion
     */
    public function withProductVersion(SimpleQueryType|null $productVersion): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->productVersion = $productVersion;

        return $new;
    }

    public function getProductType(): string|null
    {
        return $this->productType;
    }

    public function withProductType(string|null $productType): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->productType = $productType;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getPartNumber(): SimpleQueryType|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     */
    public function withPartNumber(SimpleQueryType|null $partNumber): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    public function getStartDate(): DateQueryType|null
    {
        return $this->startDate;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $startDate
     */
    public function withStartDate(DateQueryType|null $startDate): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    public function getExpirationDate(): DateQueryType|null
    {
        return $this->expirationDate;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     */
    public function withExpirationDate(DateQueryType|null $expirationDate): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    public function getVersionDate(): DateQueryType|null
    {
        return $this->versionDate;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $versionDate
     */
    public function withVersionDate(DateQueryType|null $versionDate): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getLicenseTechnology(): SimpleQueryType|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $licenseTechnology
     */
    public function withLicenseTechnology(SimpleQueryType|null $licenseTechnology): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getOrderId(): SimpleQueryType|null
    {
        return $this->orderId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderId
     */
    public function withOrderId(SimpleQueryType|null $orderId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getOrderLineNumber(): SimpleQueryType|null
    {
        return $this->orderLineNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderLineNumber
     */
    public function withOrderLineNumber(SimpleQueryType|null $orderLineNumber): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getWithNoOrderId(): bool|null
    {
        return $this->withNoOrderId;
    }

    public function withWithNoOrderId(bool|null $withNoOrderId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->withNoOrderId = $withNoOrderId;

        return $new;
    }

    public function getRestrictToItemsWithCount(): bool|null
    {
        return $this->restrictToItemsWithCount;
    }

    public function withRestrictToItemsWithCount(bool|null $restrictToItemsWithCount): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->restrictToItemsWithCount = $restrictToItemsWithCount;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\NumberQueryType|null
     */
    public function getFulfilledAmount(): NumberQueryType|null
    {
        return $this->fulfilledAmount;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\NumberQueryType|null  $fulfilledAmount
     */
    public function withFulfilledAmount(NumberQueryType|null $fulfilledAmount): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->fulfilledAmount = $fulfilledAmount;

        return $new;
    }

    public function getUserId(): string|null
    {
        return $this->userId;
    }

    public function withUserId(string|null $userId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null
     */
    public function getCustomAttributes(): CustomAttributesQueryListType|null
    {
        return $this->customAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null  $customAttributes
     */
    public function withCustomAttributes(CustomAttributesQueryListType|null $customAttributes): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getSoldTo(): SimpleQueryType|null
    {
        return $this->soldTo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $soldTo
     */
    public function withSoldTo(SimpleQueryType|null $soldTo): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getParentBulkEntSoldTo(): SimpleQueryType|null
    {
        return $this->parentBulkEntSoldTo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $parentBulkEntSoldTo
     */
    public function withParentBulkEntSoldTo(SimpleQueryType|null $parentBulkEntSoldTo): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->parentBulkEntSoldTo = $parentBulkEntSoldTo;

        return $new;
    }

    public function getActivatableItemType(): string|null
    {
        return $this->activatableItemType;
    }

    public function withActivatableItemType(string|null $activatableItemType): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(bool|null $allowPortalLogin): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null
     */
    public function getAccountUnitName(): PartnerTierQueryType|null
    {
        return $this->accountUnitName;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null  $accountUnitName
     */
    public function withAccountUnitName(PartnerTierQueryType|null $accountUnitName): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->accountUnitName = $accountUnitName;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getCurrentOwnerName(): SimpleQueryType|null
    {
        return $this->currentOwnerName;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $currentOwnerName
     */
    public function withCurrentOwnerName(SimpleQueryType|null $currentOwnerName): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getLineItemParentLineItemId(): SimpleQueryType|null
    {
        return $this->lineItemParentLineItemId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $lineItemParentLineItemId
     */
    public function withLineItemParentLineItemId(SimpleQueryType|null $lineItemParentLineItemId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->lineItemParentLineItemId = $lineItemParentLineItemId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null
     */
    public function getCreatedOnDateTime(): DateTimeQueryType|null
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $createdOnDateTime
     */
    public function withCreatedOnDateTime(DateTimeQueryType|null $createdOnDateTime): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null
     */
    public function getLastModifiedDateTime(): DateTimeQueryType|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $lastModifiedDateTime
     */
    public function withLastModifiedDateTime(DateTimeQueryType|null $lastModifiedDateTime): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType|null
     */
    public function getLineItemAttributes(): LineItemCustomAttributesQueryListType|null
    {
        return $this->lineItemAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType|null  $lineItemAttributes
     */
    public function withLineItemAttributes(LineItemCustomAttributesQueryListType|null $lineItemAttributes): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }
}
