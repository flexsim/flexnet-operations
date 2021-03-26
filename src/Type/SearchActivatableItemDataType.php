<?php

namespace Flexsim\FlexnetOperations\Type;

class SearchActivatableItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $parentBulkEntitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $productName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $productVersion;

    /**
     * @var string
     */
    private $productType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $partNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $startDate;

    /**
     * @var bool
     */
    private $isPermanent;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $expirationDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $versionDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $orderId;

    /**
     * @var bool
     */
    private $withNoOrderId;

    /**
     * @var bool
     */
    private $restrictToItemsWithCount;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    private $fulfilledAmount;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $parentBulkEntSoldTo;

    /**
     * @var string
     */
    private $activatableItemType;

    /**
     * @var bool
     */
    private $allowPortalLogin;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType
     */
    private $organizationUnitName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $currentOwnerName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $lineItemParentLineItemId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $createdOnDateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $lastModifiedDateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LineItemCustomAttributesQueryListType
     */
    private $lineItemAttributes;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion
     * @var string $productType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $startDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId
     * @var bool $withNoOrderId
     * @var bool $restrictToItemsWithCount
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $fulfilledAmount
     * @var string $userId
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntSoldTo
     * @var string $activatableItemType
     * @var bool $allowPortalLogin
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $lineItemParentLineItemId
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $createdOnDateTime
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     * @var \Flexsim\FlexnetOperations\Type\LineItemCustomAttributesQueryListType $lineItemAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion = null, string $productType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\DateQueryType $startDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId = null, bool $withNoOrderId = null, bool $restrictToItemsWithCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $fulfilledAmount = null, string $userId = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntSoldTo = null, string $activatableItemType = null, bool $allowPortalLogin = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $lineItemParentLineItemId = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $createdOnDateTime = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null, \Flexsim\FlexnetOperations\Type\LineItemCustomAttributesQueryListType $lineItemAttributes = null)
    {
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;
        $this->entitlementId = $entitlementId;
        $this->activationId = $activationId;
        $this->productName = $productName;
        $this->productVersion = $productVersion;
        $this->productType = $productType;
        $this->partNumber = $partNumber;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->licenseTechnology = $licenseTechnology;
        $this->orderId = $orderId;
        $this->withNoOrderId = $withNoOrderId;
        $this->restrictToItemsWithCount = $restrictToItemsWithCount;
        $this->fulfilledAmount = $fulfilledAmount;
        $this->userId = $userId;
        $this->customAttributes = $customAttributes;
        $this->soldTo = $soldTo;
        $this->parentBulkEntSoldTo = $parentBulkEntSoldTo;
        $this->activatableItemType = $activatableItemType;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->organizationUnitName = $organizationUnitName;
        $this->currentOwnerName = $currentOwnerName;
        $this->lineItemParentLineItemId = $lineItemParentLineItemId;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->lineItemAttributes = $lineItemAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion
     * @var string $productType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $startDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId
     * @var bool $withNoOrderId
     * @var bool $restrictToItemsWithCount
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $fulfilledAmount
     * @var string $userId
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntSoldTo
     * @var string $activatableItemType
     * @var bool $allowPortalLogin
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $lineItemParentLineItemId
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $createdOnDateTime
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     * @var \Flexsim\FlexnetOperations\Type\LineItemCustomAttributesQueryListType $lineItemAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion = null, string $productType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\DateQueryType $startDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId = null, bool $withNoOrderId = null, bool $restrictToItemsWithCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $fulfilledAmount = null, string $userId = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntSoldTo = null, string $activatableItemType = null, bool $allowPortalLogin = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $lineItemParentLineItemId = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $createdOnDateTime = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null, \Flexsim\FlexnetOperations\Type\LineItemCustomAttributesQueryListType $lineItemAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getParentBulkEntitlementId()
    {
        return $this->parentBulkEntitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntitlementId
     * @return $this
     */
    public function setParentBulkEntitlementId($parentBulkEntitlementId)
    {
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getProductVersion()
    {
        return $this->productVersion;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion
     * @return $this
     */
    public function setProductVersion($productVersion)
    {
        $this->productVersion = $productVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $startDate
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
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getVersionDate()
    {
        return $this->versionDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate
     * @return $this
     */
    public function setVersionDate($versionDate)
    {
        $this->versionDate = $versionDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId
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
    public function getWithNoOrderId()
    {
        return $this->withNoOrderId;
    }

    /**
     * @param bool $withNoOrderId
     * @return $this
     */
    public function setWithNoOrderId($withNoOrderId)
    {
        $this->withNoOrderId = $withNoOrderId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRestrictToItemsWithCount()
    {
        return $this->restrictToItemsWithCount;
    }

    /**
     * @param bool $restrictToItemsWithCount
     * @return $this
     */
    public function setRestrictToItemsWithCount($restrictToItemsWithCount)
    {
        $this->restrictToItemsWithCount = $restrictToItemsWithCount;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    public function getFulfilledAmount()
    {
        return $this->fulfilledAmount;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $fulfilledAmount
     * @return $this
     */
    public function setFulfilledAmount($fulfilledAmount)
    {
        $this->fulfilledAmount = $fulfilledAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getParentBulkEntSoldTo()
    {
        return $this->parentBulkEntSoldTo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentBulkEntSoldTo
     * @return $this
     */
    public function setParentBulkEntSoldTo($parentBulkEntSoldTo)
    {
        $this->parentBulkEntSoldTo = $parentBulkEntSoldTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivatableItemType()
    {
        return $this->activatableItemType;
    }

    /**
     * @param string $activatableItemType
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
     * @return \Flexsim\FlexnetOperations\Type\PartnerTierQueryType
     */
    public function getOrganizationUnitName()
    {
        return $this->organizationUnitName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @return $this
     */
    public function setOrganizationUnitName($organizationUnitName)
    {
        $this->organizationUnitName = $organizationUnitName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getCurrentOwnerName()
    {
        return $this->currentOwnerName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @return $this
     */
    public function setCurrentOwnerName($currentOwnerName)
    {
        $this->currentOwnerName = $currentOwnerName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getLineItemParentLineItemId()
    {
        return $this->lineItemParentLineItemId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $lineItemParentLineItemId
     * @return $this
     */
    public function setLineItemParentLineItemId($lineItemParentLineItemId)
    {
        $this->lineItemParentLineItemId = $lineItemParentLineItemId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getCreatedOnDateTime()
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $createdOnDateTime
     * @return $this
     */
    public function setCreatedOnDateTime($createdOnDateTime)
    {
        $this->createdOnDateTime = $createdOnDateTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LineItemCustomAttributesQueryListType
     */
    public function getLineItemAttributes()
    {
        return $this->lineItemAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LineItemCustomAttributesQueryListType $lineItemAttributes
     * @return $this
     */
    public function setLineItemAttributes($lineItemAttributes)
    {
        $this->lineItemAttributes = $lineItemAttributes;
        return $this;
    }


}

