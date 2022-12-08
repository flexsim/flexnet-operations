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
     *
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $fulfillmentId
     * @param string|null $fulfillmentType
     * @param string|null $state
     * @param \Flexnet\LicenseService\Type\EntitlementIdentifierType|null $entitlementId
     * @param \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType|null $lineitemId
     * @param \Flexnet\LicenseService\Type\ProductIdentifierType|null $product
     * @param string|null $productDescription
     * @param \Flexnet\LicenseService\Type\PartNumberIdentifierType|null $partNumber
     * @param string|null $partNumberDescription
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology
     * @param \Flexnet\LicenseService\Type\LicenseModelIdentifierType|null $licenseModel
     * @param \Flexnet\LicenseService\Type\AccountIdentifierType|null $soldTo
     * @param string|null $soldToDisplayName
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param string|null $licenseHost
     * @param int|null $fulfilledCount
     * @param int|null $overDraftCount
     * @param \DateTimeInterface|null $fulfillDate
     * @param \DateTimeInterface|null $fulfillDateTime
     * @param bool|null $isPermanent
     * @param \DateTimeInterface|null $startDate
     * @param \DateTimeInterface|null $expirationDate
     * @param \DateTimeInterface|null $versionDate
     * @param string|null $licenseFileType
     * @param string|null $licenseText
     * @param string|null $binaryLicense
     * @param string|null $supportAction
     * @param \DateTimeInterface|null $lastModifiedDateTime
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId
     * @param string|null $fulfillmentSource
     * @param string|null $orderId
     * @param string|null $orderLineNumber
     * @param string|null $lineitemDescription
     * @param int|null $totalCopies
     * @param int|null $numberOfRemainingCopies
     * @param bool|null $isTrusted
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customAttributes
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customHostAttributes
     * @param string|null $migrationId
     * @param string|null $vendorDaemonName
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     * @param \Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts
     * @param string|null $FNPTimeZoneValue
     * @param string|null $activationType
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $fulfillmentId = null, string|null $fulfillmentType = null, string|null $state = null, \Flexnet\LicenseService\Type\EntitlementIdentifierType|null $entitlementId = null, \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType|null $lineitemId = null, \Flexnet\LicenseService\Type\ProductIdentifierType|null $product = null, string|null $productDescription = null, \Flexnet\LicenseService\Type\PartNumberIdentifierType|null $partNumber = null, string|null $partNumberDescription = null, \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology = null, \Flexnet\LicenseService\Type\LicenseModelIdentifierType|null $licenseModel = null, \Flexnet\LicenseService\Type\AccountIdentifierType|null $soldTo = null, string|null $soldToDisplayName = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $licenseHost = null, int|null $fulfilledCount = null, int|null $overDraftCount = null, \DateTimeInterface|null $fulfillDate = null, \DateTimeInterface|null $fulfillDateTime = null, bool|null $isPermanent = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, string|null $licenseFileType = null, string|null $licenseText = null, string|null $binaryLicense = null, string|null $supportAction = null, \DateTimeInterface|null $lastModifiedDateTime = null, \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId = null, string|null $fulfillmentSource = null, string|null $orderId = null, string|null $orderLineNumber = null, string|null $lineitemDescription = null, int|null $totalCopies = null, int|null $numberOfRemainingCopies = null, bool|null $isTrusted = null, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customAttributes = null, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customHostAttributes = null, string|null $migrationId = null, string|null $vendorDaemonName = null, \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles = null, \Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts = null, string|null $FNPTimeZoneValue = null, string|null $activationType = null)
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

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $fulfillmentId
     * @param string|null $fulfillmentType
     * @param string|null $state
     * @param \Flexnet\LicenseService\Type\EntitlementIdentifierType|null $entitlementId
     * @param \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType|null $lineitemId
     * @param \Flexnet\LicenseService\Type\ProductIdentifierType|null $product
     * @param string|null $productDescription
     * @param \Flexnet\LicenseService\Type\PartNumberIdentifierType|null $partNumber
     * @param string|null $partNumberDescription
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology
     * @param \Flexnet\LicenseService\Type\LicenseModelIdentifierType|null $licenseModel
     * @param \Flexnet\LicenseService\Type\AccountIdentifierType|null $soldTo
     * @param string|null $soldToDisplayName
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param string|null $licenseHost
     * @param int|null $fulfilledCount
     * @param int|null $overDraftCount
     * @param \DateTimeInterface|null $fulfillDate
     * @param \DateTimeInterface|null $fulfillDateTime
     * @param bool|null $isPermanent
     * @param \DateTimeInterface|null $startDate
     * @param \DateTimeInterface|null $expirationDate
     * @param \DateTimeInterface|null $versionDate
     * @param string|null $licenseFileType
     * @param string|null $licenseText
     * @param string|null $binaryLicense
     * @param string|null $supportAction
     * @param \DateTimeInterface|null $lastModifiedDateTime
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId
     * @param string|null $fulfillmentSource
     * @param string|null $orderId
     * @param string|null $orderLineNumber
     * @param string|null $lineitemDescription
     * @param int|null $totalCopies
     * @param int|null $numberOfRemainingCopies
     * @param bool|null $isTrusted
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customAttributes
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customHostAttributes
     * @param string|null $migrationId
     * @param string|null $vendorDaemonName
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     * @param \Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts
     * @param string|null $FNPTimeZoneValue
     * @param string|null $activationType
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $fulfillmentId = null, string|null $fulfillmentType = null, string|null $state = null, \Flexnet\LicenseService\Type\EntitlementIdentifierType|null $entitlementId = null, \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType|null $lineitemId = null, \Flexnet\LicenseService\Type\ProductIdentifierType|null $product = null, string|null $productDescription = null, \Flexnet\LicenseService\Type\PartNumberIdentifierType|null $partNumber = null, string|null $partNumberDescription = null, \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology = null, \Flexnet\LicenseService\Type\LicenseModelIdentifierType|null $licenseModel = null, \Flexnet\LicenseService\Type\AccountIdentifierType|null $soldTo = null, string|null $soldToDisplayName = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $licenseHost = null, int|null $fulfilledCount = null, int|null $overDraftCount = null, \DateTimeInterface|null $fulfillDate = null, \DateTimeInterface|null $fulfillDateTime = null, bool|null $isPermanent = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, string|null $licenseFileType = null, string|null $licenseText = null, string|null $binaryLicense = null, string|null $supportAction = null, \DateTimeInterface|null $lastModifiedDateTime = null, \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId = null, string|null $fulfillmentSource = null, string|null $orderId = null, string|null $orderLineNumber = null, string|null $lineitemDescription = null, int|null $totalCopies = null, int|null $numberOfRemainingCopies = null, bool|null $isTrusted = null, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customAttributes = null, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customHostAttributes = null, string|null $migrationId = null, string|null $vendorDaemonName = null, \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles = null, \Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts = null, string|null $FNPTimeZoneValue = null, string|null $activationType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
     */
    public function getFulfillmentId() : \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
    {
        return $this->fulfillmentId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $fulfillmentId
     * @return FulfillmentPropertiesType
     */
    public function withFulfillmentId(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $fulfillmentId) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFulfillmentType() : string|null
    {
        return $this->fulfillmentType;
    }

    /**
     * @param string|null $fulfillmentType
     * @return FulfillmentPropertiesType
     */
    public function withFulfillmentType(string|null $fulfillmentType) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getState() : string|null
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     * @return FulfillmentPropertiesType
     */
    public function withState(string|null $state) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitlementIdentifierType|null
     */
    public function getEntitlementId() : \Flexnet\LicenseService\Type\EntitlementIdentifierType|null
    {
        return $this->entitlementId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EntitlementIdentifierType|null $entitlementId
     * @return FulfillmentPropertiesType
     */
    public function withEntitlementId(\Flexnet\LicenseService\Type\EntitlementIdentifierType|null $entitlementId) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType|null
     */
    public function getLineitemId() : \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType|null
    {
        return $this->lineitemId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType|null $lineitemId
     * @return FulfillmentPropertiesType
     */
    public function withLineitemId(\Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType|null $lineitemId) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->lineitemId = $lineitemId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ProductIdentifierType|null
     */
    public function getProduct() : \Flexnet\LicenseService\Type\ProductIdentifierType|null
    {
        return $this->product;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ProductIdentifierType|null $product
     * @return FulfillmentPropertiesType
     */
    public function withProduct(\Flexnet\LicenseService\Type\ProductIdentifierType|null $product) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getProductDescription() : string|null
    {
        return $this->productDescription;
    }

    /**
     * @param string|null $productDescription
     * @return FulfillmentPropertiesType
     */
    public function withProductDescription(string|null $productDescription) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\PartNumberIdentifierType|null
     */
    public function getPartNumber() : \Flexnet\LicenseService\Type\PartNumberIdentifierType|null
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexnet\LicenseService\Type\PartNumberIdentifierType|null $partNumber
     * @return FulfillmentPropertiesType
     */
    public function withPartNumber(\Flexnet\LicenseService\Type\PartNumberIdentifierType|null $partNumber) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getPartNumberDescription() : string|null
    {
        return $this->partNumberDescription;
    }

    /**
     * @param string|null $partNumberDescription
     * @return FulfillmentPropertiesType
     */
    public function withPartNumberDescription(string|null $partNumberDescription) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null
     */
    public function getLicenseTechnology() : \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology
     * @return FulfillmentPropertiesType
     */
    public function withLicenseTechnology(\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseModelIdentifierType|null
     */
    public function getLicenseModel() : \Flexnet\LicenseService\Type\LicenseModelIdentifierType|null
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexnet\LicenseService\Type\LicenseModelIdentifierType|null $licenseModel
     * @return FulfillmentPropertiesType
     */
    public function withLicenseModel(\Flexnet\LicenseService\Type\LicenseModelIdentifierType|null $licenseModel) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AccountIdentifierType|null
     */
    public function getSoldTo() : \Flexnet\LicenseService\Type\AccountIdentifierType|null
    {
        return $this->soldTo;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AccountIdentifierType|null $soldTo
     * @return FulfillmentPropertiesType
     */
    public function withSoldTo(\Flexnet\LicenseService\Type\AccountIdentifierType|null $soldTo) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSoldToDisplayName() : string|null
    {
        return $this->soldToDisplayName;
    }

    /**
     * @param string|null $soldToDisplayName
     * @return FulfillmentPropertiesType
     */
    public function withSoldToDisplayName(string|null $soldToDisplayName) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail() : string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param string|null $shipToEmail
     * @return FulfillmentPropertiesType
     */
    public function withShipToEmail(string|null $shipToEmail) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress() : string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param string|null $shipToAddress
     * @return FulfillmentPropertiesType
     */
    public function withShipToAddress(string|null $shipToAddress) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLicenseHost() : string|null
    {
        return $this->licenseHost;
    }

    /**
     * @param string|null $licenseHost
     * @return FulfillmentPropertiesType
     */
    public function withLicenseHost(string|null $licenseHost) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseHost = $licenseHost;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getFulfilledCount() : int|null
    {
        return $this->fulfilledCount;
    }

    /**
     * @param int|null $fulfilledCount
     * @return FulfillmentPropertiesType
     */
    public function withFulfilledCount(int|null $fulfilledCount) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getOverDraftCount() : int|null
    {
        return $this->overDraftCount;
    }

    /**
     * @param int|null $overDraftCount
     * @return FulfillmentPropertiesType
     */
    public function withOverDraftCount(int|null $overDraftCount) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getFulfillDate() : \DateTimeInterface|null
    {
        return $this->fulfillDate;
    }

    /**
     * @param \DateTimeInterface|null $fulfillDate
     * @return FulfillmentPropertiesType
     */
    public function withFulfillDate(\DateTimeInterface|null $fulfillDate) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getFulfillDateTime() : \DateTimeInterface|null
    {
        return $this->fulfillDateTime;
    }

    /**
     * @param \DateTimeInterface|null $fulfillDateTime
     * @return FulfillmentPropertiesType
     */
    public function withFulfillDateTime(\DateTimeInterface|null $fulfillDateTime) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsPermanent() : bool|null
    {
        return $this->isPermanent;
    }

    /**
     * @param bool|null $isPermanent
     * @return FulfillmentPropertiesType
     */
    public function withIsPermanent(bool|null $isPermanent) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getStartDate() : \DateTimeInterface|null
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface|null $startDate
     * @return FulfillmentPropertiesType
     */
    public function withStartDate(\DateTimeInterface|null $startDate) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getExpirationDate() : \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTimeInterface|null $expirationDate
     * @return FulfillmentPropertiesType
     */
    public function withExpirationDate(\DateTimeInterface|null $expirationDate) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getVersionDate() : \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    /**
     * @param \DateTimeInterface|null $versionDate
     * @return FulfillmentPropertiesType
     */
    public function withVersionDate(\DateTimeInterface|null $versionDate) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLicenseFileType() : string|null
    {
        return $this->licenseFileType;
    }

    /**
     * @param string|null $licenseFileType
     * @return FulfillmentPropertiesType
     */
    public function withLicenseFileType(string|null $licenseFileType) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseFileType = $licenseFileType;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLicenseText() : string|null
    {
        return $this->licenseText;
    }

    /**
     * @param string|null $licenseText
     * @return FulfillmentPropertiesType
     */
    public function withLicenseText(string|null $licenseText) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getBinaryLicense() : string|null
    {
        return $this->binaryLicense;
    }

    /**
     * @param string|null $binaryLicense
     * @return FulfillmentPropertiesType
     */
    public function withBinaryLicense(string|null $binaryLicense) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSupportAction() : string|null
    {
        return $this->supportAction;
    }

    /**
     * @param string|null $supportAction
     * @return FulfillmentPropertiesType
     */
    public function withSupportAction(string|null $supportAction) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getLastModifiedDateTime() : \DateTimeInterface|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface|null $lastModifiedDateTime
     * @return FulfillmentPropertiesType
     */
    public function withLastModifiedDateTime(\DateTimeInterface|null $lastModifiedDateTime) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
     */
    public function getParentFulfillmentId() : \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
    {
        return $this->parentFulfillmentId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId
     * @return FulfillmentPropertiesType
     */
    public function withParentFulfillmentId(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFulfillmentSource() : string|null
    {
        return $this->fulfillmentSource;
    }

    /**
     * @param string|null $fulfillmentSource
     * @return FulfillmentPropertiesType
     */
    public function withFulfillmentSource(string|null $fulfillmentSource) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getOrderId() : string|null
    {
        return $this->orderId;
    }

    /**
     * @param string|null $orderId
     * @return FulfillmentPropertiesType
     */
    public function withOrderId(string|null $orderId) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getOrderLineNumber() : string|null
    {
        return $this->orderLineNumber;
    }

    /**
     * @param string|null $orderLineNumber
     * @return FulfillmentPropertiesType
     */
    public function withOrderLineNumber(string|null $orderLineNumber) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLineitemDescription() : string|null
    {
        return $this->lineitemDescription;
    }

    /**
     * @param string|null $lineitemDescription
     * @return FulfillmentPropertiesType
     */
    public function withLineitemDescription(string|null $lineitemDescription) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->lineitemDescription = $lineitemDescription;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getTotalCopies() : int|null
    {
        return $this->totalCopies;
    }

    /**
     * @param int|null $totalCopies
     * @return FulfillmentPropertiesType
     */
    public function withTotalCopies(int|null $totalCopies) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->totalCopies = $totalCopies;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getNumberOfRemainingCopies() : int|null
    {
        return $this->numberOfRemainingCopies;
    }

    /**
     * @param int|null $numberOfRemainingCopies
     * @return FulfillmentPropertiesType
     */
    public function withNumberOfRemainingCopies(int|null $numberOfRemainingCopies) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsTrusted() : bool|null
    {
        return $this->isTrusted;
    }

    /**
     * @param bool|null $isTrusted
     * @return FulfillmentPropertiesType
     */
    public function withIsTrusted(bool|null $isTrusted) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->isTrusted = $isTrusted;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    public function getCustomAttributes() : \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customAttributes
     * @return FulfillmentPropertiesType
     */
    public function withCustomAttributes(\Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customAttributes) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    public function getCustomHostAttributes() : \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
    {
        return $this->customHostAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customHostAttributes
     * @return FulfillmentPropertiesType
     */
    public function withCustomHostAttributes(\Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $customHostAttributes) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getMigrationId() : string|null
    {
        return $this->migrationId;
    }

    /**
     * @param string|null $migrationId
     * @return FulfillmentPropertiesType
     */
    public function withMigrationId(string|null $migrationId) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->migrationId = $migrationId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getVendorDaemonName() : string|null
    {
        return $this->vendorDaemonName;
    }

    /**
     * @param string|null $vendorDaemonName
     * @return FulfillmentPropertiesType
     */
    public function withVendorDaemonName(string|null $vendorDaemonName) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->vendorDaemonName = $vendorDaemonName;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    public function getLicenseFiles() : \Flexnet\LicenseService\Type\LicenseFileDataListType|null
    {
        return $this->licenseFiles;
    }

    /**
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     * @return FulfillmentPropertiesType
     */
    public function withLicenseFiles(\Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitledProductDataListType|null
     */
    public function getEntitledProducts() : \Flexnet\LicenseService\Type\EntitledProductDataListType|null
    {
        return $this->entitledProducts;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts
     * @return FulfillmentPropertiesType
     */
    public function withEntitledProducts(\Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFNPTimeZoneValue() : string|null
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param string|null $FNPTimeZoneValue
     * @return FulfillmentPropertiesType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getActivationType() : string|null
    {
        return $this->activationType;
    }

    /**
     * @param string|null $activationType
     * @return FulfillmentPropertiesType
     */
    public function withActivationType(string|null $activationType) : \Flexnet\LicenseService\Type\FulfillmentPropertiesType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}

