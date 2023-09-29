<?php

namespace Flexnet\EntitlementOrderService\Type;

class BulkEntitlementPropertiesType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    private $entitlementId;

    /**
     * @var bool|null
     */
    private $allowPortalLogin;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null
     */
    private $soldTo;

    /**
     * @var string|null
     */
    private $soldToDisplayName;

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
     * @var \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null
     */
    private $product;

    /**
     * @var string|null
     */
    private $productDescription;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null
     */
    private $partNumber;

    /**
     * @var string|null
     */
    private $partNumberDescription;

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
     * @var \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null
     */
    private $licenseTechnology;

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
    private $bulkEntitlementType;

    /**
     * @var string|null
     */
    private $createdUserId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $customAttributes;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null
     */
    private $entitledProducts;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null
     */
    private $channelPartners;

    /**
     * @var string|null
     */
    private $FNPTimeZoneValue;

    /**
     * Constructor
     */
    public function __construct(EntitlementIdentifierType $entitlementId = null, bool $allowPortalLogin = null, string $description = null, string $state = null, AccountIdentifierType $soldTo = null, string $soldToDisplayName = null, string $shipToEmail = null, string $shipToAddress = null, string $orderId = null, string $orderLineNumber = null, ProductIdentifierType $product = null, string $productDescription = null, PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, LicenseTechnologyIdentifierType $licenseTechnology = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, string $bulkEntitlementType = null, string $createdUserId = null, AttributeDescriptorDataType $customAttributes = null, EntitledProductDataListType $entitledProducts = null, ChannelPartnerDataListType $channelPartners = null, string $FNPTimeZoneValue = null)
    {
        $this->entitlementId = $entitlementId;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->description = $description;
        $this->state = $state;
        $this->soldTo = $soldTo;
        $this->soldToDisplayName = $soldToDisplayName;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->product = $product;
        $this->productDescription = $productDescription;
        $this->partNumber = $partNumber;
        $this->partNumberDescription = $partNumberDescription;
        $this->licenseModel = $licenseModel;
        $this->alternateLicenseModel1 = $alternateLicenseModel1;
        $this->alternateLicenseModel2 = $alternateLicenseModel2;
        $this->licenseTechnology = $licenseTechnology;
        $this->startDateOption = $startDateOption;
        $this->isPermanent = $isPermanent;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->versionDateAttributes = $versionDateAttributes;
        $this->numberOfCopies = $numberOfCopies;
        $this->bulkEntitlementType = $bulkEntitlementType;
        $this->createdUserId = $createdUserId;
        $this->customAttributes = $customAttributes;
        $this->entitledProducts = $entitledProducts;
        $this->channelPartners = $channelPartners;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    public static function create(EntitlementIdentifierType $entitlementId = null, bool $allowPortalLogin = null, string $description = null, string $state = null, AccountIdentifierType $soldTo = null, string $soldToDisplayName = null, string $shipToEmail = null, string $shipToAddress = null, string $orderId = null, string $orderLineNumber = null, ProductIdentifierType $product = null, string $productDescription = null, PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, LicenseTechnologyIdentifierType $licenseTechnology = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, string $bulkEntitlementType = null, string $createdUserId = null, AttributeDescriptorDataType $customAttributes = null, EntitledProductDataListType $entitledProducts = null, ChannelPartnerDataListType $channelPartners = null, string $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?EntitlementIdentifierType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?EntitlementIdentifierType $entitlementId): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getSoldTo(): ?AccountIdentifierType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?AccountIdentifierType $soldTo): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): ?string
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(?string $soldToDisplayName): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getProduct(): ?ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?ProductIdentifierType $product): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    public function withProductDescription(?string $productDescription): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): ?PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?PartNumberIdentifierType $partNumber): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): ?string
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(?string $partNumberDescription): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseModel(): ?LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?LicenseModelIdentifierType $licenseModel): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(?LicenseModelIdentifierType $alternateLicenseModel1): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(?LicenseModelIdentifierType $alternateLicenseModel2): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseTechnology(): ?LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?LicenseTechnologyIdentifierType $licenseTechnology): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getStartDateOption(): ?string
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?string $startDateOption): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): ?DurationType
    {
        return $this->term;
    }

    public function withTerm(?DurationType $term): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?VersionDateAttributesType
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?VersionDateAttributesType $versionDateAttributes): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?int $numberOfCopies): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getBulkEntitlementType(): ?string
    {
        return $this->bulkEntitlementType;
    }

    public function withBulkEntitlementType(?string $bulkEntitlementType): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->bulkEntitlementType = $bulkEntitlementType;

        return $new;
    }

    public function getCreatedUserId(): ?string
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(?string $createdUserId): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    public function getCustomAttributes(): ?AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?AttributeDescriptorDataType $customAttributes): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getEntitledProducts(): ?EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?EntitledProductDataListType $entitledProducts): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getChannelPartners(): ?ChannelPartnerDataListType
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(?ChannelPartnerDataListType $channelPartners): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
