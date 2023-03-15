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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\IdType|null  $entitlementId
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
     * @param  int|null  $numberOfCopies
     * @param  string|null  $description
     * @param  bool|null  $autoDeploy
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType|null  $updatedEntitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, IdType|null $entitlementId = null, string|null $soldTo = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $orderId = null, string|null $orderLineNumber = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, int|null $numberOfCopies = null, string|null $description = null, bool|null $autoDeploy = null, UpdateEntitledProductDataListType|null $updatedEntitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null)
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

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\IdType|null  $entitlementId
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
     * @param  int|null  $numberOfCopies
     * @param  string|null  $description
     * @param  bool|null  $autoDeploy
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType|null  $updatedEntitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, IdType|null $entitlementId = null, string|null $soldTo = null, ProductIdentifierType|null $product = null, PartNumberIdentifierType|null $partNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, PolicyAttributesListType|null $policyAttributes = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $orderId = null, string|null $orderLineNumber = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, int|null $numberOfCopies = null, string|null $description = null, bool|null $autoDeploy = null, UpdateEntitledProductDataListType|null $updatedEntitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     */
    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\IdType|null
     */
    public function getEntitlementId(): IdType|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType|null  $entitlementId
     */
    public function withEntitlementId(IdType|null $entitlementId): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getSoldTo(): string|null
    {
        return $this->soldTo;
    }

    public function withSoldTo(string|null $soldTo): UpdateBulkEntitlementDataType
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
     */
    public function withProduct(ProductIdentifierType|null $product): UpdateBulkEntitlementDataType
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
     */
    public function withPartNumber(PartNumberIdentifierType|null $partNumber): UpdateBulkEntitlementDataType
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
     */
    public function withLicenseModel(LicenseModelIdentifierType|null $licenseModel): UpdateBulkEntitlementDataType
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
    public function withAlternateLicenseModel1(LicenseModelIdentifierType|null $alternateLicenseModel1): UpdateBulkEntitlementDataType
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
    public function withAlternateLicenseModel2(LicenseModelIdentifierType|null $alternateLicenseModel2): UpdateBulkEntitlementDataType
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
     */
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): UpdateBulkEntitlementDataType
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
     */
    public function withPolicyAttributes(PolicyAttributesListType|null $policyAttributes): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(string|null $shipToAddress): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getOrderId(): string|null
    {
        return $this->orderId;
    }

    public function withOrderId(string|null $orderId): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): string|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(string|null $orderLineNumber): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getStartDateOption(): string|null
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(string|null $startDateOption): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): UpdateBulkEntitlementDataType
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
    public function withTerm(DurationType|null $term): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(\DateTimeInterface|null $expirationDate): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    public function withVersionDate(\DateTimeInterface|null $versionDate): UpdateBulkEntitlementDataType
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
    public function withVersionDateAttributes(VersionDateAttributesType|null $versionDateAttributes): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getNumberOfCopies(): int|null
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int|null $numberOfCopies): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getAutoDeploy(): bool|null
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(bool|null $autoDeploy): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType|null
     */
    public function getUpdatedEntitledProducts(): UpdateEntitledProductDataListType|null
    {
        return $this->updatedEntitledProducts;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType|null  $updatedEntitledProducts
     */
    public function withUpdatedEntitledProducts(UpdateEntitledProductDataListType|null $updatedEntitledProducts): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->updatedEntitledProducts = $updatedEntitledProducts;

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
    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(bool|null $allowPortalLogin): UpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }
}
