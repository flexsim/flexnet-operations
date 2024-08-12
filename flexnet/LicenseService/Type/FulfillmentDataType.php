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
     * @var \Flexnet\LicenseService\Type\Base64Binary|null
     */
    private $binaryLicense;

    /**
     * @var \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType|null
     */
    private $consolidatedHostLicense;

    /**
     * @var \Flexnet\LicenseService\Type\SupportLicenseType|null
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
     * @var \Flexnet\LicenseService\Type\StateType|null
     */
    private $state;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentSourceType|null
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
     * @var \Flexnet\LicenseService\Type\ActivationType|null
     */
    private $activationType;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineItem, \Flexnet\LicenseService\Type\ProductIdentifierType $product, string $soldTo, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface $lastModifiedDateTime, ?string $shipToEmail = null, ?string $shipToAddress = null, ?\Flexnet\LicenseService\Type\ServerIDsType $serverIds = null, ?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $expirationDate = null, ?string $licenseText = null, ?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense = null, ?\Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense = null, ?\Flexnet\LicenseService\Type\SupportLicenseType $supportAction = null, ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $parentFulfillmentId = null, ?\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?\Flexnet\LicenseService\Type\StateType $state = null, ?\Flexnet\LicenseService\Type\FulfillmentSourceType $fulfillmentSource = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null, ?\Flexnet\LicenseService\Type\EntitledProductDataListType $entitledProducts = null, ?\Flexnet\LicenseService\Type\ActivationType $activationType = null)
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

    public static function create(\Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $fulfillmentType, \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineItem, \Flexnet\LicenseService\Type\ProductIdentifierType $product, string $soldTo, string $fulfilledCount, string $overDraftCount, \DateTimeInterface $fulfillDate, \DateTimeInterface $fulfillDateTime, bool $isPermanent, \DateTimeInterface $lastModifiedDateTime, ?string $shipToEmail = null, ?string $shipToAddress = null, ?\Flexnet\LicenseService\Type\ServerIDsType $serverIds = null, ?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $expirationDate = null, ?string $licenseText = null, ?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense = null, ?\Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense = null, ?\Flexnet\LicenseService\Type\SupportLicenseType $supportAction = null, ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $parentFulfillmentId = null, ?\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?\Flexnet\LicenseService\Type\StateType $state = null, ?\Flexnet\LicenseService\Type\FulfillmentSourceType $fulfillmentSource = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null, ?\Flexnet\LicenseService\Type\EntitledProductDataListType $entitledProducts = null, ?\Flexnet\LicenseService\Type\ActivationType $activationType = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): \Flexnet\LicenseService\Type\EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(\Flexnet\LicenseService\Type\EntitlementIdentifierType $entitlementIdentifier): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getFulfillmentIdentifier(): \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getFulfillmentType(): string
    {
        return $this->fulfillmentType;
    }

    public function withFulfillmentType(string $fulfillmentType): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentType = $fulfillmentType;

        return $new;
    }

    public function getLineItem(): \Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItem;
    }

    public function withLineItem(\Flexnet\LicenseService\Type\EntitlementLineItemIdentifierType $lineItem): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getProduct(): \Flexnet\LicenseService\Type\ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(\Flexnet\LicenseService\Type\ProductIdentifierType $product): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    public function withSoldTo(string $soldTo): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getServerIds(): ?\Flexnet\LicenseService\Type\ServerIDsType
    {
        return $this->serverIds;
    }

    public function withServerIds(?\Flexnet\LicenseService\Type\ServerIDsType $serverIds): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    public function getNodeIds(): ?\Flexnet\LicenseService\Type\NodeIDsType
    {
        return $this->nodeIds;
    }

    public function withNodeIds(?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    public function getCustomHost(): ?\Flexnet\LicenseService\Type\CustomHostIDType
    {
        return $this->customHost;
    }

    public function withCustomHost(?\Flexnet\LicenseService\Type\CustomHostIDType $customHost): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    public function getFulfilledCount(): string
    {
        return $this->fulfilledCount;
    }

    public function withFulfilledCount(string $fulfilledCount): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    public function getOverDraftCount(): string
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(string $overDraftCount): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getFulfillDate(): \DateTimeInterface
    {
        return $this->fulfillDate;
    }

    public function withFulfillDate(\DateTimeInterface $fulfillDate): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    public function getFulfillDateTime(): \DateTimeInterface
    {
        return $this->fulfillDateTime;
    }

    public function withFulfillDateTime(\DateTimeInterface $fulfillDateTime): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    public function getIsPermanent(): bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool $isPermanent): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getLicenseText(): ?string
    {
        return $this->licenseText;
    }

    public function withLicenseText(?string $licenseText): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?\Flexnet\LicenseService\Type\Base64Binary
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getConsolidatedHostLicense(): ?\Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType
    {
        return $this->consolidatedHostLicense;
    }

    public function withConsolidatedHostLicense(?\Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType $consolidatedHostLicense): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->consolidatedHostLicense = $consolidatedHostLicense;

        return $new;
    }

    public function getSupportAction(): ?\Flexnet\LicenseService\Type\SupportLicenseType
    {
        return $this->supportAction;
    }

    public function withSupportAction(?\Flexnet\LicenseService\Type\SupportLicenseType $supportAction): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->supportAction = $supportAction;

        return $new;
    }

    public function getLastModifiedDateTime(): \DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(\DateTimeInterface $lastModifiedDateTime): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getParentFulfillmentId(): ?\Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->parentFulfillmentId;
    }

    public function withParentFulfillmentId(?\Flexnet\LicenseService\Type\FulfillmentIdentifierType $parentFulfillmentId): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->parentFulfillmentId = $parentFulfillmentId;

        return $new;
    }

    public function getLicenseTechnology(): ?\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnology): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModelAttributes(): ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getState(): ?\Flexnet\LicenseService\Type\StateType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\LicenseService\Type\StateType $state): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getFulfillmentSource(): ?\Flexnet\LicenseService\Type\FulfillmentSourceType
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(?\Flexnet\LicenseService\Type\FulfillmentSourceType $fulfillmentSource): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getLicenseFiles(): ?\Flexnet\LicenseService\Type\LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }

    public function getEntitledProducts(): ?\Flexnet\LicenseService\Type\EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?\Flexnet\LicenseService\Type\EntitledProductDataListType $entitledProducts): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getActivationType(): ?\Flexnet\LicenseService\Type\ActivationType
    {
        return $this->activationType;
    }

    public function withActivationType(?\Flexnet\LicenseService\Type\ActivationType $activationType): \Flexnet\LicenseService\Type\FulfillmentDataType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
