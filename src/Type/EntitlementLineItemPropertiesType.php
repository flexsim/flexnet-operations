<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementLineItemPropertiesType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $activationId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $activatableItemType;

    /**
     * @var string
     */
    private $orderId;

    /**
     * @var string
     */
    private $orderLineNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $soldTo;

    /**
     * @var string
     */
    private $soldToDisplayName;

    /**
     * @var string
     */
    private $entitlementState;

    /**
     * @var string
     */
    private $entitlementDescription;

    /**
     * @var bool
     */
    private $allowPortalLogin;

    /**
     * @var string
     */
    private $shipToEmail;

    /**
     * @var string
     */
    private $shipToAddress;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $parentBulkEntitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $bulkEntSoldTo;

    /**
     * @var string
     */
    private $bulkEntSoldToDisplayName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $product;

    /**
     * @var string
     */
    private $productDescription;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    private $partNumber;

    /**
     * @var string
     */
    private $partNumberDescription;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    private $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    private $licenseModel;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    private $alternateLicenseModel1;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    private $alternateLicenseModel2;

    /**
     * @var string
     */
    private $lineItemSupportAction;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $parentLineItem;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var string
     */
    private $startDateOption;

    /**
     * @var bool
     */
    private $isPermanent;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DurationType
     */
    private $term;

    /**
     * @var \DateTimeInterface
     */
    private $expirationDate;

    /**
     * @var \DateTimeInterface
     */
    private $versionDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\VersionDateAttributesType
     */
    private $versionDateAttributes;

    /**
     * @var int
     */
    private $numberOfCopies;

    /**
     * @var int
     */
    private $fulfilledAmount;

    /**
     * @var int
     */
    private $numberOfRemainingCopies;

    /**
     * @var bool
     */
    private $isTrusted;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    private $entitledProducts;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    private $channelPartners;

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemPropertiesType
     */
    private $maintenanceLineItems;

    /**
     * @var string
     */
    private $FNPTimeZoneValue;

    /**
     * @var \DateTimeInterface
     */
    private $createdOnDateTime;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $lineItemAttributes;

    /**
     * @var string
     */
    private $transferredFromLineItem;

    /**
     * @var string
     */
    private $splitFromLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId
     * @var string $description
     * @var string $state
     * @var string $activatableItemType
     * @var string $orderId
     * @var string $orderLineNumber
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $soldTo
     * @var string $soldToDisplayName
     * @var string $entitlementState
     * @var string $entitlementDescription
     * @var bool $allowPortalLogin
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentBulkEntitlementId
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $bulkEntSoldTo
     * @var string $bulkEntSoldToDisplayName
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var string $productDescription
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @var string $partNumberDescription
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel1
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel2
     * @var string $lineItemSupportAction
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @var \DateTimeInterface $startDate
     * @var string $startDateOption
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DurationType $term
     * @var \DateTimeInterface $expirationDate
     * @var \DateTimeInterface $versionDate
     * @var \Flexsim\FlexnetOperations\Type\VersionDateAttributesType $versionDateAttributes
     * @var int $numberOfCopies
     * @var int $fulfilledAmount
     * @var int $numberOfRemainingCopies
     * @var bool $isTrusted
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemPropertiesType|array $maintenanceLineItems
     * @var string $FNPTimeZoneValue
     * @var \DateTimeInterface $createdOnDateTime
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $lineItemAttributes
     * @var string $transferredFromLineItem
     * @var string $splitFromLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId = null, string $description = null, string $state = null, string $activatableItemType = null, string $orderId = null, string $orderLineNumber = null, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId = null, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $soldTo = null, string $soldToDisplayName = null, string $entitlementState = null, string $entitlementDescription = null, bool $allowPortalLogin = null, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentBulkEntitlementId = null, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $bulkEntSoldTo = null, string $bulkEntSoldToDisplayName = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, string $productDescription = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, string $lineItemSupportAction = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem = null, \DateTimeInterface $startDate = null, string $startDateOption = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, \Flexsim\FlexnetOperations\Type\VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, int $fulfilledAmount = null, int $numberOfRemainingCopies = null, bool $isTrusted = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, $maintenanceLineItems = null, string $FNPTimeZoneValue = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $lineItemAttributes = null, string $transferredFromLineItem = null, string $splitFromLineItem = null)
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
        $this->lineItemAttributes = $lineItemAttributes;
        $this->transferredFromLineItem = $transferredFromLineItem;
        $this->splitFromLineItem = $splitFromLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId
     * @var string $description
     * @var string $state
     * @var string $activatableItemType
     * @var string $orderId
     * @var string $orderLineNumber
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $soldTo
     * @var string $soldToDisplayName
     * @var string $entitlementState
     * @var string $entitlementDescription
     * @var bool $allowPortalLogin
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentBulkEntitlementId
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $bulkEntSoldTo
     * @var string $bulkEntSoldToDisplayName
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var string $productDescription
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @var string $partNumberDescription
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel1
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel2
     * @var string $lineItemSupportAction
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @var \DateTimeInterface $startDate
     * @var string $startDateOption
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DurationType $term
     * @var \DateTimeInterface $expirationDate
     * @var \DateTimeInterface $versionDate
     * @var \Flexsim\FlexnetOperations\Type\VersionDateAttributesType $versionDateAttributes
     * @var int $numberOfCopies
     * @var int $fulfilledAmount
     * @var int $numberOfRemainingCopies
     * @var bool $isTrusted
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemPropertiesType|array $maintenanceLineItems
     * @var string $FNPTimeZoneValue
     * @var \DateTimeInterface $createdOnDateTime
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $lineItemAttributes
     * @var string $transferredFromLineItem
     * @var string $splitFromLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId = null, string $description = null, string $state = null, string $activatableItemType = null, string $orderId = null, string $orderLineNumber = null, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId = null, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $soldTo = null, string $soldToDisplayName = null, string $entitlementState = null, string $entitlementDescription = null, bool $allowPortalLogin = null, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentBulkEntitlementId = null, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $bulkEntSoldTo = null, string $bulkEntSoldToDisplayName = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, string $productDescription = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, string $partNumberDescription = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, string $lineItemSupportAction = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem = null, \DateTimeInterface $startDate = null, string $startDateOption = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, \Flexsim\FlexnetOperations\Type\VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, int $fulfilledAmount = null, int $numberOfRemainingCopies = null, bool $isTrusted = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, $maintenanceLineItems = null, string $FNPTimeZoneValue = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $lineItemAttributes = null, string $transferredFromLineItem = null, string $splitFromLineItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
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
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }

    /**
     * @param string $orderLineNumber
     * @return $this
     */
    public function setOrderLineNumber($orderLineNumber)
    {
        $this->orderLineNumber = $orderLineNumber;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoldToDisplayName()
    {
        return $this->soldToDisplayName;
    }

    /**
     * @param string $soldToDisplayName
     * @return $this
     */
    public function setSoldToDisplayName($soldToDisplayName)
    {
        $this->soldToDisplayName = $soldToDisplayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntitlementState()
    {
        return $this->entitlementState;
    }

    /**
     * @param string $entitlementState
     * @return $this
     */
    public function setEntitlementState($entitlementState)
    {
        $this->entitlementState = $entitlementState;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntitlementDescription()
    {
        return $this->entitlementDescription;
    }

    /**
     * @param string $entitlementDescription
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
     * @return string
     */
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param string $shipToEmail
     * @return $this
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param string $shipToAddress
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getParentBulkEntitlementId()
    {
        return $this->parentBulkEntitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentBulkEntitlementId
     * @return $this
     */
    public function setParentBulkEntitlementId($parentBulkEntitlementId)
    {
        $this->parentBulkEntitlementId = $parentBulkEntitlementId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getBulkEntSoldTo()
    {
        return $this->bulkEntSoldTo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $bulkEntSoldTo
     * @return $this
     */
    public function setBulkEntSoldTo($bulkEntSoldTo)
    {
        $this->bulkEntSoldTo = $bulkEntSoldTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getBulkEntSoldToDisplayName()
    {
        return $this->bulkEntSoldToDisplayName;
    }

    /**
     * @param string $bulkEntSoldToDisplayName
     * @return $this
     */
    public function setBulkEntSoldToDisplayName($bulkEntSoldToDisplayName)
    {
        $this->bulkEntSoldToDisplayName = $bulkEntSoldToDisplayName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param string $productDescription
     * @return $this
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartNumberDescription()
    {
        return $this->partNumberDescription;
    }

    /**
     * @param string $partNumberDescription
     * @return $this
     */
    public function setPartNumberDescription($partNumberDescription)
    {
        $this->partNumberDescription = $partNumberDescription;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getAlternateLicenseModel1()
    {
        return $this->alternateLicenseModel1;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel1
     * @return $this
     */
    public function setAlternateLicenseModel1($alternateLicenseModel1)
    {
        $this->alternateLicenseModel1 = $alternateLicenseModel1;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getAlternateLicenseModel2()
    {
        return $this->alternateLicenseModel2;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel2
     * @return $this
     */
    public function setAlternateLicenseModel2($alternateLicenseModel2)
    {
        $this->alternateLicenseModel2 = $alternateLicenseModel2;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineItemSupportAction()
    {
        return $this->lineItemSupportAction;
    }

    /**
     * @param string $lineItemSupportAction
     * @return $this
     */
    public function setLineItemSupportAction($lineItemSupportAction)
    {
        $this->lineItemSupportAction = $lineItemSupportAction;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getParentLineItem()
    {
        return $this->parentLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @return $this
     */
    public function setParentLineItem($parentLineItem)
    {
        $this->parentLineItem = $parentLineItem;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateOption()
    {
        return $this->startDateOption;
    }

    /**
     * @param string $startDateOption
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
     * @return \Flexsim\FlexnetOperations\Type\DurationType
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DurationType $term
     * @return $this
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTimeInterface $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVersionDate()
    {
        return $this->versionDate;
    }

    /**
     * @param \DateTimeInterface $versionDate
     * @return $this
     */
    public function setVersionDate($versionDate)
    {
        $this->versionDate = $versionDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\VersionDateAttributesType
     */
    public function getVersionDateAttributes()
    {
        return $this->versionDateAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\VersionDateAttributesType $versionDateAttributes
     * @return $this
     */
    public function setVersionDateAttributes($versionDateAttributes)
    {
        $this->versionDateAttributes = $versionDateAttributes;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfCopies()
    {
        return $this->numberOfCopies;
    }

    /**
     * @param int $numberOfCopies
     * @return $this
     */
    public function setNumberOfCopies($numberOfCopies)
    {
        $this->numberOfCopies = $numberOfCopies;
        return $this;
    }

    /**
     * @return int
     */
    public function getFulfilledAmount()
    {
        return $this->fulfilledAmount;
    }

    /**
     * @param int $fulfilledAmount
     * @return $this
     */
    public function setFulfilledAmount($fulfilledAmount)
    {
        $this->fulfilledAmount = $fulfilledAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRemainingCopies()
    {
        return $this->numberOfRemainingCopies;
    }

    /**
     * @param int $numberOfRemainingCopies
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
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    public function getEntitledProducts()
    {
        return $this->entitledProducts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @return $this
     */
    public function setEntitledProducts($entitledProducts)
    {
        $this->entitledProducts = $entitledProducts;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    public function getChannelPartners()
    {
        return $this->channelPartners;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @return $this
     */
    public function setChannelPartners($channelPartners)
    {
        $this->channelPartners = $channelPartners;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MaintenanceLineItemPropertiesType
     */
    public function getMaintenanceLineItems()
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceLineItemPropertiesType $maintenanceLineItems
     * @return $this
     */
    public function setMaintenanceLineItems($maintenanceLineItems)
    {
        $this->maintenanceLineItems = $maintenanceLineItems;
        return $this;
    }

    /**
     * @return string
     */
    public function getFNPTimeZoneValue()
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param string $FNPTimeZoneValue
     * @return $this
     */
    public function setFNPTimeZoneValue($FNPTimeZoneValue)
    {
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedOnDateTime()
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param \DateTimeInterface $createdOnDateTime
     * @return $this
     */
    public function setCreatedOnDateTime($createdOnDateTime)
    {
        $this->createdOnDateTime = $createdOnDateTime;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getLineItemAttributes()
    {
        return $this->lineItemAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $lineItemAttributes
     * @return $this
     */
    public function setLineItemAttributes($lineItemAttributes)
    {
        $this->lineItemAttributes = $lineItemAttributes;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransferredFromLineItem()
    {
        return $this->transferredFromLineItem;
    }

    /**
     * @param string $transferredFromLineItem
     * @return $this
     */
    public function setTransferredFromLineItem($transferredFromLineItem)
    {
        $this->transferredFromLineItem = $transferredFromLineItem;
        return $this;
    }

    /**
     * @return string
     */
    public function getSplitFromLineItem()
    {
        return $this->splitFromLineItem;
    }

    /**
     * @param string $splitFromLineItem
     * @return $this
     */
    public function setSplitFromLineItem($splitFromLineItem)
    {
        $this->splitFromLineItem = $splitFromLineItem;
        return $this;
    }


}

