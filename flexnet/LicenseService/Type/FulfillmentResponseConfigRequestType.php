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
     *
     * @param  bool|null  $fulfillmentId
     * @param  bool|null  $fulfillmentType
     * @param  bool|null  $state
     * @param  bool|null  $entitlementId
     * @param  bool|null  $lineitemId
     * @param  bool|null  $product
     * @param  bool|null  $productDescription
     * @param  bool|null  $partNumber
     * @param  bool|null  $partNumberDescription
     * @param  bool|null  $licenseTechnology
     * @param  bool|null  $licenseModel
     * @param  bool|null  $soldTo
     * @param  bool|null  $soldToDisplayName
     * @param  bool|null  $shipToEmail
     * @param  bool|null  $shipToAddress
     * @param  bool|null  $licenseHost
     * @param  bool|null  $fulfilledCount
     * @param  bool|null  $overDraftCount
     * @param  bool|null  $fulfillDate
     * @param  bool|null  $fulfillDateTime
     * @param  bool|null  $isPermanent
     * @param  bool|null  $startDate
     * @param  bool|null  $expirationDate
     * @param  bool|null  $versionDate
     * @param  bool|null  $licenseFileType
     * @param  bool|null  $licenseText
     * @param  bool|null  $binaryLicense
     * @param  bool|null  $supportAction
     * @param  bool|null  $lastModifiedDateTime
     * @param  bool|null  $parentFulfillmentId
     * @param  bool|null  $fulfillmentSource
     * @param  bool|null  $orderId
     * @param  bool|null  $orderLineNumber
     * @param  bool|null  $lineitemDescription
     * @param  bool|null  $totalCopies
     * @param  bool|null  $numberOfRemainingCopies
     * @param  bool|null  $isTrusted
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null  $customAttributes
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null  $customHostAttributes
     * @param  bool|null  $migrationId
     * @param  bool|null  $vendorDaemonName
     * @param  bool|null  $licenseFiles
     * @param  bool|null  $FNPTimeZoneValue
     * @param  bool|null  $activationType
     */
    public function __construct(bool|null $fulfillmentId = null, bool|null $fulfillmentType = null, bool|null $state = null, bool|null $entitlementId = null, bool|null $lineitemId = null, bool|null $product = null, bool|null $productDescription = null, bool|null $partNumber = null, bool|null $partNumberDescription = null, bool|null $licenseTechnology = null, bool|null $licenseModel = null, bool|null $soldTo = null, bool|null $soldToDisplayName = null, bool|null $shipToEmail = null, bool|null $shipToAddress = null, bool|null $licenseHost = null, bool|null $fulfilledCount = null, bool|null $overDraftCount = null, bool|null $fulfillDate = null, bool|null $fulfillDateTime = null, bool|null $isPermanent = null, bool|null $startDate = null, bool|null $expirationDate = null, bool|null $versionDate = null, bool|null $licenseFileType = null, bool|null $licenseText = null, bool|null $binaryLicense = null, bool|null $supportAction = null, bool|null $lastModifiedDateTime = null, bool|null $parentFulfillmentId = null, bool|null $fulfillmentSource = null, bool|null $orderId = null, bool|null $orderLineNumber = null, bool|null $lineitemDescription = null, bool|null $totalCopies = null, bool|null $numberOfRemainingCopies = null, bool|null $isTrusted = null, CustomAttributeDescriptorDataType|null $customAttributes = null, CustomAttributeDescriptorDataType|null $customHostAttributes = null, bool|null $migrationId = null, bool|null $vendorDaemonName = null, bool|null $licenseFiles = null, bool|null $FNPTimeZoneValue = null, bool|null $activationType = null)
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

    /**
     * @param  bool|null  $fulfillmentId
     * @param  bool|null  $fulfillmentType
     * @param  bool|null  $state
     * @param  bool|null  $entitlementId
     * @param  bool|null  $lineitemId
     * @param  bool|null  $product
     * @param  bool|null  $productDescription
     * @param  bool|null  $partNumber
     * @param  bool|null  $partNumberDescription
     * @param  bool|null  $licenseTechnology
     * @param  bool|null  $licenseModel
     * @param  bool|null  $soldTo
     * @param  bool|null  $soldToDisplayName
     * @param  bool|null  $shipToEmail
     * @param  bool|null  $shipToAddress
     * @param  bool|null  $licenseHost
     * @param  bool|null  $fulfilledCount
     * @param  bool|null  $overDraftCount
     * @param  bool|null  $fulfillDate
     * @param  bool|null  $fulfillDateTime
     * @param  bool|null  $isPermanent
     * @param  bool|null  $startDate
     * @param  bool|null  $expirationDate
     * @param  bool|null  $versionDate
     * @param  bool|null  $licenseFileType
     * @param  bool|null  $licenseText
     * @param  bool|null  $binaryLicense
     * @param  bool|null  $supportAction
     * @param  bool|null  $lastModifiedDateTime
     * @param  bool|null  $parentFulfillmentId
     * @param  bool|null  $fulfillmentSource
     * @param  bool|null  $orderId
     * @param  bool|null  $orderLineNumber
     * @param  bool|null  $lineitemDescription
     * @param  bool|null  $totalCopies
     * @param  bool|null  $numberOfRemainingCopies
     * @param  bool|null  $isTrusted
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null  $customAttributes
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null  $customHostAttributes
     * @param  bool|null  $migrationId
     * @param  bool|null  $vendorDaemonName
     * @param  bool|null  $licenseFiles
     * @param  bool|null  $FNPTimeZoneValue
     * @param  bool|null  $activationType
     */
    public static function create(bool|null $fulfillmentId = null, bool|null $fulfillmentType = null, bool|null $state = null, bool|null $entitlementId = null, bool|null $lineitemId = null, bool|null $product = null, bool|null $productDescription = null, bool|null $partNumber = null, bool|null $partNumberDescription = null, bool|null $licenseTechnology = null, bool|null $licenseModel = null, bool|null $soldTo = null, bool|null $soldToDisplayName = null, bool|null $shipToEmail = null, bool|null $shipToAddress = null, bool|null $licenseHost = null, bool|null $fulfilledCount = null, bool|null $overDraftCount = null, bool|null $fulfillDate = null, bool|null $fulfillDateTime = null, bool|null $isPermanent = null, bool|null $startDate = null, bool|null $expirationDate = null, bool|null $versionDate = null, bool|null $licenseFileType = null, bool|null $licenseText = null, bool|null $binaryLicense = null, bool|null $supportAction = null, bool|null $lastModifiedDateTime = null, bool|null $parentFulfillmentId = null, bool|null $fulfillmentSource = null, bool|null $orderId = null, bool|null $orderLineNumber = null, bool|null $lineitemDescription = null, bool|null $totalCopies = null, bool|null $numberOfRemainingCopies = null, bool|null $isTrusted = null, CustomAttributeDescriptorDataType|null $customAttributes = null, CustomAttributeDescriptorDataType|null $customHostAttributes = null, bool|null $migrationId = null, bool|null $vendorDaemonName = null, bool|null $licenseFiles = null, bool|null $FNPTimeZoneValue = null, bool|null $activationType = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentId(): bool|null
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(bool|null $fulfillmentId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getFulfillmentType(): bool|null
    {
        return $this->fulfillmentType;
    }

    public function withFulfillmentType(bool|null $fulfillmentType): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    public function getState(): bool|null
    {
        return $this->state;
    }

    public function withState(bool|null $state): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getEntitlementId(): bool|null
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(bool|null $entitlementId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getLineitemId(): bool|null
    {
        return $this->lineitemId;
    }

    public function withLineitemId(bool|null $lineitemId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineitemId = $lineitemId;

        return $new;
    }

    public function getProduct(): bool|null
    {
        return $this->product;
    }

    public function withProduct(bool|null $product): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): bool|null
    {
        return $this->productDescription;
    }

    public function withProductDescription(bool|null $productDescription): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): bool|null
    {
        return $this->partNumber;
    }

    public function withPartNumber(bool|null $partNumber): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): bool|null
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(bool|null $partNumberDescription): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseTechnology(): bool|null
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(bool|null $licenseTechnology): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModel(): bool|null
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(bool|null $licenseModel): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getSoldTo(): bool|null
    {
        return $this->soldTo;
    }

    public function withSoldTo(bool|null $soldTo): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): bool|null
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(bool|null $soldToDisplayName): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getShipToEmail(): bool|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(bool|null $shipToEmail): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): bool|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(bool|null $shipToAddress): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getLicenseHost(): bool|null
    {
        return $this->licenseHost;
    }

    public function withLicenseHost(bool|null $licenseHost): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseHost = $licenseHost;

        return $new;
    }

    public function getFulfilledCount(): bool|null
    {
        return $this->fulfilledCount;
    }

    public function withFulfilledCount(bool|null $fulfilledCount): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    public function getOverDraftCount(): bool|null
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(bool|null $overDraftCount): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getFulfillDate(): bool|null
    {
        return $this->fulfillDate;
    }

    public function withFulfillDate(bool|null $fulfillDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    public function getFulfillDateTime(): bool|null
    {
        return $this->fulfillDateTime;
    }

    public function withFulfillDateTime(bool|null $fulfillDateTime): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getStartDate(): bool|null
    {
        return $this->startDate;
    }

    public function withStartDate(bool|null $startDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): bool|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(bool|null $expirationDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): bool|null
    {
        return $this->versionDate;
    }

    public function withVersionDate(bool|null $versionDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getLicenseFileType(): bool|null
    {
        return $this->licenseFileType;
    }

    public function withLicenseFileType(bool|null $licenseFileType): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseFileType = $licenseFileType;

        return $new;
    }

    public function getLicenseText(): bool|null
    {
        return $this->licenseText;
    }

    public function withLicenseText(bool|null $licenseText): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): bool|null
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(bool|null $binaryLicense): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getSupportAction(): bool|null
    {
        return $this->supportAction;
    }

    public function withSupportAction(bool|null $supportAction): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    public function getLastModifiedDateTime(): bool|null
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(bool|null $lastModifiedDateTime): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getParentFulfillmentId(): bool|null
    {
        return $this->parentFulfillmentId;
    }

    public function withParentFulfillmentId(bool|null $parentFulfillmentId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

        return $new;
    }

    public function getFulfillmentSource(): bool|null
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(bool|null $fulfillmentSource): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getOrderId(): bool|null
    {
        return $this->orderId;
    }

    public function withOrderId(bool|null $orderId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): bool|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(bool|null $orderLineNumber): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getLineitemDescription(): bool|null
    {
        return $this->lineitemDescription;
    }

    public function withLineitemDescription(bool|null $lineitemDescription): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineitemDescription = $lineitemDescription;

        return $new;
    }

    public function getTotalCopies(): bool|null
    {
        return $this->totalCopies;
    }

    public function withTotalCopies(bool|null $totalCopies): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->totalCopies = $totalCopies;

        return $new;
    }

    public function getNumberOfRemainingCopies(): bool|null
    {
        return $this->numberOfRemainingCopies;
    }

    public function withNumberOfRemainingCopies(bool|null $numberOfRemainingCopies): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    public function getIsTrusted(): bool|null
    {
        return $this->isTrusted;
    }

    public function withIsTrusted(bool|null $isTrusted): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->isTrusted = $isTrusted;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null
     */
    public function getCustomAttributes(): CustomAttributeDescriptorDataType|null
    {
        return $this->customAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null  $customAttributes
     */
    public function withCustomAttributes(CustomAttributeDescriptorDataType|null $customAttributes): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null
     */
    public function getCustomHostAttributes(): CustomAttributeDescriptorDataType|null
    {
        return $this->customHostAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType|null  $customHostAttributes
     */
    public function withCustomHostAttributes(CustomAttributeDescriptorDataType|null $customHostAttributes): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    public function getMigrationId(): bool|null
    {
        return $this->migrationId;
    }

    public function withMigrationId(bool|null $migrationId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->migrationId = $migrationId;

        return $new;
    }

    public function getVendorDaemonName(): bool|null
    {
        return $this->vendorDaemonName;
    }

    public function withVendorDaemonName(bool|null $vendorDaemonName): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->vendorDaemonName = $vendorDaemonName;

        return $new;
    }

    public function getLicenseFiles(): bool|null
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(bool|null $licenseFiles): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }

    public function getFNPTimeZoneValue(): bool|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(bool|null $FNPTimeZoneValue): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getActivationType(): bool|null
    {
        return $this->activationType;
    }

    public function withActivationType(bool|null $activationType): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
