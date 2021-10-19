<?php

namespace Flexsim\FlexnetOperations\Type;

class BulkEntitlementResponseConfigRequestType extends FlexnetType
{

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
    protected $description;

    /**
     * @var bool
     */
    protected $state;

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
    protected $shipToEmail;

    /**
     * @var bool
     */
    protected $shipToAddress;

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
    protected $licenseModel;

    /**
     * @var bool
     */
    protected $licenseTechnology;

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
    protected $bulkEntitlementType;

    /**
     * @var bool
     */
    protected $createdUserId;

    /**
     * @var bool
     */
    protected $FNPTimeZoneValue;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * Constructor
     *
     * @param bool $entitlementId
     * @param bool $allowPortalLogin
     * @param bool $description
     * @param bool $state
     * @param bool $soldTo
     * @param bool $soldToDisplayName
     * @param bool $shipToEmail
     * @param bool $shipToAddress
     * @param bool $orderId
     * @param bool $orderLineNumber
     * @param bool $product
     * @param bool $productDescription
     * @param bool $partNumber
     * @param bool $partNumberDescription
     * @param bool $licenseModel
     * @param bool $licenseTechnology
     * @param bool $startDateOption
     * @param bool $isPermanent
     * @param bool $term
     * @param bool $expirationDate
     * @param bool $versionDate
     * @param bool $versionDateAttributes
     * @param bool $numberOfCopies
     * @param bool $bulkEntitlementType
     * @param bool $createdUserId
     * @param bool $FNPTimeZoneValue
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     */
    public function __construct(bool $entitlementId = null, bool $allowPortalLogin = null, bool $description = null, bool $state = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $orderId = null, bool $orderLineNumber = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseModel = null, bool $licenseTechnology = null, bool $startDateOption = null, bool $isPermanent = null, bool $term = null, bool $expirationDate = null, bool $versionDate = null, bool $versionDateAttributes = null, bool $numberOfCopies = null, bool $bulkEntitlementType = null, bool $createdUserId = null, bool $FNPTimeZoneValue = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes = null)
    {
        $this->entitlementId = $entitlementId;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->description = $description;
        $this->state = $state;
        $this->soldTo = $soldTo;
        $this->soldToDisplayName = $soldToDisplayName;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->product = $product;
        $this->productDescription = $productDescription;
        $this->partNumber = $partNumber;
        $this->partNumberDescription = $partNumberDescription;
        $this->licenseModel = $licenseModel;
        $this->licenseTechnology = $licenseTechnology;
        $this->startDateOption = $startDateOption;
        $this->isPermanent = $isPermanent;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->versionDateAttributes = $versionDateAttributes;
        $this->numberOfCopies = $numberOfCopies;
        $this->bulkEntitlementType = $bulkEntitlementType;
        $this->createdUserId = $createdUserId;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->customAttributes = $customAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param bool $entitlementId
     * @param bool $allowPortalLogin
     * @param bool $description
     * @param bool $state
     * @param bool $soldTo
     * @param bool $soldToDisplayName
     * @param bool $shipToEmail
     * @param bool $shipToAddress
     * @param bool $orderId
     * @param bool $orderLineNumber
     * @param bool $product
     * @param bool $productDescription
     * @param bool $partNumber
     * @param bool $partNumberDescription
     * @param bool $licenseModel
     * @param bool $licenseTechnology
     * @param bool $startDateOption
     * @param bool $isPermanent
     * @param bool $term
     * @param bool $expirationDate
     * @param bool $versionDate
     * @param bool $versionDateAttributes
     * @param bool $numberOfCopies
     * @param bool $bulkEntitlementType
     * @param bool $createdUserId
     * @param bool $FNPTimeZoneValue
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     */
    public static function create(bool $entitlementId = null, bool $allowPortalLogin = null, bool $description = null, bool $state = null, bool $soldTo = null, bool $soldToDisplayName = null, bool $shipToEmail = null, bool $shipToAddress = null, bool $orderId = null, bool $orderLineNumber = null, bool $product = null, bool $productDescription = null, bool $partNumber = null, bool $partNumberDescription = null, bool $licenseModel = null, bool $licenseTechnology = null, bool $startDateOption = null, bool $isPermanent = null, bool $term = null, bool $expirationDate = null, bool $versionDate = null, bool $versionDateAttributes = null, bool $numberOfCopies = null, bool $bulkEntitlementType = null, bool $createdUserId = null, bool $FNPTimeZoneValue = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes = null)
    {
        return new self(...func_get_args());
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
    public function getBulkEntitlementType()
    {
        return $this->bulkEntitlementType;
    }

    /**
     * @param bool $bulkEntitlementType
     * @return $this
     */
    public function setBulkEntitlementType($bulkEntitlementType)
    {
        $this->bulkEntitlementType = $bulkEntitlementType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCreatedUserId()
    {
        return $this->createdUserId;
    }

    /**
     * @param bool $createdUserId
     * @return $this
     */
    public function setCreatedUserId($createdUserId)
    {
        $this->createdUserId = $createdUserId;
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
}
