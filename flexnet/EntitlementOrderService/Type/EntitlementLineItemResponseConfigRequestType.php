<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementLineItemResponseConfigRequestType
{
    /**
     * @var bool|null
     */
    private $activationId;

    /**
     * @var bool|null
     */
    private $description;

    /**
     * @var bool|null
     */
    private $state;

    /**
     * @var bool|null
     */
    private $activatableItemType;

    /**
     * @var bool|null
     */
    private $orderId;

    /**
     * @var bool|null
     */
    private $orderLineNumber;

    /**
     * @var bool|null
     */
    private $entitlementId;

    /**
     * @var bool|null
     */
    private $allowPortalLogin;

    /**
     * @var bool|null
     */
    private $soldTo;

    /**
     * @var bool|null
     */
    private $soldToDisplayName;

    /**
     * @var bool|null
     */
    private $entitlementState;

    /**
     * @var bool|null
     */
    private $entitlementDescription;

    /**
     * @var bool|null
     */
    private $shipToEmail;

    /**
     * @var bool|null
     */
    private $shipToAddress;

    /**
     * @var bool|null
     */
    private $parentBulkEntitlementId;

    /**
     * @var bool|null
     */
    private $bulkEntSoldTo;

    /**
     * @var bool|null
     */
    private $bulkEntSoldToDisplayName;

    /**
     * @var bool|null
     */
    private $product;

    /**
     * @var bool|null
     */
    private $productDescription;

    /**
     * @var bool|null
     */
    private $partNumber;

    /**
     * @var bool|null
     */
    private $partNumberDescription;

    /**
     * @var bool|null
     */
    private $licenseTechnology;

    /**
     * @var bool|null
     */
    private $licenseModel;

    /**
     * @var bool|null
     */
    private $lineItemSupportAction;

    /**
     * @var bool|null
     */
    private $parentLineItem;

    /**
     * @var bool|null
     */
    private $startDate;

    /**
     * @var bool|null
     */
    private $startDateOption;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var bool|null
     */
    private $term;

    /**
     * @var bool|null
     */
    private $expirationDate;

    /**
     * @var bool|null
     */
    private $versionDate;

    /**
     * @var bool|null
     */
    private $versionDateAttributes;

    /**
     * @var bool|null
     */
    private $numberOfCopies;

    /**
     * @var bool|null
     */
    private $fulfilledAmount;

    /**
     * @var bool|null
     */
    private $numberOfRemainingCopies;

    /**
     * @var bool|null
     */
    private $isTrusted;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null
     */
    private $customAttributes;

    /**
     * @var bool|null
     */
    private $maintenance;

    /**
     * @var bool|null
     */
    private $maintenancePartNumber;

    /**
     * @var bool|null
     */
    private $FNPTimeZoneValue;

    /**
     * @var bool|null
     */
    private $createdOnDateTime;

    /**
     * @var bool|null
     */
    private $lastModifiedDateTime;

    /**
     * @var bool|null
     */
    private $lineItemAttributes;

    /**
     * @var bool|null
     */
    private $maintenanceLineItemAttributes;

    /**
     * @var bool|null
     */
    private $transferredFromLineItem;

    /**
     * @var bool|null
     */
    private $splitFromLineItem;

    /**
     * @var bool|null
     */
    private $fetchCreatedBy;

    /**
     * @var bool|null
     */
    private $fetchLastModifiedBy;

    /**
     * Constructor
     *
     * @param  bool|null  $activationId
     * @param  bool|null  $description
     * @param  bool|null  $state
     * @param  bool|null  $activatableItemType
     * @param  bool|null  $orderId
     * @param  bool|null  $orderLineNumber
     * @param  bool|null  $entitlementId
     * @param  bool|null  $allowPortalLogin
     * @param  bool|null  $soldTo
     * @param  bool|null  $soldToDisplayName
     * @param  bool|null  $entitlementState
     * @param  bool|null  $entitlementDescription
     * @param  bool|null  $shipToEmail
     * @param  bool|null  $shipToAddress
     * @param  bool|null  $parentBulkEntitlementId
     * @param  bool|null  $bulkEntSoldTo
     * @param  bool|null  $bulkEntSoldToDisplayName
     * @param  bool|null  $product
     * @param  bool|null  $productDescription
     * @param  bool|null  $partNumber
     * @param  bool|null  $partNumberDescription
     * @param  bool|null  $licenseTechnology
     * @param  bool|null  $licenseModel
     * @param  bool|null  $lineItemSupportAction
     * @param  bool|null  $parentLineItem
     * @param  bool|null  $startDate
     * @param  bool|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  bool|null  $term
     * @param  bool|null  $expirationDate
     * @param  bool|null  $versionDate
     * @param  bool|null  $versionDateAttributes
     * @param  bool|null  $numberOfCopies
     * @param  bool|null  $fulfilledAmount
     * @param  bool|null  $numberOfRemainingCopies
     * @param  bool|null  $isTrusted
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null  $customAttributes
     * @param  bool|null  $maintenance
     * @param  bool|null  $maintenancePartNumber
     * @param  bool|null  $FNPTimeZoneValue
     * @param  bool|null  $createdOnDateTime
     * @param  bool|null  $lastModifiedDateTime
     * @param  bool|null  $lineItemAttributes
     * @param  bool|null  $maintenanceLineItemAttributes
     * @param  bool|null  $transferredFromLineItem
     * @param  bool|null  $splitFromLineItem
     * @param  bool|null  $fetchCreatedBy
     * @param  bool|null  $fetchLastModifiedBy
     */
    public function __construct(bool|null $activationId = null, bool|null $description = null, bool|null $state = null, bool|null $activatableItemType = null, bool|null $orderId = null, bool|null $orderLineNumber = null, bool|null $entitlementId = null, bool|null $allowPortalLogin = null, bool|null $soldTo = null, bool|null $soldToDisplayName = null, bool|null $entitlementState = null, bool|null $entitlementDescription = null, bool|null $shipToEmail = null, bool|null $shipToAddress = null, bool|null $parentBulkEntitlementId = null, bool|null $bulkEntSoldTo = null, bool|null $bulkEntSoldToDisplayName = null, bool|null $product = null, bool|null $productDescription = null, bool|null $partNumber = null, bool|null $partNumberDescription = null, bool|null $licenseTechnology = null, bool|null $licenseModel = null, bool|null $lineItemSupportAction = null, bool|null $parentLineItem = null, bool|null $startDate = null, bool|null $startDateOption = null, bool|null $isPermanent = null, bool|null $term = null, bool|null $expirationDate = null, bool|null $versionDate = null, bool|null $versionDateAttributes = null, bool|null $numberOfCopies = null, bool|null $fulfilledAmount = null, bool|null $numberOfRemainingCopies = null, bool|null $isTrusted = null, CustomAttributeDescriptorDataType|null $customAttributes = null, bool|null $maintenance = null, bool|null $maintenancePartNumber = null, bool|null $FNPTimeZoneValue = null, bool|null $createdOnDateTime = null, bool|null $lastModifiedDateTime = null, bool|null $lineItemAttributes = null, bool|null $maintenanceLineItemAttributes = null, bool|null $transferredFromLineItem = null, bool|null $splitFromLineItem = null, bool|null $fetchCreatedBy = null, bool|null $fetchLastModifiedBy = null)
    {
        $this->activationId = $activationId;
        $this->description = $description;
        $this->state = $state;
        $this->activatableItemType = $activatableItemType;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->entitlementId = $entitlementId;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->soldTo = $soldTo;
        $this->soldToDisplayName = $soldToDisplayName;
        $this->entitlementState = $entitlementState;
        $this->entitlementDescription = $entitlementDescription;
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
        $this->maintenance = $maintenance;
        $this->maintenancePartNumber = $maintenancePartNumber;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->lineItemAttributes = $lineItemAttributes;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
        $this->transferredFromLineItem = $transferredFromLineItem;
        $this->splitFromLineItem = $splitFromLineItem;
        $this->fetchCreatedBy = $fetchCreatedBy;
        $this->fetchLastModifiedBy = $fetchLastModifiedBy;
    }

    /**
     * @param  bool|null  $activationId
     * @param  bool|null  $description
     * @param  bool|null  $state
     * @param  bool|null  $activatableItemType
     * @param  bool|null  $orderId
     * @param  bool|null  $orderLineNumber
     * @param  bool|null  $entitlementId
     * @param  bool|null  $allowPortalLogin
     * @param  bool|null  $soldTo
     * @param  bool|null  $soldToDisplayName
     * @param  bool|null  $entitlementState
     * @param  bool|null  $entitlementDescription
     * @param  bool|null  $shipToEmail
     * @param  bool|null  $shipToAddress
     * @param  bool|null  $parentBulkEntitlementId
     * @param  bool|null  $bulkEntSoldTo
     * @param  bool|null  $bulkEntSoldToDisplayName
     * @param  bool|null  $product
     * @param  bool|null  $productDescription
     * @param  bool|null  $partNumber
     * @param  bool|null  $partNumberDescription
     * @param  bool|null  $licenseTechnology
     * @param  bool|null  $licenseModel
     * @param  bool|null  $lineItemSupportAction
     * @param  bool|null  $parentLineItem
     * @param  bool|null  $startDate
     * @param  bool|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  bool|null  $term
     * @param  bool|null  $expirationDate
     * @param  bool|null  $versionDate
     * @param  bool|null  $versionDateAttributes
     * @param  bool|null  $numberOfCopies
     * @param  bool|null  $fulfilledAmount
     * @param  bool|null  $numberOfRemainingCopies
     * @param  bool|null  $isTrusted
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null  $customAttributes
     * @param  bool|null  $maintenance
     * @param  bool|null  $maintenancePartNumber
     * @param  bool|null  $FNPTimeZoneValue
     * @param  bool|null  $createdOnDateTime
     * @param  bool|null  $lastModifiedDateTime
     * @param  bool|null  $lineItemAttributes
     * @param  bool|null  $maintenanceLineItemAttributes
     * @param  bool|null  $transferredFromLineItem
     * @param  bool|null  $splitFromLineItem
     * @param  bool|null  $fetchCreatedBy
     * @param  bool|null  $fetchLastModifiedBy
     */
    public static function create(bool|null $activationId = null, bool|null $description = null, bool|null $state = null, bool|null $activatableItemType = null, bool|null $orderId = null, bool|null $orderLineNumber = null, bool|null $entitlementId = null, bool|null $allowPortalLogin = null, bool|null $soldTo = null, bool|null $soldToDisplayName = null, bool|null $entitlementState = null, bool|null $entitlementDescription = null, bool|null $shipToEmail = null, bool|null $shipToAddress = null, bool|null $parentBulkEntitlementId = null, bool|null $bulkEntSoldTo = null, bool|null $bulkEntSoldToDisplayName = null, bool|null $product = null, bool|null $productDescription = null, bool|null $partNumber = null, bool|null $partNumberDescription = null, bool|null $licenseTechnology = null, bool|null $licenseModel = null, bool|null $lineItemSupportAction = null, bool|null $parentLineItem = null, bool|null $startDate = null, bool|null $startDateOption = null, bool|null $isPermanent = null, bool|null $term = null, bool|null $expirationDate = null, bool|null $versionDate = null, bool|null $versionDateAttributes = null, bool|null $numberOfCopies = null, bool|null $fulfilledAmount = null, bool|null $numberOfRemainingCopies = null, bool|null $isTrusted = null, CustomAttributeDescriptorDataType|null $customAttributes = null, bool|null $maintenance = null, bool|null $maintenancePartNumber = null, bool|null $FNPTimeZoneValue = null, bool|null $createdOnDateTime = null, bool|null $lastModifiedDateTime = null, bool|null $lineItemAttributes = null, bool|null $maintenanceLineItemAttributes = null, bool|null $transferredFromLineItem = null, bool|null $splitFromLineItem = null, bool|null $fetchCreatedBy = null, bool|null $fetchLastModifiedBy = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): bool|null
    {
        return $this->activationId;
    }

    public function withActivationId(bool|null $activationId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getDescription(): bool|null
    {
        return $this->description;
    }

    public function withDescription(bool|null $description): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): bool|null
    {
        return $this->state;
    }

    public function withState(bool|null $state): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getActivatableItemType(): bool|null
    {
        return $this->activatableItemType;
    }

    public function withActivatableItemType(bool|null $activatableItemType): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    public function getOrderId(): bool|null
    {
        return $this->orderId;
    }

    public function withOrderId(bool|null $orderId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): bool|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(bool|null $orderLineNumber): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getEntitlementId(): bool|null
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(bool|null $entitlementId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(bool|null $allowPortalLogin): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getSoldTo(): bool|null
    {
        return $this->soldTo;
    }

    public function withSoldTo(bool|null $soldTo): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): bool|null
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(bool|null $soldToDisplayName): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getEntitlementState(): bool|null
    {
        return $this->entitlementState;
    }

    public function withEntitlementState(bool|null $entitlementState): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementState = $entitlementState;

        return $new;
    }

    public function getEntitlementDescription(): bool|null
    {
        return $this->entitlementDescription;
    }

    public function withEntitlementDescription(bool|null $entitlementDescription): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementDescription = $entitlementDescription;

        return $new;
    }

    public function getShipToEmail(): bool|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(bool|null $shipToEmail): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): bool|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(bool|null $shipToAddress): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getParentBulkEntitlementId(): bool|null
    {
        return $this->parentBulkEntitlementId;
    }

    public function withParentBulkEntitlementId(bool|null $parentBulkEntitlementId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    public function getBulkEntSoldTo(): bool|null
    {
        return $this->bulkEntSoldTo;
    }

    public function withBulkEntSoldTo(bool|null $bulkEntSoldTo): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->bulkEntSoldTo = $bulkEntSoldTo;

        return $new;
    }

    public function getBulkEntSoldToDisplayName(): bool|null
    {
        return $this->bulkEntSoldToDisplayName;
    }

    public function withBulkEntSoldToDisplayName(bool|null $bulkEntSoldToDisplayName): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->bulkEntSoldToDisplayName = $bulkEntSoldToDisplayName;

        return $new;
    }

    public function getProduct(): bool|null
    {
        return $this->product;
    }

    public function withProduct(bool|null $product): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): bool|null
    {
        return $this->productDescription;
    }

    public function withProductDescription(bool|null $productDescription): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): bool|null
    {
        return $this->partNumber;
    }

    public function withPartNumber(bool|null $partNumber): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): bool|null
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(bool|null $partNumberDescription): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseTechnology(): bool|null
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(bool|null $licenseTechnology): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModel(): bool|null
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(bool|null $licenseModel): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getLineItemSupportAction(): bool|null
    {
        return $this->lineItemSupportAction;
    }

    public function withLineItemSupportAction(bool|null $lineItemSupportAction): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineItemSupportAction = $lineItemSupportAction;

        return $new;
    }

    public function getParentLineItem(): bool|null
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(bool|null $parentLineItem): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    public function getStartDate(): bool|null
    {
        return $this->startDate;
    }

    public function withStartDate(bool|null $startDate): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): bool|null
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(bool|null $startDateOption): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): bool|null
    {
        return $this->term;
    }

    public function withTerm(bool|null $term): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): bool|null
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(bool|null $expirationDate): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): bool|null
    {
        return $this->versionDate;
    }

    public function withVersionDate(bool|null $versionDate): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): bool|null
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(bool|null $versionDateAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getNumberOfCopies(): bool|null
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(bool|null $numberOfCopies): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getFulfilledAmount(): bool|null
    {
        return $this->fulfilledAmount;
    }

    public function withFulfilledAmount(bool|null $fulfilledAmount): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfilledAmount = $fulfilledAmount;

        return $new;
    }

    public function getNumberOfRemainingCopies(): bool|null
    {
        return $this->numberOfRemainingCopies;
    }

    public function withNumberOfRemainingCopies(bool|null $numberOfRemainingCopies): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    public function getIsTrusted(): bool|null
    {
        return $this->isTrusted;
    }

    public function withIsTrusted(bool|null $isTrusted): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->isTrusted = $isTrusted;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null
     */
    public function getCustomAttributes(): CustomAttributeDescriptorDataType|null
    {
        return $this->customAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null  $customAttributes
     */
    public function withCustomAttributes(CustomAttributeDescriptorDataType|null $customAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getMaintenance(): bool|null
    {
        return $this->maintenance;
    }

    public function withMaintenance(bool|null $maintenance): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getMaintenancePartNumber(): bool|null
    {
        return $this->maintenancePartNumber;
    }

    public function withMaintenancePartNumber(bool|null $maintenancePartNumber): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenancePartNumber = $maintenancePartNumber;

        return $new;
    }

    public function getFNPTimeZoneValue(): bool|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(bool|null $FNPTimeZoneValue): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getCreatedOnDateTime(): bool|null
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(bool|null $createdOnDateTime): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): bool|null
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(bool|null $lastModifiedDateTime): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getLineItemAttributes(): bool|null
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(bool|null $lineItemAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): bool|null
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(bool|null $maintenanceLineItemAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }

    public function getTransferredFromLineItem(): bool|null
    {
        return $this->transferredFromLineItem;
    }

    public function withTransferredFromLineItem(bool|null $transferredFromLineItem): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->transferredFromLineItem = $transferredFromLineItem;

        return $new;
    }

    public function getSplitFromLineItem(): bool|null
    {
        return $this->splitFromLineItem;
    }

    public function withSplitFromLineItem(bool|null $splitFromLineItem): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->splitFromLineItem = $splitFromLineItem;

        return $new;
    }

    public function getFetchCreatedBy(): bool|null
    {
        return $this->fetchCreatedBy;
    }

    public function withFetchCreatedBy(bool|null $fetchCreatedBy): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchCreatedBy = $fetchCreatedBy;

        return $new;
    }

    public function getFetchLastModifiedBy(): bool|null
    {
        return $this->fetchLastModifiedBy;
    }

    public function withFetchLastModifiedBy(bool|null $fetchLastModifiedBy): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchLastModifiedBy = $fetchLastModifiedBy;

        return $new;
    }
}
