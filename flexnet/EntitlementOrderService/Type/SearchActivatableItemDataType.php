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
    public function __construct(SimpleQueryType $parentBulkEntitlementId = null, SimpleQueryType $entitlementId = null, SimpleQueryType $activationId = null, SimpleQueryType $productName = null, SimpleQueryType $productVersion = null, string $productType = null, SimpleQueryType $partNumber = null, DateQueryType $startDate = null, bool $isPermanent = null, DateQueryType $expirationDate = null, DateQueryType $versionDate = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $orderId = null, SimpleQueryType $orderLineNumber = null, bool $withNoOrderId = null, bool $restrictToItemsWithCount = null, NumberQueryType $fulfilledAmount = null, string $userId = null, CustomAttributesQueryListType $customAttributes = null, SimpleQueryType $soldTo = null, SimpleQueryType $parentBulkEntSoldTo = null, string $activatableItemType = null, bool $allowPortalLogin = null, PartnerTierQueryType $accountUnitName = null, SimpleQueryType $currentOwnerName = null, SimpleQueryType $lineItemParentLineItemId = null, DateTimeQueryType $createdOnDateTime = null, DateTimeQueryType $lastModifiedDateTime = null, LineItemCustomAttributesQueryListType $lineItemAttributes = null)
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

    public static function create(SimpleQueryType $parentBulkEntitlementId = null, SimpleQueryType $entitlementId = null, SimpleQueryType $activationId = null, SimpleQueryType $productName = null, SimpleQueryType $productVersion = null, string $productType = null, SimpleQueryType $partNumber = null, DateQueryType $startDate = null, bool $isPermanent = null, DateQueryType $expirationDate = null, DateQueryType $versionDate = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $orderId = null, SimpleQueryType $orderLineNumber = null, bool $withNoOrderId = null, bool $restrictToItemsWithCount = null, NumberQueryType $fulfilledAmount = null, string $userId = null, CustomAttributesQueryListType $customAttributes = null, SimpleQueryType $soldTo = null, SimpleQueryType $parentBulkEntSoldTo = null, string $activatableItemType = null, bool $allowPortalLogin = null, PartnerTierQueryType $accountUnitName = null, SimpleQueryType $currentOwnerName = null, SimpleQueryType $lineItemParentLineItemId = null, DateTimeQueryType $createdOnDateTime = null, DateTimeQueryType $lastModifiedDateTime = null, LineItemCustomAttributesQueryListType $lineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getParentBulkEntitlementId(): ?SimpleQueryType
    {
        return $this->parentBulkEntitlementId;
    }

    public function withParentBulkEntitlementId(?SimpleQueryType $parentBulkEntitlementId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    public function getEntitlementId(): ?SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?SimpleQueryType $entitlementId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getActivationId(): ?SimpleQueryType
    {
        return $this->activationId;
    }

    public function withActivationId(?SimpleQueryType $activationId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getProductName(): ?SimpleQueryType
    {
        return $this->productName;
    }

    public function withProductName(?SimpleQueryType $productName): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getProductVersion(): ?SimpleQueryType
    {
        return $this->productVersion;
    }

    public function withProductVersion(?SimpleQueryType $productVersion): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->productVersion = $productVersion;

        return $new;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function withProductType(?string $productType): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->productType = $productType;

        return $new;
    }

    public function getPartNumber(): ?SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?SimpleQueryType $partNumber): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getStartDate(): ?DateQueryType
    {
        return $this->startDate;
    }

    public function withStartDate(?DateQueryType $startDate): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?DateQueryType $expirationDate): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?DateQueryType
    {
        return $this->versionDate;
    }

    public function withVersionDate(?DateQueryType $versionDate): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLicenseTechnology(): ?SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?SimpleQueryType $licenseTechnology): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getOrderId(): ?SimpleQueryType
    {
        return $this->orderId;
    }

    public function withOrderId(?SimpleQueryType $orderId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?SimpleQueryType
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?SimpleQueryType $orderLineNumber): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getWithNoOrderId(): ?bool
    {
        return $this->withNoOrderId;
    }

    public function withWithNoOrderId(?bool $withNoOrderId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->withNoOrderId = $withNoOrderId;

        return $new;
    }

    public function getRestrictToItemsWithCount(): ?bool
    {
        return $this->restrictToItemsWithCount;
    }

    public function withRestrictToItemsWithCount(?bool $restrictToItemsWithCount): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->restrictToItemsWithCount = $restrictToItemsWithCount;

        return $new;
    }

    public function getFulfilledAmount(): ?NumberQueryType
    {
        return $this->fulfilledAmount;
    }

    public function withFulfilledAmount(?NumberQueryType $fulfilledAmount): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->fulfilledAmount = $fulfilledAmount;

        return $new;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function withUserId(?string $userId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getCustomAttributes(): ?CustomAttributesQueryListType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?CustomAttributesQueryListType $customAttributes): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getSoldTo(): ?SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?SimpleQueryType $soldTo): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getParentBulkEntSoldTo(): ?SimpleQueryType
    {
        return $this->parentBulkEntSoldTo;
    }

    public function withParentBulkEntSoldTo(?SimpleQueryType $parentBulkEntSoldTo): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->parentBulkEntSoldTo = $parentBulkEntSoldTo;

        return $new;
    }

    public function getActivatableItemType(): ?string
    {
        return $this->activatableItemType;
    }

    public function withActivatableItemType(?string $activatableItemType): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getAccountUnitName(): ?PartnerTierQueryType
    {
        return $this->accountUnitName;
    }

    public function withAccountUnitName(?PartnerTierQueryType $accountUnitName): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->accountUnitName = $accountUnitName;

        return $new;
    }

    public function getCurrentOwnerName(): ?SimpleQueryType
    {
        return $this->currentOwnerName;
    }

    public function withCurrentOwnerName(?SimpleQueryType $currentOwnerName): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }

    public function getLineItemParentLineItemId(): ?SimpleQueryType
    {
        return $this->lineItemParentLineItemId;
    }

    public function withLineItemParentLineItemId(?SimpleQueryType $lineItemParentLineItemId): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->lineItemParentLineItemId = $lineItemParentLineItemId;

        return $new;
    }

    public function getCreatedOnDateTime(): ?DateTimeQueryType
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(?DateTimeQueryType $createdOnDateTime): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): ?DateTimeQueryType
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?DateTimeQueryType $lastModifiedDateTime): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getLineItemAttributes(): ?LineItemCustomAttributesQueryListType
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(?LineItemCustomAttributesQueryListType $lineItemAttributes): SearchActivatableItemDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }
}
