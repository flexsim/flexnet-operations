<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentPropertiesType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
     */
    private $fulfillmentId;

    /**
     * @var string|null
     */
    private $fulfillmentType;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var \Flexnet\LicenseService\Type\EntitlementIdentifierType|null
     */
    private $entitlementId;

    /**
     * @var \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType|null
     */
    private $lineitemId;

    /**
     * @var \Flexnet\LicenseService\Type\ProductIdentifierType|null
     */
    private $product;

    /**
     * @var string|null
     */
    private $productDescription;

    /**
     * @var \Flexnet\LicenseService\Type\PartNumberIdentifierType|null
     */
    private $partNumber;

    /**
     * @var string|null
     */
    private $partNumberDescription;

    /**
     * @var \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null
     */
    private $licenseTechnology;

    /**
     * @var \Flexnet\LicenseService\Type\LicenseModelIdentifierType|null
     */
    private $licenseModel;

    /**
     * @var \Flexnet\LicenseService\Type\AccountIdentifierType|null
     */
    private $soldTo;

    /**
     * @var string|null
     */
    private $soldToDisplayName;

    /**
     * @var string|null
     */
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * @var string|null
     */
    private $licenseHost;

    /**
     * @var int|null
     */
    private $fulfilledCount;

    /**
     * @var int|null
     */
    private $overDraftCount;

    /**
     * @var \DateTimeInterface|null
     */
    private $fulfillDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $fulfillDateTime;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var \DateTimeInterface|null
     */
    private $startDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $expirationDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $versionDate;

    /**
     * @var string|null
     */
    private $licenseFileType;

    /**
     * @var string|null
     */
    private $licenseText;

    /**
     * @var string|null
     */
    private $binaryLicense;

    /**
     * @var string|null
     */
    private $supportAction;

    /**
     * @var \DateTimeInterface|null
     */
    private $lastModifiedDateTime;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
     */
    private $parentFulfillmentId;

    /**
     * @var string|null
     */
    private $fulfillmentSource;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $orderLineNumber;

    /**
     * @var string|null
     */
    private $lineitemDescription;

    /**
     * @var int|null
     */
    private $totalCopies;

    /**
     * @var int|null
     */
    private $numberOfRemainingCopies;

    /**
     * @var bool|null
     */
    private $isTrusted;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    private $customAttributes;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    private $customHostAttributes;

    /**
     * @var string|null
     */
    private $migrationId;

    /**
     * @var string|null
     */
    private $vendorDaemonName;

    /**
     * @var \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    private $licenseFiles;

    /**
     * @var \Flexnet\LicenseService\Type\EntitledProductDataListType|null
     */
    private $entitledProducts;

    /**
     * @var string|null
     */
    private $FNPTimeZoneValue;

    /**
     * @var string|null
     */
    private $activationType;

    /**
     * Constructor
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentId = null, string $fulfillmentType = null, string $state = null, EntitlementIdentifierType $entitlementId = null, EntitlementLineItemIdentifierType $lineitemId = null, ProductIdentifierType $product = null, string $productDescription = null, PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, LicenseTechnologyIdentifierType $licenseTechnology = null, LicenseModelIdentifierType $licenseModel = null, AccountIdentifierType $soldTo = null, string $soldToDisplayName = null, string $shipToEmail = null, string $shipToAddress = null, string $licenseHost = null, int $fulfilledCount = null, int $overDraftCount = null, \DateTimeInterface $fulfillDate = null, \DateTimeInterface $fulfillDateTime = null, bool $isPermanent = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, string $licenseFileType = null, string $licenseText = null, string $binaryLicense = null, string $supportAction = null, \DateTimeInterface $lastModifiedDateTime = null, FulfillmentIdentifierType $parentFulfillmentId = null, string $fulfillmentSource = null, string $orderId = null, string $orderLineNumber = null, string $lineitemDescription = null, int $totalCopies = null, int $numberOfRemainingCopies = null, bool $isTrusted = null, AttributeDescriptorDataType $customAttributes = null, AttributeDescriptorDataType $customHostAttributes = null, string $migrationId = null, string $vendorDaemonName = null, LicenseFileDataListType $licenseFiles = null, EntitledProductDataListType $entitledProducts = null, string $FNPTimeZoneValue = null, string $activationType = null)
    {
        $this->fulfillmentId = $fulfillmentId;
        $this->fulfillmentType = $fulfillmentType;
        $this->state = $state;
        $this->entitlementId = $entitlementId;
        $this->lineitemId = $lineitemId;
        $this->product = $product;
        $this->productDescription = $productDescription;
        $this->partNumber = $partNumber;
        $this->partNumberDescription = $partNumberDescription;
        $this->licenseTechnology = $licenseTechnology;
        $this->licenseModel = $licenseModel;
        $this->soldTo = $soldTo;
        $this->soldToDisplayName = $soldToDisplayName;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->licenseHost = $licenseHost;
        $this->fulfilledCount = $fulfilledCount;
        $this->overDraftCount = $overDraftCount;
        $this->fulfillDate = $fulfillDate;
        $this->fulfillDateTime = $fulfillDateTime;
        $this->isPermanent = $isPermanent;
        $this->startDate = $startDate;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->licenseFileType = $licenseFileType;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->supportAction = $supportAction;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->parentFulfillmentId = $parentFulfillmentId;
        $this->fulfillmentSource = $fulfillmentSource;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->lineitemDescription = $lineitemDescription;
        $this->totalCopies = $totalCopies;
        $this->numberOfRemainingCopies = $numberOfRemainingCopies;
        $this->isTrusted = $isTrusted;
        $this->customAttributes = $customAttributes;
        $this->customHostAttributes = $customHostAttributes;
        $this->migrationId = $migrationId;
        $this->vendorDaemonName = $vendorDaemonName;
        $this->licenseFiles = $licenseFiles;
        $this->entitledProducts = $entitledProducts;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->activationType = $activationType;
    }

    public static function create(FulfillmentIdentifierType $fulfillmentId = null, string $fulfillmentType = null, string $state = null, EntitlementIdentifierType $entitlementId = null, EntitlementLineItemIdentifierType $lineitemId = null, ProductIdentifierType $product = null, string $productDescription = null, PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, LicenseTechnologyIdentifierType $licenseTechnology = null, LicenseModelIdentifierType $licenseModel = null, AccountIdentifierType $soldTo = null, string $soldToDisplayName = null, string $shipToEmail = null, string $shipToAddress = null, string $licenseHost = null, int $fulfilledCount = null, int $overDraftCount = null, \DateTimeInterface $fulfillDate = null, \DateTimeInterface $fulfillDateTime = null, bool $isPermanent = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, string $licenseFileType = null, string $licenseText = null, string $binaryLicense = null, string $supportAction = null, \DateTimeInterface $lastModifiedDateTime = null, FulfillmentIdentifierType $parentFulfillmentId = null, string $fulfillmentSource = null, string $orderId = null, string $orderLineNumber = null, string $lineitemDescription = null, int $totalCopies = null, int $numberOfRemainingCopies = null, bool $isTrusted = null, AttributeDescriptorDataType $customAttributes = null, AttributeDescriptorDataType $customHostAttributes = null, string $migrationId = null, string $vendorDaemonName = null, LicenseFileDataListType $licenseFiles = null, EntitledProductDataListType $entitledProducts = null, string $FNPTimeZoneValue = null, string $activationType = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentId(): ?FulfillmentIdentifierType
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(?FulfillmentIdentifierType $fulfillmentId): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getFulfillmentType(): ?string
    {
        return $this->fulfillmentType;
    }

    public function withFulfillmentType(?string $fulfillmentType): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getEntitlementId(): ?EntitlementIdentifierType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?EntitlementIdentifierType $entitlementId): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getLineitemId(): ?EntitlementLineItemIdentifierType
    {
        return $this->lineitemId;
    }

    public function withLineitemId(?EntitlementLineItemIdentifierType $lineitemId): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->lineitemId = $lineitemId;

        return $new;
    }

    public function getProduct(): ?ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?ProductIdentifierType $product): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    public function withProductDescription(?string $productDescription): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): ?PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?PartNumberIdentifierType $partNumber): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): ?string
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(?string $partNumberDescription): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseTechnology(): ?LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?LicenseTechnologyIdentifierType $licenseTechnology): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModel(): ?LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?LicenseModelIdentifierType $licenseModel): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getSoldTo(): ?AccountIdentifierType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?AccountIdentifierType $soldTo): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): ?string
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(?string $soldToDisplayName): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getLicenseHost(): ?string
    {
        return $this->licenseHost;
    }

    public function withLicenseHost(?string $licenseHost): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseHost = $licenseHost;

        return $new;
    }

    public function getFulfilledCount(): ?int
    {
        return $this->fulfilledCount;
    }

    public function withFulfilledCount(?int $fulfilledCount): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    public function getOverDraftCount(): ?int
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(?int $overDraftCount): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getFulfillDate(): ?\DateTimeInterface
    {
        return $this->fulfillDate;
    }

    public function withFulfillDate(?\DateTimeInterface $fulfillDate): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    public function getFulfillDateTime(): ?\DateTimeInterface
    {
        return $this->fulfillDateTime;
    }

    public function withFulfillDateTime(?\DateTimeInterface $fulfillDateTime): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLicenseFileType(): ?string
    {
        return $this->licenseFileType;
    }

    public function withLicenseFileType(?string $licenseFileType): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseFileType = $licenseFileType;

        return $new;
    }

    public function getLicenseText(): ?string
    {
        return $this->licenseText;
    }

    public function withLicenseText(?string $licenseText): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?string
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?string $binaryLicense): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getSupportAction(): ?string
    {
        return $this->supportAction;
    }

    public function withSupportAction(?string $supportAction): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getParentFulfillmentId(): ?FulfillmentIdentifierType
    {
        return $this->parentFulfillmentId;
    }

    public function withParentFulfillmentId(?FulfillmentIdentifierType $parentFulfillmentId): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

        return $new;
    }

    public function getFulfillmentSource(): ?string
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(?string $fulfillmentSource): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getLineitemDescription(): ?string
    {
        return $this->lineitemDescription;
    }

    public function withLineitemDescription(?string $lineitemDescription): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->lineitemDescription = $lineitemDescription;

        return $new;
    }

    public function getTotalCopies(): ?int
    {
        return $this->totalCopies;
    }

    public function withTotalCopies(?int $totalCopies): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->totalCopies = $totalCopies;

        return $new;
    }

    public function getNumberOfRemainingCopies(): ?int
    {
        return $this->numberOfRemainingCopies;
    }

    public function withNumberOfRemainingCopies(?int $numberOfRemainingCopies): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    public function getIsTrusted(): ?bool
    {
        return $this->isTrusted;
    }

    public function withIsTrusted(?bool $isTrusted): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->isTrusted = $isTrusted;

        return $new;
    }

    public function getCustomAttributes(): ?AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?AttributeDescriptorDataType $customAttributes): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getCustomHostAttributes(): ?AttributeDescriptorDataType
    {
        return $this->customHostAttributes;
    }

    public function withCustomHostAttributes(?AttributeDescriptorDataType $customHostAttributes): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    public function getMigrationId(): ?string
    {
        return $this->migrationId;
    }

    public function withMigrationId(?string $migrationId): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->migrationId = $migrationId;

        return $new;
    }

    public function getVendorDaemonName(): ?string
    {
        return $this->vendorDaemonName;
    }

    public function withVendorDaemonName(?string $vendorDaemonName): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->vendorDaemonName = $vendorDaemonName;

        return $new;
    }

    public function getLicenseFiles(): ?LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?LicenseFileDataListType $licenseFiles): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }

    public function getEntitledProducts(): ?EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?EntitledProductDataListType $entitledProducts): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getActivationType(): ?string
    {
        return $this->activationType;
    }

    public function withActivationType(?string $activationType): FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
