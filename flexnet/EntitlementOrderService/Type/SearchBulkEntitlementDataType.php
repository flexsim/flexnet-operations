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
     */
    public function __construct(SimpleQueryType $entitlementId = null, SimpleQueryType $description = null, SimpleQueryType $productName = null, SimpleQueryType $productVersion = null, string $productType = null, SimpleQueryType $partNumber = null, SimpleQueryType $soldTo = null, SimpleQueryType $shipToEmail = null, SimpleQueryType $shipToAddress = null, bool $isPermanent = null, DateQueryType $expirationDate = null, DateQueryType $createdOn = null, DateQueryType $versionDate = null, DateQueryType $lastModifiedDate = null, StateQueryType $state = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $createdUserId = null, CustomAttributesQueryListType $customAttributes = null, bool $allowPortalLogin = null, PartnerTierQueryType $accountUnitName = null, SimpleQueryType $currentOwnerName = null)
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

    public static function create(SimpleQueryType $entitlementId = null, SimpleQueryType $description = null, SimpleQueryType $productName = null, SimpleQueryType $productVersion = null, string $productType = null, SimpleQueryType $partNumber = null, SimpleQueryType $soldTo = null, SimpleQueryType $shipToEmail = null, SimpleQueryType $shipToAddress = null, bool $isPermanent = null, DateQueryType $expirationDate = null, DateQueryType $createdOn = null, DateQueryType $versionDate = null, DateQueryType $lastModifiedDate = null, StateQueryType $state = null, SimpleQueryType $licenseTechnology = null, SimpleQueryType $createdUserId = null, CustomAttributesQueryListType $customAttributes = null, bool $allowPortalLogin = null, PartnerTierQueryType $accountUnitName = null, SimpleQueryType $currentOwnerName = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?SimpleQueryType $entitlementId): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getDescription(): ?SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?SimpleQueryType $description): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getProductName(): ?SimpleQueryType
    {
        return $this->productName;
    }

    public function withProductName(?SimpleQueryType $productName): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getProductVersion(): ?SimpleQueryType
    {
        return $this->productVersion;
    }

    public function withProductVersion(?SimpleQueryType $productVersion): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->productVersion = $productVersion;

        return $new;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function withProductType(?string $productType): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->productType = $productType;

        return $new;
    }

    public function getPartNumber(): ?SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?SimpleQueryType $partNumber): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getSoldTo(): ?SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?SimpleQueryType $soldTo): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?SimpleQueryType
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?SimpleQueryType $shipToEmail): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?SimpleQueryType
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?SimpleQueryType $shipToAddress): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?DateQueryType $expirationDate): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOn(): ?DateQueryType
    {
        return $this->createdOn;
    }

    public function withCreatedOn(?DateQueryType $createdOn): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->createdOn = $createdOn;

        return $new;
    }

    public function getVersionDate(): ?DateQueryType
    {
        return $this->versionDate;
    }

    public function withVersionDate(?DateQueryType $versionDate): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLastModifiedDate(): ?DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?DateQueryType $lastModifiedDate): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getState(): ?StateQueryType
    {
        return $this->state;
    }

    public function withState(?StateQueryType $state): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?SimpleQueryType $licenseTechnology): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getCreatedUserId(): ?SimpleQueryType
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(?SimpleQueryType $createdUserId): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    public function getCustomAttributes(): ?CustomAttributesQueryListType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?CustomAttributesQueryListType $customAttributes): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getAccountUnitName(): ?PartnerTierQueryType
    {
        return $this->accountUnitName;
    }

    public function withAccountUnitName(?PartnerTierQueryType $accountUnitName): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->accountUnitName = $accountUnitName;

        return $new;
    }

    public function getCurrentOwnerName(): ?SimpleQueryType
    {
        return $this->currentOwnerName;
    }

    public function withCurrentOwnerName(?SimpleQueryType $currentOwnerName): SearchBulkEntitlementDataType
    {
        $new = clone $this;
        $new->currentOwnerName = $currentOwnerName;

        return $new;
    }
}
