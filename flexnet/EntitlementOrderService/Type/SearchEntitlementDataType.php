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
     */
    public function __construct(SimpleQueryType $entitlementId = null, SimpleQueryType $entDescription = null, SimpleQueryType $productName = null, SimpleQueryType $productVersion = null, string $productType = null, SimpleQueryType $partNumber = null, bool $isBulk = null, SimpleQueryType $soldTo = null, SimpleQueryType $shipToEmail = null, SimpleQueryType $contactEmail = null, SimpleQueryType $shipToAddress = null, SimpleQueryType $emailTemplateVariation = null, DateQueryType $startDate = null, bool $isPermanent = null, DateQueryType $expirationDate = null, DateQueryType $createdOn = null, DateQueryType $versionDate = null, DateQueryType $lastModifiedDate = null, SimpleQueryType $description = null, StateQueryType $state = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $createdUserId = null, PartnerTierQueryType $accountUnitName = null, SimpleQueryType $currentOwnerName = null, DateQueryType $maintStartDate = null, bool $maintIsPermanent = null, DateQueryType $maintExpirationDate = null, EntCustomAttributesQueryListType $entitlementAttributes = null)
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

    public static function create(SimpleQueryType $entitlementId = null, SimpleQueryType $entDescription = null, SimpleQueryType $productName = null, SimpleQueryType $productVersion = null, string $productType = null, SimpleQueryType $partNumber = null, bool $isBulk = null, SimpleQueryType $soldTo = null, SimpleQueryType $shipToEmail = null, SimpleQueryType $contactEmail = null, SimpleQueryType $shipToAddress = null, SimpleQueryType $emailTemplateVariation = null, DateQueryType $startDate = null, bool $isPermanent = null, DateQueryType $expirationDate = null, DateQueryType $createdOn = null, DateQueryType $versionDate = null, DateQueryType $lastModifiedDate = null, SimpleQueryType $description = null, StateQueryType $state = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $createdUserId = null, PartnerTierQueryType $accountUnitName = null, SimpleQueryType $currentOwnerName = null, DateQueryType $maintStartDate = null, bool $maintIsPermanent = null, DateQueryType $maintExpirationDate = null, EntCustomAttributesQueryListType $entitlementAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?SimpleQueryType $entitlementId): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getEntDescription(): ?SimpleQueryType
    {
        return $this->entDescription;
    }

    public function withEntDescription(?SimpleQueryType $entDescription): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entDescription = $entDescription;

        return $new;
    }

    public function getProductName(): ?SimpleQueryType
    {
        return $this->productName;
    }

    public function withProductName(?SimpleQueryType $productName): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getProductVersion(): ?SimpleQueryType
    {
        return $this->productVersion;
    }

    public function withProductVersion(?SimpleQueryType $productVersion): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->productVersion = $productVersion;

        return $new;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function withProductType(?string $productType): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->productType = $productType;

        return $new;
    }

    public function getPartNumber(): ?SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?SimpleQueryType $partNumber): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getIsBulk(): ?bool
    {
        return $this->isBulk;
    }

    public function withIsBulk(?bool $isBulk): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->isBulk = $isBulk;

        return $new;
    }

    public function getSoldTo(): ?SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?SimpleQueryType $soldTo): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?SimpleQueryType
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?SimpleQueryType $shipToEmail): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getContactEmail(): ?SimpleQueryType
    {
        return $this->contactEmail;
    }

    public function withContactEmail(?SimpleQueryType $contactEmail): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->contactEmail = $contactEmail;

        return $new;
    }

    public function getShipToAddress(): ?SimpleQueryType
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?SimpleQueryType $shipToAddress): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEmailTemplateVariation(): ?SimpleQueryType
    {
        return $this->emailTemplateVariation;
    }

    public function withEmailTemplateVariation(?SimpleQueryType $emailTemplateVariation): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

        return $new;
    }

    public function getStartDate(): ?DateQueryType
    {
        return $this->startDate;
    }

    public function withStartDate(?DateQueryType $startDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?DateQueryType $expirationDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOn(): ?DateQueryType
    {
        return $this->createdOn;
    }

    public function withCreatedOn(?DateQueryType $createdOn): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->createdOn = $createdOn;

        return $new;
    }

    public function getVersionDate(): ?DateQueryType
    {
        return $this->versionDate;
    }

    public function withVersionDate(?DateQueryType $versionDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLastModifiedDate(): ?DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?DateQueryType $lastModifiedDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getDescription(): ?SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?SimpleQueryType $description): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): ?StateQueryType
    {
        return $this->state;
    }

    public function withState(?StateQueryType $state): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?SimpleQueryType $licenseTechnology): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getCreatedUserId(): ?SimpleQueryType
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(?SimpleQueryType $createdUserId): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    public function getAccountUnitName(): ?PartnerTierQueryType
    {
        return $this->accountUnitName;
    }

    public function withAccountUnitName(?PartnerTierQueryType $accountUnitName): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->accountUnitName = $accountUnitName;

        return $new;
    }

    public function getCurrentOwnerName(): ?SimpleQueryType
    {
        return $this->currentOwnerName;
    }

    public function withCurrentOwnerName(?SimpleQueryType $currentOwnerName): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }

    public function getMaintStartDate(): ?DateQueryType
    {
        return $this->maintStartDate;
    }

    public function withMaintStartDate(?DateQueryType $maintStartDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintStartDate = $maintStartDate;

        return $new;
    }

    public function getMaintIsPermanent(): ?bool
    {
        return $this->maintIsPermanent;
    }

    public function withMaintIsPermanent(?bool $maintIsPermanent): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintIsPermanent = $maintIsPermanent;

        return $new;
    }

    public function getMaintExpirationDate(): ?DateQueryType
    {
        return $this->maintExpirationDate;
    }

    public function withMaintExpirationDate(?DateQueryType $maintExpirationDate): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->maintExpirationDate = $maintExpirationDate;

        return $new;
    }

    public function getEntitlementAttributes(): ?EntCustomAttributesQueryListType
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(?EntCustomAttributesQueryListType $entitlementAttributes): SearchEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
