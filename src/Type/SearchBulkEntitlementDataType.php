<?php

namespace Flexsim\FlexnetOperations\Type;

class SearchBulkEntitlementDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $description;

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
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $shipToEmail;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $shipToAddress;

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
    private $createdOn;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $versionDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $lastModifiedDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    private $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $createdUserId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    private $customAttributes;

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
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion
     * @var string $productType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToEmail
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToAddress
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $createdOn
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $createdUserId
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @var bool $allowPortalLogin
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion = null, string $productType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToEmail = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToAddress = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $createdOn = null, \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $createdUserId = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes = null, bool $allowPortalLogin = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null)
    {
        $this->entitlementId = $entitlementId;
        $this->description = $description;
        $this->productName = $productName;
        $this->productVersion = $productVersion;
        $this->productType = $productType;
        $this->partNumber = $partNumber;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->createdOn = $createdOn;
        $this->versionDate = $versionDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->state = $state;
        $this->licenseTechnology = $licenseTechnology;
        $this->createdUserId = $createdUserId;
        $this->customAttributes = $customAttributes;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->organizationUnitName = $organizationUnitName;
        $this->currentOwnerName = $currentOwnerName;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion
     * @var string $productType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToEmail
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToAddress
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $createdOn
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $createdUserId
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @var bool $allowPortalLogin
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion = null, string $productType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToEmail = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToAddress = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $createdOn = null, \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $createdUserId = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes = null, bool $allowPortalLogin = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null)
    {
        return new self(...func_get_args());
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToEmail
     * @return $this
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToAddress
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
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $createdOn
     * @return $this
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
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
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @return $this
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
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
    public function getCreatedUserId()
    {
        return $this->createdUserId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $createdUserId
     * @return $this
     */
    public function setCreatedUserId($createdUserId)
    {
        $this->createdUserId = $createdUserId;
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


}

