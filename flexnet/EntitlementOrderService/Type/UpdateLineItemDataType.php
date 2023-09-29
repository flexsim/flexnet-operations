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
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, IdType $activationId = null, string $description = null, ProductIdentifierType $product = null, PartNumberIdentifierType $partNumber = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, PolicyAttributesListType $policyAttributes = null, string $orderId = null, string $orderLineNumber = null, int $numberOfCopies = null, \DateTimeInterface $startDate = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, EntitlementLineItemIdentifierType $parentLineItem = null, UpdateEntitledProductDataListType $updatedEntitledProducts = null, EntitledProductDataListType $entitledProducts = null, AttributeDescriptorDataType $lineItemAttributes = null)
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

    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, IdType $activationId = null, string $description = null, ProductIdentifierType $product = null, PartNumberIdentifierType $partNumber = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, PolicyAttributesListType $policyAttributes = null, string $orderId = null, string $orderLineNumber = null, int $numberOfCopies = null, \DateTimeInterface $startDate = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, EntitlementLineItemIdentifierType $parentLineItem = null, UpdateEntitledProductDataListType $updatedEntitledProducts = null, EntitledProductDataListType $entitledProducts = null, AttributeDescriptorDataType $lineItemAttributes = null)
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

    public function getActivationId(): ?IdType
    {
        return $this->activationId;
    }

    public function withActivationId(?IdType $activationId): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getProduct(): ?ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?ProductIdentifierType $product): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getPartNumber(): ?PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?PartNumberIdentifierType $partNumber): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getLicenseModel(): ?LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?LicenseModelIdentifierType $licenseModel): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(?LicenseModelIdentifierType $alternateLicenseModel1): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(?LicenseModelIdentifierType $alternateLicenseModel2): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseModelAttributes(): ?AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?AttributeDescriptorDataType $licenseModelAttributes): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getPolicyAttributes(): ?PolicyAttributesListType
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(?PolicyAttributesListType $policyAttributes): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?int $numberOfCopies): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): ?string
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?string $startDateOption): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): ?DurationType
    {
        return $this->term;
    }

    public function withTerm(?DurationType $term): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?VersionDateAttributesType
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?VersionDateAttributesType $versionDateAttributes): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getParentLineItem(): ?EntitlementLineItemIdentifierType
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(?EntitlementLineItemIdentifierType $parentLineItem): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    public function getUpdatedEntitledProducts(): ?UpdateEntitledProductDataListType
    {
        return $this->updatedEntitledProducts;
    }

    public function withUpdatedEntitledProducts(?UpdateEntitledProductDataListType $updatedEntitledProducts): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->updatedEntitledProducts = $updatedEntitledProducts;

        return $new;
    }

    public function getEntitledProducts(): ?EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?EntitledProductDataListType $entitledProducts): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getLineItemAttributes(): ?AttributeDescriptorDataType
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(?AttributeDescriptorDataType $lineItemAttributes): UpdateLineItemDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }
}
