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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $activationId
     * @param  int  $numberOfCopies
     * @param  string|null  $description
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  string|null  $FNPTimeZoneValue
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null  $policyAttributes
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \DateTimeInterface|null  $startDate
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  string|null  $lineItemType
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $lineItemAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\ProductCategoryDataType|null  $productLine
     * @param  int|null  $numberOfRemainingCopies
     * @param  int|null  $fulfilledCount
     * @param  int|null  $availableExtraActivations
     * @param  bool|null  $isTrustedType
     * @param  string|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     * @param  \DateTimeInterface|null  $createdOnDateTime
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @param  int|null  $overdraftMax
     * @param  int|null  $remainingOverdraftCount
     */
    public function __construct(IdType $activationId, int $numberOfCopies, string|null $description = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $orderId = null, string|null $orderLineNumber = null, \DateTimeInterface|null $startDate = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, string|null $lineItemType = null, EntitledProductDataListType|null $entitledProducts = null, AttributeDescriptorDataType|null $lineItemAttributes = null, ProductCategoryDataType|null $productLine = null, int|null $numberOfRemainingCopies = null, int|null $fulfilledCount = null, int|null $availableExtraActivations = null, bool|null $isTrustedType = null, string|null $state = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, EntitlementLineItemIdentifierType|null $parentLineItem = null, \DateTimeInterface|null $createdOnDateTime = null, \DateTimeInterface|null $lastModifiedDateTime = null, int|null $overdraftMax = null, int|null $remainingOverdraftCount = null)
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

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $activationId
     * @param  int  $numberOfCopies
     * @param  string|null  $description
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  string|null  $FNPTimeZoneValue
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null  $policyAttributes
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \DateTimeInterface|null  $startDate
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  string|null  $lineItemType
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $lineItemAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\ProductCategoryDataType|null  $productLine
     * @param  int|null  $numberOfRemainingCopies
     * @param  int|null  $fulfilledCount
     * @param  int|null  $availableExtraActivations
     * @param  bool|null  $isTrustedType
     * @param  string|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     * @param  \DateTimeInterface|null  $createdOnDateTime
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @param  int|null  $overdraftMax
     * @param  int|null  $remainingOverdraftCount
     */
    public static function create(IdType $activationId, int $numberOfCopies, string|null $description = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $orderId = null, string|null $orderLineNumber = null, \DateTimeInterface|null $startDate = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, string|null $lineItemType = null, EntitledProductDataListType|null $entitledProducts = null, AttributeDescriptorDataType|null $lineItemAttributes = null, ProductCategoryDataType|null $productLine = null, int|null $numberOfRemainingCopies = null, int|null $fulfilledCount = null, int|null $availableExtraActivations = null, bool|null $isTrustedType = null, string|null $state = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, EntitlementLineItemIdentifierType|null $parentLineItem = null, \DateTimeInterface|null $createdOnDateTime = null, \DateTimeInterface|null $lastModifiedDateTime = null, int|null $overdraftMax = null, int|null $remainingOverdraftCount = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\IdType
     */
    public function getActivationId(): IdType
    {
        return $this->activationId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $activationId
     * @return EntitlementLineItemDataType
     */
    public function withActivationId(IdType $activationId): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->description;
    }

    /**
     * @param  string|null  $description
     * @return EntitlementLineItemDataType
     */
    public function withDescription(string|null $description): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null
     */
    public function getProduct(): ProductIdentifierType|null
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @return EntitlementLineItemDataType
     */
    public function withProduct(ProductIdentifierType|null $product): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null
     */
    public function getPartNumber(): PartNumberIdentifierType|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @return EntitlementLineItemDataType
     */
    public function withPartNumber(PartNumberIdentifierType|null $partNumber): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null
     */
    public function getLicenseModel(): LicenseModelIdentifierType|null
    {
        return $this->licenseModel;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @return EntitlementLineItemDataType
     */
    public function withLicenseModel(LicenseModelIdentifierType|null $licenseModel): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null
     */
    public function getAlternateLicenseModel1(): LicenseModelIdentifierType|null
    {
        return $this->alternateLicenseModel1;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @return EntitlementLineItemDataType
     */
    public function withAlternateLicenseModel1(LicenseModelIdentifierType|null $alternateLicenseModel1): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null
     */
    public function getAlternateLicenseModel2(): LicenseModelIdentifierType|null
    {
        return $this->alternateLicenseModel2;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @return EntitlementLineItemDataType
     */
    public function withAlternateLicenseModel2(LicenseModelIdentifierType|null $alternateLicenseModel2): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    public function getLicenseModelAttributes(): AttributeDescriptorDataType|null
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @return EntitlementLineItemDataType
     */
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param  string|null  $FNPTimeZoneValue
     * @return EntitlementLineItemDataType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null
     */
    public function getPolicyAttributes(): PolicyAttributesListType|null
    {
        return $this->policyAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null  $policyAttributes
     * @return EntitlementLineItemDataType
     */
    public function withPolicyAttributes(PolicyAttributesListType|null $policyAttributes): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): string|null
    {
        return $this->orderId;
    }

    /**
     * @param  string|null  $orderId
     * @return EntitlementLineItemDataType
     */
    public function withOrderId(string|null $orderId): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getOrderLineNumber(): string|null
    {
        return $this->orderLineNumber;
    }

    /**
     * @param  string|null  $orderLineNumber
     * @return EntitlementLineItemDataType
     */
    public function withOrderLineNumber(string|null $orderLineNumber): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfCopies(): int
    {
        return $this->numberOfCopies;
    }

    /**
     * @param  int  $numberOfCopies
     * @return EntitlementLineItemDataType
     */
    public function withNumberOfCopies(int $numberOfCopies): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

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
     * @return EntitlementLineItemDataType
     */
    public function withStartDate(\DateTimeInterface|null $startDate): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getStartDateOption(): string|null
    {
        return $this->startDateOption;
    }

    /**
     * @param  string|null  $startDateOption
     * @return EntitlementLineItemDataType
     */
    public function withStartDateOption(string|null $startDateOption): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    /**
     * @param  bool|null  $isPermanent
     * @return EntitlementLineItemDataType
     */
    public function withIsPermanent(bool|null $isPermanent): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DurationType|null
     */
    public function getTerm(): DurationType|null
    {
        return $this->term;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @return EntitlementLineItemDataType
     */
    public function withTerm(DurationType|null $term): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->term = $term;

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
     * @return EntitlementLineItemDataType
     */
    public function withExpirationDate(\DateTimeInterface|null $expirationDate): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getVersionDate(): \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    /**
     * @param  \DateTimeInterface|null  $versionDate
     * @return EntitlementLineItemDataType
     */
    public function withVersionDate(\DateTimeInterface|null $versionDate): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null
     */
    public function getVersionDateAttributes(): VersionDateAttributesType|null
    {
        return $this->versionDateAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @return EntitlementLineItemDataType
     */
    public function withVersionDateAttributes(VersionDateAttributesType|null $versionDateAttributes): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLineItemType(): string|null
    {
        return $this->lineItemType;
    }

    /**
     * @param  string|null  $lineItemType
     * @return EntitlementLineItemDataType
     */
    public function withLineItemType(string|null $lineItemType): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemType = $lineItemType;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null
     */
    public function getEntitledProducts(): EntitledProductDataListType|null
    {
        return $this->entitledProducts;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @return EntitlementLineItemDataType
     */
    public function withEntitledProducts(EntitledProductDataListType|null $entitledProducts): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    public function getLineItemAttributes(): AttributeDescriptorDataType|null
    {
        return $this->lineItemAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $lineItemAttributes
     * @return EntitlementLineItemDataType
     */
    public function withLineItemAttributes(AttributeDescriptorDataType|null $lineItemAttributes): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ProductCategoryDataType|null
     */
    public function getProductLine(): ProductCategoryDataType|null
    {
        return $this->productLine;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductCategoryDataType|null  $productLine
     * @return EntitlementLineItemDataType
     */
    public function withProductLine(ProductCategoryDataType|null $productLine): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->productLine = $productLine;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getNumberOfRemainingCopies(): int|null
    {
        return $this->numberOfRemainingCopies;
    }

    /**
     * @param  int|null  $numberOfRemainingCopies
     * @return EntitlementLineItemDataType
     */
    public function withNumberOfRemainingCopies(int|null $numberOfRemainingCopies): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getFulfilledCount(): int|null
    {
        return $this->fulfilledCount;
    }

    /**
     * @param  int|null  $fulfilledCount
     * @return EntitlementLineItemDataType
     */
    public function withFulfilledCount(int|null $fulfilledCount): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->fulfilledCount = $fulfilledCount;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getAvailableExtraActivations(): int|null
    {
        return $this->availableExtraActivations;
    }

    /**
     * @param  int|null  $availableExtraActivations
     * @return EntitlementLineItemDataType
     */
    public function withAvailableExtraActivations(int|null $availableExtraActivations): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->availableExtraActivations = $availableExtraActivations;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsTrustedType(): bool|null
    {
        return $this->isTrustedType;
    }

    /**
     * @param  bool|null  $isTrustedType
     * @return EntitlementLineItemDataType
     */
    public function withIsTrustedType(bool|null $isTrustedType): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->isTrustedType = $isTrustedType;

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
     * @return EntitlementLineItemDataType
     */
    public function withState(string|null $state): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null
     */
    public function getLicenseTechnology(): LicenseTechnologyIdentifierType|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @return EntitlementLineItemDataType
     */
    public function withLicenseTechnology(LicenseTechnologyIdentifierType|null $licenseTechnology): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    public function getParentLineItem(): EntitlementLineItemIdentifierType|null
    {
        return $this->parentLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     * @return EntitlementLineItemDataType
     */
    public function withParentLineItem(EntitlementLineItemIdentifierType|null $parentLineItem): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getCreatedOnDateTime(): \DateTimeInterface|null
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param  \DateTimeInterface|null  $createdOnDateTime
     * @return EntitlementLineItemDataType
     */
    public function withCreatedOnDateTime(\DateTimeInterface|null $createdOnDateTime): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getLastModifiedDateTime(): \DateTimeInterface|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @return EntitlementLineItemDataType
     */
    public function withLastModifiedDateTime(\DateTimeInterface|null $lastModifiedDateTime): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getOverdraftMax(): int|null
    {
        return $this->overdraftMax;
    }

    /**
     * @param  int|null  $overdraftMax
     * @return EntitlementLineItemDataType
     */
    public function withOverdraftMax(int|null $overdraftMax): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->overdraftMax = $overdraftMax;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getRemainingOverdraftCount(): int|null
    {
        return $this->remainingOverdraftCount;
    }

    /**
     * @param  int|null  $remainingOverdraftCount
     * @return EntitlementLineItemDataType
     */
    public function withRemainingOverdraftCount(int|null $remainingOverdraftCount): EntitlementLineItemDataType
    {
        $new = clone $this;
        $new->remainingOverdraftCount = $remainingOverdraftCount;

        return $new;
    }
}
