<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentPropertiesType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    private $fulfillmentId;

    /**
     * @var string
     */
    private $fulfillmentType;

    /**
     * @var string
     */
    private $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $lineitemId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $product;

    /**
     * @var string
     */
    private $productDescription;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    private $partNumber;

    /**
     * @var string
     */
    private $partNumberDescription;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    private $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    private $licenseModel;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $soldTo;

    /**
     * @var string
     */
    private $soldToDisplayName;

    /**
     * @var string
     */
    private $shipToEmail;

    /**
     * @var string
     */
    private $shipToAddress;

    /**
     * @var string
     */
    private $licenseHost;

    /**
     * @var int
     */
    private $fulfilledCount;

    /**
     * @var int
     */
    private $overDraftCount;

    /**
     * @var \DateTimeInterface
     */
    private $fulfillDate;

    /**
     * @var \DateTimeInterface
     */
    private $fulfillDateTime;

    /**
     * @var bool
     */
    private $isPermanent;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \DateTimeInterface
     */
    private $expirationDate;

    /**
     * @var \DateTimeInterface
     */
    private $versionDate;

    /**
     * @var string
     */
    private $licenseFileType;

    /**
     * @var string
     */
    private $licenseText;

    /**
     * @var string
     */
    private $binaryLicense;

    /**
     * @var string
     */
    private $supportAction;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    private $parentFulfillmentId;

    /**
     * @var string
     */
    private $fulfillmentSource;

    /**
     * @var string
     */
    private $orderId;

    /**
     * @var string
     */
    private $orderLineNumber;

    /**
     * @var string
     */
    private $lineitemDescription;

    /**
     * @var int
     */
    private $totalCopies;

    /**
     * @var int
     */
    private $numberOfRemainingCopies;

    /**
     * @var bool
     */
    private $isTrusted;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customHostAttributes;

    /**
     * @var string
     */
    private $migrationId;

    /**
     * @var string
     */
    private $vendorDaemonName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType
     */
    private $licenseFiles;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    private $entitledProducts;

    /**
     * @var string
     */
    private $FNPTimeZoneValue;

    /**
     * @var string
     */
    private $activationType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentId
     * @var string $fulfillmentType
     * @var string $state
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineitemId
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var string $productDescription
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @var string $partNumberDescription
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $soldTo
     * @var string $soldToDisplayName
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var string $licenseHost
     * @var int $fulfilledCount
     * @var int $overDraftCount
     * @var \DateTimeInterface $fulfillDate
     * @var \DateTimeInterface $fulfillDateTime
     * @var bool $isPermanent
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $expirationDate
     * @var \DateTimeInterface $versionDate
     * @var string $licenseFileType
     * @var string $licenseText
     * @var string $binaryLicense
     * @var string $supportAction
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId
     * @var string $fulfillmentSource
     * @var string $orderId
     * @var string $orderLineNumber
     * @var string $lineitemDescription
     * @var int $totalCopies
     * @var int $numberOfRemainingCopies
     * @var bool $isTrusted
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customHostAttributes
     * @var string $migrationId
     * @var string $vendorDaemonName
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @var string $FNPTimeZoneValue
     * @var string $activationType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentId = null, string $fulfillmentType = null, string $state = null, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineitemId = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, string $productDescription = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null,  $soldTo = null, string $soldToDisplayName = null, string $shipToEmail = null, string $shipToAddress = null, string $licenseHost = null, int $fulfilledCount = null, int $overDraftCount = null, \DateTimeInterface $fulfillDate = null, \DateTimeInterface $fulfillDateTime = null, bool $isPermanent = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, string $licenseFileType = null, string $licenseText = null, string $binaryLicense = null, string $supportAction = null, \DateTimeInterface $lastModifiedDateTime = null, \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId = null, string $fulfillmentSource = null, string $orderId = null, string $orderLineNumber = null, string $lineitemDescription = null, int $totalCopies = null, int $numberOfRemainingCopies = null, bool $isTrusted = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customHostAttributes = null, string $migrationId = null, string $vendorDaemonName = null, \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, string $FNPTimeZoneValue = null, string $activationType = null)
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
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentId
     * @var string $fulfillmentType
     * @var string $state
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineitemId
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var string $productDescription
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @var string $partNumberDescription
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $soldTo
     * @var string $soldToDisplayName
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var string $licenseHost
     * @var int $fulfilledCount
     * @var int $overDraftCount
     * @var \DateTimeInterface $fulfillDate
     * @var \DateTimeInterface $fulfillDateTime
     * @var bool $isPermanent
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $expirationDate
     * @var \DateTimeInterface $versionDate
     * @var string $licenseFileType
     * @var string $licenseText
     * @var string $binaryLicense
     * @var string $supportAction
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId
     * @var string $fulfillmentSource
     * @var string $orderId
     * @var string $orderLineNumber
     * @var string $lineitemDescription
     * @var int $totalCopies
     * @var int $numberOfRemainingCopies
     * @var bool $isTrusted
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customHostAttributes
     * @var string $migrationId
     * @var string $vendorDaemonName
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @var string $FNPTimeZoneValue
     * @var string $activationType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentId = null, string $fulfillmentType = null, string $state = null, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineitemId = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, string $productDescription = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null,  $soldTo = null, string $soldToDisplayName = null, string $shipToEmail = null, string $shipToAddress = null, string $licenseHost = null, int $fulfilledCount = null, int $overDraftCount = null, \DateTimeInterface $fulfillDate = null, \DateTimeInterface $fulfillDateTime = null, bool $isPermanent = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, string $licenseFileType = null, string $licenseText = null, string $binaryLicense = null, string $supportAction = null, \DateTimeInterface $lastModifiedDateTime = null, \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId = null, string $fulfillmentSource = null, string $orderId = null, string $orderLineNumber = null, string $lineitemDescription = null, int $totalCopies = null, int $numberOfRemainingCopies = null, bool $isTrusted = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customHostAttributes = null, string $migrationId = null, string $vendorDaemonName = null, \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, string $FNPTimeZoneValue = null, string $activationType = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentId()
    {
        return $this->fulfillmentId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentId
     * @return $this
     */
    public function setFulfillmentId($fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFulfillmentType()
    {
        return $this->fulfillmentType;
    }

    /**
     * @param string $fulfillmentType
     * @return $this
     */
    public function setFulfillmentType($fulfillmentType)
    {
        $this->fulfillmentType = $fulfillmentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getLineitemId()
    {
        return $this->lineitemId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineitemId
     * @return $this
     */
    public function setLineitemId($lineitemId)
    {
        $this->lineitemId = $lineitemId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param string $productDescription
     * @return $this
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartNumberDescription()
    {
        return $this->partNumberDescription;
    }

    /**
     * @param string $partNumberDescription
     * @return $this
     */
    public function setPartNumberDescription($partNumberDescription)
    {
        $this->partNumberDescription = $partNumberDescription;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoldToDisplayName()
    {
        return $this->soldToDisplayName;
    }

    /**
     * @param string $soldToDisplayName
     * @return $this
     */
    public function setSoldToDisplayName($soldToDisplayName)
    {
        $this->soldToDisplayName = $soldToDisplayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param string $shipToEmail
     * @return $this
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param string $shipToAddress
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseHost()
    {
        return $this->licenseHost;
    }

    /**
     * @param string $licenseHost
     * @return $this
     */
    public function setLicenseHost($licenseHost)
    {
        $this->licenseHost = $licenseHost;
        return $this;
    }

    /**
     * @return int
     */
    public function getFulfilledCount()
    {
        return $this->fulfilledCount;
    }

    /**
     * @param int $fulfilledCount
     * @return $this
     */
    public function setFulfilledCount($fulfilledCount)
    {
        $this->fulfilledCount = $fulfilledCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getOverDraftCount()
    {
        return $this->overDraftCount;
    }

    /**
     * @param int $overDraftCount
     * @return $this
     */
    public function setOverDraftCount($overDraftCount)
    {
        $this->overDraftCount = $overDraftCount;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFulfillDate()
    {
        return $this->fulfillDate;
    }

    /**
     * @param \DateTimeInterface $fulfillDate
     * @return $this
     */
    public function setFulfillDate($fulfillDate)
    {
        $this->fulfillDate = $fulfillDate;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFulfillDateTime()
    {
        return $this->fulfillDateTime;
    }

    /**
     * @param \DateTimeInterface $fulfillDateTime
     * @return $this
     */
    public function setFulfillDateTime($fulfillDateTime)
    {
        $this->fulfillDateTime = $fulfillDateTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPermanent()
    {
        return $this->isPermanent;
    }

    /**
     * @param bool $isPermanent
     * @return $this
     */
    public function setIsPermanent($isPermanent)
    {
        $this->isPermanent = $isPermanent;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTimeInterface $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVersionDate()
    {
        return $this->versionDate;
    }

    /**
     * @param \DateTimeInterface $versionDate
     * @return $this
     */
    public function setVersionDate($versionDate)
    {
        $this->versionDate = $versionDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseFileType()
    {
        return $this->licenseFileType;
    }

    /**
     * @param string $licenseFileType
     * @return $this
     */
    public function setLicenseFileType($licenseFileType)
    {
        $this->licenseFileType = $licenseFileType;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseText()
    {
        return $this->licenseText;
    }

    /**
     * @param string $licenseText
     * @return $this
     */
    public function setLicenseText($licenseText)
    {
        $this->licenseText = $licenseText;
        return $this;
    }

    /**
     * @return string
     */
    public function getBinaryLicense()
    {
        return $this->binaryLicense;
    }

    /**
     * @param string $binaryLicense
     * @return $this
     */
    public function setBinaryLicense($binaryLicense)
    {
        $this->binaryLicense = $binaryLicense;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupportAction()
    {
        return $this->supportAction;
    }

    /**
     * @param string $supportAction
     * @return $this
     */
    public function setSupportAction($supportAction)
    {
        $this->supportAction = $supportAction;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getParentFulfillmentId()
    {
        return $this->parentFulfillmentId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId
     * @return $this
     */
    public function setParentFulfillmentId($parentFulfillmentId)
    {
        $this->parentFulfillmentId = $parentFulfillmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFulfillmentSource()
    {
        return $this->fulfillmentSource;
    }

    /**
     * @param string $fulfillmentSource
     * @return $this
     */
    public function setFulfillmentSource($fulfillmentSource)
    {
        $this->fulfillmentSource = $fulfillmentSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }

    /**
     * @param string $orderLineNumber
     * @return $this
     */
    public function setOrderLineNumber($orderLineNumber)
    {
        $this->orderLineNumber = $orderLineNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineitemDescription()
    {
        return $this->lineitemDescription;
    }

    /**
     * @param string $lineitemDescription
     * @return $this
     */
    public function setLineitemDescription($lineitemDescription)
    {
        $this->lineitemDescription = $lineitemDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCopies()
    {
        return $this->totalCopies;
    }

    /**
     * @param int $totalCopies
     * @return $this
     */
    public function setTotalCopies($totalCopies)
    {
        $this->totalCopies = $totalCopies;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRemainingCopies()
    {
        return $this->numberOfRemainingCopies;
    }

    /**
     * @param int $numberOfRemainingCopies
     * @return $this
     */
    public function setNumberOfRemainingCopies($numberOfRemainingCopies)
    {
        $this->numberOfRemainingCopies = $numberOfRemainingCopies;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTrusted()
    {
        return $this->isTrusted;
    }

    /**
     * @param bool $isTrusted
     * @return $this
     */
    public function setIsTrusted($isTrusted)
    {
        $this->isTrusted = $isTrusted;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getCustomHostAttributes()
    {
        return $this->customHostAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customHostAttributes
     * @return $this
     */
    public function setCustomHostAttributes($customHostAttributes)
    {
        $this->customHostAttributes = $customHostAttributes;
        return $this;
    }

    /**
     * @return string
     */
    public function getMigrationId()
    {
        return $this->migrationId;
    }

    /**
     * @param string $migrationId
     * @return $this
     */
    public function setMigrationId($migrationId)
    {
        $this->migrationId = $migrationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorDaemonName()
    {
        return $this->vendorDaemonName;
    }

    /**
     * @param string $vendorDaemonName
     * @return $this
     */
    public function setVendorDaemonName($vendorDaemonName)
    {
        $this->vendorDaemonName = $vendorDaemonName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseFileDataListType
     */
    public function getLicenseFiles()
    {
        return $this->licenseFiles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     * @return $this
     */
    public function setLicenseFiles($licenseFiles)
    {
        $this->licenseFiles = $licenseFiles;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    public function getEntitledProducts()
    {
        return $this->entitledProducts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @return $this
     */
    public function setEntitledProducts($entitledProducts)
    {
        $this->entitledProducts = $entitledProducts;
        return $this;
    }

    /**
     * @return string
     */
    public function getFNPTimeZoneValue()
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param string $FNPTimeZoneValue
     * @return $this
     */
    public function setFNPTimeZoneValue($FNPTimeZoneValue)
    {
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivationType()
    {
        return $this->activationType;
    }

    /**
     * @param string $activationType
     * @return $this
     */
    public function setActivationType($activationType)
    {
        $this->activationType = $activationType;
        return $this;
    }
}
