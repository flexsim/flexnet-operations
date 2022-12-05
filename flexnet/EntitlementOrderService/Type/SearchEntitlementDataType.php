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

    public function getEntitlementId(): SimpleQueryType|null
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(SimpleQueryType|null $entitlementId): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getEntDescription(): SimpleQueryType|null
    {
        return $this->entDescription;
    }

    public function withEntDescription(SimpleQueryType|null $entDescription): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entDescription = $entDescription;

        return $new;
    }

    public function getProductName(): SimpleQueryType|null
    {
        return $this->productName;
    }

    public function withProductName(SimpleQueryType|null $productName): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getProductVersion(): SimpleQueryType|null
    {
        return $this->productVersion;
    }

    public function withProductVersion(SimpleQueryType|null $productVersion): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->productVersion = $productVersion;

        return $new;
    }

    public function getProductType(): string|null
    {
        return $this->productType;
    }

    public function withProductType(string|null $productType): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->productType = $productType;

        return $new;
    }

    public function getPartNumber(): SimpleQueryType|null
    {
        return $this->partNumber;
    }

    public function withPartNumber(SimpleQueryType|null $partNumber): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getIsBulk(): bool|null
    {
        return $this->isBulk;
    }

    public function withIsBulk(bool|null $isBulk): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->isBulk = $isBulk;

        return $new;
    }

    public function getSoldTo(): SimpleQueryType|null
    {
        return $this->soldTo;
    }

    public function withSoldTo(SimpleQueryType|null $soldTo): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): SimpleQueryType|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(SimpleQueryType|null $shipToEmail): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getContactEmail(): SimpleQueryType|null
    {
        return $this->contactEmail;
    }

    public function withContactEmail(SimpleQueryType|null $contactEmail): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->contactEmail = $contactEmail;

        return $new;
    }

    public function getShipToAddress(): SimpleQueryType|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(SimpleQueryType|null $shipToAddress): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEmailTemplateVariation(): SimpleQueryType|null
    {
        return $this->emailTemplateVariation;
    }

    public function withEmailTemplateVariation(SimpleQueryType|null $emailTemplateVariation): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

        return $new;
    }

    public function getStartDate(): DateQueryType|null
    {
        return $this->startDate;
    }

    public function withStartDate(DateQueryType|null $startDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): DateQueryType|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(DateQueryType|null $expirationDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOn(): DateQueryType|null
    {
        return $this->createdOn;
    }

    public function withCreatedOn(DateQueryType|null $createdOn): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->createdOn = $createdOn;

        return $new;
    }

    public function getVersionDate(): DateQueryType|null
    {
        return $this->versionDate;
    }

    public function withVersionDate(DateQueryType|null $versionDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLastModifiedDate(): DateQueryType|null
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(DateQueryType|null $lastModifiedDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getDescription(): SimpleQueryType|null
    {
        return $this->description;
    }

    public function withDescription(SimpleQueryType|null $description): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): StateQueryType|null
    {
        return $this->state;
    }

    public function withState(StateQueryType|null $state): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): SimpleQueryType|null
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(SimpleQueryType|null $licenseTechnology): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getCreatedUserId(): SimpleQueryType|null
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(SimpleQueryType|null $createdUserId): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    public function getAccountUnitName(): PartnerTierQueryType|null
    {
        return $this->accountUnitName;
    }

    public function withAccountUnitName(PartnerTierQueryType|null $accountUnitName): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->accountUnitName = $accountUnitName;

        return $new;
    }

    public function getCurrentOwnerName(): SimpleQueryType|null
    {
        return $this->currentOwnerName;
    }

    public function withCurrentOwnerName(SimpleQueryType|null $currentOwnerName): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }

    public function getMaintStartDate(): DateQueryType|null
    {
        return $this->maintStartDate;
    }

    public function withMaintStartDate(DateQueryType|null $maintStartDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintStartDate = $maintStartDate;

        return $new;
    }

    public function getMaintIsPermanent(): bool|null
    {
        return $this->maintIsPermanent;
    }

    public function withMaintIsPermanent(bool|null $maintIsPermanent): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintIsPermanent = $maintIsPermanent;

        return $new;
    }

    public function getMaintExpirationDate(): DateQueryType|null
    {
        return $this->maintExpirationDate;
    }

    public function withMaintExpirationDate(DateQueryType|null $maintExpirationDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintExpirationDate = $maintExpirationDate;

        return $new;
    }

    public function getEntitlementAttributes(): EntCustomAttributesQueryListType|null
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(EntCustomAttributesQueryListType|null $entitlementAttributes): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
