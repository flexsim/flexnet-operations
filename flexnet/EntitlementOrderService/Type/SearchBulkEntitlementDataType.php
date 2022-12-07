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
     * @var string|null
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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productVersion
     * @param  string|null  $productType
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToEmail
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToAddress
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $createdOn
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $lastModifiedDate
     * @param  \Flexnet\EntitlementOrderService\Type\StateQueryType|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null  $customAttributes
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null  $accountUnitName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $currentOwnerName
     */
    public function __construct(SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $description = null, SimpleQueryType|null $productName = null, SimpleQueryType|null $productVersion = null, string|null $productType = null, SimpleQueryType|null $partNumber = null, SimpleQueryType|null $soldTo = null, SimpleQueryType|null $shipToEmail = null, SimpleQueryType|null $shipToAddress = null, bool|null $isPermanent = null, DateQueryType|null $expirationDate = null, DateQueryType|null $createdOn = null, DateQueryType|null $versionDate = null, DateQueryType|null $lastModifiedDate = null, StateQueryType|null $state = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $createdUserId = null, CustomAttributesQueryListType|null $customAttributes = null, bool|null $allowPortalLogin = null, PartnerTierQueryType|null $accountUnitName = null, SimpleQueryType|null $currentOwnerName = null)
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

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productVersion
     * @param  string|null  $productType
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToEmail
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToAddress
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $createdOn
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $lastModifiedDate
     * @param  \Flexnet\EntitlementOrderService\Type\StateQueryType|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null  $customAttributes
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null  $accountUnitName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $currentOwnerName
     */
    public static function create(SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $description = null, SimpleQueryType|null $productName = null, SimpleQueryType|null $productVersion = null, string|null $productType = null, SimpleQueryType|null $partNumber = null, SimpleQueryType|null $soldTo = null, SimpleQueryType|null $shipToEmail = null, SimpleQueryType|null $shipToAddress = null, bool|null $isPermanent = null, DateQueryType|null $expirationDate = null, DateQueryType|null $createdOn = null, DateQueryType|null $versionDate = null, DateQueryType|null $lastModifiedDate = null, StateQueryType|null $state = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $createdUserId = null, CustomAttributesQueryListType|null $customAttributes = null, bool|null $allowPortalLogin = null, PartnerTierQueryType|null $accountUnitName = null, SimpleQueryType|null $currentOwnerName = null)
    {
        return new static(...\func_get_args());
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
     * @return SearchBulkEntitlementDataType
     */
    public function withEntitlementId(SimpleQueryType|null $entitlementId): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getDescription(): SimpleQueryType|null
    {
        return $this->description;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $description
     * @return SearchBulkEntitlementDataType
     */
    public function withDescription(SimpleQueryType|null $description): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

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
     * @return SearchBulkEntitlementDataType
     */
    public function withProductName(SimpleQueryType|null $productName): SearchBulkEntitlementDataType
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
     * @return SearchBulkEntitlementDataType
     */
    public function withProductVersion(SimpleQueryType|null $productVersion): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->productVersion = $productVersion;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getProductType(): string|null
    {
        return $this->productType;
    }

    /**
     * @param  string|null  $productType
     * @return SearchBulkEntitlementDataType
     */
    public function withProductType(string|null $productType): SearchBulkEntitlementDataType
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
     * @return SearchBulkEntitlementDataType
     */
    public function withPartNumber(SimpleQueryType|null $partNumber): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

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
     * @return SearchBulkEntitlementDataType
     */
    public function withSoldTo(SimpleQueryType|null $soldTo): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getShipToEmail(): SimpleQueryType|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToEmail
     * @return SearchBulkEntitlementDataType
     */
    public function withShipToEmail(SimpleQueryType|null $shipToEmail): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getShipToAddress(): SimpleQueryType|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToAddress
     * @return SearchBulkEntitlementDataType
     */
    public function withShipToAddress(SimpleQueryType|null $shipToAddress): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

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
     * @return SearchBulkEntitlementDataType
     */
    public function withIsPermanent(bool|null $isPermanent): SearchBulkEntitlementDataType
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
     * @return SearchBulkEntitlementDataType
     */
    public function withExpirationDate(DateQueryType|null $expirationDate): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    public function getCreatedOn(): DateQueryType|null
    {
        return $this->createdOn;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $createdOn
     * @return SearchBulkEntitlementDataType
     */
    public function withCreatedOn(DateQueryType|null $createdOn): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->createdOn = $createdOn;

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
     * @return SearchBulkEntitlementDataType
     */
    public function withVersionDate(DateQueryType|null $versionDate): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    public function getLastModifiedDate(): DateQueryType|null
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $lastModifiedDate
     * @return SearchBulkEntitlementDataType
     */
    public function withLastModifiedDate(DateQueryType|null $lastModifiedDate): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StateQueryType|null
     */
    public function getState(): StateQueryType|null
    {
        return $this->state;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateQueryType|null  $state
     * @return SearchBulkEntitlementDataType
     */
    public function withState(StateQueryType|null $state): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

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
     * @return SearchBulkEntitlementDataType
     */
    public function withLicenseTechnology(SimpleQueryType|null $licenseTechnology): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getCreatedUserId(): SimpleQueryType|null
    {
        return $this->createdUserId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $createdUserId
     * @return SearchBulkEntitlementDataType
     */
    public function withCreatedUserId(SimpleQueryType|null $createdUserId): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

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
     * @return SearchBulkEntitlementDataType
     */
    public function withCustomAttributes(CustomAttributesQueryListType|null $customAttributes): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    /**
     * @param  bool|null  $allowPortalLogin
     * @return SearchBulkEntitlementDataType
     */
    public function withAllowPortalLogin(bool|null $allowPortalLogin): SearchBulkEntitlementDataType
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
     * @return SearchBulkEntitlementDataType
     */
    public function withAccountUnitName(PartnerTierQueryType|null $accountUnitName): SearchBulkEntitlementDataType
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
     * @return SearchBulkEntitlementDataType
     */
    public function withCurrentOwnerName(SimpleQueryType|null $currentOwnerName): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }
}
