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

    /**
     * @return bool|null
     */
    public function getActivationId(): bool|null
    {
        return $this->activationId;
    }

    /**
     * @param  bool|null  $activationId
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withActivationId(bool|null $activationId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getDescription(): bool|null
    {
        return $this->description;
    }

    /**
     * @param  bool|null  $description
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withDescription(bool|null $description): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getState(): bool|null
    {
        return $this->state;
    }

    /**
     * @param  bool|null  $state
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withState(bool|null $state): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getActivatableItemType(): bool|null
    {
        return $this->activatableItemType;
    }

    /**
     * @param  bool|null  $activatableItemType
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withActivatableItemType(bool|null $activatableItemType): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOrderId(): bool|null
    {
        return $this->orderId;
    }

    /**
     * @param  bool|null  $orderId
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withOrderId(bool|null $orderId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOrderLineNumber(): bool|null
    {
        return $this->orderLineNumber;
    }

    /**
     * @param  bool|null  $orderLineNumber
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withOrderLineNumber(bool|null $orderLineNumber): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getEntitlementId(): bool|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  bool|null  $entitlementId
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withEntitlementId(bool|null $entitlementId): EntitlementLineItemResponseConfigRequestType
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
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withAllowPortalLogin(bool|null $allowPortalLogin): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getSoldTo(): bool|null
    {
        return $this->soldTo;
    }

    /**
     * @param  bool|null  $soldTo
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withSoldTo(bool|null $soldTo): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getSoldToDisplayName(): bool|null
    {
        return $this->soldToDisplayName;
    }

    /**
     * @param  bool|null  $soldToDisplayName
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withSoldToDisplayName(bool|null $soldToDisplayName): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getEntitlementState(): bool|null
    {
        return $this->entitlementState;
    }

    /**
     * @param  bool|null  $entitlementState
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withEntitlementState(bool|null $entitlementState): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementState = $entitlementState;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getEntitlementDescription(): bool|null
    {
        return $this->entitlementDescription;
    }

    /**
     * @param  bool|null  $entitlementDescription
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withEntitlementDescription(bool|null $entitlementDescription): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementDescription = $entitlementDescription;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getShipToEmail(): bool|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  bool|null  $shipToEmail
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withShipToEmail(bool|null $shipToEmail): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getShipToAddress(): bool|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  bool|null  $shipToAddress
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withShipToAddress(bool|null $shipToAddress): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getParentBulkEntitlementId(): bool|null
    {
        return $this->parentBulkEntitlementId;
    }

    /**
     * @param  bool|null  $parentBulkEntitlementId
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withParentBulkEntitlementId(bool|null $parentBulkEntitlementId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getBulkEntSoldTo(): bool|null
    {
        return $this->bulkEntSoldTo;
    }

    /**
     * @param  bool|null  $bulkEntSoldTo
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withBulkEntSoldTo(bool|null $bulkEntSoldTo): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->bulkEntSoldTo = $bulkEntSoldTo;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getBulkEntSoldToDisplayName(): bool|null
    {
        return $this->bulkEntSoldToDisplayName;
    }

    /**
     * @param  bool|null  $bulkEntSoldToDisplayName
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withBulkEntSoldToDisplayName(bool|null $bulkEntSoldToDisplayName): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->bulkEntSoldToDisplayName = $bulkEntSoldToDisplayName;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getProduct(): bool|null
    {
        return $this->product;
    }

    /**
     * @param  bool|null  $product
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withProduct(bool|null $product): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getProductDescription(): bool|null
    {
        return $this->productDescription;
    }

    /**
     * @param  bool|null  $productDescription
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withProductDescription(bool|null $productDescription): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getPartNumber(): bool|null
    {
        return $this->partNumber;
    }

    /**
     * @param  bool|null  $partNumber
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withPartNumber(bool|null $partNumber): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getPartNumberDescription(): bool|null
    {
        return $this->partNumberDescription;
    }

    /**
     * @param  bool|null  $partNumberDescription
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withPartNumberDescription(bool|null $partNumberDescription): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseTechnology(): bool|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  bool|null  $licenseTechnology
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withLicenseTechnology(bool|null $licenseTechnology): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseModel(): bool|null
    {
        return $this->licenseModel;
    }

    /**
     * @param  bool|null  $licenseModel
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withLicenseModel(bool|null $licenseModel): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLineItemSupportAction(): bool|null
    {
        return $this->lineItemSupportAction;
    }

    /**
     * @param  bool|null  $lineItemSupportAction
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withLineItemSupportAction(bool|null $lineItemSupportAction): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineItemSupportAction = $lineItemSupportAction;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getParentLineItem(): bool|null
    {
        return $this->parentLineItem;
    }

    /**
     * @param  bool|null  $parentLineItem
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withParentLineItem(bool|null $parentLineItem): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getStartDate(): bool|null
    {
        return $this->startDate;
    }

    /**
     * @param  bool|null  $startDate
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withStartDate(bool|null $startDate): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getStartDateOption(): bool|null
    {
        return $this->startDateOption;
    }

    /**
     * @param  bool|null  $startDateOption
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withStartDateOption(bool|null $startDateOption): EntitlementLineItemResponseConfigRequestType
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
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withIsPermanent(bool|null $isPermanent): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getTerm(): bool|null
    {
        return $this->term;
    }

    /**
     * @param  bool|null  $term
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withTerm(bool|null $term): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getExpirationDate(): bool|null
    {
        return $this->expirationDate;
    }

    /**
     * @param  bool|null  $expirationDate
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withExpirationDate(bool|null $expirationDate): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getVersionDate(): bool|null
    {
        return $this->versionDate;
    }

    /**
     * @param  bool|null  $versionDate
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withVersionDate(bool|null $versionDate): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getVersionDateAttributes(): bool|null
    {
        return $this->versionDateAttributes;
    }

    /**
     * @param  bool|null  $versionDateAttributes
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withVersionDateAttributes(bool|null $versionDateAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getNumberOfCopies(): bool|null
    {
        return $this->numberOfCopies;
    }

    /**
     * @param  bool|null  $numberOfCopies
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withNumberOfCopies(bool|null $numberOfCopies): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFulfilledAmount(): bool|null
    {
        return $this->fulfilledAmount;
    }

    /**
     * @param  bool|null  $fulfilledAmount
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withFulfilledAmount(bool|null $fulfilledAmount): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfilledAmount = $fulfilledAmount;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getNumberOfRemainingCopies(): bool|null
    {
        return $this->numberOfRemainingCopies;
    }

    /**
     * @param  bool|null  $numberOfRemainingCopies
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withNumberOfRemainingCopies(bool|null $numberOfRemainingCopies): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsTrusted(): bool|null
    {
        return $this->isTrusted;
    }

    /**
     * @param  bool|null  $isTrusted
     * @return EntitlementLineItemResponseConfigRequestType
     */
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
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withCustomAttributes(CustomAttributeDescriptorDataType|null $customAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getMaintenance(): bool|null
    {
        return $this->maintenance;
    }

    /**
     * @param  bool|null  $maintenance
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withMaintenance(bool|null $maintenance): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getMaintenancePartNumber(): bool|null
    {
        return $this->maintenancePartNumber;
    }

    /**
     * @param  bool|null  $maintenancePartNumber
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withMaintenancePartNumber(bool|null $maintenancePartNumber): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenancePartNumber = $maintenancePartNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFNPTimeZoneValue(): bool|null
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param  bool|null  $FNPTimeZoneValue
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withFNPTimeZoneValue(bool|null $FNPTimeZoneValue): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getCreatedOnDateTime(): bool|null
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param  bool|null  $createdOnDateTime
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withCreatedOnDateTime(bool|null $createdOnDateTime): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLastModifiedDateTime(): bool|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  bool|null  $lastModifiedDateTime
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withLastModifiedDateTime(bool|null $lastModifiedDateTime): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLineItemAttributes(): bool|null
    {
        return $this->lineItemAttributes;
    }

    /**
     * @param  bool|null  $lineItemAttributes
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withLineItemAttributes(bool|null $lineItemAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getMaintenanceLineItemAttributes(): bool|null
    {
        return $this->maintenanceLineItemAttributes;
    }

    /**
     * @param  bool|null  $maintenanceLineItemAttributes
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withMaintenanceLineItemAttributes(bool|null $maintenanceLineItemAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getTransferredFromLineItem(): bool|null
    {
        return $this->transferredFromLineItem;
    }

    /**
     * @param  bool|null  $transferredFromLineItem
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withTransferredFromLineItem(bool|null $transferredFromLineItem): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->transferredFromLineItem = $transferredFromLineItem;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getSplitFromLineItem(): bool|null
    {
        return $this->splitFromLineItem;
    }

    /**
     * @param  bool|null  $splitFromLineItem
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withSplitFromLineItem(bool|null $splitFromLineItem): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->splitFromLineItem = $splitFromLineItem;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFetchCreatedBy(): bool|null
    {
        return $this->fetchCreatedBy;
    }

    /**
     * @param  bool|null  $fetchCreatedBy
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withFetchCreatedBy(bool|null $fetchCreatedBy): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchCreatedBy = $fetchCreatedBy;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFetchLastModifiedBy(): bool|null
    {
        return $this->fetchLastModifiedBy;
    }

    /**
     * @param  bool|null  $fetchLastModifiedBy
     * @return EntitlementLineItemResponseConfigRequestType
     */
    public function withFetchLastModifiedBy(bool|null $fetchLastModifiedBy): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchLastModifiedBy = $fetchLastModifiedBy;

        return $new;
    }
}
