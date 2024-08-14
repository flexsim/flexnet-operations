<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreateEntitlementLineItemDataType
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
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\IdType $activationId, int $numberOfCopies, ?string $description = null, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $product = null, ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModel = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?string $FNPTimeZoneValue = null, ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType $policyAttributes = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\DateTimeInterface $startDate = null, ?string $startDateOption = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DurationType $term = null, ?\DateTimeInterface $expirationDate = null, ?\DateTimeInterface $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType $versionDateAttributes = null, ?string $lineItemType = null, ?\Flexnet\EntitlementOrderService\Type\EntitledProductDataListType $entitledProducts = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $lineItemAttributes = null)
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
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\IdType $activationId, int $numberOfCopies, ?string $description = null, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $product = null, ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModel = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?string $FNPTimeZoneValue = null, ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType $policyAttributes = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\DateTimeInterface $startDate = null, ?string $startDateOption = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DurationType $term = null, ?\DateTimeInterface $expirationDate = null, ?\DateTimeInterface $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType $versionDateAttributes = null, ?string $lineItemType = null, ?\Flexnet\EntitlementOrderService\Type\EntitledProductDataListType $entitledProducts = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $lineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): \Flexnet\EntitlementOrderService\Type\IdType
    {
        return $this->activationId;
    }

    public function withActivationId(\Flexnet\EntitlementOrderService\Type\IdType $activationId): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getProduct(): ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $product): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getLicenseModel(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModel): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel1): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel2): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseModelAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $licenseModelAttributes): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getPolicyAttributes(): ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType $policyAttributes): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getNumberOfCopies(): int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int $numberOfCopies): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): ?string
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?string $startDateOption): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): ?\Flexnet\EntitlementOrderService\Type\DurationType
    {
        return $this->term;
    }

    public function withTerm(?\Flexnet\EntitlementOrderService\Type\DurationType $term): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType $versionDateAttributes): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getLineItemType(): ?string
    {
        return $this->lineItemType;
    }

    public function withLineItemType(?string $lineItemType): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemType = $lineItemType;

        return $new;
    }

    public function getEntitledProducts(): ?\Flexnet\EntitlementOrderService\Type\EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?\Flexnet\EntitlementOrderService\Type\EntitledProductDataListType $entitledProducts): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getLineItemAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $lineItemAttributes): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }
}
