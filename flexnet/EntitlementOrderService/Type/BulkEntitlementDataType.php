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
     * @var \Flexnet\EntitlementOrderService\Type\StartDateOptionType|null
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
     * @var \Flexnet\EntitlementOrderService\Type\BulkEntitlementType|null
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
     * @var \Flexnet\EntitlementOrderService\Type\StateType|null
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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\IdType $entitlementId, ?string $soldTo = null, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $product = null, ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModel = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?string $FNPTimeZoneValue = null, ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType $policyAttributes = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\Flexnet\EntitlementOrderService\Type\StartDateOptionType $startDateOption = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DurationType $term = null, ?\DateTimeInterface $expirationDate = null, ?\DateTimeInterface $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType $versionDateAttributes = null, ?string $description = null, ?int $numberOfCopies = null, ?\Flexnet\EntitlementOrderService\Type\BulkEntitlementType $bulkEntitlementType = null, ?bool $autoDeploy = null, ?\Flexnet\EntitlementOrderService\Type\EntitledProductDataListType $entitledProducts = null, ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\StateType $state = null, ?string $createdUserId = null, ?\Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType $licenseTechnology = null)
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

    public static function create(\Flexnet\EntitlementOrderService\Type\IdType $entitlementId, ?string $soldTo = null, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $product = null, ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModel = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?string $FNPTimeZoneValue = null, ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType $policyAttributes = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\Flexnet\EntitlementOrderService\Type\StartDateOptionType $startDateOption = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DurationType $term = null, ?\DateTimeInterface $expirationDate = null, ?\DateTimeInterface $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType $versionDateAttributes = null, ?string $description = null, ?int $numberOfCopies = null, ?\Flexnet\EntitlementOrderService\Type\BulkEntitlementType $bulkEntitlementType = null, ?bool $autoDeploy = null, ?\Flexnet\EntitlementOrderService\Type\EntitledProductDataListType $entitledProducts = null, ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\StateType $state = null, ?string $createdUserId = null, ?\Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType $licenseTechnology = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): \Flexnet\EntitlementOrderService\Type\IdType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(\Flexnet\EntitlementOrderService\Type\IdType $entitlementId): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getSoldTo(): ?string
    {
        return $this->soldTo;
    }

    public function withSoldTo(?string $soldTo): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getProduct(): ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $product): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType $partNumber): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getLicenseModel(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModel): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel1): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel2): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseModelAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $licenseModelAttributes): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getPolicyAttributes(): ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType $policyAttributes): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getStartDateOption(): ?\Flexnet\EntitlementOrderService\Type\StartDateOptionType
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?\Flexnet\EntitlementOrderService\Type\StartDateOptionType $startDateOption): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): ?\Flexnet\EntitlementOrderService\Type\DurationType
    {
        return $this->term;
    }

    public function withTerm(?\Flexnet\EntitlementOrderService\Type\DurationType $term): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType $versionDateAttributes): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?int $numberOfCopies): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getBulkEntitlementType(): ?\Flexnet\EntitlementOrderService\Type\BulkEntitlementType
    {
        return $this->bulkEntitlementType;
    }

    public function withBulkEntitlementType(?\Flexnet\EntitlementOrderService\Type\BulkEntitlementType $bulkEntitlementType): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlementType = $bulkEntitlementType;

        return $new;
    }

    public function getAutoDeploy(): ?bool
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(?bool $autoDeploy): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }

    public function getEntitledProducts(): ?\Flexnet\EntitlementOrderService\Type\EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?\Flexnet\EntitlementOrderService\Type\EntitledProductDataListType $entitledProducts): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getChannelPartners(): ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getState(): ?\Flexnet\EntitlementOrderService\Type\StateType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\EntitlementOrderService\Type\StateType $state): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreatedUserId(): ?string
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(?string $createdUserId): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    public function getLicenseTechnology(): ?\Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?\Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType $licenseTechnology): \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }
}
