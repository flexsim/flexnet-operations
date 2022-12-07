<?php

namespace Flexnet\EntitlementOrderService\Type;

class BulkEntitlementDataType
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
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $createdUserId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null
     */
    private $licenseTechnology;

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
     * @param  string|null  $state
     * @param  string|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     */
    public function __construct(IdType $entitlementId, string|null $soldTo = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $orderId = null, string|null $orderLineNumber = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, string|null $description = null, int|null $numberOfCopies = null, string|null $bulkEntitlementType = null, bool|null $autoDeploy = null, EntitledProductDataListType|null $entitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null, string|null $state = null, string|null $createdUserId = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null)
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
        $this->state = $state;
        $this->createdUserId = $createdUserId;
        $this->licenseTechnology = $licenseTechnology;
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
     * @param  string|null  $state
     * @param  string|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     */
    public static function create(IdType $entitlementId, string|null $soldTo = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $orderId = null, string|null $orderLineNumber = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, string|null $description = null, int|null $numberOfCopies = null, string|null $bulkEntitlementType = null, bool|null $autoDeploy = null, EntitledProductDataListType|null $entitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null, string|null $state = null, string|null $createdUserId = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null)
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
     * @return BulkEntitlementDataType
     */
    public function withEntitlementId(IdType $entitlementId): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withSoldTo(string|null $soldTo): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withProduct(ProductIdentifierType|null $product): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withPartNumber(PartNumberIdentifierType|null $partNumber): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withLicenseModel(LicenseModelIdentifierType|null $licenseModel): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withAlternateLicenseModel1(LicenseModelIdentifierType|null $alternateLicenseModel1): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withAlternateLicenseModel2(LicenseModelIdentifierType|null $alternateLicenseModel2): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withPolicyAttributes(PolicyAttributesListType|null $policyAttributes): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withShipToEmail(string|null $shipToEmail): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withShipToAddress(string|null $shipToAddress): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withOrderId(string|null $orderId): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withOrderLineNumber(string|null $orderLineNumber): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withStartDateOption(string|null $startDateOption): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withIsPermanent(bool|null $isPermanent): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withTerm(DurationType|null $term): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withExpirationDate(\DateTimeInterface|null $expirationDate): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withVersionDate(\DateTimeInterface|null $versionDate): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withVersionDateAttributes(VersionDateAttributesType|null $versionDateAttributes): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withDescription(string|null $description): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withNumberOfCopies(int|null $numberOfCopies): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withBulkEntitlementType(string|null $bulkEntitlementType): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withAutoDeploy(bool|null $autoDeploy): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withEntitledProducts(EntitledProductDataListType|null $entitledProducts): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): BulkEntitlementDataType
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
     * @return BulkEntitlementDataType
     */
    public function withAllowPortalLogin(bool|null $allowPortalLogin): BulkEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

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
     * @return BulkEntitlementDataType
     */
    public function withState(string|null $state): BulkEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

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
     * @return BulkEntitlementDataType
     */
    public function withCreatedUserId(string|null $createdUserId): BulkEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

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
     * @return BulkEntitlementDataType
     */
    public function withLicenseTechnology(LicenseTechnologyIdentifierType|null $licenseTechnology): BulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }
}
