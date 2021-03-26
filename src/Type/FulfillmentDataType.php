<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var string
     */
    private $fulfillmentType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $lineItem;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $product;

    /**
     * @var string
     */
    private $soldTo;

    /**
     * @var string
     */
    private $shipToEmail;

    /**
     * @var string
     */
    private $shipToAddress;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    private $serverIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    private $nodeIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    private $customHost;

    /**
     * @var string
     */
    private $fulfilledCount;

    /**
     * @var string
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
     * @var string
     */
    private $licenseText;

    /**
     * @var string
     */
    private $binaryLicense;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType
     */
    private $consolidatedHostLicense;

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
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    private $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $licenseModelAttributes;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $fulfillmentSource;

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
    private $activationType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @var string $fulfillmentType
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItem
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var string $soldTo
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @var string $fulfilledCount
     * @var string $overDraftCount
     * @var \DateTimeInterface $fulfillDate
     * @var \DateTimeInterface $fulfillDateTime
     * @var bool $isPermanent
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $expirationDate
     * @var string $licenseText
     * @var string $binaryLicense
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense
     * @var string $supportAction
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @var string $state
     * @var string $fulfillmentSource
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @var string $activationType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItem, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product, string $soldTo, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, string $licenseText = null, string $binaryLicense = null, \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense = null, string $supportAction = null, \DateTimeInterface $lastModifiedDateTime, \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, string $state = null, string $fulfillmentSource = null, \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, string $activationType = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->fulfillmentType = $fulfillmentType;
        $this->lineItem = $lineItem;
        $this->product = $product;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
        $this->fulfilledCount = $fulfilledCount;
        $this->overDraftCount = $overDraftCount;
        $this->fulfillDate = $fulfillDate;
        $this->fulfillDateTime = $fulfillDateTime;
        $this->isPermanent = $isPermanent;
        $this->startDate = $startDate;
        $this->expirationDate = $expirationDate;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->consolidatedHostLicense = $consolidatedHostLicense;
        $this->supportAction = $supportAction;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->parentFulfillmentId = $parentFulfillmentId;
        $this->licenseTechnology = $licenseTechnology;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->state = $state;
        $this->fulfillmentSource = $fulfillmentSource;
        $this->licenseFiles = $licenseFiles;
        $this->entitledProducts = $entitledProducts;
        $this->activationType = $activationType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @var string $fulfillmentType
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItem
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var string $soldTo
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @var string $fulfilledCount
     * @var string $overDraftCount
     * @var \DateTimeInterface $fulfillDate
     * @var \DateTimeInterface $fulfillDateTime
     * @var bool $isPermanent
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $expirationDate
     * @var string $licenseText
     * @var string $binaryLicense
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense
     * @var string $supportAction
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @var string $state
     * @var string $fulfillmentSource
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @var string $activationType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItem, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product, string $soldTo, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, string $licenseText = null, string $binaryLicense = null, \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense = null, string $supportAction = null, \DateTimeInterface $lastModifiedDateTime, \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, string $state = null, string $fulfillmentSource = null, \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, string $activationType = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier()
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @return $this
     */
    public function setEntitlementIdentifier($entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier()
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return $this
     */
    public function setFulfillmentIdentifier($fulfillmentIdentifier)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
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
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItem
     * @return $this
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;
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
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
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
     * @return \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    public function getServerIds()
    {
        return $this->serverIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @return $this
     */
    public function setServerIds($serverIds)
    {
        $this->serverIds = $serverIds;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    public function getNodeIds()
    {
        return $this->nodeIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @return $this
     */
    public function setNodeIds($nodeIds)
    {
        $this->nodeIds = $nodeIds;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    public function getCustomHost()
    {
        return $this->customHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @return $this
     */
    public function setCustomHost($customHost)
    {
        $this->customHost = $customHost;
        return $this;
    }

    /**
     * @return string
     */
    public function getFulfilledCount()
    {
        return $this->fulfilledCount;
    }

    /**
     * @param string $fulfilledCount
     * @return $this
     */
    public function setFulfilledCount($fulfilledCount)
    {
        $this->fulfilledCount = $fulfilledCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getOverDraftCount()
    {
        return $this->overDraftCount;
    }

    /**
     * @param string $overDraftCount
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
     * @return \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType
     */
    public function getConsolidatedHostLicense()
    {
        return $this->consolidatedHostLicense;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense
     * @return $this
     */
    public function setConsolidatedHostLicense($consolidatedHostLicense)
    {
        $this->consolidatedHostLicense = $consolidatedHostLicense;
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
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getLicenseModelAttributes()
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @return $this
     */
    public function setLicenseModelAttributes($licenseModelAttributes)
    {
        $this->licenseModelAttributes = $licenseModelAttributes;
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

