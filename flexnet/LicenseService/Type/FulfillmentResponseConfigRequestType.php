<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentResponseConfigRequestType
{
    /**
     * @var bool|null
     */
    private $fulfillmentId;

    /**
     * @var bool|null
     */
    private $fulfillmentType;

    /**
     * @var bool|null
     */
    private $state;

    /**
     * @var bool|null
     */
    private $entitlementId;

    /**
     * @var bool|null
     */
    private $lineitemId;

    /**
     * @var bool|null
     */
    private $product;

    /**
     * @var bool|null
     */
    private $productDescription;

    /**
     * @var bool|null
     */
    private $partNumber;

    /**
     * @var bool|null
     */
    private $partNumberDescription;

    /**
     * @var bool|null
     */
    private $licenseTechnology;

    /**
     * @var bool|null
     */
    private $licenseModel;

    /**
     * @var bool|null
     */
    private $soldTo;

    /**
     * @var bool|null
     */
    private $soldToDisplayName;

    /**
     * @var bool|null
     */
    private $shipToEmail;

    /**
     * @var bool|null
     */
    private $shipToAddress;

    /**
     * @var bool|null
     */
    private $licenseHost;

    /**
     * @var bool|null
     */
    private $fulfilledCount;

    /**
     * @var bool|null
     */
    private $overDraftCount;

    /**
     * @var bool|null
     */
    private $fulfillDate;

    /**
     * @var bool|null
     */
    private $fulfillDateTime;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var bool|null
     */
    private $startDate;

    /**
     * @var bool|null
     */
    private $expirationDate;

    /**
     * @var bool|null
     */
    private $versionDate;

    /**
     * @var bool|null
     */
    private $licenseFileType;

    /**
     * @var bool|null
     */
    private $licenseText;

    /**
     * @var bool|null
     */
    private $binaryLicense;

    /**
     * @var bool|null
     */
    private $supportAction;

    /**
     * @var bool|null
     */
    private $lastModifiedDateTime;

    /**
     * @var bool|null
     */
    private $parentFulfillmentId;

    /**
     * @var bool|null
     */
    private $fulfillmentSource;

    /**
     * @var bool|null
     */
    private $orderId;

    /**
     * @var bool|null
     */
    private $orderLineNumber;

    /**
     * @var bool|null
     */
    private $lineitemDescription;

    /**
     * @var bool|null
     */
    private $totalCopies;

    /**
     * @var bool|null
     */
    private $numberOfRemainingCopies;

    /**
     * @var bool|null
     */
    private $isTrusted;

    /**
     * @var \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null
     */
    private $customAttributes;

    /**
     * @var \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null
     */
    private $customHostAttributes;

    /**
     * @var bool|null
     */
    private $migrationId;

    /**
     * @var bool|null
     */
    private $vendorDaemonName;

    /**
     * @var bool|null
     */
    private $licenseFiles;

    /**
     * @var bool|null
     */
    private $FNPTimeZoneValue;

    /**
     * @var bool|null
     */
    private $activationType;

    /**
     * Constructor
     */
    public function __construct(bool $fulfillmentId = null, bool $fulfillmentType = null, bool $state = null, bool $entitlementId = null, bool $lineitemId = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $licenseHost = null, bool $fulfilledCount = null, bool $overDraftCount = null, bool $fulfillDate = null, bool $fulfillDateTime = null, bool $isPermanent = null, bool $startDate = null, bool $expirationDate = null, bool $versionDate = null, bool $licenseFileType = null, bool $licenseText = null, bool $binaryLicense = null, bool $supportAction = null, bool $lastModifiedDateTime = null, bool $parentFulfillmentId = null, bool $fulfillmentSource = null, bool $orderId = null, bool $orderLineNumber = null, bool $lineitemDescription = null, bool $totalCopies = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, CustomAttributeDescriptorDataType $customAttributes = null, CustomAttributeDescriptorDataType $customHostAttributes = null, bool $migrationId = null, bool $vendorDaemonName = null, bool $licenseFiles = null, bool $FNPTimeZoneValue = null, bool $activationType = null)
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
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->activationType = $activationType;
    }

    public static function create(bool $fulfillmentId = null, bool $fulfillmentType = null, bool $state = null, bool $entitlementId = null, bool $lineitemId = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $licenseHost = null, bool $fulfilledCount = null, bool $overDraftCount = null, bool $fulfillDate = null, bool $fulfillDateTime = null, bool $isPermanent = null, bool $startDate = null, bool $expirationDate = null, bool $versionDate = null, bool $licenseFileType = null, bool $licenseText = null, bool $binaryLicense = null, bool $supportAction = null, bool $lastModifiedDateTime = null, bool $parentFulfillmentId = null, bool $fulfillmentSource = null, bool $orderId = null, bool $orderLineNumber = null, bool $lineitemDescription = null, bool $totalCopies = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, CustomAttributeDescriptorDataType $customAttributes = null, CustomAttributeDescriptorDataType $customHostAttributes = null, bool $migrationId = null, bool $vendorDaemonName = null, bool $licenseFiles = null, bool $FNPTimeZoneValue = null, bool $activationType = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentId(): ?bool
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(?bool $fulfillmentId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getFulfillmentType(): ?bool
    {
        return $this->fulfillmentType;
    }

    public function withFulfillmentType(?bool $fulfillmentType): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    public function getState(): ?bool
    {
        return $this->state;
    }

    public function withState(?bool $state): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getEntitlementId(): ?bool
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?bool $entitlementId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getLineitemId(): ?bool
    {
        return $this->lineitemId;
    }

    public function withLineitemId(?bool $lineitemId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineitemId = $lineitemId;

        return $new;
    }

    public function getProduct(): ?bool
    {
        return $this->product;
    }

    public function withProduct(?bool $product): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): ?bool
    {
        return $this->productDescription;
    }

    public function withProductDescription(?bool $productDescription): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): ?bool
    {
        return $this->partNumber;
    }

    public function withPartNumber(?bool $partNumber): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): ?bool
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(?bool $partNumberDescription): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseTechnology(): ?bool
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?bool $licenseTechnology): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModel(): ?bool
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?bool $licenseModel): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getSoldTo(): ?bool
    {
        return $this->soldTo;
    }

    public function withSoldTo(?bool $soldTo): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): ?bool
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(?bool $soldToDisplayName): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getShipToEmail(): ?bool
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?bool $shipToEmail): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?bool
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?bool $shipToAddress): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getLicenseHost(): ?bool
    {
        return $this->licenseHost;
    }

    public function withLicenseHost(?bool $licenseHost): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseHost = $licenseHost;

        return $new;
    }

    public function getFulfilledCount(): ?bool
    {
        return $this->fulfilledCount;
    }

    public function withFulfilledCount(?bool $fulfilledCount): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    public function getOverDraftCount(): ?bool
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(?bool $overDraftCount): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getFulfillDate(): ?bool
    {
        return $this->fulfillDate;
    }

    public function withFulfillDate(?bool $fulfillDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    public function getFulfillDateTime(): ?bool
    {
        return $this->fulfillDateTime;
    }

    public function withFulfillDateTime(?bool $fulfillDateTime): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getStartDate(): ?bool
    {
        return $this->startDate;
    }

    public function withStartDate(?bool $startDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?bool
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?bool $expirationDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?bool
    {
        return $this->versionDate;
    }

    public function withVersionDate(?bool $versionDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLicenseFileType(): ?bool
    {
        return $this->licenseFileType;
    }

    public function withLicenseFileType(?bool $licenseFileType): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseFileType = $licenseFileType;

        return $new;
    }

    public function getLicenseText(): ?bool
    {
        return $this->licenseText;
    }

    public function withLicenseText(?bool $licenseText): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?bool
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?bool $binaryLicense): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getSupportAction(): ?bool
    {
        return $this->supportAction;
    }

    public function withSupportAction(?bool $supportAction): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    public function getLastModifiedDateTime(): ?bool
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?bool $lastModifiedDateTime): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getParentFulfillmentId(): ?bool
    {
        return $this->parentFulfillmentId;
    }

    public function withParentFulfillmentId(?bool $parentFulfillmentId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

        return $new;
    }

    public function getFulfillmentSource(): ?bool
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(?bool $fulfillmentSource): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getOrderId(): ?bool
    {
        return $this->orderId;
    }

    public function withOrderId(?bool $orderId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?bool
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?bool $orderLineNumber): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getLineitemDescription(): ?bool
    {
        return $this->lineitemDescription;
    }

    public function withLineitemDescription(?bool $lineitemDescription): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineitemDescription = $lineitemDescription;

        return $new;
    }

    public function getTotalCopies(): ?bool
    {
        return $this->totalCopies;
    }

    public function withTotalCopies(?bool $totalCopies): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->totalCopies = $totalCopies;

        return $new;
    }

    public function getNumberOfRemainingCopies(): ?bool
    {
        return $this->numberOfRemainingCopies;
    }

    public function withNumberOfRemainingCopies(?bool $numberOfRemainingCopies): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    public function getIsTrusted(): ?bool
    {
        return $this->isTrusted;
    }

    public function withIsTrusted(?bool $isTrusted): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->isTrusted = $isTrusted;

        return $new;
    }

    public function getCustomAttributes(): ?CustomAttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?CustomAttributeDescriptorDataType $customAttributes): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getCustomHostAttributes(): ?CustomAttributeDescriptorDataType
    {
        return $this->customHostAttributes;
    }

    public function withCustomHostAttributes(?CustomAttributeDescriptorDataType $customHostAttributes): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    public function getMigrationId(): ?bool
    {
        return $this->migrationId;
    }

    public function withMigrationId(?bool $migrationId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->migrationId = $migrationId;

        return $new;
    }

    public function getVendorDaemonName(): ?bool
    {
        return $this->vendorDaemonName;
    }

    public function withVendorDaemonName(?bool $vendorDaemonName): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->vendorDaemonName = $vendorDaemonName;

        return $new;
    }

    public function getLicenseFiles(): ?bool
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?bool $licenseFiles): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?bool
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?bool $FNPTimeZoneValue): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getActivationType(): ?bool
    {
        return $this->activationType;
    }

    public function withActivationType(?bool $activationType): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
