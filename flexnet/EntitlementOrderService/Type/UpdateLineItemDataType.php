<?php

namespace Flexnet\EntitlementOrderService\Type;

class UpdateLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType|null
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
     * @var int|null
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
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    private $parentLineItem;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType|null
     */
    private $updatedEntitledProducts;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null
     */
    private $entitledProducts;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $lineItemAttributes;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\IdType|null  $activationId
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
     * @param  int|null  $numberOfCopies
     * @param  \DateTimeInterface|null  $startDate
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType|null  $updatedEntitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $lineItemAttributes
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, IdType|null $activationId = null, string|null $description = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $orderId = null, string|null $orderLineNumber = null, int|null $numberOfCopies = null, \DateTimeInterface|null $startDate = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, EntitlementLineItemIdentifierType|null $parentLineItem = null, UpdateEntitledProductDataListType|null $updatedEntitledProducts = null, EntitledProductDataListType|null $entitledProducts = null, AttributeDescriptorDataType|null $lineItemAttributes = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->activationId = $activationId;
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
        $this->numberOfCopies = $numberOfCopies;
        $this->startDate = $startDate;
        $this->startDateOption = $startDateOption;
        $this->isPermanent = $isPermanent;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->versionDateAttributes = $versionDateAttributes;
        $this->parentLineItem = $parentLineItem;
        $this->updatedEntitledProducts = $updatedEntitledProducts;
        $this->entitledProducts = $entitledProducts;
        $this->lineItemAttributes = $lineItemAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\IdType|null  $activationId
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
     * @param  int|null  $numberOfCopies
     * @param  \DateTimeInterface|null  $startDate
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType|null  $updatedEntitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $lineItemAttributes
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, IdType|null $activationId = null, string|null $description = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $orderId = null, string|null $orderLineNumber = null, int|null $numberOfCopies = null, \DateTimeInterface|null $startDate = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, EntitlementLineItemIdentifierType|null $parentLineItem = null, UpdateEntitledProductDataListType|null $updatedEntitledProducts = null, EntitledProductDataListType|null $entitledProducts = null, AttributeDescriptorDataType|null $lineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getActivationId(): IdType|null
    {
        return $this->activationId;
    }

    public function withActivationId(IdType|null $activationId): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getProduct(): ProductIdentifierType|null
    {
        return $this->product;
    }

    public function withProduct(ProductIdentifierType|null $product): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getPartNumber(): PartNumberIdentifierType|null
    {
        return $this->partNumber;
    }

    public function withPartNumber(PartNumberIdentifierType|null $partNumber): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getLicenseModel(): LicenseModelIdentifierType|null
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(LicenseModelIdentifierType|null $licenseModel): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): LicenseModelIdentifierType|null
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(LicenseModelIdentifierType|null $alternateLicenseModel1): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): LicenseModelIdentifierType|null
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(LicenseModelIdentifierType|null $alternateLicenseModel2): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseModelAttributes(): AttributeDescriptorDataType|null
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getPolicyAttributes(): PolicyAttributesListType|null
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(PolicyAttributesListType|null $policyAttributes): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getOrderId(): string|null
    {
        return $this->orderId;
    }

    public function withOrderId(string|null $orderId): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): string|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(string|null $orderLineNumber): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getNumberOfCopies(): int|null
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int|null $numberOfCopies): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface|null $startDate): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): string|null
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(string|null $startDateOption): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): DurationType|null
    {
        return $this->term;
    }

    public function withTerm(DurationType|null $term): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(\DateTimeInterface|null $expirationDate): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    public function withVersionDate(\DateTimeInterface|null $versionDate): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): VersionDateAttributesType|null
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(VersionDateAttributesType|null $versionDateAttributes): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getParentLineItem(): EntitlementLineItemIdentifierType|null
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(EntitlementLineItemIdentifierType|null $parentLineItem): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    public function getUpdatedEntitledProducts(): UpdateEntitledProductDataListType|null
    {
        return $this->updatedEntitledProducts;
    }

    public function withUpdatedEntitledProducts(UpdateEntitledProductDataListType|null $updatedEntitledProducts): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->updatedEntitledProducts = $updatedEntitledProducts;

        return $new;
    }

    public function getEntitledProducts(): EntitledProductDataListType|null
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(EntitledProductDataListType|null $entitledProducts): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getLineItemAttributes(): AttributeDescriptorDataType|null
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(AttributeDescriptorDataType|null $lineItemAttributes): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }
}
