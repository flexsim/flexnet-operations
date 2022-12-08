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

    /**
     * @return bool|null
     */
    public function getFulfillmentId(): bool|null
    {
        return $this->fulfillmentId;
    }

    /**
     * @param  bool|null  $fulfillmentId
     * @return FulfillmentResponseConfigRequestType
     */
    public function withFulfillmentId(bool|null $fulfillmentId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFulfillmentType(): bool|null
    {
        return $this->fulfillmentType;
    }

    /**
     * @param  bool|null  $fulfillmentType
     * @return FulfillmentResponseConfigRequestType
     */
    public function withFulfillmentType(bool|null $fulfillmentType): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getState(): bool|null
    {
        return $this->state;
    }

    /**
     * @param  bool|null  $state
     * @return FulfillmentResponseConfigRequestType
     */
    public function withState(bool|null $state): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getEntitlementId(): bool|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  bool|null  $entitlementId
     * @return FulfillmentResponseConfigRequestType
     */
    public function withEntitlementId(bool|null $entitlementId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLineitemId(): bool|null
    {
        return $this->lineitemId;
    }

    /**
     * @param  bool|null  $lineitemId
     * @return FulfillmentResponseConfigRequestType
     */
    public function withLineitemId(bool|null $lineitemId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineitemId = $lineitemId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getProduct(): bool|null
    {
        return $this->product;
    }

    /**
     * @param  bool|null  $product
     * @return FulfillmentResponseConfigRequestType
     */
    public function withProduct(bool|null $product): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getProductDescription(): bool|null
    {
        return $this->productDescription;
    }

    /**
     * @param  bool|null  $productDescription
     * @return FulfillmentResponseConfigRequestType
     */
    public function withProductDescription(bool|null $productDescription): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getPartNumber(): bool|null
    {
        return $this->partNumber;
    }

    /**
     * @param  bool|null  $partNumber
     * @return FulfillmentResponseConfigRequestType
     */
    public function withPartNumber(bool|null $partNumber): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getPartNumberDescription(): bool|null
    {
        return $this->partNumberDescription;
    }

    /**
     * @param  bool|null  $partNumberDescription
     * @return FulfillmentResponseConfigRequestType
     */
    public function withPartNumberDescription(bool|null $partNumberDescription): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseTechnology(): bool|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  bool|null  $licenseTechnology
     * @return FulfillmentResponseConfigRequestType
     */
    public function withLicenseTechnology(bool|null $licenseTechnology): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseModel(): bool|null
    {
        return $this->licenseModel;
    }

    /**
     * @param  bool|null  $licenseModel
     * @return FulfillmentResponseConfigRequestType
     */
    public function withLicenseModel(bool|null $licenseModel): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getSoldTo(): bool|null
    {
        return $this->soldTo;
    }

    /**
     * @param  bool|null  $soldTo
     * @return FulfillmentResponseConfigRequestType
     */
    public function withSoldTo(bool|null $soldTo): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getSoldToDisplayName(): bool|null
    {
        return $this->soldToDisplayName;
    }

    /**
     * @param  bool|null  $soldToDisplayName
     * @return FulfillmentResponseConfigRequestType
     */
    public function withSoldToDisplayName(bool|null $soldToDisplayName): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getShipToEmail(): bool|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  bool|null  $shipToEmail
     * @return FulfillmentResponseConfigRequestType
     */
    public function withShipToEmail(bool|null $shipToEmail): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getShipToAddress(): bool|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  bool|null  $shipToAddress
     * @return FulfillmentResponseConfigRequestType
     */
    public function withShipToAddress(bool|null $shipToAddress): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseHost(): bool|null
    {
        return $this->licenseHost;
    }

    /**
     * @param  bool|null  $licenseHost
     * @return FulfillmentResponseConfigRequestType
     */
    public function withLicenseHost(bool|null $licenseHost): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseHost = $licenseHost;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFulfilledCount(): bool|null
    {
        return $this->fulfilledCount;
    }

    /**
     * @param  bool|null  $fulfilledCount
     * @return FulfillmentResponseConfigRequestType
     */
    public function withFulfilledCount(bool|null $fulfilledCount): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOverDraftCount(): bool|null
    {
        return $this->overDraftCount;
    }

    /**
     * @param  bool|null  $overDraftCount
     * @return FulfillmentResponseConfigRequestType
     */
    public function withOverDraftCount(bool|null $overDraftCount): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFulfillDate(): bool|null
    {
        return $this->fulfillDate;
    }

    /**
     * @param  bool|null  $fulfillDate
     * @return FulfillmentResponseConfigRequestType
     */
    public function withFulfillDate(bool|null $fulfillDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFulfillDateTime(): bool|null
    {
        return $this->fulfillDateTime;
    }

    /**
     * @param  bool|null  $fulfillDateTime
     * @return FulfillmentResponseConfigRequestType
     */
    public function withFulfillDateTime(bool|null $fulfillDateTime): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

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
     * @return FulfillmentResponseConfigRequestType
     */
    public function withIsPermanent(bool|null $isPermanent): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getStartDate(): bool|null
    {
        return $this->startDate;
    }

    /**
     * @param  bool|null  $startDate
     * @return FulfillmentResponseConfigRequestType
     */
    public function withStartDate(bool|null $startDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getExpirationDate(): bool|null
    {
        return $this->expirationDate;
    }

    /**
     * @param  bool|null  $expirationDate
     * @return FulfillmentResponseConfigRequestType
     */
    public function withExpirationDate(bool|null $expirationDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getVersionDate(): bool|null
    {
        return $this->versionDate;
    }

    /**
     * @param  bool|null  $versionDate
     * @return FulfillmentResponseConfigRequestType
     */
    public function withVersionDate(bool|null $versionDate): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseFileType(): bool|null
    {
        return $this->licenseFileType;
    }

    /**
     * @param  bool|null  $licenseFileType
     * @return FulfillmentResponseConfigRequestType
     */
    public function withLicenseFileType(bool|null $licenseFileType): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseFileType = $licenseFileType;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseText(): bool|null
    {
        return $this->licenseText;
    }

    /**
     * @param  bool|null  $licenseText
     * @return FulfillmentResponseConfigRequestType
     */
    public function withLicenseText(bool|null $licenseText): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getBinaryLicense(): bool|null
    {
        return $this->binaryLicense;
    }

    /**
     * @param  bool|null  $binaryLicense
     * @return FulfillmentResponseConfigRequestType
     */
    public function withBinaryLicense(bool|null $binaryLicense): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getSupportAction(): bool|null
    {
        return $this->supportAction;
    }

    /**
     * @param  bool|null  $supportAction
     * @return FulfillmentResponseConfigRequestType
     */
    public function withSupportAction(bool|null $supportAction): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLastModifiedDateTime(): bool|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  bool|null  $lastModifiedDateTime
     * @return FulfillmentResponseConfigRequestType
     */
    public function withLastModifiedDateTime(bool|null $lastModifiedDateTime): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getParentFulfillmentId(): bool|null
    {
        return $this->parentFulfillmentId;
    }

    /**
     * @param  bool|null  $parentFulfillmentId
     * @return FulfillmentResponseConfigRequestType
     */
    public function withParentFulfillmentId(bool|null $parentFulfillmentId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFulfillmentSource(): bool|null
    {
        return $this->fulfillmentSource;
    }

    /**
     * @param  bool|null  $fulfillmentSource
     * @return FulfillmentResponseConfigRequestType
     */
    public function withFulfillmentSource(bool|null $fulfillmentSource): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOrderId(): bool|null
    {
        return $this->orderId;
    }

    /**
     * @param  bool|null  $orderId
     * @return FulfillmentResponseConfigRequestType
     */
    public function withOrderId(bool|null $orderId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOrderLineNumber(): bool|null
    {
        return $this->orderLineNumber;
    }

    /**
     * @param  bool|null  $orderLineNumber
     * @return FulfillmentResponseConfigRequestType
     */
    public function withOrderLineNumber(bool|null $orderLineNumber): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLineitemDescription(): bool|null
    {
        return $this->lineitemDescription;
    }

    /**
     * @param  bool|null  $lineitemDescription
     * @return FulfillmentResponseConfigRequestType
     */
    public function withLineitemDescription(bool|null $lineitemDescription): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineitemDescription = $lineitemDescription;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getTotalCopies(): bool|null
    {
        return $this->totalCopies;
    }

    /**
     * @param  bool|null  $totalCopies
     * @return FulfillmentResponseConfigRequestType
     */
    public function withTotalCopies(bool|null $totalCopies): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->totalCopies = $totalCopies;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getNumberOfRemainingCopies(): bool|null
    {
        return $this->numberOfRemainingCopies;
    }

    /**
     * @param  bool|null  $numberOfRemainingCopies
     * @return FulfillmentResponseConfigRequestType
     */
    public function withNumberOfRemainingCopies(bool|null $numberOfRemainingCopies): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsTrusted(): bool|null
    {
        return $this->isTrusted;
    }

    /**
     * @param  bool|null  $isTrusted
     * @return FulfillmentResponseConfigRequestType
     */
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
     * @return FulfillmentResponseConfigRequestType
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
     * @return FulfillmentResponseConfigRequestType
     */
    public function withCustomHostAttributes(CustomAttributeDescriptorDataType|null $customHostAttributes): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getMigrationId(): bool|null
    {
        return $this->migrationId;
    }

    /**
     * @param  bool|null  $migrationId
     * @return FulfillmentResponseConfigRequestType
     */
    public function withMigrationId(bool|null $migrationId): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->migrationId = $migrationId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getVendorDaemonName(): bool|null
    {
        return $this->vendorDaemonName;
    }

    /**
     * @param  bool|null  $vendorDaemonName
     * @return FulfillmentResponseConfigRequestType
     */
    public function withVendorDaemonName(bool|null $vendorDaemonName): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->vendorDaemonName = $vendorDaemonName;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseFiles(): bool|null
    {
        return $this->licenseFiles;
    }

    /**
     * @param  bool|null  $licenseFiles
     * @return FulfillmentResponseConfigRequestType
     */
    public function withLicenseFiles(bool|null $licenseFiles): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFNPTimeZoneValue(): bool|null
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param  bool|null  $FNPTimeZoneValue
     * @return FulfillmentResponseConfigRequestType
     */
    public function withFNPTimeZoneValue(bool|null $FNPTimeZoneValue): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getActivationType(): bool|null
    {
        return $this->activationType;
    }

    /**
     * @param  bool|null  $activationType
     * @return FulfillmentResponseConfigRequestType
     */
    public function withActivationType(bool|null $activationType): FulfillmentResponseConfigRequestType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
