<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType
     */
    private $activationId;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null
     */
    private $product;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null
     */
    private $partNumber;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null
     */
    private $licenseModel;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null
     */
    private $alternateLicenseModel1;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null
     */
    private $alternateLicenseModel2;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $licenseModelAttributes;

    /**
     * @var string|null
     */
    private $FNPTimeZoneValue;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null
     */
    private $policyAttributes;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $orderLineNumber;

    /**
     * @var int
     */
    private $numberOfCopies;

    /**
     * @var \DateTimeInterface|null
     */
    private $startDate;

    /**
     * @var string|null
     */
    private $startDateOption;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DurationType|null
     */
    private $term;

    /**
     * @var \DateTimeInterface|null
     */
    private $expirationDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $versionDate;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null
     */
    private $versionDateAttributes;

    /**
     * @var string|null
     */
    private $lineItemType;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null
     */
    private $entitledProducts;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $lineItemAttributes;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductCategoryDataType|null
     */
    private $productLine;

    /**
     * @var int|null
     */
    private $numberOfRemainingCopies;

    /**
     * @var int|null
     */
    private $fulfilledCount;

    /**
     * @var int|null
     */
    private $availableExtraActivations;

    /**
     * @var bool|null
     */
    private $isTrustedType;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null
     */
    private $licenseTechnology;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    private $parentLineItem;

    /**
     * @var \DateTimeInterface|null
     */
    private $createdOnDateTime;

    /**
     * @var \DateTimeInterface|null
     */
    private $lastModifiedDateTime;

    /**
     * @var int|null
     */
    private $overdraftMax;

    /**
     * @var int|null
     */
    private $remainingOverdraftCount;

    /**
     * Constructor
     */
    public function __construct(IdType $activationId, int $numberOfCopies, string $description = null, ProductIdentifierType $product = null, PartNumberIdentifierType $partNumber = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, PolicyAttributesListType $policyAttributes = null, string $orderId = null, string $orderLineNumber = null, \DateTimeInterface $startDate = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, string $lineItemType = null, EntitledProductDataListType $entitledProducts = null, AttributeDescriptorDataType $lineItemAttributes = null, ProductCategoryDataType $productLine = null, int $numberOfRemainingCopies = null, int $fulfilledCount = null, int $availableExtraActivations = null, bool $isTrustedType = null, string $state = null, LicenseTechnologyIdentifierType $licenseTechnology = null, EntitlementLineItemIdentifierType $parentLineItem = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, int $overdraftMax = null, int $remainingOverdraftCount = null)
    {
        $this->activationId = $activationId;
        $this->numberOfCopies = $numberOfCopies;
        $this->description = $description;
        $this->product = $product;
        $this->partNumber = $partNumber;
        $this->licenseModel = $licenseModel;
        $this->alternateLicenseModel1 = $alternateLicenseModel1;
        $this->alternateLicenseModel2 = $alternateLicenseModel2;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->policyAttributes = $policyAttributes;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->startDate = $startDate;
        $this->startDateOption = $startDateOption;
        $this->isPermanent = $isPermanent;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->versionDateAttributes = $versionDateAttributes;
        $this->lineItemType = $lineItemType;
        $this->entitledProducts = $entitledProducts;
        $this->lineItemAttributes = $lineItemAttributes;
        $this->productLine = $productLine;
        $this->numberOfRemainingCopies = $numberOfRemainingCopies;
        $this->fulfilledCount = $fulfilledCount;
        $this->availableExtraActivations = $availableExtraActivations;
        $this->isTrustedType = $isTrustedType;
        $this->state = $state;
        $this->licenseTechnology = $licenseTechnology;
        $this->parentLineItem = $parentLineItem;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->overdraftMax = $overdraftMax;
        $this->remainingOverdraftCount = $remainingOverdraftCount;
    }

    public static function create(IdType $activationId, int $numberOfCopies, string $description = null, ProductIdentifierType $product = null, PartNumberIdentifierType $partNumber = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, PolicyAttributesListType $policyAttributes = null, string $orderId = null, string $orderLineNumber = null, \DateTimeInterface $startDate = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, string $lineItemType = null, EntitledProductDataListType $entitledProducts = null, AttributeDescriptorDataType $lineItemAttributes = null, ProductCategoryDataType $productLine = null, int $numberOfRemainingCopies = null, int $fulfilledCount = null, int $availableExtraActivations = null, bool $isTrustedType = null, string $state = null, LicenseTechnologyIdentifierType $licenseTechnology = null, EntitlementLineItemIdentifierType $parentLineItem = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, int $overdraftMax = null, int $remainingOverdraftCount = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): IdType
    {
        return $this->activationId;
    }

    public function withActivationId(IdType $activationId): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getProduct(): ?ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?ProductIdentifierType $product): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getPartNumber(): ?PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?PartNumberIdentifierType $partNumber): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getLicenseModel(): ?LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?LicenseModelIdentifierType $licenseModel): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(?LicenseModelIdentifierType $alternateLicenseModel1): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(?LicenseModelIdentifierType $alternateLicenseModel2): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseModelAttributes(): ?AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?AttributeDescriptorDataType $licenseModelAttributes): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getPolicyAttributes(): ?PolicyAttributesListType
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(?PolicyAttributesListType $policyAttributes): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getNumberOfCopies(): int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int $numberOfCopies): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): ?string
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?string $startDateOption): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): ?DurationType
    {
        return $this->term;
    }

    public function withTerm(?DurationType $term): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?VersionDateAttributesType
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?VersionDateAttributesType $versionDateAttributes): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getLineItemType(): ?string
    {
        return $this->lineItemType;
    }

    public function withLineItemType(?string $lineItemType): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemType = $lineItemType;

        return $new;
    }

    public function getEntitledProducts(): ?EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?EntitledProductDataListType $entitledProducts): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getLineItemAttributes(): ?AttributeDescriptorDataType
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(?AttributeDescriptorDataType $lineItemAttributes): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }

    public function getProductLine(): ?ProductCategoryDataType
    {
        return $this->productLine;
    }

    public function withProductLine(?ProductCategoryDataType $productLine): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->productLine = $productLine;

        return $new;
    }

    public function getNumberOfRemainingCopies(): ?int
    {
        return $this->numberOfRemainingCopies;
    }

    public function withNumberOfRemainingCopies(?int $numberOfRemainingCopies): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    public function getFulfilledCount(): ?int
    {
        return $this->fulfilledCount;
    }

    public function withFulfilledCount(?int $fulfilledCount): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    public function getAvailableExtraActivations(): ?int
    {
        return $this->availableExtraActivations;
    }

    public function withAvailableExtraActivations(?int $availableExtraActivations): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->availableExtraActivations = $availableExtraActivations;

        return $new;
    }

    public function getIsTrustedType(): ?bool
    {
        return $this->isTrustedType;
    }

    public function withIsTrustedType(?bool $isTrustedType): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->isTrustedType = $isTrustedType;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?LicenseTechnologyIdentifierType $licenseTechnology): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getParentLineItem(): ?EntitlementLineItemIdentifierType
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(?EntitlementLineItemIdentifierType $parentLineItem): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    public function getCreatedOnDateTime(): ?\DateTimeInterface
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(?\DateTimeInterface $createdOnDateTime): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getOverdraftMax(): ?int
    {
        return $this->overdraftMax;
    }

    public function withOverdraftMax(?int $overdraftMax): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->overdraftMax = $overdraftMax;

        return $new;
    }

    public function getRemainingOverdraftCount(): ?int
    {
        return $this->remainingOverdraftCount;
    }

    public function withRemainingOverdraftCount(?int $remainingOverdraftCount): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->remainingOverdraftCount = $remainingOverdraftCount;

        return $new;
    }
}
