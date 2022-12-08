<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var string
     */
    private $fulfillmentType;

    /**
     * @var \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItem;

    /**
     * @var \Flexnet\LicenseService\Type\ProductIdentifierType
     */
    private $product;

    /**
     * @var string
     */
    private $soldTo;

    /**
     * @var string|null
     */
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * @var \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    private $serverIds;

    /**
     * @var \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    private $nodeIds;

    /**
     * @var \Flexnet\LicenseService\Type\CustomHostIDType|null
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
     * @var \DateTimeInterface|null
     */
    private $startDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $expirationDate;

    /**
     * @var string|null
     */
    private $licenseText;

    /**
     * @var string|null
     */
    private $binaryLicense;

    /**
     * @var \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null
     */
    private $consolidatedHostLicense;

    /**
     * @var string|null
     */
    private $supportAction;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDateTime;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
     */
    private $parentFulfillmentId;

    /**
     * @var \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null
     */
    private $licenseTechnology;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    private $licenseModelAttributes;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $fulfillmentSource;

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
    private $activationType;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param string $fulfillmentType
     * @param \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineItem
     * @param \Flexnet\LicenseService\Type\ProductIdentifierType $product
     * @param string $soldTo
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param string $fulfilledCount
     * @param string $overDraftCount
     * @param \DateTimeInterface $fulfillDate
     * @param \DateTimeInterface $fulfillDateTime
     * @param bool $isPermanent
     * @param \DateTimeInterface|null $startDate
     * @param \DateTimeInterface|null $expirationDate
     * @param string|null $licenseText
     * @param string|null $binaryLicense
     * @param \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null $consolidatedHostLicense
     * @param string|null $supportAction
     * @param \DateTimeInterface $lastModifiedDateTime
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param string|null $state
     * @param string|null $fulfillmentSource
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     * @param \Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts
     * @param string|null $activationType
     */
    public function __construct(\Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineItem, \Flexnet\LicenseService\Type\ProductIdentifierType $product, string $soldTo, string|null $shipToEmail = null, string|null $shipToAddress = null, \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, string|null $licenseText = null, string|null $binaryLicense = null, \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null $consolidatedHostLicense = null, string|null $supportAction = null, \DateTimeInterface $lastModifiedDateTime, \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId = null, \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology = null, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $state = null, string|null $fulfillmentSource = null, \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles = null, \Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts = null, string|null $activationType = null)
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
     * @param \Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param string $fulfillmentType
     * @param \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineItem
     * @param \Flexnet\LicenseService\Type\ProductIdentifierType $product
     * @param string $soldTo
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param string $fulfilledCount
     * @param string $overDraftCount
     * @param \DateTimeInterface $fulfillDate
     * @param \DateTimeInterface $fulfillDateTime
     * @param bool $isPermanent
     * @param \DateTimeInterface|null $startDate
     * @param \DateTimeInterface|null $expirationDate
     * @param string|null $licenseText
     * @param string|null $binaryLicense
     * @param \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null $consolidatedHostLicense
     * @param string|null $supportAction
     * @param \DateTimeInterface $lastModifiedDateTime
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param string|null $state
     * @param string|null $fulfillmentSource
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     * @param \Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts
     * @param string|null $activationType
     */
    public static function create(\Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineItem, \Flexnet\LicenseService\Type\ProductIdentifierType $product, string $soldTo, string|null $shipToEmail = null, string|null $shipToAddress = null, \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, string|null $licenseText = null, string|null $binaryLicense = null, \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null $consolidatedHostLicense = null, string|null $supportAction = null, \DateTimeInterface $lastModifiedDateTime, \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId = null, \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology = null, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $state = null, string|null $fulfillmentSource = null, \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles = null, \Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts = null, string|null $activationType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier() : \Flexnet\LicenseService\Type\EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementIdentifier
     * @return FulfillmentDataType
     */
    public function withEntitlementIdentifier(\Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementIdentifier) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier() : \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return FulfillmentDataType
     */
    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    /**
     * @return string
     */
    public function getFulfillmentType() : string
    {
        return $this->fulfillmentType;
    }

    /**
     * @param string $fulfillmentType
     * @return FulfillmentDataType
     */
    public function withFulfillmentType(string $fulfillmentType) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItem() : \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineItem
     * @return FulfillmentDataType
     */
    public function withLineItem(\Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineItem) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ProductIdentifierType
     */
    public function getProduct() : \Flexnet\LicenseService\Type\ProductIdentifierType
    {
        return $this->product;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ProductIdentifierType $product
     * @return FulfillmentDataType
     */
    public function withProduct(\Flexnet\LicenseService\Type\ProductIdentifierType $product) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoldTo() : string
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return FulfillmentDataType
     */
    public function withSoldTo(string $soldTo) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

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
     * @return FulfillmentDataType
     */
    public function withShipToEmail(string|null $shipToEmail) : \Flexnet\LicenseService\Type\FulfillmentDataType
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
     * @return FulfillmentDataType
     */
    public function withShipToAddress(string|null $shipToAddress) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerIds() : \Flexnet\LicenseService\Type\ServerIDsType|null
    {
        return $this->serverIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @return FulfillmentDataType
     */
    public function withServerIds(\Flexnet\LicenseService\Type\ServerIDsType|null $serverIds) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    public function getNodeIds() : \Flexnet\LicenseService\Type\NodeIDsType|null
    {
        return $this->nodeIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @return FulfillmentDataType
     */
    public function withNodeIds(\Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    public function getCustomHost() : \Flexnet\LicenseService\Type\CustomHostIDType|null
    {
        return $this->customHost;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @return FulfillmentDataType
     */
    public function withCustomHost(\Flexnet\LicenseService\Type\CustomHostIDType|null $customHost) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    /**
     * @return string
     */
    public function getFulfilledCount() : string
    {
        return $this->fulfilledCount;
    }

    /**
     * @param string $fulfilledCount
     * @return FulfillmentDataType
     */
    public function withFulfilledCount(string $fulfilledCount) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    /**
     * @return string
     */
    public function getOverDraftCount() : string
    {
        return $this->overDraftCount;
    }

    /**
     * @param string $overDraftCount
     * @return FulfillmentDataType
     */
    public function withOverDraftCount(string $overDraftCount) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFulfillDate() : \DateTimeInterface
    {
        return $this->fulfillDate;
    }

    /**
     * @param \DateTimeInterface $fulfillDate
     * @return FulfillmentDataType
     */
    public function withFulfillDate(\DateTimeInterface $fulfillDate) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFulfillDateTime() : \DateTimeInterface
    {
        return $this->fulfillDateTime;
    }

    /**
     * @param \DateTimeInterface $fulfillDateTime
     * @return FulfillmentDataType
     */
    public function withFulfillDateTime(\DateTimeInterface $fulfillDateTime) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsPermanent() : bool
    {
        return $this->isPermanent;
    }

    /**
     * @param bool $isPermanent
     * @return FulfillmentDataType
     */
    public function withIsPermanent(bool $isPermanent) : \Flexnet\LicenseService\Type\FulfillmentDataType
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
     * @return FulfillmentDataType
     */
    public function withStartDate(\DateTimeInterface|null $startDate) : \Flexnet\LicenseService\Type\FulfillmentDataType
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
     * @return FulfillmentDataType
     */
    public function withExpirationDate(\DateTimeInterface|null $expirationDate) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

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
     * @return FulfillmentDataType
     */
    public function withLicenseText(string|null $licenseText) : \Flexnet\LicenseService\Type\FulfillmentDataType
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
     * @return FulfillmentDataType
     */
    public function withBinaryLicense(string|null $binaryLicense) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null
     */
    public function getConsolidatedHostLicense() : \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null
    {
        return $this->consolidatedHostLicense;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null $consolidatedHostLicense
     * @return FulfillmentDataType
     */
    public function withConsolidatedHostLicense(\Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null $consolidatedHostLicense) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->consolidatedHostLicense = $consolidatedHostLicense;

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
     * @return FulfillmentDataType
     */
    public function withSupportAction(string|null $supportAction) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDateTime() : \DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface $lastModifiedDateTime
     * @return FulfillmentDataType
     */
    public function withLastModifiedDateTime(\DateTimeInterface $lastModifiedDateTime) : \Flexnet\LicenseService\Type\FulfillmentDataType
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
     * @return FulfillmentDataType
     */
    public function withParentFulfillmentId(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|null $parentFulfillmentId) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

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
     * @return FulfillmentDataType
     */
    public function withLicenseTechnology(\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null $licenseTechnology) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    public function getLicenseModelAttributes() : \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @return FulfillmentDataType
     */
    public function withLicenseModelAttributes(\Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

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
     * @return FulfillmentDataType
     */
    public function withState(string|null $state) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->state = $state;

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
     * @return FulfillmentDataType
     */
    public function withFulfillmentSource(string|null $fulfillmentSource) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

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
     * @return FulfillmentDataType
     */
    public function withLicenseFiles(\Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles) : \Flexnet\LicenseService\Type\FulfillmentDataType
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
     * @return FulfillmentDataType
     */
    public function withEntitledProducts(\Flexnet\LicenseService\Type\EntitledProductDataListType|null $entitledProducts) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

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
     * @return FulfillmentDataType
     */
    public function withActivationType(string|null $activationType) : \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}

