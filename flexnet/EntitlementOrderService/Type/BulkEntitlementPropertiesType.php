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
     * @return BulkEntitlementPropertiesType
     */
    public function withEntitlementId(EntitlementIdentifierType|null $entitlementId): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    /**
     * @param  bool|null  $allowPortalLogin
     * @return BulkEntitlementPropertiesType
     */
    public function withAllowPortalLogin(bool|null $allowPortalLogin): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

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
     * @return BulkEntitlementPropertiesType
     */
    public function withDescription(string|null $description): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->description = $description;

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
     * @return BulkEntitlementPropertiesType
     */
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
     * @return BulkEntitlementPropertiesType
     */
    public function withSoldTo(AccountIdentifierType|null $soldTo): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSoldToDisplayName(): string|null
    {
        return $this->soldToDisplayName;
    }

    /**
     * @param  string|null  $soldToDisplayName
     * @return BulkEntitlementPropertiesType
     */
    public function withSoldToDisplayName(string|null $soldToDisplayName): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  string|null  $shipToEmail
     * @return BulkEntitlementPropertiesType
     */
    public function withShipToEmail(string|null $shipToEmail): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  string|null  $shipToAddress
     * @return BulkEntitlementPropertiesType
     */
    public function withShipToAddress(string|null $shipToAddress): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

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
     * @return BulkEntitlementPropertiesType
     */
    public function withOrderId(string|null $orderId): BulkEntitlementPropertiesType
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
     * @return BulkEntitlementPropertiesType
     */
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
     * @return BulkEntitlementPropertiesType
     */
    public function withProduct(ProductIdentifierType|null $product): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getProductDescription(): string|null
    {
        return $this->productDescription;
    }

    /**
     * @param  string|null  $productDescription
     * @return BulkEntitlementPropertiesType
     */
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
     * @return BulkEntitlementPropertiesType
     */
    public function withPartNumber(PartNumberIdentifierType|null $partNumber): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getPartNumberDescription(): string|null
    {
        return $this->partNumberDescription;
    }

    /**
     * @param  string|null  $partNumberDescription
     * @return BulkEntitlementPropertiesType
     */
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
     * @return BulkEntitlementPropertiesType
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
     * @return BulkEntitlementPropertiesType
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
     * @return BulkEntitlementPropertiesType
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
     * @return BulkEntitlementPropertiesType
     */
    public function withLicenseTechnology(LicenseTechnologyIdentifierType|null $licenseTechnology): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

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
     * @return BulkEntitlementPropertiesType
     */
    public function withStartDateOption(string|null $startDateOption): BulkEntitlementPropertiesType
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
     * @return BulkEntitlementPropertiesType
     */
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
     * @return BulkEntitlementPropertiesType
     */
    public function withTerm(DurationType|null $term): BulkEntitlementPropertiesType
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
     * @return BulkEntitlementPropertiesType
     */
    public function withExpirationDate(\DateTimeInterface|null $expirationDate): BulkEntitlementPropertiesType
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
     * @return BulkEntitlementPropertiesType
     */
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
     * @return BulkEntitlementPropertiesType
     */
    public function withVersionDateAttributes(VersionDateAttributesType|null $versionDateAttributes): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getNumberOfCopies(): int|null
    {
        return $this->numberOfCopies;
    }

    /**
     * @param  int|null  $numberOfCopies
     * @return BulkEntitlementPropertiesType
     */
    public function withNumberOfCopies(int|null $numberOfCopies): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getBulkEntitlementType(): string|null
    {
        return $this->bulkEntitlementType;
    }

    /**
     * @param  string|null  $bulkEntitlementType
     * @return BulkEntitlementPropertiesType
     */
    public function withBulkEntitlementType(string|null $bulkEntitlementType): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->bulkEntitlementType = $bulkEntitlementType;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getCreatedUserId(): string|null
    {
        return $this->createdUserId;
    }

    /**
     * @param  string|null  $createdUserId
     * @return BulkEntitlementPropertiesType
     */
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
     * @return BulkEntitlementPropertiesType
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
     * @return BulkEntitlementPropertiesType
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
     * @return BulkEntitlementPropertiesType
     */
    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

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
     * @return BulkEntitlementPropertiesType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): BulkEntitlementPropertiesType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
