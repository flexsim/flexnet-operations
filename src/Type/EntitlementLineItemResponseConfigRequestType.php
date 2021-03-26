<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementLineItemResponseConfigRequestType
{

    /**
     * @var bool
     */
    private $activationId;

    /**
     * @var bool
     */
    private $description;

    /**
     * @var bool
     */
    private $state;

    /**
     * @var bool
     */
    private $activatableItemType;

    /**
     * @var bool
     */
    private $orderId;

    /**
     * @var bool
     */
    private $orderLineNumber;

    /**
     * @var bool
     */
    private $entitlementId;

    /**
     * @var bool
     */
    private $allowPortalLogin;

    /**
     * @var bool
     */
    private $soldTo;

    /**
     * @var bool
     */
    private $soldToDisplayName;

    /**
     * @var bool
     */
    private $entitlementState;

    /**
     * @var bool
     */
    private $entitlementDescription;

    /**
     * @var bool
     */
    private $shipToEmail;

    /**
     * @var bool
     */
    private $shipToAddress;

    /**
     * @var bool
     */
    private $parentBulkEntitlementId;

    /**
     * @var bool
     */
    private $bulkEntSoldTo;

    /**
     * @var bool
     */
    private $bulkEntSoldToDisplayName;

    /**
     * @var bool
     */
    private $product;

    /**
     * @var bool
     */
    private $productDescription;

    /**
     * @var bool
     */
    private $partNumber;

    /**
     * @var bool
     */
    private $partNumberDescription;

    /**
     * @var bool
     */
    private $licenseTechnology;

    /**
     * @var bool
     */
    private $licenseModel;

    /**
     * @var bool
     */
    private $lineItemSupportAction;

    /**
     * @var bool
     */
    private $parentLineItem;

    /**
     * @var bool
     */
    private $startDate;

    /**
     * @var bool
     */
    private $startDateOption;

    /**
     * @var bool
     */
    private $isPermanent;

    /**
     * @var bool
     */
    private $term;

    /**
     * @var bool
     */
    private $expirationDate;

    /**
     * @var bool
     */
    private $versionDate;

    /**
     * @var bool
     */
    private $versionDateAttributes;

    /**
     * @var bool
     */
    private $numberOfCopies;

    /**
     * @var bool
     */
    private $fulfilledAmount;

    /**
     * @var bool
     */
    private $numberOfRemainingCopies;

    /**
     * @var bool
     */
    private $isTrusted;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var bool
     */
    private $maintenance;

    /**
     * @var bool
     */
    private $maintenancePartNumber;

    /**
     * @var bool
     */
    private $FNPTimeZoneValue;

    /**
     * @var bool
     */
    private $createdOnDateTime;

    /**
     * @var bool
     */
    private $lastModifiedDateTime;

    /**
     * @var bool
     */
    private $lineItemAttributes;

    /**
     * Constructor
     *
     * @var bool $activationId
     * @var bool $description
     * @var bool $state
     * @var bool $activatableItemType
     * @var bool $orderId
     * @var bool $orderLineNumber
     * @var bool $entitlementId
     * @var bool $allowPortalLogin
     * @var bool $soldTo
     * @var bool $soldToDisplayName
     * @var bool $entitlementState
     * @var bool $entitlementDescription
     * @var bool $shipToEmail
     * @var bool $shipToAddress
     * @var bool $parentBulkEntitlementId
     * @var bool $bulkEntSoldTo
     * @var bool $bulkEntSoldToDisplayName
     * @var bool $product
     * @var bool $productDescription
     * @var bool $partNumber
     * @var bool $partNumberDescription
     * @var bool $licenseTechnology
     * @var bool $licenseModel
     * @var bool $lineItemSupportAction
     * @var bool $parentLineItem
     * @var bool $startDate
     * @var bool $startDateOption
     * @var bool $isPermanent
     * @var bool $term
     * @var bool $expirationDate
     * @var bool $versionDate
     * @var bool $versionDateAttributes
     * @var bool $numberOfCopies
     * @var bool $fulfilledAmount
     * @var bool $numberOfRemainingCopies
     * @var bool $isTrusted
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     * @var bool $maintenance
     * @var bool $maintenancePartNumber
     * @var bool $FNPTimeZoneValue
     * @var bool $createdOnDateTime
     * @var bool $lastModifiedDateTime
     * @var bool $lineItemAttributes
     */
    public function __construct(bool $activationId = null, bool $description = null, bool $state = null, bool $activatableItemType = null, bool $orderId = null, bool $orderLineNumber = null, bool $entitlementId = null, bool $allowPortalLogin = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $entitlementState = null, bool $entitlementDescription = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $parentBulkEntitlementId = null, bool $bulkEntSoldTo = null, bool $bulkEntSoldToDisplayName = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $lineItemSupportAction = null, bool $parentLineItem = null, bool $startDate = null, bool $startDateOption = null, bool $isPermanent = null, bool $term = null, bool $expirationDate = null, bool $versionDate = null, bool $versionDateAttributes = null, bool $numberOfCopies = null, bool $fulfilledAmount = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes = null, bool $maintenance = null, bool $maintenancePartNumber = null, bool $FNPTimeZoneValue = null, bool $createdOnDateTime = null, bool $lastModifiedDateTime = null, bool $lineItemAttributes = null)
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
    }

    /**
     * create a new instance of this class
     *
     * @var bool $activationId
     * @var bool $description
     * @var bool $state
     * @var bool $activatableItemType
     * @var bool $orderId
     * @var bool $orderLineNumber
     * @var bool $entitlementId
     * @var bool $allowPortalLogin
     * @var bool $soldTo
     * @var bool $soldToDisplayName
     * @var bool $entitlementState
     * @var bool $entitlementDescription
     * @var bool $shipToEmail
     * @var bool $shipToAddress
     * @var bool $parentBulkEntitlementId
     * @var bool $bulkEntSoldTo
     * @var bool $bulkEntSoldToDisplayName
     * @var bool $product
     * @var bool $productDescription
     * @var bool $partNumber
     * @var bool $partNumberDescription
     * @var bool $licenseTechnology
     * @var bool $licenseModel
     * @var bool $lineItemSupportAction
     * @var bool $parentLineItem
     * @var bool $startDate
     * @var bool $startDateOption
     * @var bool $isPermanent
     * @var bool $term
     * @var bool $expirationDate
     * @var bool $versionDate
     * @var bool $versionDateAttributes
     * @var bool $numberOfCopies
     * @var bool $fulfilledAmount
     * @var bool $numberOfRemainingCopies
     * @var bool $isTrusted
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     * @var bool $maintenance
     * @var bool $maintenancePartNumber
     * @var bool $FNPTimeZoneValue
     * @var bool $createdOnDateTime
     * @var bool $lastModifiedDateTime
     * @var bool $lineItemAttributes
     */
    public static function create(bool $activationId = null, bool $description = null, bool $state = null, bool $activatableItemType = null, bool $orderId = null, bool $orderLineNumber = null, bool $entitlementId = null, bool $allowPortalLogin = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $entitlementState = null, bool $entitlementDescription = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $parentBulkEntitlementId = null, bool $bulkEntSoldTo = null, bool $bulkEntSoldToDisplayName = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseTechnology = null, bool $licenseModel = null, bool $lineItemSupportAction = null, bool $parentLineItem = null, bool $startDate = null, bool $startDateOption = null, bool $isPermanent = null, bool $term = null, bool $expirationDate = null, bool $versionDate = null, bool $versionDateAttributes = null, bool $numberOfCopies = null, bool $fulfilledAmount = null, bool $numberOfRemainingCopies = null, bool $isTrusted = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes = null, bool $maintenance = null, bool $maintenancePartNumber = null, bool $FNPTimeZoneValue = null, bool $createdOnDateTime = null, bool $lastModifiedDateTime = null, bool $lineItemAttributes = null)
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
     * @param bool $activationId
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
     * @param bool $description
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
     * @param bool $state
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
     * @param bool $activatableItemType
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
     * @param bool $orderId
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
     * @param bool $orderLineNumber
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
     * @param bool $entitlementId
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
     * @param bool $allowPortalLogin
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
     * @param bool $soldTo
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
     * @param bool $soldToDisplayName
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
     * @param bool $entitlementState
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
     * @param bool $entitlementDescription
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
     * @param bool $shipToEmail
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
     * @param bool $shipToAddress
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
     * @param bool $parentBulkEntitlementId
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
     * @param bool $bulkEntSoldTo
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
     * @param bool $bulkEntSoldToDisplayName
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
     * @param bool $product
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
     * @param bool $productDescription
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
     * @param bool $partNumber
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
     * @param bool $partNumberDescription
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
     * @param bool $licenseTechnology
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
     * @param bool $licenseModel
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
     * @param bool $lineItemSupportAction
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
     * @param bool $parentLineItem
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
     * @param bool $startDate
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
     * @param bool $startDateOption
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
     * @param bool $isPermanent
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
     * @param bool $term
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
     * @param bool $expirationDate
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
     * @param bool $versionDate
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
     * @param bool $versionDateAttributes
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
     * @param bool $numberOfCopies
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
     * @param bool $fulfilledAmount
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
     * @param bool $numberOfRemainingCopies
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
     * @param bool $isTrusted
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
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
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
     * @param bool $maintenance
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
     * @param bool $maintenancePartNumber
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
     * @param bool $FNPTimeZoneValue
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
     * @param bool $createdOnDateTime
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
     * @param bool $lastModifiedDateTime
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
     * @param bool $lineItemAttributes
     * @return $this
     */
    public function setLineItemAttributes($lineItemAttributes)
    {
        $this->lineItemAttributes = $lineItemAttributes;
        return $this;
    }


}
