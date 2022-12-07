<?php

namespace Flexnet\EntitlementOrderService\Type;

class SearchEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $entitlementId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $entDescription;

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
     * @var bool|null
     */
    private $isBulk;

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
    private $contactEmail;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $shipToAddress;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $emailTemplateVariation;

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
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $description;

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
     * @var \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null
     */
    private $accountUnitName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $currentOwnerName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $maintStartDate;

    /**
     * @var bool|null
     */
    private $maintIsPermanent;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $maintExpirationDate;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType|null
     */
    private $entitlementAttributes;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entDescription
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productVersion
     * @param  string|null  $productType
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     * @param  bool|null  $isBulk
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToEmail
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $contactEmail
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToAddress
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $emailTemplateVariation
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $createdOn
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $lastModifiedDate
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\EntitlementOrderService\Type\StateQueryType|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null  $accountUnitName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $currentOwnerName
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $maintStartDate
     * @param  bool|null  $maintIsPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $maintExpirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType|null  $entitlementAttributes
     */
    public function __construct(SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $entDescription = null, SimpleQueryType|null $productName = null, SimpleQueryType|null $productVersion = null, string|null $productType = null, SimpleQueryType|null $partNumber = null, bool|null $isBulk = null, SimpleQueryType|null $soldTo = null, SimpleQueryType|null $shipToEmail = null, SimpleQueryType|null $contactEmail = null, SimpleQueryType|null $shipToAddress = null, SimpleQueryType|null $emailTemplateVariation = null, DateQueryType|null $startDate = null, bool|null $isPermanent = null, DateQueryType|null $expirationDate = null, DateQueryType|null $createdOn = null, DateQueryType|null $versionDate = null, DateQueryType|null $lastModifiedDate = null, SimpleQueryType|null $description = null, StateQueryType|null $state = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $createdUserId = null, PartnerTierQueryType|null $accountUnitName = null, SimpleQueryType|null $currentOwnerName = null, DateQueryType|null $maintStartDate = null, bool|null $maintIsPermanent = null, DateQueryType|null $maintExpirationDate = null, EntCustomAttributesQueryListType|null $entitlementAttributes = null)
    {
        $this->entitlementId = $entitlementId;
        $this->entDescription = $entDescription;
        $this->productName = $productName;
        $this->productVersion = $productVersion;
        $this->productType = $productType;
        $this->partNumber = $partNumber;
        $this->isBulk = $isBulk;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->contactEmail = $contactEmail;
        $this->shipToAddress = $shipToAddress;
        $this->emailTemplateVariation = $emailTemplateVariation;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->createdOn = $createdOn;
        $this->versionDate = $versionDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->description = $description;
        $this->state = $state;
        $this->licenseTechnology = $licenseTechnology;
        $this->createdUserId = $createdUserId;
        $this->accountUnitName = $accountUnitName;
        $this->currentOwnerName = $currentOwnerName;
        $this->maintStartDate = $maintStartDate;
        $this->maintIsPermanent = $maintIsPermanent;
        $this->maintExpirationDate = $maintExpirationDate;
        $this->entitlementAttributes = $entitlementAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entDescription
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $productVersion
     * @param  string|null  $productType
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     * @param  bool|null  $isBulk
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToEmail
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $contactEmail
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $shipToAddress
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $emailTemplateVariation
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $createdOn
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $lastModifiedDate
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\EntitlementOrderService\Type\StateQueryType|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\PartnerTierQueryType|null  $accountUnitName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $currentOwnerName
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $maintStartDate
     * @param  bool|null  $maintIsPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $maintExpirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType|null  $entitlementAttributes
     */
    public static function create(SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $entDescription = null, SimpleQueryType|null $productName = null, SimpleQueryType|null $productVersion = null, string|null $productType = null, SimpleQueryType|null $partNumber = null, bool|null $isBulk = null, SimpleQueryType|null $soldTo = null, SimpleQueryType|null $shipToEmail = null, SimpleQueryType|null $contactEmail = null, SimpleQueryType|null $shipToAddress = null, SimpleQueryType|null $emailTemplateVariation = null, DateQueryType|null $startDate = null, bool|null $isPermanent = null, DateQueryType|null $expirationDate = null, DateQueryType|null $createdOn = null, DateQueryType|null $versionDate = null, DateQueryType|null $lastModifiedDate = null, SimpleQueryType|null $description = null, StateQueryType|null $state = null, SimpleQueryType|null $licenseTechnology = null, SimpleQueryType|null $createdUserId = null, PartnerTierQueryType|null $accountUnitName = null, SimpleQueryType|null $currentOwnerName = null, DateQueryType|null $maintStartDate = null, bool|null $maintIsPermanent = null, DateQueryType|null $maintExpirationDate = null, EntCustomAttributesQueryListType|null $entitlementAttributes = null)
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
     * @return SearchEntitlementDataType
     */
    public function withEntitlementId(SimpleQueryType|null $entitlementId): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getEntDescription(): SimpleQueryType|null
    {
        return $this->entDescription;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entDescription
     * @return SearchEntitlementDataType
     */
    public function withEntDescription(SimpleQueryType|null $entDescription): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entDescription = $entDescription;

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
     * @return SearchEntitlementDataType
     */
    public function withProductName(SimpleQueryType|null $productName): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withProductVersion(SimpleQueryType|null $productVersion): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withProductType(string|null $productType): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withPartNumber(SimpleQueryType|null $partNumber): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsBulk(): bool|null
    {
        return $this->isBulk;
    }

    /**
     * @param  bool|null  $isBulk
     * @return SearchEntitlementDataType
     */
    public function withIsBulk(bool|null $isBulk): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->isBulk = $isBulk;

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
     * @return SearchEntitlementDataType
     */
    public function withSoldTo(SimpleQueryType|null $soldTo): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withShipToEmail(SimpleQueryType|null $shipToEmail): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getContactEmail(): SimpleQueryType|null
    {
        return $this->contactEmail;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $contactEmail
     * @return SearchEntitlementDataType
     */
    public function withContactEmail(SimpleQueryType|null $contactEmail): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->contactEmail = $contactEmail;

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
     * @return SearchEntitlementDataType
     */
    public function withShipToAddress(SimpleQueryType|null $shipToAddress): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getEmailTemplateVariation(): SimpleQueryType|null
    {
        return $this->emailTemplateVariation;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $emailTemplateVariation
     * @return SearchEntitlementDataType
     */
    public function withEmailTemplateVariation(SimpleQueryType|null $emailTemplateVariation): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

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
     * @return SearchEntitlementDataType
     */
    public function withStartDate(DateQueryType|null $startDate): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withIsPermanent(bool|null $isPermanent): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withExpirationDate(DateQueryType|null $expirationDate): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withCreatedOn(DateQueryType|null $createdOn): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withVersionDate(DateQueryType|null $versionDate): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withLastModifiedDate(DateQueryType|null $lastModifiedDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

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
     * @return SearchEntitlementDataType
     */
    public function withDescription(SimpleQueryType|null $description): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

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
     * @return SearchEntitlementDataType
     */
    public function withState(StateQueryType|null $state): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withLicenseTechnology(SimpleQueryType|null $licenseTechnology): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withCreatedUserId(SimpleQueryType|null $createdUserId): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

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
     * @return SearchEntitlementDataType
     */
    public function withAccountUnitName(PartnerTierQueryType|null $accountUnitName): SearchEntitlementDataType
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
     * @return SearchEntitlementDataType
     */
    public function withCurrentOwnerName(SimpleQueryType|null $currentOwnerName): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    public function getMaintStartDate(): DateQueryType|null
    {
        return $this->maintStartDate;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $maintStartDate
     * @return SearchEntitlementDataType
     */
    public function withMaintStartDate(DateQueryType|null $maintStartDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintStartDate = $maintStartDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getMaintIsPermanent(): bool|null
    {
        return $this->maintIsPermanent;
    }

    /**
     * @param  bool|null  $maintIsPermanent
     * @return SearchEntitlementDataType
     */
    public function withMaintIsPermanent(bool|null $maintIsPermanent): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintIsPermanent = $maintIsPermanent;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    public function getMaintExpirationDate(): DateQueryType|null
    {
        return $this->maintExpirationDate;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $maintExpirationDate
     * @return SearchEntitlementDataType
     */
    public function withMaintExpirationDate(DateQueryType|null $maintExpirationDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintExpirationDate = $maintExpirationDate;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType|null
     */
    public function getEntitlementAttributes(): EntCustomAttributesQueryListType|null
    {
        return $this->entitlementAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType|null  $entitlementAttributes
     * @return SearchEntitlementDataType
     */
    public function withEntitlementAttributes(EntCustomAttributesQueryListType|null $entitlementAttributes): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
