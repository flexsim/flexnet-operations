<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $entitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    protected $fulfillmentIdentifier;

    /**
     * @var string
     */
    protected $fulfillmentType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $lineItem;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $product;

    /**
     * @var string
     */
    protected $soldTo;

    /**
     * @var string
     */
    protected $shipToEmail;

    /**
     * @var string
     */
    protected $shipToAddress;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    protected $serverIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    protected $nodeIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    protected $customHost;

    /**
     * @var string
     */
    protected $fulfilledCount;

    /**
     * @var string
     */
    protected $overDraftCount;

    /**
     * @var \DateTimeInterface
     */
    protected $fulfillDate;

    /**
     * @var \DateTimeInterface
     */
    protected $fulfillDateTime;

    /**
     * @var bool
     */
    protected $isPermanent;

    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var \DateTimeInterface
     */
    protected $expirationDate;

    /**
     * @var string
     */
    protected $licenseText;

    /**
     * @var string
     */
    protected $binaryLicense;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType
     */
    protected $consolidatedHostLicense;

    /**
     * @var string
     */
    protected $supportAction;

    /**
     * @var \DateTimeInterface
     */
    protected $lastModifiedDateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    protected $parentFulfillmentId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    protected $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $licenseModelAttributes;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $fulfillmentSource;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType
     */
    protected $licenseFiles;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    protected $entitledProducts;

    /**
     * @var string
     */
    protected $activationType;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param string $fulfillmentType
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItem
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @param string $soldTo
     * @param string $fulfilledCount
     * @param string $overDraftCount
     * @param \DateTimeInterface $fulfillDate
     * @param \DateTimeInterface $fulfillDateTime
     * @param bool $isPermanent
     * @param \DateTimeInterface $lastModifiedDateTime
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $expirationDate
     * @param string $licenseText
     * @param string $binaryLicense
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense
     * @param string $supportAction
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param string $state
     * @param string $fulfillmentSource
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @param string $activationType
     */
    public function __construct(
        \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier,
        \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier,
        string $fulfillmentType,
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItem,
        \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product,
        string $soldTo,
        string $fulfilledCount,
        string $overDraftCount,
        \DateTimeInterface $fulfillDate,
        \DateTimeInterface $fulfillDateTime,
        bool $isPermanent,
        \DateTimeInterface $lastModifiedDateTime,
        string $shipToEmail = null,
        string $shipToAddress = null,
        \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null,
        \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null,
        \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null,
        \DateTimeInterface $startDate = null,
        \DateTimeInterface $expirationDate = null,
        string $licenseText = null,
        string $binaryLicense = null,
        \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense = null,
        string $supportAction = null,
        \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId = null,
        \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null,
        string $state = null,
        string $fulfillmentSource = null,
        \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null,
        \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null,
        string $activationType = null
    ) {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->fulfillmentType = $fulfillmentType;
        $this->lineItem = $lineItem;
        $this->product = $product;
        $this->soldTo = $soldTo;
        $this->fulfilledCount = $fulfilledCount;
        $this->overDraftCount = $overDraftCount;
        $this->fulfillDate = $fulfillDate;
        $this->fulfillDateTime = $fulfillDateTime;
        $this->isPermanent = $isPermanent;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
        $this->startDate = $startDate;
        $this->expirationDate = $expirationDate;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->consolidatedHostLicense = $consolidatedHostLicense;
        $this->supportAction = $supportAction;
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
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param string $fulfillmentType
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItem
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @param string $soldTo
     * @param string $fulfilledCount
     * @param string $overDraftCount
     * @param \DateTimeInterface $fulfillDate
     * @param \DateTimeInterface $fulfillDateTime
     * @param bool $isPermanent
     * @param \DateTimeInterface $lastModifiedDateTime
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $expirationDate
     * @param string $licenseText
     * @param string $binaryLicense
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense
     * @param string $supportAction
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param string $state
     * @param string $fulfillmentSource
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @param string $activationType
     */
    public static function create(
        \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier,
        \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier,
        string $fulfillmentType,
        \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItem,
        \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product,
        string $soldTo,
        string $fulfilledCount,
        string $overDraftCount,
        \DateTimeInterface $fulfillDate,
        \DateTimeInterface $fulfillDateTime,
        bool $isPermanent,
        \DateTimeInterface $lastModifiedDateTime,
        string $shipToEmail = null,
        string $shipToAddress = null,
        \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null,
        \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null,
        \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null,
        \DateTimeInterface $startDate = null,
        \DateTimeInterface $expirationDate = null,
        string $licenseText = null,
        string $binaryLicense = null,
        \Flexsim\FlexnetOperations\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense = null,
        string $supportAction = null,
        \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $parentFulfillmentId = null,
        \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null,
        string $state = null,
        string $fulfillmentSource = null,
        \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null,
        \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null,
        string $activationType = null
    ) {
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
