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
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $activationId
     * @param  string|null  $description
     * @param  string|null  $state
     * @param  string|null  $activatableItemType
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null  $soldTo
     * @param  string|null  $soldToDisplayName
     * @param  string|null  $entitlementState
     * @param  string|null  $entitlementDescription
     * @param  bool|null  $allowPortalLogin
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $parentBulkEntitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null  $bulkEntSoldTo
     * @param  string|null  $bulkEntSoldToDisplayName
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  string|null  $productDescription
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  string|null  $partNumberDescription
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  string|null  $lineItemSupportAction
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     * @param  \DateTimeInterface|null  $startDate
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  int|null  $numberOfCopies
     * @param  int|null  $fulfilledAmount
     * @param  int|null  $numberOfRemainingCopies
     * @param  bool|null  $isTrusted
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType>|null  $maintenanceLineItems
     * @param  string|null  $FNPTimeZoneValue
     * @param  \DateTimeInterface|null  $createdOnDateTime
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @param  string|null  $createdBy
     * @param  string|null  $lastModifiedBy
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $lineItemAttributes
     * @param  string|null  $transferredFromLineItem
     * @param  string|null  $splitFromLineItem
     */
    public function __construct(EntitlementLineItemIdentifierType|null $activationId = null, string|null $description = null, string|null $state = null, string|null $activatableItemType = null, string|null $orderId = null, string|null $orderLineNumber = null, EntitlementIdentifierType|null $entitlementId = null, AccountIdentifierType|null $soldTo = null, string|null $soldToDisplayName = null, string|null $entitlementState = null, string|null $entitlementDescription = null, bool|null $allowPortalLogin = null, string|null $shipToEmail = null, string|null $shipToAddress = null, EntitlementIdentifierType|null $parentBulkEntitlementId = null, AccountIdentifierType|null $bulkEntSoldTo = null, string|null $bulkEntSoldToDisplayName = null, ProductIdentifierType|null $product = null, string|null $productDescription = null, PartNumberIdentifierType|null $partNumber = null, string|null $partNumberDescription = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, string|null $lineItemSupportAction = null, EntitlementLineItemIdentifierType|null $parentLineItem = null, \DateTimeInterface|null $startDate = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, int|null $numberOfCopies = null, int|null $fulfilledAmount = null, int|null $numberOfRemainingCopies = null, bool|null $isTrusted = null, AttributeDescriptorDataType|null $customAttributes = null, EntitledProductDataListType|null $entitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, MaintenanceLineItemPropertiesType|array|null $maintenanceLineItems = null, string|null $FNPTimeZoneValue = null, \DateTimeInterface|null $createdOnDateTime = null, \DateTimeInterface|null $lastModifiedDateTime = null, string|null $createdBy = null, string|null $lastModifiedBy = null, AttributeDescriptorDataType|null $lineItemAttributes = null, string|null $transferredFromLineItem = null, string|null $splitFromLineItem = null)
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
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $activationId
     * @param  string|null  $description
     * @param  string|null  $state
     * @param  string|null  $activatableItemType
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null  $soldTo
     * @param  string|null  $soldToDisplayName
     * @param  string|null  $entitlementState
     * @param  string|null  $entitlementDescription
     * @param  bool|null  $allowPortalLogin
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $parentBulkEntitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\AccountIdentifierType|null  $bulkEntSoldTo
     * @param  string|null  $bulkEntSoldToDisplayName
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  string|null  $productDescription
     * @param  \Flexnet\EntitlementOrderService\Type\PartNumberIdentifierType|null  $partNumber
     * @param  string|null  $partNumberDescription
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  string|null  $lineItemSupportAction
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $parentLineItem
     * @param  \DateTimeInterface|null  $startDate
     * @param  string|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  int|null  $numberOfCopies
     * @param  int|null  $fulfilledAmount
     * @param  int|null  $numberOfRemainingCopies
     * @param  bool|null  $isTrusted
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType|null  $entitledProducts
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemPropertiesType>|null  $maintenanceLineItems
     * @param  string|null  $FNPTimeZoneValue
     * @param  \DateTimeInterface|null  $createdOnDateTime
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @param  string|null  $createdBy
     * @param  string|null  $lastModifiedBy
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $lineItemAttributes
     * @param  string|null  $transferredFromLineItem
     * @param  string|null  $splitFromLineItem
     */
    public static function create(EntitlementLineItemIdentifierType|null $activationId = null, string|null $description = null, string|null $state = null, string|null $activatableItemType = null, string|null $orderId = null, string|null $orderLineNumber = null, EntitlementIdentifierType|null $entitlementId = null, AccountIdentifierType|null $soldTo = null, string|null $soldToDisplayName = null, string|null $entitlementState = null, string|null $entitlementDescription = null, bool|null $allowPortalLogin = null, string|null $shipToEmail = null, string|null $shipToAddress = null, EntitlementIdentifierType|null $parentBulkEntitlementId = null, AccountIdentifierType|null $bulkEntSoldTo = null, string|null $bulkEntSoldToDisplayName = null, ProductIdentifierType|null $product = null, string|null $productDescription = null, PartNumberIdentifierType|null $partNumber = null, string|null $partNumberDescription = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, string|null $lineItemSupportAction = null, EntitlementLineItemIdentifierType|null $parentLineItem = null, \DateTimeInterface|null $startDate = null, string|null $startDateOption = null, bool|null $isPermanent = null, DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, int|null $numberOfCopies = null, int|null $fulfilledAmount = null, int|null $numberOfRemainingCopies = null, bool|null $isTrusted = null, AttributeDescriptorDataType|null $customAttributes = null, EntitledProductDataListType|null $entitledProducts = null, ChannelPartnerDataListType|null $channelPartners = null, MaintenanceLineItemPropertiesType|array|null $maintenanceLineItems = null, string|null $FNPTimeZoneValue = null, \DateTimeInterface|null $createdOnDateTime = null, \DateTimeInterface|null $lastModifiedDateTime = null, string|null $createdBy = null, string|null $lastModifiedBy = null, AttributeDescriptorDataType|null $lineItemAttributes = null, string|null $transferredFromLineItem = null, string|null $splitFromLineItem = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): EntitlementLineItemIdentifierType|null
    {
        return $this->activationId;
    }

    public function withActivationId(EntitlementLineItemIdentifierType|null $activationId): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string|null
    {
        return $this->state;
    }

    public function withState(string|null $state): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getActivatableItemType(): string|null
    {
        return $this->activatableItemType;
    }

    public function withActivatableItemType(string|null $activatableItemType): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    public function getOrderId(): string|null
    {
        return $this->orderId;
    }

    public function withOrderId(string|null $orderId): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): string|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(string|null $orderLineNumber): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getEntitlementId(): EntitlementIdentifierType|null
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(EntitlementIdentifierType|null $entitlementId): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getSoldTo(): AccountIdentifierType|null
    {
        return $this->soldTo;
    }

    public function withSoldTo(AccountIdentifierType|null $soldTo): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): string|null
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(string|null $soldToDisplayName): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getEntitlementState(): string|null
    {
        return $this->entitlementState;
    }

    public function withEntitlementState(string|null $entitlementState): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitlementState = $entitlementState;

        return $new;
    }

    public function getEntitlementDescription(): string|null
    {
        return $this->entitlementDescription;
    }

    public function withEntitlementDescription(string|null $entitlementDescription): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitlementDescription = $entitlementDescription;

        return $new;
    }

    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(bool|null $allowPortalLogin): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(string|null $shipToAddress): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getParentBulkEntitlementId(): EntitlementIdentifierType|null
    {
        return $this->parentBulkEntitlementId;
    }

    public function withParentBulkEntitlementId(EntitlementIdentifierType|null $parentBulkEntitlementId): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    public function getBulkEntSoldTo(): AccountIdentifierType|null
    {
        return $this->bulkEntSoldTo;
    }

    public function withBulkEntSoldTo(AccountIdentifierType|null $bulkEntSoldTo): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->bulkEntSoldTo = $bulkEntSoldTo;

        return $new;
    }

    public function getBulkEntSoldToDisplayName(): string|null
    {
        return $this->bulkEntSoldToDisplayName;
    }

    public function withBulkEntSoldToDisplayName(string|null $bulkEntSoldToDisplayName): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->bulkEntSoldToDisplayName = $bulkEntSoldToDisplayName;

        return $new;
    }

    public function getProduct(): ProductIdentifierType|null
    {
        return $this->product;
    }

    public function withProduct(ProductIdentifierType|null $product): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): string|null
    {
        return $this->productDescription;
    }

    public function withProductDescription(string|null $productDescription): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): PartNumberIdentifierType|null
    {
        return $this->partNumber;
    }

    public function withPartNumber(PartNumberIdentifierType|null $partNumber): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): string|null
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(string|null $partNumberDescription): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseTechnology(): LicenseTechnologyIdentifierType|null
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(LicenseTechnologyIdentifierType|null $licenseTechnology): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModel(): LicenseModelIdentifierType|null
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(LicenseModelIdentifierType|null $licenseModel): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): LicenseModelIdentifierType|null
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(LicenseModelIdentifierType|null $alternateLicenseModel1): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): LicenseModelIdentifierType|null
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(LicenseModelIdentifierType|null $alternateLicenseModel2): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLineItemSupportAction(): string|null
    {
        return $this->lineItemSupportAction;
    }

    public function withLineItemSupportAction(string|null $lineItemSupportAction): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->lineItemSupportAction = $lineItemSupportAction;

        return $new;
    }

    public function getParentLineItem(): EntitlementLineItemIdentifierType|null
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(EntitlementLineItemIdentifierType|null $parentLineItem): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface|null $startDate): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): string|null
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(string|null $startDateOption): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): DurationType|null
    {
        return $this->term;
    }

    public function withTerm(DurationType|null $term): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(\DateTimeInterface|null $expirationDate): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    public function withVersionDate(\DateTimeInterface|null $versionDate): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): VersionDateAttributesType|null
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(VersionDateAttributesType|null $versionDateAttributes): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getNumberOfCopies(): int|null
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int|null $numberOfCopies): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getFulfilledAmount(): int|null
    {
        return $this->fulfilledAmount;
    }

    public function withFulfilledAmount(int|null $fulfilledAmount): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->fulfilledAmount = $fulfilledAmount;

        return $new;
    }

    public function getNumberOfRemainingCopies(): int|null
    {
        return $this->numberOfRemainingCopies;
    }

    public function withNumberOfRemainingCopies(int|null $numberOfRemainingCopies): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    public function getIsTrusted(): bool|null
    {
        return $this->isTrusted;
    }

    public function withIsTrusted(bool|null $isTrusted): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->isTrusted = $isTrusted;

        return $new;
    }

    public function getCustomAttributes(): AttributeDescriptorDataType|null
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(AttributeDescriptorDataType|null $customAttributes): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getEntitledProducts(): EntitledProductDataListType|null
    {
        return $this->entitledProducts;
    }

    public function withEntitledProducts(EntitledProductDataListType|null $entitledProducts): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getChannelPartners(): ChannelPartnerDataListType|null
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getMaintenanceLineItems(): MaintenanceLineItemPropertiesType|array|null
    {
        return $this->maintenanceLineItems;
    }

    public function withMaintenanceLineItems(MaintenanceLineItemPropertiesType|array|null $maintenanceLineItems): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->maintenanceLineItems = $maintenanceLineItems;

        return $new;
    }

    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getCreatedOnDateTime(): \DateTimeInterface|null
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(\DateTimeInterface|null $createdOnDateTime): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): \DateTimeInterface|null
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(\DateTimeInterface|null $lastModifiedDateTime): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getCreatedBy(): string|null
    {
        return $this->createdBy;
    }

    public function withCreatedBy(string|null $createdBy): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->createdBy = $createdBy;

        return $new;
    }

    public function getLastModifiedBy(): string|null
    {
        return $this->lastModifiedBy;
    }

    public function withLastModifiedBy(string|null $lastModifiedBy): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->lastModifiedBy = $lastModifiedBy;

        return $new;
    }

    public function getLineItemAttributes(): AttributeDescriptorDataType|null
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(AttributeDescriptorDataType|null $lineItemAttributes): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }

    public function getTransferredFromLineItem(): string|null
    {
        return $this->transferredFromLineItem;
    }

    public function withTransferredFromLineItem(string|null $transferredFromLineItem): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->transferredFromLineItem = $transferredFromLineItem;

        return $new;
    }

    public function getSplitFromLineItem(): string|null
    {
        return $this->splitFromLineItem;
    }

    public function withSplitFromLineItem(string|null $splitFromLineItem): EntitlementLineItemPropertiesType
    {
        $new = clone $this;
        $new->splitFromLineItem = $splitFromLineItem;

        return $new;
    }
}
