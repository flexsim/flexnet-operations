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
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, EntitlementLineItemIdentifierType $lineItem, ProductIdentifierType $product, string $soldTo, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface $lastModifiedDateTime, string $shipToEmail = null, string $shipToAddress = null, ServerIDsType $serverIds = null, NodeIDsType $nodeIds = null, CustomHostIDType $customHost = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, string $licenseText = null, string $binaryLicense = null, ConsolidatedHostLicenseDataType $consolidatedHostLicense = null, string $supportAction = null, FulfillmentIdentifierType $parentFulfillmentId = null, LicenseTechnologyIdentifierType $licenseTechnology = null, AttributeDescriptorDataType $licenseModelAttributes = null, string $state = null, string $fulfillmentSource = null, LicenseFileDataListType $licenseFiles = null, EntitledProductDataListType $entitledProducts = null, string $activationType = null)
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

    public static function create(EntitlementIdentifierType $entitlementIdentifier, FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, EntitlementLineItemIdentifierType $lineItem, ProductIdentifierType $product, string $soldTo, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface $lastModifiedDateTime, string $shipToEmail = null, string $shipToAddress = null, ServerIDsType $serverIds = null, NodeIDsType $nodeIds = null, CustomHostIDType $customHost = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, string $licenseText = null, string $binaryLicense = null, ConsolidatedHostLicenseDataType $consolidatedHostLicense = null, string $supportAction = null, FulfillmentIdentifierType $parentFulfillmentId = null, LicenseTechnologyIdentifierType $licenseTechnology = null, AttributeDescriptorDataType $licenseModelAttributes = null, string $state = null, string $fulfillmentSource = null, LicenseFileDataListType $licenseFiles = null, EntitledProductDataListType $entitledProducts = null, string $activationType = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): FulfillmentDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(FulfillmentIdentifierType $fulfillmentIdentifier): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getFulfillmentType(): string
    {
        return $this->fulfillmentType;
    }

    public function withFulfillmentType(string $fulfillmentType): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    public function getLineItem(): EntitlementLineItemIdentifierType
    {
        return $this->lineItem;
    }

    public function withLineItem(EntitlementLineItemIdentifierType $lineItem): FulfillmentDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getProduct(): ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(ProductIdentifierType $product): FulfillmentDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    public function withSoldTo(string $soldTo): FulfillmentDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): FulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): FulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getServerIds(): ?ServerIDsType
    {
        return $this->serverIds;
    }

    public function withServerIds(?ServerIDsType $serverIds): FulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    public function getNodeIds(): ?NodeIDsType
    {
        return $this->nodeIds;
    }

    public function withNodeIds(?NodeIDsType $nodeIds): FulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    public function getCustomHost(): ?CustomHostIDType
    {
        return $this->customHost;
    }

    public function withCustomHost(?CustomHostIDType $customHost): FulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    public function getFulfilledCount(): string
    {
        return $this->fulfilledCount;
    }

    public function withFulfilledCount(string $fulfilledCount): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    public function getOverDraftCount(): string
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(string $overDraftCount): FulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getFulfillDate(): \DateTimeInterface
    {
        return $this->fulfillDate;
    }

    public function withFulfillDate(\DateTimeInterface $fulfillDate): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    public function getFulfillDateTime(): \DateTimeInterface
    {
        return $this->fulfillDateTime;
    }

    public function withFulfillDateTime(\DateTimeInterface $fulfillDateTime): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    public function getIsPermanent(): bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool $isPermanent): FulfillmentDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): FulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): FulfillmentDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getLicenseText(): ?string
    {
        return $this->licenseText;
    }

    public function withLicenseText(?string $licenseText): FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?string
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?string $binaryLicense): FulfillmentDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getConsolidatedHostLicense(): ?ConsolidatedHostLicenseDataType
    {
        return $this->consolidatedHostLicense;
    }

    public function withConsolidatedHostLicense(?ConsolidatedHostLicenseDataType $consolidatedHostLicense): FulfillmentDataType
    {
        $new = clone $this;
        $new->consolidatedHostLicense = $consolidatedHostLicense;

        return $new;
    }

    public function getSupportAction(): ?string
    {
        return $this->supportAction;
    }

    public function withSupportAction(?string $supportAction): FulfillmentDataType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    public function getLastModifiedDateTime(): \DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(\DateTimeInterface $lastModifiedDateTime): FulfillmentDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getParentFulfillmentId(): ?FulfillmentIdentifierType
    {
        return $this->parentFulfillmentId;
    }

    public function withParentFulfillmentId(?FulfillmentIdentifierType $parentFulfillmentId): FulfillmentDataType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

        return $new;
    }

    public function getLicenseTechnology(): ?LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?LicenseTechnologyIdentifierType $licenseTechnology): FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModelAttributes(): ?AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?AttributeDescriptorDataType $licenseModelAttributes): FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): FulfillmentDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getFulfillmentSource(): ?string
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(?string $fulfillmentSource): FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getLicenseFiles(): ?LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?LicenseFileDataListType $licenseFiles): FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }

    public function getEntitledProducts(): ?EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?EntitledProductDataListType $entitledProducts): FulfillmentDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getActivationType(): ?string
    {
        return $this->activationType;
    }

    public function withActivationType(?string $activationType): FulfillmentDataType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
