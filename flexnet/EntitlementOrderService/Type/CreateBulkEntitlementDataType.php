<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreateBulkEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType
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
     * @var string|null
     */
    private $description;

    /**
     * @var int|null
     */
    private $numberOfCopies;

    /**
     * @var string|null
     */
    private $bulkEntitlementType;

    /**
     * @var bool|null
     */
    private $autoDeploy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null
     */
    private $entitledProducts;

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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $entitlementId
     * @param  string|null  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  string|null  $FNPTimeZoneValue
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null  $policyAttributes
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  string|null  $description
     * @param  int|null  $numberOfCopies
     * @param  string|null  $bulkEntitlementType
     * @param  bool|null  $autoDeploy
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     */
    public function __construct(IdType $entitlementId, string|null $soldTo = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $orderId = null, string|null $orderLineNumber = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, string|null $description = null, int|null $numberOfCopies = null, string|null $bulkEntitlementType = null, bool|null $autoDeploy = null, EntitledProductDataListType|null $entitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null)
    {
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
        $this->description = $description;
        $this->numberOfCopies = $numberOfCopies;
        $this->bulkEntitlementType = $bulkEntitlementType;
        $this->autoDeploy = $autoDeploy;
        $this->entitledProducts = $entitledProducts;
        $this->channelPartners = $channelPartners;
        $this->allowPortalLogin = $allowPortalLogin;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $entitlementId
     * @param  string|null  $soldTo
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  string|null  $FNPTimeZoneValue
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null  $policyAttributes
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  string|null  $description
     * @param  int|null  $numberOfCopies
     * @param  string|null  $bulkEntitlementType
     * @param  bool|null  $autoDeploy
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     */
    public static function create(IdType $entitlementId, string|null $soldTo = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $orderId = null, string|null $orderLineNumber = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, string|null $description = null, int|null $numberOfCopies = null, string|null $bulkEntitlementType = null, bool|null $autoDeploy = null, EntitledProductDataListType|null $entitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\IdType
     */
    public function getEntitlementId(): IdType
    {
        return $this->entitlementId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $entitlementId
     * @return CreateBulkEntitlementDataType
     */
    public function withEntitlementId(IdType $entitlementId): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSoldTo(): string|null
    {
        return $this->soldTo;
    }

    /**
     * @param  string|null  $soldTo
     * @return CreateBulkEntitlementDataType
     */
    public function withSoldTo(string|null $soldTo): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

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
     * @return CreateBulkEntitlementDataType
     */
    public function withProduct(ProductIdentifierType|null $product): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withPartNumber(PartNumberIdentifierType|null $partNumber): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withLicenseModel(LicenseModelIdentifierType|null $licenseModel): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withAlternateLicenseModel1(LicenseModelIdentifierType|null $alternateLicenseModel1): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withAlternateLicenseModel2(LicenseModelIdentifierType|null $alternateLicenseModel2): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withPolicyAttributes(PolicyAttributesListType|null $policyAttributes): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

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
     * @return CreateBulkEntitlementDataType
     */
    public function withShipToEmail(string|null $shipToEmail): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withShipToAddress(string|null $shipToAddress): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withOrderId(string|null $orderId): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withOrderLineNumber(string|null $orderLineNumber): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

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
     * @return CreateBulkEntitlementDataType
     */
    public function withStartDateOption(string|null $startDateOption): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withIsPermanent(bool|null $isPermanent): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withTerm(DurationType|null $term): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withExpirationDate(\DateTimeInterface|null $expirationDate): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withVersionDate(\DateTimeInterface|null $versionDate): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withVersionDateAttributes(VersionDateAttributesType|null $versionDateAttributes): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

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
     * @return CreateBulkEntitlementDataType
     */
    public function withDescription(string|null $description): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

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
     * @return CreateBulkEntitlementDataType
     */
    public function withNumberOfCopies(int|null $numberOfCopies): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withBulkEntitlementType(string|null $bulkEntitlementType): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlementType = $bulkEntitlementType;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getAutoDeploy(): bool|null
    {
        return $this->autoDeploy;
    }

    /**
     * @param  bool|null  $autoDeploy
     * @return CreateBulkEntitlementDataType
     */
    public function withAutoDeploy(bool|null $autoDeploy): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

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
     * @return CreateBulkEntitlementDataType
     */
    public function withEntitledProducts(EntitledProductDataListType|null $entitledProducts): CreateBulkEntitlementDataType
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
     * @return CreateBulkEntitlementDataType
     */
    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

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
     * @return CreateBulkEntitlementDataType
     */
    public function withAllowPortalLogin(bool|null $allowPortalLogin): CreateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }
}
