<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementLineItemPropertiesType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    private $activationId;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $activatableItemType;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $orderLineNumber;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    private $entitlementId;

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
    private $entitlementState;

    /**
     * @var string|null
     */
    private $entitlementDescription;

    /**
     * @var bool|null
     */
    private $allowPortalLogin;

    /**
     * @var string|null
     */
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    private $parentBulkEntitlementId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null
     */
    private $bulkEntSoldTo;

    /**
     * @var string|null
     */
    private $bulkEntSoldToDisplayName;

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
     * @var \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null
     */
    private $licenseTechnology;

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
     * @var string|null
     */
    private $lineItemSupportAction;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    private $parentLineItem;

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
     * @var int|null
     */
    private $numberOfCopies;

    /**
     * @var int|null
     */
    private $fulfilledAmount;

    /**
     * @var int|null
     */
    private $numberOfRemainingCopies;

    /**
     * @var bool|null
     */
    private $isTrusted;

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
     * @var \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType>|null
     */
    private $maintenanceLineItems;

    /**
     * @var string|null
     */
    private $FNPTimeZoneValue;

    /**
     * @var \DateTimeInterface|null
     */
    private $createdOnDateTime;

    /**
     * @var \DateTimeInterface|null
     */
    private $lastModifiedDateTime;

    /**
     * @var string|null
     */
    private $createdBy;

    /**
     * @var string|null
     */
    private $lastModifiedBy;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $lineItemAttributes;

    /**
     * @var string|null
     */
    private $transferredFromLineItem;

    /**
     * @var string|null
     */
    private $splitFromLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType>|null  $maintenanceLineItems
     */
    public function __construct(EntitlementLineItemIdentifierType $activationId = null, string $description = null, string $state = null, string $activatableItemType = null, string $orderId = null, string $orderLineNumber = null, EntitlementIdentifierType $entitlementId = null, AccountIdentifierType $soldTo = null, string $soldToDisplayName = null, string $entitlementState = null, string $entitlementDescription = null, bool $allowPortalLogin = null, string $shipToEmail = null, string $shipToAddress = null, EntitlementIdentifierType $parentBulkEntitlementId = null, AccountIdentifierType $bulkEntSoldTo = null, string $bulkEntSoldToDisplayName = null, ProductIdentifierType $product = null, string $productDescription = null, PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, LicenseTechnologyIdentifierType $licenseTechnology = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, string $lineItemSupportAction = null, EntitlementLineItemIdentifierType $parentLineItem = null, \DateTimeInterface $startDate = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, int $fulfilledAmount = null, int $numberOfRemainingCopies = null, bool $isTrusted = null, AttributeDescriptorDataType $customAttributes = null, EntitledProductDataListType $entitledProducts = null, ChannelPartnerDataListType $channelPartners = null, MaintenanceLineItemPropertiesType|array $maintenanceLineItems = null, string $FNPTimeZoneValue = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, string $createdBy = null, string $lastModifiedBy = null, AttributeDescriptorDataType $lineItemAttributes = null, string $transferredFromLineItem = null, string $splitFromLineItem = null)
    {
        $this->activationId = $activationId;
        $this->description = $description;
        $this->state = $state;
        $this->activatableItemType = $activatableItemType;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->entitlementId = $entitlementId;
        $this->soldTo = $soldTo;
        $this->soldToDisplayName = $soldToDisplayName;
        $this->entitlementState = $entitlementState;
        $this->entitlementDescription = $entitlementDescription;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;
        $this->bulkEntSoldTo = $bulkEntSoldTo;
        $this->bulkEntSoldToDisplayName = $bulkEntSoldToDisplayName;
        $this->product = $product;
        $this->productDescription = $productDescription;
        $this->partNumber = $partNumber;
        $this->partNumberDescription = $partNumberDescription;
        $this->licenseTechnology = $licenseTechnology;
        $this->licenseModel = $licenseModel;
        $this->alternateLicenseModel1 = $alternateLicenseModel1;
        $this->alternateLicenseModel2 = $alternateLicenseModel2;
        $this->lineItemSupportAction = $lineItemSupportAction;
        $this->parentLineItem = $parentLineItem;
        $this->startDate = $startDate;
        $this->startDateOption = $startDateOption;
        $this->isPermanent = $isPermanent;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->versionDateAttributes = $versionDateAttributes;
        $this->numberOfCopies = $numberOfCopies;
        $this->fulfilledAmount = $fulfilledAmount;
        $this->numberOfRemainingCopies = $numberOfRemainingCopies;
        $this->isTrusted = $isTrusted;
        $this->customAttributes = $customAttributes;
        $this->entitledProducts = $entitledProducts;
        $this->channelPartners = $channelPartners;
        $this->maintenanceLineItems = $maintenanceLineItems;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->lineItemAttributes = $lineItemAttributes;
        $this->transferredFromLineItem = $transferredFromLineItem;
        $this->splitFromLineItem = $splitFromLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType>|null  $maintenanceLineItems
     */
    public static function create(EntitlementLineItemIdentifierType $activationId = null, string $description = null, string $state = null, string $activatableItemType = null, string $orderId = null, string $orderLineNumber = null, EntitlementIdentifierType $entitlementId = null, AccountIdentifierType $soldTo = null, string $soldToDisplayName = null, string $entitlementState = null, string $entitlementDescription = null, bool $allowPortalLogin = null, string $shipToEmail = null, string $shipToAddress = null, EntitlementIdentifierType $parentBulkEntitlementId = null, AccountIdentifierType $bulkEntSoldTo = null, string $bulkEntSoldToDisplayName = null, ProductIdentifierType $product = null, string $productDescription = null, PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, LicenseTechnologyIdentifierType $licenseTechnology = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, string $lineItemSupportAction = null, EntitlementLineItemIdentifierType $parentLineItem = null, \DateTimeInterface $startDate = null, string $startDateOption = null, bool $isPermanent = null, DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, int $fulfilledAmount = null, int $numberOfRemainingCopies = null, bool $isTrusted = null, AttributeDescriptorDataType $customAttributes = null, EntitledProductDataListType $entitledProducts = null, ChannelPartnerDataListType $channelPartners = null, MaintenanceLineItemPropertiesType|array $maintenanceLineItems = null, string $FNPTimeZoneValue = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, string $createdBy = null, string $lastModifiedBy = null, AttributeDescriptorDataType $lineItemAttributes = null, string $transferredFromLineItem = null, string $splitFromLineItem = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): ?EntitlementLineItemIdentifierType
    {
        return $this->activationId;
    }

    public function withActivationId(?EntitlementLineItemIdentifierType $activationId): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getActivatableItemType(): ?string
    {
        return $this->activatableItemType;
    }

    public function withActivatableItemType(?string $activatableItemType): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getEntitlementId(): ?EntitlementIdentifierType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?EntitlementIdentifierType $entitlementId): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getSoldTo(): ?AccountIdentifierType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?AccountIdentifierType $soldTo): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): ?string
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(?string $soldToDisplayName): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getEntitlementState(): ?string
    {
        return $this->entitlementState;
    }

    public function withEntitlementState(?string $entitlementState): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitlementState = $entitlementState;

        return $new;
    }

    public function getEntitlementDescription(): ?string
    {
        return $this->entitlementDescription;
    }

    public function withEntitlementDescription(?string $entitlementDescription): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitlementDescription = $entitlementDescription;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getParentBulkEntitlementId(): ?EntitlementIdentifierType
    {
        return $this->parentBulkEntitlementId;
    }

    public function withParentBulkEntitlementId(?EntitlementIdentifierType $parentBulkEntitlementId): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    public function getBulkEntSoldTo(): ?AccountIdentifierType
    {
        return $this->bulkEntSoldTo;
    }

    public function withBulkEntSoldTo(?AccountIdentifierType $bulkEntSoldTo): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->bulkEntSoldTo = $bulkEntSoldTo;

        return $new;
    }

    public function getBulkEntSoldToDisplayName(): ?string
    {
        return $this->bulkEntSoldToDisplayName;
    }

    public function withBulkEntSoldToDisplayName(?string $bulkEntSoldToDisplayName): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->bulkEntSoldToDisplayName = $bulkEntSoldToDisplayName;

        return $new;
    }

    public function getProduct(): ?ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?ProductIdentifierType $product): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    public function withProductDescription(?string $productDescription): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): ?PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?PartNumberIdentifierType $partNumber): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): ?string
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(?string $partNumberDescription): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseTechnology(): ?LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?LicenseTechnologyIdentifierType $licenseTechnology): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModel(): ?LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?LicenseModelIdentifierType $licenseModel): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(?LicenseModelIdentifierType $alternateLicenseModel1): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(?LicenseModelIdentifierType $alternateLicenseModel2): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLineItemSupportAction(): ?string
    {
        return $this->lineItemSupportAction;
    }

    public function withLineItemSupportAction(?string $lineItemSupportAction): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->lineItemSupportAction = $lineItemSupportAction;

        return $new;
    }

    public function getParentLineItem(): ?EntitlementLineItemIdentifierType
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(?EntitlementLineItemIdentifierType $parentLineItem): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): ?string
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?string $startDateOption): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): ?DurationType
    {
        return $this->term;
    }

    public function withTerm(?DurationType $term): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?VersionDateAttributesType
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?VersionDateAttributesType $versionDateAttributes): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?int $numberOfCopies): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getFulfilledAmount(): ?int
    {
        return $this->fulfilledAmount;
    }

    public function withFulfilledAmount(?int $fulfilledAmount): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->fulfilledAmount = $fulfilledAmount;

        return $new;
    }

    public function getNumberOfRemainingCopies(): ?int
    {
        return $this->numberOfRemainingCopies;
    }

    public function withNumberOfRemainingCopies(?int $numberOfRemainingCopies): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    public function getIsTrusted(): ?bool
    {
        return $this->isTrusted;
    }

    public function withIsTrusted(?bool $isTrusted): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->isTrusted = $isTrusted;

        return $new;
    }

    public function getCustomAttributes(): ?AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?AttributeDescriptorDataType $customAttributes): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getEntitledProducts(): ?EntitledProductDataListType
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(?EntitledProductDataListType $entitledProducts): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getChannelPartners(): ?ChannelPartnerDataListType
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(?ChannelPartnerDataListType $channelPartners): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType>|null
     */
    public function getMaintenanceLineItems(): MaintenanceLineItemPropertiesType|array|null
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType>|null  $maintenanceLineItems
     */
    public function withMaintenanceLineItems(MaintenanceLineItemPropertiesType|array|null $maintenanceLineItems): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceLineItems = $maintenanceLineItems;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getCreatedOnDateTime(): ?\DateTimeInterface
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(?\DateTimeInterface $createdOnDateTime): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function withCreatedBy(?string $createdBy): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->createdBy = $createdBy;

        return $new;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function withLastModifiedBy(?string $lastModifiedBy): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedBy = $lastModifiedBy;

        return $new;
    }

    public function getLineItemAttributes(): ?AttributeDescriptorDataType
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(?AttributeDescriptorDataType $lineItemAttributes): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }

    public function getTransferredFromLineItem(): ?string
    {
        return $this->transferredFromLineItem;
    }

    public function withTransferredFromLineItem(?string $transferredFromLineItem): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->transferredFromLineItem = $transferredFromLineItem;

        return $new;
    }

    public function getSplitFromLineItem(): ?string
    {
        return $this->splitFromLineItem;
    }

    public function withSplitFromLineItem(?string $splitFromLineItem): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->splitFromLineItem = $splitFromLineItem;

        return $new;
    }
}
