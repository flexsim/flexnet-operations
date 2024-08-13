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
    public function __construct(?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentId = null, ?string $fulfillmentType = null, ?string $state = null, ?\Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementId = null, ?\Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineitemId = null, ?\Flexnet\LicenseService\Type\ProductIdentifierType $product = null, ?string $productDescription = null, ?\Flexnet\LicenseService\Type\PartNumberIdentifierType $partNumber = null, ?string $partNumberDescription = null, ?\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, ?\Flexnet\LicenseService\Type\LicenseModelIdentifierType $licenseModel = null, ?\Flexnet\LicenseService\Type\AccountIdentifierType $soldTo = null, ?string $soldToDisplayName = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $licenseHost = null, ?int $fulfilledCount = null, ?int $overDraftCount = null, ?\DateTimeInterface $fulfillDate = null, ?\DateTimeInterface $fulfillDateTime = null, ?bool $isPermanent = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $expirationDate = null, ?\DateTimeInterface $versionDate = null, ?string $licenseFileType = null, ?string $licenseText = null, ?string $binaryLicense = null, ?string $supportAction = null, ?\DateTimeInterface $lastModifiedDateTime = null, ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $parentFulfillmentId = null, ?string $fulfillmentSource = null, ?string $orderId = null, ?string $orderLineNumber = null, ?string $lineitemDescription = null, ?int $totalCopies = null, ?int $numberOfRemainingCopies = null, ?bool $isTrusted = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $customAttributes = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $customHostAttributes = null, ?string $migrationId = null, ?string $vendorDaemonName = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null, ?\Flexnet\LicenseService\Type\EntitledProductDataListType $entitledProducts = null, ?string $FNPTimeZoneValue = null, ?string $activationType = null)
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

    public static function create(?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentId = null, ?string $fulfillmentType = null, ?string $state = null, ?\Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementId = null, ?\Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineitemId = null, ?\Flexnet\LicenseService\Type\ProductIdentifierType $product = null, ?string $productDescription = null, ?\Flexnet\LicenseService\Type\PartNumberIdentifierType $partNumber = null, ?string $partNumberDescription = null, ?\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, ?\Flexnet\LicenseService\Type\LicenseModelIdentifierType $licenseModel = null, ?\Flexnet\LicenseService\Type\AccountIdentifierType $soldTo = null, ?string $soldToDisplayName = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $licenseHost = null, ?int $fulfilledCount = null, ?int $overDraftCount = null, ?\DateTimeInterface $fulfillDate = null, ?\DateTimeInterface $fulfillDateTime = null, ?bool $isPermanent = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $expirationDate = null, ?\DateTimeInterface $versionDate = null, ?string $licenseFileType = null, ?string $licenseText = null, ?string $binaryLicense = null, ?string $supportAction = null, ?\DateTimeInterface $lastModifiedDateTime = null, ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $parentFulfillmentId = null, ?string $fulfillmentSource = null, ?string $orderId = null, ?string $orderLineNumber = null, ?string $lineitemDescription = null, ?int $totalCopies = null, ?int $numberOfRemainingCopies = null, ?bool $isTrusted = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $customAttributes = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $customHostAttributes = null, ?string $migrationId = null, ?string $vendorDaemonName = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null, ?\Flexnet\LicenseService\Type\EntitledProductDataListType $entitledProducts = null, ?string $FNPTimeZoneValue = null, ?string $activationType = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentId(): ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentId): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getFulfillmentType(): ?string
    {
        return $this->fulfillmentType;
    }

    public function withFulfillmentType(?string $fulfillmentType): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getEntitlementId(): ?\Flexnet\LicenseService\Type\EntitlementIdentifierType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?\Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementId): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getLineitemId(): ?\Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineitemId;
    }

    public function withLineitemId(?\Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineitemId): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->lineitemId = $lineitemId;

        return $new;
    }

    public function getProduct(): ?\Flexnet\LicenseService\Type\ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?\Flexnet\LicenseService\Type\ProductIdentifierType $product): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    public function withProductDescription(?string $productDescription): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\LicenseService\Type\PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\LicenseService\Type\PartNumberIdentifierType $partNumber): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): ?string
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(?string $partNumberDescription): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseTechnology(): ?\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnology): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModel(): ?\Flexnet\LicenseService\Type\LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?\Flexnet\LicenseService\Type\LicenseModelIdentifierType $licenseModel): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getSoldTo(): ?\Flexnet\LicenseService\Type\AccountIdentifierType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?\Flexnet\LicenseService\Type\AccountIdentifierType $soldTo): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): ?string
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(?string $soldToDisplayName): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getLicenseHost(): ?string
    {
        return $this->licenseHost;
    }

    public function withLicenseHost(?string $licenseHost): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseHost = $licenseHost;

        return $new;
    }

    public function getFulfilledCount(): ?int
    {
        return $this->fulfilledCount;
    }

    public function withFulfilledCount(?int $fulfilledCount): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    public function getOverDraftCount(): ?int
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(?int $overDraftCount): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getFulfillDate(): ?\DateTimeInterface
    {
        return $this->fulfillDate;
    }

    public function withFulfillDate(?\DateTimeInterface $fulfillDate): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    public function getFulfillDateTime(): ?\DateTimeInterface
    {
        return $this->fulfillDateTime;
    }

    public function withFulfillDateTime(?\DateTimeInterface $fulfillDateTime): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLicenseFileType(): ?string
    {
        return $this->licenseFileType;
    }

    public function withLicenseFileType(?string $licenseFileType): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseFileType = $licenseFileType;

        return $new;
    }

    public function getLicenseText(): ?string
    {
        return $this->licenseText;
    }

    public function withLicenseText(?string $licenseText): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?string
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?string $binaryLicense): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getSupportAction(): ?string
    {
        return $this->supportAction;
    }

    public function withSupportAction(?string $supportAction): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getParentFulfillmentId(): ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->parentFulfillmentId;
    }

    public function withParentFulfillmentId(?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $parentFulfillmentId): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

        return $new;
    }

    public function getFulfillmentSource(): ?string
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(?string $fulfillmentSource): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getLineitemDescription(): ?string
    {
        return $this->lineitemDescription;
    }

    public function withLineitemDescription(?string $lineitemDescription): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->lineitemDescription = $lineitemDescription;

        return $new;
    }

    public function getTotalCopies(): ?int
    {
        return $this->totalCopies;
    }

    public function withTotalCopies(?int $totalCopies): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->totalCopies = $totalCopies;

        return $new;
    }

    public function getNumberOfRemainingCopies(): ?int
    {
        return $this->numberOfRemainingCopies;
    }

    public function withNumberOfRemainingCopies(?int $numberOfRemainingCopies): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    public function getIsTrusted(): ?bool
    {
        return $this->isTrusted;
    }

    public function withIsTrusted(?bool $isTrusted): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->isTrusted = $isTrusted;

        return $new;
    }

    public function getCustomAttributes(): ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $customAttributes): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getCustomHostAttributes(): ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType
    {
        return $this->customHostAttributes;
    }

    public function withCustomHostAttributes(?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $customHostAttributes): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    public function getMigrationId(): ?string
    {
        return $this->migrationId;
    }

    public function withMigrationId(?string $migrationId): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->migrationId = $migrationId;

        return $new;
    }

    public function getVendorDaemonName(): ?string
    {
        return $this->vendorDaemonName;
    }

    public function withVendorDaemonName(?string $vendorDaemonName): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->vendorDaemonName = $vendorDaemonName;

        return $new;
    }

    public function getLicenseFiles(): ?\Flexnet\LicenseService\Type\LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }

    public function getEntitledProducts(): ?\Flexnet\LicenseService\Type\EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?\Flexnet\LicenseService\Type\EntitledProductDataListType $entitledProducts): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getActivationType(): ?string
    {
        return $this->activationType;
    }

    public function withActivationType(?string $activationType): \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
