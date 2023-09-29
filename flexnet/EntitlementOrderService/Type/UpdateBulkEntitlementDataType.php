<?php

namespace Flexnet\EntitlementOrderService\Type;

class UpdateBulkEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType|null
     */
    private $entitlementId;

    /**
     * @var string|null
     */
    private $soldTo;

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
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $orderLineNumber;

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
     * @var int|null
     */
    private $numberOfCopies;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var bool|null
     */
    private $autoDeploy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType|null
     */
    private $updatedEntitledProducts;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null
     */
    private $channelPartners;

    /**
     * @var bool|null
     */
    private $allowPortalLogin;

    /**
     * Constructor
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, IdType $entitlementId = null, string $soldTo = null, ProductIdentifierType $product = null, PartNumberIdentifierType $partNumber = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, PolicyAttributesListType $policyAttributes = null, string $shipToEmail = null, string $shipToAddress = null, string $orderId = null, string $orderLineNumber = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, string $description = null, bool $autoDeploy = null, UpdateEntitledProductDataListType $updatedEntitledProducts = null, ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->entitlementId = $entitlementId;
        $this->soldTo = $soldTo;
        $this->product = $product;
        $this->partNumber = $partNumber;
        $this->licenseModel = $licenseModel;
        $this->alternateLicenseModel1 = $alternateLicenseModel1;
        $this->alternateLicenseModel2 = $alternateLicenseModel2;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->policyAttributes = $policyAttributes;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->startDateOption = $startDateOption;
        $this->isPermanent = $isPermanent;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->versionDateAttributes = $versionDateAttributes;
        $this->numberOfCopies = $numberOfCopies;
        $this->description = $description;
        $this->autoDeploy = $autoDeploy;
        $this->updatedEntitledProducts = $updatedEntitledProducts;
        $this->channelPartners = $channelPartners;
        $this->allowPortalLogin = $allowPortalLogin;
    }

    public static function create(EntitlementIdentifierType $entitlementIdentifier, IdType $entitlementId = null, string $soldTo = null, ProductIdentifierType $product = null, PartNumberIdentifierType $partNumber = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, PolicyAttributesListType $policyAttributes = null, string $shipToEmail = null, string $shipToAddress = null, string $orderId = null, string $orderLineNumber = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, string $description = null, bool $autoDeploy = null, UpdateEntitledProductDataListType $updatedEntitledProducts = null, ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getEntitlementId(): ?IdType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?IdType $entitlementId): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getSoldTo(): ?string
    {
        return $this->soldTo;
    }

    public function withSoldTo(?string $soldTo): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getProduct(): ?ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?ProductIdentifierType $product): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getPartNumber(): ?PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?PartNumberIdentifierType $partNumber): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getLicenseModel(): ?LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?LicenseModelIdentifierType $licenseModel): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(?LicenseModelIdentifierType $alternateLicenseModel1): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(?LicenseModelIdentifierType $alternateLicenseModel2): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseModelAttributes(): ?AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?AttributeDescriptorDataType $licenseModelAttributes): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getPolicyAttributes(): ?PolicyAttributesListType
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(?PolicyAttributesListType $policyAttributes): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getStartDateOption(): ?string
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?string $startDateOption): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): ?DurationType
    {
        return $this->term;
    }

    public function withTerm(?DurationType $term): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?VersionDateAttributesType
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?VersionDateAttributesType $versionDateAttributes): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?int $numberOfCopies): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getAutoDeploy(): ?bool
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(?bool $autoDeploy): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }

    public function getUpdatedEntitledProducts(): ?UpdateEntitledProductDataListType
    {
        return $this->updatedEntitledProducts;
    }

    public function withUpdatedEntitledProducts(?UpdateEntitledProductDataListType $updatedEntitledProducts): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->updatedEntitledProducts = $updatedEntitledProducts;

        return $new;
    }

    public function getChannelPartners(): ?ChannelPartnerDataListType
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(?ChannelPartnerDataListType $channelPartners): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }
}
