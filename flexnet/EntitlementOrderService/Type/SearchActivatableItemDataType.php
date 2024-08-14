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
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $parentBulkEntitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $activationId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productVersion = null, ?string $productType = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $startDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $licenseTechnology = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderLineNumber = null, ?bool $withNoOrderId = null, ?bool $restrictToItemsWithCount = null, ?\Flexnet\EntitlementOrderService\Type\NumberQueryType $fulfilledAmount = null, ?string $userId = null, ?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType $customAttributes = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $parentBulkEntSoldTo = null, ?string $activatableItemType = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType $accountUnitName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $currentOwnerName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $lineItemParentLineItemId = null, ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $createdOnDateTime = null, ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $lastModifiedDateTime = null, ?\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType $lineItemAttributes = null)
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

    public static function create(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $parentBulkEntitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $activationId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productVersion = null, ?string $productType = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $startDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $licenseTechnology = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderLineNumber = null, ?bool $withNoOrderId = null, ?bool $restrictToItemsWithCount = null, ?\Flexnet\EntitlementOrderService\Type\NumberQueryType $fulfilledAmount = null, ?string $userId = null, ?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType $customAttributes = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $parentBulkEntSoldTo = null, ?string $activatableItemType = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType $accountUnitName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $currentOwnerName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $lineItemParentLineItemId = null, ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $createdOnDateTime = null, ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $lastModifiedDateTime = null, ?\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType $lineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getParentBulkEntitlementId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->parentBulkEntitlementId;
    }

    public function withParentBulkEntitlementId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $parentBulkEntitlementId): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    public function getEntitlementId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getActivationId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->activationId;
    }

    public function withActivationId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $activationId): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getProductName(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->productName;
    }

    public function withProductName(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productName): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getProductVersion(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->productVersion;
    }

    public function withProductVersion(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productVersion): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->productVersion = $productVersion;

        return $new;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function withProductType(?string $productType): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->productType = $productType;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getStartDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->startDate;
    }

    public function withStartDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $startDate): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $versionDate): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLicenseTechnology(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $licenseTechnology): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getOrderId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->orderId;
    }

    public function withOrderId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderId): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderLineNumber): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getWithNoOrderId(): ?bool
    {
        return $this->withNoOrderId;
    }

    public function withWithNoOrderId(?bool $withNoOrderId): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->withNoOrderId = $withNoOrderId;

        return $new;
    }

    public function getRestrictToItemsWithCount(): ?bool
    {
        return $this->restrictToItemsWithCount;
    }

    public function withRestrictToItemsWithCount(?bool $restrictToItemsWithCount): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->restrictToItemsWithCount = $restrictToItemsWithCount;

        return $new;
    }

    public function getFulfilledAmount(): ?\Flexnet\EntitlementOrderService\Type\NumberQueryType
    {
        return $this->fulfilledAmount;
    }

    public function withFulfilledAmount(?\Flexnet\EntitlementOrderService\Type\NumberQueryType $fulfilledAmount): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->fulfilledAmount = $fulfilledAmount;

        return $new;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function withUserId(?string $userId): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getCustomAttributes(): ?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType $customAttributes): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getSoldTo(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $soldTo): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getParentBulkEntSoldTo(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->parentBulkEntSoldTo;
    }

    public function withParentBulkEntSoldTo(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $parentBulkEntSoldTo): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->parentBulkEntSoldTo = $parentBulkEntSoldTo;

        return $new;
    }

    public function getActivatableItemType(): ?string
    {
        return $this->activatableItemType;
    }

    public function withActivatableItemType(?string $activatableItemType): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getAccountUnitName(): ?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType
    {
        return $this->accountUnitName;
    }

    public function withAccountUnitName(?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType $accountUnitName): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->accountUnitName = $accountUnitName;

        return $new;
    }

    public function getCurrentOwnerName(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->currentOwnerName;
    }

    public function withCurrentOwnerName(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $currentOwnerName): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }

    public function getLineItemParentLineItemId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->lineItemParentLineItemId;
    }

    public function withLineItemParentLineItemId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $lineItemParentLineItemId): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->lineItemParentLineItemId = $lineItemParentLineItemId;

        return $new;
    }

    public function getCreatedOnDateTime(): ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $createdOnDateTime): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $lastModifiedDateTime): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getLineItemAttributes(): ?\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(?\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType $lineItemAttributes): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }
}
