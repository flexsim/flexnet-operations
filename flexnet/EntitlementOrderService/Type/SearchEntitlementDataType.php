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
     * @var \Flexnet\EntitlementOrderService\Type\ProductType|null
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
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entDescription = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productVersion = null, ?\Flexnet\EntitlementOrderService\Type\ProductType $productType = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber = null, ?bool $isBulk = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToEmail = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $contactEmail = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToAddress = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $emailTemplateVariation = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $startDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $createdOn = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $lastModifiedDate = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $description = null, ?\Flexnet\EntitlementOrderService\Type\StateQueryType $state = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $licenseTechnology = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $createdUserId = null, ?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType $accountUnitName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $currentOwnerName = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $maintStartDate = null, ?bool $maintIsPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $maintExpirationDate = null, ?\Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType $entitlementAttributes = null)
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

    public static function create(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entDescription = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productVersion = null, ?\Flexnet\EntitlementOrderService\Type\ProductType $productType = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber = null, ?bool $isBulk = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToEmail = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $contactEmail = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToAddress = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $emailTemplateVariation = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $startDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $createdOn = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $lastModifiedDate = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $description = null, ?\Flexnet\EntitlementOrderService\Type\StateQueryType $state = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $licenseTechnology = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $createdUserId = null, ?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType $accountUnitName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $currentOwnerName = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $maintStartDate = null, ?bool $maintIsPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $maintExpirationDate = null, ?\Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType $entitlementAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getEntDescription(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->entDescription;
    }

    public function withEntDescription(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entDescription): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entDescription = $entDescription;

        return $new;
    }

    public function getProductName(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->productName;
    }

    public function withProductName(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productName): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getProductVersion(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->productVersion;
    }

    public function withProductVersion(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $productVersion): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->productVersion = $productVersion;

        return $new;
    }

    public function getProductType(): ?\Flexnet\EntitlementOrderService\Type\ProductType
    {
        return $this->productType;
    }

    public function withProductType(?\Flexnet\EntitlementOrderService\Type\ProductType $productType): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->productType = $productType;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getIsBulk(): ?bool
    {
        return $this->isBulk;
    }

    public function withIsBulk(?bool $isBulk): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->isBulk = $isBulk;

        return $new;
    }

    public function getSoldTo(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $soldTo): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToEmail): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getContactEmail(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->contactEmail;
    }

    public function withContactEmail(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $contactEmail): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->contactEmail = $contactEmail;

        return $new;
    }

    public function getShipToAddress(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $shipToAddress): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEmailTemplateVariation(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->emailTemplateVariation;
    }

    public function withEmailTemplateVariation(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $emailTemplateVariation): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

        return $new;
    }

    public function getStartDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->startDate;
    }

    public function withStartDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $startDate): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOn(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->createdOn;
    }

    public function withCreatedOn(?\Flexnet\EntitlementOrderService\Type\DateQueryType $createdOn): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->createdOn = $createdOn;

        return $new;
    }

    public function getVersionDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $versionDate): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLastModifiedDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $lastModifiedDate): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getDescription(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $description): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): ?\Flexnet\EntitlementOrderService\Type\StateQueryType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\EntitlementOrderService\Type\StateQueryType $state): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $licenseTechnology): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getCreatedUserId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $createdUserId): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    public function getAccountUnitName(): ?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType
    {
        return $this->accountUnitName;
    }

    public function withAccountUnitName(?\Flexnet\EntitlementOrderService\Type\PartnerTierQueryType $accountUnitName): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->accountUnitName = $accountUnitName;

        return $new;
    }

    public function getCurrentOwnerName(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->currentOwnerName;
    }

    public function withCurrentOwnerName(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $currentOwnerName): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }

    public function getMaintStartDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->maintStartDate;
    }

    public function withMaintStartDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $maintStartDate): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintStartDate = $maintStartDate;

        return $new;
    }

    public function getMaintIsPermanent(): ?bool
    {
        return $this->maintIsPermanent;
    }

    public function withMaintIsPermanent(?bool $maintIsPermanent): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintIsPermanent = $maintIsPermanent;

        return $new;
    }

    public function getMaintExpirationDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->maintExpirationDate;
    }

    public function withMaintExpirationDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $maintExpirationDate): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintExpirationDate = $maintExpirationDate;

        return $new;
    }

    public function getEntitlementAttributes(): ?\Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(?\Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType $entitlementAttributes): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
