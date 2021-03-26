<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentResponseConfigRequestType
{

    /**
     * @var bool
     */
    private $fulfillmentId;

    /**
     * @var bool
     */
    private $fulfillmentType;

    /**
     * @var bool
     */
    private $state;

    /**
     * @var bool
     */
    private $entitlementId;

    /**
     * @var bool
     */
    private $lineitemId;

    /**
     * @var bool
     */
    private $product;

    /**
     * @var bool
     */
    private $productDescription;

    /**
     * @var bool
     */
    private $partNumber;

    /**
     * @var bool
     */
    private $partNumberDescription;

    /**
     * @var bool
     */
    private $licenseTechnology;

    /**
     * @var bool
     */
    private $licenseModel;

    /**
     * @var bool
     */
    private $soldTo;

    /**
     * @var bool
     */
    private $soldToDisplayName;

    /**
     * @var bool
     */
    private $shipToEmail;

    /**
     * @var bool
     */
    private $shipToAddress;

    /**
     * @var bool
     */
    private $licenseHost;

    /**
     * @var bool
     */
    private $fulfilledCount;

    /**
     * @var bool
     */
    private $overDraftCount;

    /**
     * @var bool
     */
    private $fulfillDate;

    /**
     * @var bool
     */
    private $fulfillDateTime;

    /**
     * @var bool
     */
    private $isPermanent;

    /**
     * @var bool
     */
    private $startDate;

    /**
     * @var bool
     */
    private $expirationDate;

    /**
     * @var bool
     */
    private $versionDate;

    /**
     * @var bool
     */
    private $licenseFileType;

    /**
     * @var bool
     */
    private $licenseText;

    /**
     * @var bool
     */
    private $binaryLicense;

    /**
     * @var bool
     */
    private $supportAction;

    /**
     * @var bool
     */
    private $lastModifiedDateTime;

    /**
     * @var bool
     */
    private $parentFulfillmentId;

    /**
     * @var bool
     */
    private $fulfillmentSource;

    /**
     * @var bool
     */
    private $orderId;

    /**
     * @var bool
     */
    private $orderLineNumber;

    /**
     * @var bool
     */
    private $lineitemDescription;

    /**
     * @var bool
     */
    private $totalCopies;

    /**
     * @var bool
     */
    private $numberOfRemainingCopies;

    /**
     * @var bool
     */
    private $isTrusted;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    private $customHostAttributes;

    /**
     * @var bool
     */
    private $migrationId;

    /**
     * @var bool
     */
    private $vendorDaemonName;

    /**
     * @var bool
     */
    private $licenseFiles;

    /**
     * @var bool
     */
    private $FNPTimeZoneValue;

    /**
     * @var bool
     */
    private $activationType;

    /**
     * Constructor
     *
     * @var bool $fulfillmentId
     * @var bool $fulfillmentType
     * @var bool $state
     * @var bool $entitlementId
     * @var bool $lineitemId
     * @var bool $product
     * @var bool $productDescription
     * @var bool $partNumber
     * @var bool $partNumberDescription
     * @var bool $licenseTechnology
     * @var bool $licenseModel
     * @var bool $soldTo
     * @var bool $soldToDisplayName
     * @var bool $shipToEmail
     * @var bool $shipToAddress
     * @var bool $licenseHost
     * @var bool $fulfilledCount
     * @var bool $overDraftCount
     * @var bool $fulfillDate
     * @var bool $fulfillDateTime
     * @var bool $isPermanent
     * @var bool $startDate
     * @var bool $expirationDate
     * @var bool $versionDate
     * @var bool $licenseFileType
     * @var bool $licenseText
     * @var bool $binaryLicense
     * @var bool $supportAction
     * @var bool $lastModifiedDateTime
     * @var bool $parentFulfillmentId
     * @var bool $fulfillmentSource
     * @var bool $orderId
     * @var bool $orderLineNumber
     * @var bool $lineitemDescription
     * @var bool $totalCopies
     * @var bool $numberOfRemainingCopies
     * @var bool $isTrusted
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customHostAttributes
     * @var bool $migrationId
     * @var bool $vendorDaemonName
     * @var bool $licenseFiles
     * @var bool $FNPTimeZoneValue
     * @var bool $activationType
     */
    public function __construct(bool $fulfillmentId = null, bool $fulfillmentType = null, bool $state = null, bool $entitlementId = null, bool $lineitemId = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $licenseHost = null, bool $fulfilledCount = null, bool $overDraftCount = null, bool $fulfillDate = null, bool $fulfillDateTime = null, bool $isPermanent = null, bool $startDate = null, bool $expirationDate = null, bool $versionDate = null, bool $licenseFileType = null, bool $licenseText = null, bool $binaryLicense = null, bool $supportAction = null, bool $lastModifiedDateTime = null, bool $parentFulfillmentId = null, bool $fulfillmentSource = null, bool $orderId = null, bool $orderLineNumber = null, bool $lineitemDescription = null, bool $totalCopies = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customHostAttributes = null, bool $migrationId = null, bool $vendorDaemonName = null, bool $licenseFiles = null, bool $FNPTimeZoneValue = null, bool $activationType = null)
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
     * create a new instance of this class
     *
     * @var bool $fulfillmentId
     * @var bool $fulfillmentType
     * @var bool $state
     * @var bool $entitlementId
     * @var bool $lineitemId
     * @var bool $product
     * @var bool $productDescription
     * @var bool $partNumber
     * @var bool $partNumberDescription
     * @var bool $licenseTechnology
     * @var bool $licenseModel
     * @var bool $soldTo
     * @var bool $soldToDisplayName
     * @var bool $shipToEmail
     * @var bool $shipToAddress
     * @var bool $licenseHost
     * @var bool $fulfilledCount
     * @var bool $overDraftCount
     * @var bool $fulfillDate
     * @var bool $fulfillDateTime
     * @var bool $isPermanent
     * @var bool $startDate
     * @var bool $expirationDate
     * @var bool $versionDate
     * @var bool $licenseFileType
     * @var bool $licenseText
     * @var bool $binaryLicense
     * @var bool $supportAction
     * @var bool $lastModifiedDateTime
     * @var bool $parentFulfillmentId
     * @var bool $fulfillmentSource
     * @var bool $orderId
     * @var bool $orderLineNumber
     * @var bool $lineitemDescription
     * @var bool $totalCopies
     * @var bool $numberOfRemainingCopies
     * @var bool $isTrusted
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customHostAttributes
     * @var bool $migrationId
     * @var bool $vendorDaemonName
     * @var bool $licenseFiles
     * @var bool $FNPTimeZoneValue
     * @var bool $activationType
     */
    public static function create(bool $fulfillmentId = null, bool $fulfillmentType = null, bool $state = null, bool $entitlementId = null, bool $lineitemId = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $licenseHost = null, bool $fulfilledCount = null, bool $overDraftCount = null, bool $fulfillDate = null, bool $fulfillDateTime = null, bool $isPermanent = null, bool $startDate = null, bool $expirationDate = null, bool $versionDate = null, bool $licenseFileType = null, bool $licenseText = null, bool $binaryLicense = null, bool $supportAction = null, bool $lastModifiedDateTime = null, bool $parentFulfillmentId = null, bool $fulfillmentSource = null, bool $orderId = null, bool $orderLineNumber = null, bool $lineitemDescription = null, bool $totalCopies = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customHostAttributes = null, bool $migrationId = null, bool $vendorDaemonName = null, bool $licenseFiles = null, bool $FNPTimeZoneValue = null, bool $activationType = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getFulfillmentId()
    {
        return $this->fulfillmentId;
    }

    /**
     * @param bool $fulfillmentId
     * @return $this
     */
    public function setFulfillmentId($fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFulfillmentType()
    {
        return $this->fulfillmentType;
    }

    /**
     * @param bool $fulfillmentType
     * @return $this
     */
    public function setFulfillmentType($fulfillmentType)
    {
        $this->fulfillmentType = $fulfillmentType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param bool $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param bool $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLineitemId()
    {
        return $this->lineitemId;
    }

    /**
     * @param bool $lineitemId
     * @return $this
     */
    public function setLineitemId($lineitemId)
    {
        $this->lineitemId = $lineitemId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param bool $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return bool
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param bool $productDescription
     * @return $this
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param bool $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPartNumberDescription()
    {
        return $this->partNumberDescription;
    }

    /**
     * @param bool $partNumberDescription
     * @return $this
     */
    public function setPartNumberDescription($partNumberDescription)
    {
        $this->partNumberDescription = $partNumberDescription;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param bool $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param bool $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param bool $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSoldToDisplayName()
    {
        return $this->soldToDisplayName;
    }

    /**
     * @param bool $soldToDisplayName
     * @return $this
     */
    public function setSoldToDisplayName($soldToDisplayName)
    {
        $this->soldToDisplayName = $soldToDisplayName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param bool $shipToEmail
     * @return $this
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param bool $shipToAddress
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLicenseHost()
    {
        return $this->licenseHost;
    }

    /**
     * @param bool $licenseHost
     * @return $this
     */
    public function setLicenseHost($licenseHost)
    {
        $this->licenseHost = $licenseHost;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFulfilledCount()
    {
        return $this->fulfilledCount;
    }

    /**
     * @param bool $fulfilledCount
     * @return $this
     */
    public function setFulfilledCount($fulfilledCount)
    {
        $this->fulfilledCount = $fulfilledCount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverDraftCount()
    {
        return $this->overDraftCount;
    }

    /**
     * @param bool $overDraftCount
     * @return $this
     */
    public function setOverDraftCount($overDraftCount)
    {
        $this->overDraftCount = $overDraftCount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFulfillDate()
    {
        return $this->fulfillDate;
    }

    /**
     * @param bool $fulfillDate
     * @return $this
     */
    public function setFulfillDate($fulfillDate)
    {
        $this->fulfillDate = $fulfillDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFulfillDateTime()
    {
        return $this->fulfillDateTime;
    }

    /**
     * @param bool $fulfillDateTime
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
     * @return bool
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param bool $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param bool $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVersionDate()
    {
        return $this->versionDate;
    }

    /**
     * @param bool $versionDate
     * @return $this
     */
    public function setVersionDate($versionDate)
    {
        $this->versionDate = $versionDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLicenseFileType()
    {
        return $this->licenseFileType;
    }

    /**
     * @param bool $licenseFileType
     * @return $this
     */
    public function setLicenseFileType($licenseFileType)
    {
        $this->licenseFileType = $licenseFileType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLicenseText()
    {
        return $this->licenseText;
    }

    /**
     * @param bool $licenseText
     * @return $this
     */
    public function setLicenseText($licenseText)
    {
        $this->licenseText = $licenseText;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBinaryLicense()
    {
        return $this->binaryLicense;
    }

    /**
     * @param bool $binaryLicense
     * @return $this
     */
    public function setBinaryLicense($binaryLicense)
    {
        $this->binaryLicense = $binaryLicense;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSupportAction()
    {
        return $this->supportAction;
    }

    /**
     * @param bool $supportAction
     * @return $this
     */
    public function setSupportAction($supportAction)
    {
        $this->supportAction = $supportAction;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param bool $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getParentFulfillmentId()
    {
        return $this->parentFulfillmentId;
    }

    /**
     * @param bool $parentFulfillmentId
     * @return $this
     */
    public function setParentFulfillmentId($parentFulfillmentId)
    {
        $this->parentFulfillmentId = $parentFulfillmentId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFulfillmentSource()
    {
        return $this->fulfillmentSource;
    }

    /**
     * @param bool $fulfillmentSource
     * @return $this
     */
    public function setFulfillmentSource($fulfillmentSource)
    {
        $this->fulfillmentSource = $fulfillmentSource;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param bool $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }

    /**
     * @param bool $orderLineNumber
     * @return $this
     */
    public function setOrderLineNumber($orderLineNumber)
    {
        $this->orderLineNumber = $orderLineNumber;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLineitemDescription()
    {
        return $this->lineitemDescription;
    }

    /**
     * @param bool $lineitemDescription
     * @return $this
     */
    public function setLineitemDescription($lineitemDescription)
    {
        $this->lineitemDescription = $lineitemDescription;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTotalCopies()
    {
        return $this->totalCopies;
    }

    /**
     * @param bool $totalCopies
     * @return $this
     */
    public function setTotalCopies($totalCopies)
    {
        $this->totalCopies = $totalCopies;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNumberOfRemainingCopies()
    {
        return $this->numberOfRemainingCopies;
    }

    /**
     * @param bool $numberOfRemainingCopies
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
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    public function getCustomHostAttributes()
    {
        return $this->customHostAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customHostAttributes
     * @return $this
     */
    public function setCustomHostAttributes($customHostAttributes)
    {
        $this->customHostAttributes = $customHostAttributes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMigrationId()
    {
        return $this->migrationId;
    }

    /**
     * @param bool $migrationId
     * @return $this
     */
    public function setMigrationId($migrationId)
    {
        $this->migrationId = $migrationId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVendorDaemonName()
    {
        return $this->vendorDaemonName;
    }

    /**
     * @param bool $vendorDaemonName
     * @return $this
     */
    public function setVendorDaemonName($vendorDaemonName)
    {
        $this->vendorDaemonName = $vendorDaemonName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLicenseFiles()
    {
        return $this->licenseFiles;
    }

    /**
     * @param bool $licenseFiles
     * @return $this
     */
    public function setLicenseFiles($licenseFiles)
    {
        $this->licenseFiles = $licenseFiles;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFNPTimeZoneValue()
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param bool $FNPTimeZoneValue
     * @return $this
     */
    public function setFNPTimeZoneValue($FNPTimeZoneValue)
    {
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        return $this;
    }

    /**
     * @return bool
     */
    public function getActivationType()
    {
        return $this->activationType;
    }

    /**
     * @param bool $activationType
     * @return $this
     */
    public function setActivationType($activationType)
    {
        $this->activationType = $activationType;
        return $this;
    }


}
