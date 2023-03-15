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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementId
     * @param  bool|null  $allowPortalLogin
     * @param  string|null  $description
     * @param  string|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null  $soldTo
     * @param  string|null  $soldToDisplayName
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  string|null  $productDescription
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  string|null  $partNumberDescription
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  int|null  $numberOfCopies
     * @param  string|null  $bulkEntitlementType
     * @param  string|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  string|null  $FNPTimeZoneValue
     */
    public function __construct(EntitlementIdentifierType|null $entitlementId = null, bool|null $allowPortalLogin = null, string|null $description = null, string|null $state = null, AccountIdentifierType|null $soldTo = null, string|null $soldToDisplayName = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $orderId = null, string|null $orderLineNumber = null, ProductIdentifierType|null $product = null, string|null $productDescription = null, PartNumberIdentifierType|null $partNumber = null, string|null $partNumberDescription = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, int|null $numberOfCopies = null, string|null $bulkEntitlementType = null, string|null $createdUserId = null, AttributeDescriptorDataType|null $customAttributes = null, EntitledProductDataListType|null $entitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, string|null $FNPTimeZoneValue = null)
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

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementId
     * @param  bool|null  $allowPortalLogin
     * @param  string|null  $description
     * @param  string|null  $state
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null  $soldTo
     * @param  string|null  $soldToDisplayName
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  string|null  $productDescription
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  string|null  $partNumberDescription
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  int|null  $numberOfCopies
     * @param  string|null  $bulkEntitlementType
     * @param  string|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  string|null  $FNPTimeZoneValue
     */
    public static function create(EntitlementIdentifierType|null $entitlementId = null, bool|null $allowPortalLogin = null, string|null $description = null, string|null $state = null, AccountIdentifierType|null $soldTo = null, string|null $soldToDisplayName = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $orderId = null, string|null $orderLineNumber = null, ProductIdentifierType|null $product = null, string|null $productDescription = null, PartNumberIdentifierType|null $partNumber = null, string|null $partNumberDescription = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, int|null $numberOfCopies = null, string|null $bulkEntitlementType = null, string|null $createdUserId = null, AttributeDescriptorDataType|null $customAttributes = null, EntitledProductDataListType|null $entitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, string|null $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    public function getEntitlementId(): EntitlementIdentifierType|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementId
     */
    public function withEntitlementId(EntitlementIdentifierType|null $entitlementId): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(bool|null $allowPortalLogin): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string|null
    {
        return $this->state;
    }

    public function withState(string|null $state): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null
     */
    public function getSoldTo(): AccountIdentifierType|null
    {
        return $this->soldTo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null  $soldTo
     */
    public function withSoldTo(AccountIdentifierType|null $soldTo): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): string|null
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(string|null $soldToDisplayName): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(string|null $shipToAddress): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getOrderId(): string|null
    {
        return $this->orderId;
    }

    public function withOrderId(string|null $orderId): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): string|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(string|null $orderLineNumber): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

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
     */
    public function withProduct(ProductIdentifierType|null $product): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): string|null
    {
        return $this->productDescription;
    }

    public function withProductDescription(string|null $productDescription): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

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
     */
    public function withPartNumber(PartNumberIdentifierType|null $partNumber): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): string|null
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(string|null $partNumberDescription): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

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
     */
    public function withLicenseModel(LicenseModelIdentifierType|null $licenseModel): BulkEntitlementPropertiesType
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
     */
    public function withAlternateLicenseModel1(LicenseModelIdentifierType|null $alternateLicenseModel1): BulkEntitlementPropertiesType
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
     */
    public function withAlternateLicenseModel2(LicenseModelIdentifierType|null $alternateLicenseModel2): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

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
     */
    public function withLicenseTechnology(LicenseTechnologyIdentifierType|null $licenseTechnology): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getStartDateOption(): string|null
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(string|null $startDateOption): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): BulkEntitlementPropertiesType
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
     */
    public function withTerm(DurationType|null $term): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(\DateTimeInterface|null $expirationDate): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    public function withVersionDate(\DateTimeInterface|null $versionDate): BulkEntitlementPropertiesType
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
     */
    public function withVersionDateAttributes(VersionDateAttributesType|null $versionDateAttributes): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getNumberOfCopies(): int|null
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int|null $numberOfCopies): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getBulkEntitlementType(): string|null
    {
        return $this->bulkEntitlementType;
    }

    public function withBulkEntitlementType(string|null $bulkEntitlementType): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->bulkEntitlementType = $bulkEntitlementType;

        return $new;
    }

    public function getCreatedUserId(): string|null
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(string|null $createdUserId): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    public function getCustomAttributes(): AttributeDescriptorDataType|null
    {
        return $this->customAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $customAttributes
     */
    public function withCustomAttributes(AttributeDescriptorDataType|null $customAttributes): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

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
     */
    public function withEntitledProducts(EntitledProductDataListType|null $entitledProducts): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null
     */
    public function getChannelPartners(): ChannelPartnerDataListType|null
    {
        return $this->channelPartners;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     */
    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
