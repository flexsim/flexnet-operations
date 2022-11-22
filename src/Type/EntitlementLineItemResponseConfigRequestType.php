<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementLineItemResponseConfigRequestType extends FlexnetType
{
    /**
     * @var bool
     */
    protected $activationId;

    /**
     * @var bool
     */
    protected $description;

    /**
     * @var bool
     */
    protected $state;

    /**
     * @var bool
     */
    protected $activatableItemType;

    /**
     * @var bool
     */
    protected $orderId;

    /**
     * @var bool
     */
    protected $orderLineNumber;

    /**
     * @var bool
     */
    protected $entitlementId;

    /**
     * @var bool
     */
    protected $allowPortalLogin;

    /**
     * @var bool
     */
    protected $soldTo;

    /**
     * @var bool
     */
    protected $soldToDisplayName;

    /**
     * @var bool
     */
    protected $entitlementState;

    /**
     * @var bool
     */
    protected $entitlementDescription;

    /**
     * @var bool
     */
    protected $shipToEmail;

    /**
     * @var bool
     */
    protected $shipToAddress;

    /**
     * @var bool
     */
    protected $parentBulkEntitlementId;

    /**
     * @var bool
     */
    protected $bulkEntSoldTo;

    /**
     * @var bool
     */
    protected $bulkEntSoldToDisplayName;

    /**
     * @var bool
     */
    protected $product;

    /**
     * @var bool
     */
    protected $productDescription;

    /**
     * @var bool
     */
    protected $partNumber;

    /**
     * @var bool
     */
    protected $partNumberDescription;

    /**
     * @var bool
     */
    protected $licenseTechnology;

    /**
     * @var bool
     */
    protected $licenseModel;

    /**
     * @var bool
     */
    protected $lineItemSupportAction;

    /**
     * @var bool
     */
    protected $parentLineItem;

    /**
     * @var bool
     */
    protected $startDate;

    /**
     * @var bool
     */
    protected $startDateOption;

    /**
     * @var bool
     */
    protected $isPermanent;

    /**
     * @var bool
     */
    protected $term;

    /**
     * @var bool
     */
    protected $expirationDate;

    /**
     * @var bool
     */
    protected $versionDate;

    /**
     * @var bool
     */
    protected $versionDateAttributes;

    /**
     * @var bool
     */
    protected $numberOfCopies;

    /**
     * @var bool
     */
    protected $fulfilledAmount;

    /**
     * @var bool
     */
    protected $numberOfRemainingCopies;

    /**
     * @var bool
     */
    protected $isTrusted;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * @var bool
     */
    protected $maintenance;

    /**
     * @var bool
     */
    protected $maintenancePartNumber;

    /**
     * @var bool
     */
    protected $FNPTimeZoneValue;

    /**
     * @var bool
     */
    protected $createdOnDateTime;

    /**
     * @var bool
     */
    protected $lastModifiedDateTime;

    /**
     * @var bool
     */
    protected $lineItemAttributes;

    /**
     * @var bool
     */
    protected $maintenanceLineItemAttributes;

    /**
     * @var bool
     */
    protected $transferredFromLineItem;

    /**
     * @var bool
     */
    protected $splitFromLineItem;

    /**
     * Constructor
     *
     * @param  bool  $activationId
     * @param  bool  $description
     * @param  bool  $state
     * @param  bool  $activatableItemType
     * @param  bool  $orderId
     * @param  bool  $orderLineNumber
     * @param  bool  $entitlementId
     * @param  bool  $allowPortalLogin
     * @param  bool  $soldTo
     * @param  bool  $soldToDisplayName
     * @param  bool  $entitlementState
     * @param  bool  $entitlementDescription
     * @param  bool  $shipToEmail
     * @param  bool  $shipToAddress
     * @param  bool  $parentBulkEntitlementId
     * @param  bool  $bulkEntSoldTo
     * @param  bool  $bulkEntSoldToDisplayName
     * @param  bool  $product
     * @param  bool  $productDescription
     * @param  bool  $partNumber
     * @param  bool  $partNumberDescription
     * @param  bool  $licenseTechnology
     * @param  bool  $licenseModel
     * @param  bool  $lineItemSupportAction
     * @param  bool  $parentLineItem
     * @param  bool  $startDate
     * @param  bool  $startDateOption
     * @param  bool  $isPermanent
     * @param  bool  $term
     * @param  bool  $expirationDate
     * @param  bool  $versionDate
     * @param  bool  $versionDateAttributes
     * @param  bool  $numberOfCopies
     * @param  bool  $fulfilledAmount
     * @param  bool  $numberOfRemainingCopies
     * @param  bool  $isTrusted
     * @param  \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType  $customAttributes
     * @param  bool  $maintenance
     * @param  bool  $maintenancePartNumber
     * @param  bool  $FNPTimeZoneValue
     * @param  bool  $createdOnDateTime
     * @param  bool  $lastModifiedDateTime
     * @param  bool  $lineItemAttributes
     * @param  bool  $maintenanceLineItemAttributes
     * @param  bool  $transferredFromLineItem
     * @param  bool  $splitFromLineItem
     */
    public function __construct(bool $activationId = null, bool $description = null, bool $state = null, bool $activatableItemType = null, bool $orderId = null, bool $orderLineNumber = null, bool $entitlementId = null, bool $allowPortalLogin = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $entitlementState = null, bool $entitlementDescription = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $parentBulkEntitlementId = null, bool $bulkEntSoldTo = null, bool $bulkEntSoldToDisplayName = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $lineItemSupportAction = null, bool $parentLineItem = null, bool $startDate = null, bool $startDateOption = null, bool $isPermanent = null, bool $term = null, bool $expirationDate = null, bool $versionDate = null, bool $versionDateAttributes = null, bool $numberOfCopies = null, bool $fulfilledAmount = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, CustomAttributeDescriptorDataType $customAttributes = null, bool $maintenance = null, bool $maintenancePartNumber = null, bool $FNPTimeZoneValue = null, bool $createdOnDateTime = null, bool $lastModifiedDateTime = null, bool $lineItemAttributes = null, bool $maintenanceLineItemAttributes = null, bool $transferredFromLineItem = null, bool $splitFromLineItem = null)
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
    }

    /**
     * create a new instance of this class
     *
     * @param  bool  $activationId
     * @param  bool  $description
     * @param  bool  $state
     * @param  bool  $activatableItemType
     * @param  bool  $orderId
     * @param  bool  $orderLineNumber
     * @param  bool  $entitlementId
     * @param  bool  $allowPortalLogin
     * @param  bool  $soldTo
     * @param  bool  $soldToDisplayName
     * @param  bool  $entitlementState
     * @param  bool  $entitlementDescription
     * @param  bool  $shipToEmail
     * @param  bool  $shipToAddress
     * @param  bool  $parentBulkEntitlementId
     * @param  bool  $bulkEntSoldTo
     * @param  bool  $bulkEntSoldToDisplayName
     * @param  bool  $product
     * @param  bool  $productDescription
     * @param  bool  $partNumber
     * @param  bool  $partNumberDescription
     * @param  bool  $licenseTechnology
     * @param  bool  $licenseModel
     * @param  bool  $lineItemSupportAction
     * @param  bool  $parentLineItem
     * @param  bool  $startDate
     * @param  bool  $startDateOption
     * @param  bool  $isPermanent
     * @param  bool  $term
     * @param  bool  $expirationDate
     * @param  bool  $versionDate
     * @param  bool  $versionDateAttributes
     * @param  bool  $numberOfCopies
     * @param  bool  $fulfilledAmount
     * @param  bool  $numberOfRemainingCopies
     * @param  bool  $isTrusted
     * @param  \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType  $customAttributes
     * @param  bool  $maintenance
     * @param  bool  $maintenancePartNumber
     * @param  bool  $FNPTimeZoneValue
     * @param  bool  $createdOnDateTime
     * @param  bool  $lastModifiedDateTime
     * @param  bool  $lineItemAttributes
     * @param  bool  $maintenanceLineItemAttributes
     * @param  bool  $transferredFromLineItem
     * @param  bool  $splitFromLineItem
     */
    public static function create(bool $activationId = null, bool $description = null, bool $state = null, bool $activatableItemType = null, bool $orderId = null, bool $orderLineNumber = null, bool $entitlementId = null, bool $allowPortalLogin = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $entitlementState = null, bool $entitlementDescription = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $parentBulkEntitlementId = null, bool $bulkEntSoldTo = null, bool $bulkEntSoldToDisplayName = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $lineItemSupportAction = null, bool $parentLineItem = null, bool $startDate = null, bool $startDateOption = null, bool $isPermanent = null, bool $term = null, bool $expirationDate = null, bool $versionDate = null, bool $versionDateAttributes = null, bool $numberOfCopies = null, bool $fulfilledAmount = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, CustomAttributeDescriptorDataType $customAttributes = null, bool $maintenance = null, bool $maintenancePartNumber = null, bool $FNPTimeZoneValue = null, bool $createdOnDateTime = null, bool $lastModifiedDateTime = null, bool $lineItemAttributes = null, bool $maintenanceLineItemAttributes = null, bool $transferredFromLineItem = null, bool $splitFromLineItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param  bool  $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param  bool  $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return bool
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param  bool  $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return bool
     */
    public function getActivatableItemType()
    {
        return $this->activatableItemType;
    }

    /**
     * @param  bool  $activatableItemType
     * @return $this
     */
    public function setActivatableItemType($activatableItemType)
    {
        $this->activatableItemType = $activatableItemType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param  bool  $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }

    /**
     * @param  bool  $orderLineNumber
     * @return $this
     */
    public function setOrderLineNumber($orderLineNumber)
    {
        $this->orderLineNumber = $orderLineNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param  bool  $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowPortalLogin()
    {
        return $this->allowPortalLogin;
    }

    /**
     * @param  bool  $allowPortalLogin
     * @return $this
     */
    public function setAllowPortalLogin($allowPortalLogin)
    {
        $this->allowPortalLogin = $allowPortalLogin;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param  bool  $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSoldToDisplayName()
    {
        return $this->soldToDisplayName;
    }

    /**
     * @param  bool  $soldToDisplayName
     * @return $this
     */
    public function setSoldToDisplayName($soldToDisplayName)
    {
        $this->soldToDisplayName = $soldToDisplayName;

        return $this;
    }

    /**
     * @return bool
     */
    public function getEntitlementState()
    {
        return $this->entitlementState;
    }

    /**
     * @param  bool  $entitlementState
     * @return $this
     */
    public function setEntitlementState($entitlementState)
    {
        $this->entitlementState = $entitlementState;

        return $this;
    }

    /**
     * @return bool
     */
    public function getEntitlementDescription()
    {
        return $this->entitlementDescription;
    }

    /**
     * @param  bool  $entitlementDescription
     * @return $this
     */
    public function setEntitlementDescription($entitlementDescription)
    {
        $this->entitlementDescription = $entitlementDescription;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param  bool  $shipToEmail
     * @return $this
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param  bool  $shipToAddress
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;

        return $this;
    }

    /**
     * @return bool
     */
    public function getParentBulkEntitlementId()
    {
        return $this->parentBulkEntitlementId;
    }

    /**
     * @param  bool  $parentBulkEntitlementId
     * @return $this
     */
    public function setParentBulkEntitlementId($parentBulkEntitlementId)
    {
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBulkEntSoldTo()
    {
        return $this->bulkEntSoldTo;
    }

    /**
     * @param  bool  $bulkEntSoldTo
     * @return $this
     */
    public function setBulkEntSoldTo($bulkEntSoldTo)
    {
        $this->bulkEntSoldTo = $bulkEntSoldTo;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBulkEntSoldToDisplayName()
    {
        return $this->bulkEntSoldToDisplayName;
    }

    /**
     * @param  bool  $bulkEntSoldToDisplayName
     * @return $this
     */
    public function setBulkEntSoldToDisplayName($bulkEntSoldToDisplayName)
    {
        $this->bulkEntSoldToDisplayName = $bulkEntSoldToDisplayName;

        return $this;
    }

    /**
     * @return bool
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param  bool  $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return bool
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param  bool  $productDescription
     * @return $this
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param  bool  $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPartNumberDescription()
    {
        return $this->partNumberDescription;
    }

    /**
     * @param  bool  $partNumberDescription
     * @return $this
     */
    public function setPartNumberDescription($partNumberDescription)
    {
        $this->partNumberDescription = $partNumberDescription;

        return $this;
    }

    /**
     * @return bool
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  bool  $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;

        return $this;
    }

    /**
     * @return bool
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param  bool  $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;

        return $this;
    }

    /**
     * @return bool
     */
    public function getLineItemSupportAction()
    {
        return $this->lineItemSupportAction;
    }

    /**
     * @param  bool  $lineItemSupportAction
     * @return $this
     */
    public function setLineItemSupportAction($lineItemSupportAction)
    {
        $this->lineItemSupportAction = $lineItemSupportAction;

        return $this;
    }

    /**
     * @return bool
     */
    public function getParentLineItem()
    {
        return $this->parentLineItem;
    }

    /**
     * @param  bool  $parentLineItem
     * @return $this
     */
    public function setParentLineItem($parentLineItem)
    {
        $this->parentLineItem = $parentLineItem;

        return $this;
    }

    /**
     * @return bool
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param  bool  $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getStartDateOption()
    {
        return $this->startDateOption;
    }

    /**
     * @param  bool  $startDateOption
     * @return $this
     */
    public function setStartDateOption($startDateOption)
    {
        $this->startDateOption = $startDateOption;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPermanent()
    {
        return $this->isPermanent;
    }

    /**
     * @param  bool  $isPermanent
     * @return $this
     */
    public function setIsPermanent($isPermanent)
    {
        $this->isPermanent = $isPermanent;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param  bool  $term
     * @return $this
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * @return bool
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param  bool  $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getVersionDate()
    {
        return $this->versionDate;
    }

    /**
     * @param  bool  $versionDate
     * @return $this
     */
    public function setVersionDate($versionDate)
    {
        $this->versionDate = $versionDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getVersionDateAttributes()
    {
        return $this->versionDateAttributes;
    }

    /**
     * @param  bool  $versionDateAttributes
     * @return $this
     */
    public function setVersionDateAttributes($versionDateAttributes)
    {
        $this->versionDateAttributes = $versionDateAttributes;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNumberOfCopies()
    {
        return $this->numberOfCopies;
    }

    /**
     * @param  bool  $numberOfCopies
     * @return $this
     */
    public function setNumberOfCopies($numberOfCopies)
    {
        $this->numberOfCopies = $numberOfCopies;

        return $this;
    }

    /**
     * @return bool
     */
    public function getFulfilledAmount()
    {
        return $this->fulfilledAmount;
    }

    /**
     * @param  bool  $fulfilledAmount
     * @return $this
     */
    public function setFulfilledAmount($fulfilledAmount)
    {
        $this->fulfilledAmount = $fulfilledAmount;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNumberOfRemainingCopies()
    {
        return $this->numberOfRemainingCopies;
    }

    /**
     * @param  bool  $numberOfRemainingCopies
     * @return $this
     */
    public function setNumberOfRemainingCopies($numberOfRemainingCopies)
    {
        $this->numberOfRemainingCopies = $numberOfRemainingCopies;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTrusted()
    {
        return $this->isTrusted;
    }

    /**
     * @param  bool  $isTrusted
     * @return $this
     */
    public function setIsTrusted($isTrusted)
    {
        $this->isTrusted = $isTrusted;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType  $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * @param  bool  $maintenance
     * @return $this
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMaintenancePartNumber()
    {
        return $this->maintenancePartNumber;
    }

    /**
     * @param  bool  $maintenancePartNumber
     * @return $this
     */
    public function setMaintenancePartNumber($maintenancePartNumber)
    {
        $this->maintenancePartNumber = $maintenancePartNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function getFNPTimeZoneValue()
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param  bool  $FNPTimeZoneValue
     * @return $this
     */
    public function setFNPTimeZoneValue($FNPTimeZoneValue)
    {
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCreatedOnDateTime()
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param  bool  $createdOnDateTime
     * @return $this
     */
    public function setCreatedOnDateTime($createdOnDateTime)
    {
        $this->createdOnDateTime = $createdOnDateTime;

        return $this;
    }

    /**
     * @return bool
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  bool  $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;

        return $this;
    }

    /**
     * @return bool
     */
    public function getLineItemAttributes()
    {
        return $this->lineItemAttributes;
    }

    /**
     * @param  bool  $lineItemAttributes
     * @return $this
     */
    public function setLineItemAttributes($lineItemAttributes)
    {
        $this->lineItemAttributes = $lineItemAttributes;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMaintenanceLineItemAttributes()
    {
        return $this->maintenanceLineItemAttributes;
    }

    /**
     * @param  bool  $maintenanceLineItemAttributes
     * @return $this
     */
    public function setMaintenanceLineItemAttributes($maintenanceLineItemAttributes)
    {
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTransferredFromLineItem()
    {
        return $this->transferredFromLineItem;
    }

    /**
     * @param  bool  $transferredFromLineItem
     * @return $this
     */
    public function setTransferredFromLineItem($transferredFromLineItem)
    {
        $this->transferredFromLineItem = $transferredFromLineItem;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSplitFromLineItem()
    {
        return $this->splitFromLineItem;
    }

    /**
     * @param  bool  $splitFromLineItem
     * @return $this
     */
    public function setSplitFromLineItem($splitFromLineItem)
    {
        $this->splitFromLineItem = $splitFromLineItem;

        return $this;
    }
}
