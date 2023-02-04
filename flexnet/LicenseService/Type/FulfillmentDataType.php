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
     * @param  \Flexnet\LicenseService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  string  $fulfillmentType
     * @param  \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType  $lineItem
     * @param  \Flexnet\LicenseService\Type\ProductIdentifierType  $product
     * @param  string  $soldTo
     * @param  string  $fulfilledCount
     * @param  string  $overDraftCount
     * @param  \DateTimeInterface  $fulfillDate
     * @param  \DateTimeInterface  $fulfillDateTime
     * @param  bool  $isPermanent
     * @param  \DateTimeInterface  $lastModifiedDateTime
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $nodeIds
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  string|null  $licenseText
     * @param  string|null  $binaryLicense
     * @param  \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null  $consolidatedHostLicense
     * @param  string|null  $supportAction
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null  $parentFulfillmentId
     * @param  \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  string|null  $state
     * @param  string|null  $fulfillmentSource
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     * @param  \Flexnet\LicenseService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  string|null  $activationType
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, EntitlementLineItemIdentifierType $lineItem, ProductIdentifierType $product, string $soldTo, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface $lastModifiedDateTime, string|null $shipToEmail = null, string|null $shipToAddress = null, ServerIDsType|null $serverIds = null, NodeIDsType|null $nodeIds = null, CustomHostIDType|null $customHost = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, string|null $licenseText = null, string|null $binaryLicense = null, ConsolidatedHostLicenseDataType|null $consolidatedHostLicense = null, string|null $supportAction = null, FulfillmentIdentifierType|null $parentFulfillmentId = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $state = null, string|null $fulfillmentSource = null, LicenseFileDataListType|null $licenseFiles = null, EntitledProductDataListType|null $entitledProducts = null, string|null $activationType = null)
    {
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
     * @param  \Flexnet\LicenseService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  string  $fulfillmentType
     * @param  \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType  $lineItem
     * @param  \Flexnet\LicenseService\Type\ProductIdentifierType  $product
     * @param  string  $soldTo
     * @param  string  $fulfilledCount
     * @param  string  $overDraftCount
     * @param  \DateTimeInterface  $fulfillDate
     * @param  \DateTimeInterface  $fulfillDateTime
     * @param  bool  $isPermanent
     * @param  \DateTimeInterface  $lastModifiedDateTime
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $nodeIds
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  string|null  $licenseText
     * @param  string|null  $binaryLicense
     * @param  \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null  $consolidatedHostLicense
     * @param  string|null  $supportAction
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null  $parentFulfillmentId
     * @param  \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  string|null  $state
     * @param  string|null  $fulfillmentSource
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     * @param  \Flexnet\LicenseService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  string|null  $activationType
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, EntitlementLineItemIdentifierType $lineItem, ProductIdentifierType $product, string $soldTo, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface $lastModifiedDateTime, string|null $shipToEmail = null, string|null $shipToAddress = null, ServerIDsType|null $serverIds = null, NodeIDsType|null $nodeIds = null, CustomHostIDType|null $customHost = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $expirationDate = null, string|null $licenseText = null, string|null $binaryLicense = null, ConsolidatedHostLicenseDataType|null $consolidatedHostLicense = null, string|null $supportAction = null, FulfillmentIdentifierType|null $parentFulfillmentId = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $state = null, string|null $fulfillmentSource = null, LicenseFileDataListType|null $licenseFiles = null, EntitledProductDataListType|null $entitledProducts = null, string|null $activationType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @return FulfillmentDataType
     */
    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): FulfillmentDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @return FulfillmentDataType
     */
    public function withFulfillmentIdentifier(FulfillmentIdentifierType $fulfillmentIdentifier): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    /**
     * @return string
     */
    public function getFulfillmentType(): string
    {
        return $this->fulfillmentType;
    }

    /**
     * @param  string  $fulfillmentType
     * @return FulfillmentDataType
     */
    public function withFulfillmentType(string $fulfillmentType): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItem(): EntitlementLineItemIdentifierType
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType  $lineItem
     * @return FulfillmentDataType
     */
    public function withLineItem(EntitlementLineItemIdentifierType $lineItem): FulfillmentDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ProductIdentifierType
     */
    public function getProduct(): ProductIdentifierType
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ProductIdentifierType  $product
     * @return FulfillmentDataType
     */
    public function withProduct(ProductIdentifierType $product): FulfillmentDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    /**
     * @param  string  $soldTo
     * @return FulfillmentDataType
     */
    public function withSoldTo(string $soldTo): FulfillmentDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  string|null  $shipToEmail
     * @return FulfillmentDataType
     */
    public function withShipToEmail(string|null $shipToEmail): FulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  string|null  $shipToAddress
     * @return FulfillmentDataType
     */
    public function withShipToAddress(string|null $shipToAddress): FulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerIds(): ServerIDsType|null
    {
        return $this->serverIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @return FulfillmentDataType
     */
    public function withServerIds(ServerIDsType|null $serverIds): FulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    public function getNodeIds(): NodeIDsType|null
    {
        return $this->nodeIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $nodeIds
     * @return FulfillmentDataType
     */
    public function withNodeIds(NodeIDsType|null $nodeIds): FulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    public function getCustomHost(): CustomHostIDType|null
    {
        return $this->customHost;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     * @return FulfillmentDataType
     */
    public function withCustomHost(CustomHostIDType|null $customHost): FulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    /**
     * @return string
     */
    public function getFulfilledCount(): string
    {
        return $this->fulfilledCount;
    }

    /**
     * @param  string  $fulfilledCount
     * @return FulfillmentDataType
     */
    public function withFulfilledCount(string $fulfilledCount): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    /**
     * @return string
     */
    public function getOverDraftCount(): string
    {
        return $this->overDraftCount;
    }

    /**
     * @param  string  $overDraftCount
     * @return FulfillmentDataType
     */
    public function withOverDraftCount(string $overDraftCount): FulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFulfillDate(): \DateTimeInterface
    {
        return $this->fulfillDate;
    }

    /**
     * @param  \DateTimeInterface  $fulfillDate
     * @return FulfillmentDataType
     */
    public function withFulfillDate(\DateTimeInterface $fulfillDate): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFulfillDateTime(): \DateTimeInterface
    {
        return $this->fulfillDateTime;
    }

    /**
     * @param  \DateTimeInterface  $fulfillDateTime
     * @return FulfillmentDataType
     */
    public function withFulfillDateTime(\DateTimeInterface $fulfillDateTime): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsPermanent(): bool
    {
        return $this->isPermanent;
    }

    /**
     * @param  bool  $isPermanent
     * @return FulfillmentDataType
     */
    public function withIsPermanent(bool $isPermanent): FulfillmentDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    /**
     * @param  \DateTimeInterface|null  $startDate
     * @return FulfillmentDataType
     */
    public function withStartDate(\DateTimeInterface|null $startDate): FulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getExpirationDate(): \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    /**
     * @param  \DateTimeInterface|null  $expirationDate
     * @return FulfillmentDataType
     */
    public function withExpirationDate(\DateTimeInterface|null $expirationDate): FulfillmentDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLicenseText(): string|null
    {
        return $this->licenseText;
    }

    /**
     * @param  string|null  $licenseText
     * @return FulfillmentDataType
     */
    public function withLicenseText(string|null $licenseText): FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getBinaryLicense(): string|null
    {
        return $this->binaryLicense;
    }

    /**
     * @param  string|null  $binaryLicense
     * @return FulfillmentDataType
     */
    public function withBinaryLicense(string|null $binaryLicense): FulfillmentDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null
     */
    public function getConsolidatedHostLicense(): ConsolidatedHostLicenseDataType|null
    {
        return $this->consolidatedHostLicense;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null  $consolidatedHostLicense
     * @return FulfillmentDataType
     */
    public function withConsolidatedHostLicense(ConsolidatedHostLicenseDataType|null $consolidatedHostLicense): FulfillmentDataType
    {
        $new = clone $this;
        $new->consolidatedHostLicense = $consolidatedHostLicense;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSupportAction(): string|null
    {
        return $this->supportAction;
    }

    /**
     * @param  string|null  $supportAction
     * @return FulfillmentDataType
     */
    public function withSupportAction(string|null $supportAction): FulfillmentDataType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDateTime(): \DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  \DateTimeInterface  $lastModifiedDateTime
     * @return FulfillmentDataType
     */
    public function withLastModifiedDateTime(\DateTimeInterface $lastModifiedDateTime): FulfillmentDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null
     */
    public function getParentFulfillmentId(): FulfillmentIdentifierType|null
    {
        return $this->parentFulfillmentId;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|null  $parentFulfillmentId
     * @return FulfillmentDataType
     */
    public function withParentFulfillmentId(FulfillmentIdentifierType|null $parentFulfillmentId): FulfillmentDataType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null
     */
    public function getLicenseTechnology(): LicenseTechnologyIdentifierType|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @return FulfillmentDataType
     */
    public function withLicenseTechnology(LicenseTechnologyIdentifierType|null $licenseTechnology): FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    public function getLicenseModelAttributes(): AttributeDescriptorDataType|null
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @return FulfillmentDataType
     */
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getState(): string|null
    {
        return $this->state;
    }

    /**
     * @param  string|null  $state
     * @return FulfillmentDataType
     */
    public function withState(string|null $state): FulfillmentDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFulfillmentSource(): string|null
    {
        return $this->fulfillmentSource;
    }

    /**
     * @param  string|null  $fulfillmentSource
     * @return FulfillmentDataType
     */
    public function withFulfillmentSource(string|null $fulfillmentSource): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    public function getLicenseFiles(): LicenseFileDataListType|null
    {
        return $this->licenseFiles;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     * @return FulfillmentDataType
     */
    public function withLicenseFiles(LicenseFileDataListType|null $licenseFiles): FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitledProductDataListType|null
     */
    public function getEntitledProducts(): EntitledProductDataListType|null
    {
        return $this->entitledProducts;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EntitledProductDataListType|null  $entitledProducts
     * @return FulfillmentDataType
     */
    public function withEntitledProducts(EntitledProductDataListType|null $entitledProducts): FulfillmentDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getActivationType(): string|null
    {
        return $this->activationType;
    }

    /**
     * @param  string|null  $activationType
     * @return FulfillmentDataType
     */
    public function withActivationType(string|null $activationType): FulfillmentDataType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
