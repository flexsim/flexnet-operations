<?php

namespace Flexnet\EntitlementOrderService\Type;

class SearchBulkEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $entitlementId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $description;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $productName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $productVersion;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductType|null
     */
    private $productType;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $partNumber;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $soldTo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $shipToEmail;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $shipToAddress;

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
    private $createdOn;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $versionDate;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $lastModifiedDate;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateQueryType|null
     */
    private $state;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $licenseTechnology;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $createdUserId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null
     */
    private $customAttributes;

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
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $description = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productVersion = null, ?\Flexnet\EntitlementOrderService\Type\ProductType $productType = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToEmail = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToAddress = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $createdOn = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $lastModifiedDate = null, ?\Flexnet\EntitlementOrderService\Type\StateQueryType $state = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $licenseTechnology = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $createdUserId = null, ?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType $customAttributes = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType $accountUnitName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $currentOwnerName = null)
    {
        $this->entitlementId = $entitlementId;
        $this->description = $description;
        $this->productName = $productName;
        $this->productVersion = $productVersion;
        $this->productType = $productType;
        $this->partNumber = $partNumber;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->createdOn = $createdOn;
        $this->versionDate = $versionDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->state = $state;
        $this->licenseTechnology = $licenseTechnology;
        $this->createdUserId = $createdUserId;
        $this->customAttributes = $customAttributes;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->accountUnitName = $accountUnitName;
        $this->currentOwnerName = $currentOwnerName;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $description = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productVersion = null, ?\Flexnet\EntitlementOrderService\Type\ProductType $productType = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToEmail = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToAddress = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $createdOn = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $lastModifiedDate = null, ?\Flexnet\EntitlementOrderService\Type\StateQueryType $state = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $licenseTechnology = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $createdUserId = null, ?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType $customAttributes = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType $accountUnitName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $currentOwnerName = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getDescription(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $description): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getProductName(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->productName;
    }

    public function withProductName(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productName): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getProductVersion(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->productVersion;
    }

    public function withProductVersion(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productVersion): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->productVersion = $productVersion;

        return $new;
    }

    public function getProductType(): ?\Flexnet\EntitlementOrderService\Type\ProductType
    {
        return $this->productType;
    }

    public function withProductType(?\Flexnet\EntitlementOrderService\Type\ProductType $productType): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->productType = $productType;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getSoldTo(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $soldTo): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToEmail): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToAddress): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOn(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->createdOn;
    }

    public function withCreatedOn(?\Flexnet\EntitlementOrderService\Type\DateQueryType $createdOn): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->createdOn = $createdOn;

        return $new;
    }

    public function getVersionDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $versionDate): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLastModifiedDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $lastModifiedDate): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getState(): ?\Flexnet\EntitlementOrderService\Type\StateQueryType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\EntitlementOrderService\Type\StateQueryType $state): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $licenseTechnology): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getCreatedUserId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $createdUserId): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    public function getCustomAttributes(): ?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType $customAttributes): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getAccountUnitName(): ?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType
    {
        return $this->accountUnitName;
    }

    public function withAccountUnitName(?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType $accountUnitName): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->accountUnitName = $accountUnitName;

        return $new;
    }

    public function getCurrentOwnerName(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->currentOwnerName;
    }

    public function withCurrentOwnerName(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $currentOwnerName): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }
}
