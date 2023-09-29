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
     */
    public function __construct(bool $activationId = null, bool $description = null, bool $state = null, bool $activatableItemType = null, bool $orderId = null, bool $orderLineNumber = null, bool $entitlementId = null, bool $allowPortalLogin = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $entitlementState = null, bool $entitlementDescription = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $parentBulkEntitlementId = null, bool $bulkEntSoldTo = null, bool $bulkEntSoldToDisplayName = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $lineItemSupportAction = null, bool $parentLineItem = null, bool $startDate = null, bool $startDateOption = null, bool $isPermanent = null, bool $term = null, bool $expirationDate = null, bool $versionDate = null, bool $versionDateAttributes = null, bool $numberOfCopies = null, bool $fulfilledAmount = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, CustomAttributeDescriptorDataType $customAttributes = null, bool $maintenance = null, bool $maintenancePartNumber = null, bool $FNPTimeZoneValue = null, bool $createdOnDateTime = null, bool $lastModifiedDateTime = null, bool $lineItemAttributes = null, bool $maintenanceLineItemAttributes = null, bool $transferredFromLineItem = null, bool $splitFromLineItem = null, bool $fetchCreatedBy = null, bool $fetchLastModifiedBy = null)
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

    public static function create(bool $activationId = null, bool $description = null, bool $state = null, bool $activatableItemType = null, bool $orderId = null, bool $orderLineNumber = null, bool $entitlementId = null, bool $allowPortalLogin = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $entitlementState = null, bool $entitlementDescription = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $parentBulkEntitlementId = null, bool $bulkEntSoldTo = null, bool $bulkEntSoldToDisplayName = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $lineItemSupportAction = null, bool $parentLineItem = null, bool $startDate = null, bool $startDateOption = null, bool $isPermanent = null, bool $term = null, bool $expirationDate = null, bool $versionDate = null, bool $versionDateAttributes = null, bool $numberOfCopies = null, bool $fulfilledAmount = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, CustomAttributeDescriptorDataType $customAttributes = null, bool $maintenance = null, bool $maintenancePartNumber = null, bool $FNPTimeZoneValue = null, bool $createdOnDateTime = null, bool $lastModifiedDateTime = null, bool $lineItemAttributes = null, bool $maintenanceLineItemAttributes = null, bool $transferredFromLineItem = null, bool $splitFromLineItem = null, bool $fetchCreatedBy = null, bool $fetchLastModifiedBy = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): ?bool
    {
        return $this->activationId;
    }

    public function withActivationId(?bool $activationId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getDescription(): ?bool
    {
        return $this->description;
    }

    public function withDescription(?bool $description): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): ?bool
    {
        return $this->state;
    }

    public function withState(?bool $state): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getActivatableItemType(): ?bool
    {
        return $this->activatableItemType;
    }

    public function withActivatableItemType(?bool $activatableItemType): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->activatableItemType = $activatableItemType;

        return $new;
    }

    public function getOrderId(): ?bool
    {
        return $this->orderId;
    }

    public function withOrderId(?bool $orderId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?bool
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?bool $orderLineNumber): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getEntitlementId(): ?bool
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?bool $entitlementId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getSoldTo(): ?bool
    {
        return $this->soldTo;
    }

    public function withSoldTo(?bool $soldTo): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): ?bool
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(?bool $soldToDisplayName): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getEntitlementState(): ?bool
    {
        return $this->entitlementState;
    }

    public function withEntitlementState(?bool $entitlementState): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementState = $entitlementState;

        return $new;
    }

    public function getEntitlementDescription(): ?bool
    {
        return $this->entitlementDescription;
    }

    public function withEntitlementDescription(?bool $entitlementDescription): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementDescription = $entitlementDescription;

        return $new;
    }

    public function getShipToEmail(): ?bool
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?bool $shipToEmail): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?bool
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?bool $shipToAddress): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getParentBulkEntitlementId(): ?bool
    {
        return $this->parentBulkEntitlementId;
    }

    public function withParentBulkEntitlementId(?bool $parentBulkEntitlementId): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $new;
    }

    public function getBulkEntSoldTo(): ?bool
    {
        return $this->bulkEntSoldTo;
    }

    public function withBulkEntSoldTo(?bool $bulkEntSoldTo): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->bulkEntSoldTo = $bulkEntSoldTo;

        return $new;
    }

    public function getBulkEntSoldToDisplayName(): ?bool
    {
        return $this->bulkEntSoldToDisplayName;
    }

    public function withBulkEntSoldToDisplayName(?bool $bulkEntSoldToDisplayName): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->bulkEntSoldToDisplayName = $bulkEntSoldToDisplayName;

        return $new;
    }

    public function getProduct(): ?bool
    {
        return $this->product;
    }

    public function withProduct(?bool $product): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): ?bool
    {
        return $this->productDescription;
    }

    public function withProductDescription(?bool $productDescription): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): ?bool
    {
        return $this->partNumber;
    }

    public function withPartNumber(?bool $partNumber): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): ?bool
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(?bool $partNumberDescription): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseTechnology(): ?bool
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?bool $licenseTechnology): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseModel(): ?bool
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?bool $licenseModel): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getLineItemSupportAction(): ?bool
    {
        return $this->lineItemSupportAction;
    }

    public function withLineItemSupportAction(?bool $lineItemSupportAction): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineItemSupportAction = $lineItemSupportAction;

        return $new;
    }

    public function getParentLineItem(): ?bool
    {
        return $this->parentLineItem;
    }

    public function withParentLineItem(?bool $parentLineItem): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->parentLineItem = $parentLineItem;

        return $new;
    }

    public function getStartDate(): ?bool
    {
        return $this->startDate;
    }

    public function withStartDate(?bool $startDate): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): ?bool
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?bool $startDateOption): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): ?bool
    {
        return $this->term;
    }

    public function withTerm(?bool $term): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?bool
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?bool $expirationDate): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?bool
    {
        return $this->versionDate;
    }

    public function withVersionDate(?bool $versionDate): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?bool
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?bool $versionDateAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getNumberOfCopies(): ?bool
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?bool $numberOfCopies): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getFulfilledAmount(): ?bool
    {
        return $this->fulfilledAmount;
    }

    public function withFulfilledAmount(?bool $fulfilledAmount): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fulfilledAmount = $fulfilledAmount;

        return $new;
    }

    public function getNumberOfRemainingCopies(): ?bool
    {
        return $this->numberOfRemainingCopies;
    }

    public function withNumberOfRemainingCopies(?bool $numberOfRemainingCopies): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $new;
    }

    public function getIsTrusted(): ?bool
    {
        return $this->isTrusted;
    }

    public function withIsTrusted(?bool $isTrusted): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->isTrusted = $isTrusted;

        return $new;
    }

    public function getCustomAttributes(): ?CustomAttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?CustomAttributeDescriptorDataType $customAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getMaintenance(): ?bool
    {
        return $this->maintenance;
    }

    public function withMaintenance(?bool $maintenance): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getMaintenancePartNumber(): ?bool
    {
        return $this->maintenancePartNumber;
    }

    public function withMaintenancePartNumber(?bool $maintenancePartNumber): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenancePartNumber = $maintenancePartNumber;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?bool
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?bool $FNPTimeZoneValue): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getCreatedOnDateTime(): ?bool
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(?bool $createdOnDateTime): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): ?bool
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?bool $lastModifiedDateTime): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getLineItemAttributes(): ?bool
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(?bool $lineItemAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): ?bool
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(?bool $maintenanceLineItemAttributes): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }

    public function getTransferredFromLineItem(): ?bool
    {
        return $this->transferredFromLineItem;
    }

    public function withTransferredFromLineItem(?bool $transferredFromLineItem): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->transferredFromLineItem = $transferredFromLineItem;

        return $new;
    }

    public function getSplitFromLineItem(): ?bool
    {
        return $this->splitFromLineItem;
    }

    public function withSplitFromLineItem(?bool $splitFromLineItem): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->splitFromLineItem = $splitFromLineItem;

        return $new;
    }

    public function getFetchCreatedBy(): ?bool
    {
        return $this->fetchCreatedBy;
    }

    public function withFetchCreatedBy(?bool $fetchCreatedBy): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchCreatedBy = $fetchCreatedBy;

        return $new;
    }

    public function getFetchLastModifiedBy(): ?bool
    {
        return $this->fetchLastModifiedBy;
    }

    public function withFetchLastModifiedBy(?bool $fetchLastModifiedBy): EntitlementLineItemResponseConfigRequestType
    {
        $new = clone $this;
        $new->fetchLastModifiedBy = $fetchLastModifiedBy;

        return $new;
    }
}
