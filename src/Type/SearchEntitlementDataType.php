<?php

namespace Flexsim\FlexnetOperations\Type;

class SearchEntitlementDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $entDescription;

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
     * @var bool
     */
    private $isBulk;

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
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $description;

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
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType
     */
    private $accountUnitName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType
     */
    private $organizationUnitName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $currentOwnerName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $maintStartDate;

    /**
     * @var bool
     */
    private $maintIsPermanent;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $maintExpirationDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntCustomAttributesQueryListType
     */
    private $entitlementAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $emailTemplateVariation;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entDescription
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion
     * @var string $productType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var bool $isBulk
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToEmail
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $startDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $createdOn
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $createdUserId
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $accountUnitName this method is backwards compatible so you may also pass $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $maintStartDate
     * @var bool $maintIsPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $maintExpirationDate
     * @var \Flexsim\FlexnetOperations\Type\EntCustomAttributesQueryListType $entitlementAttributes
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailTemplateVariation
     */
    public function __construct(
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $entDescription = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion = null,
        string $productType = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null,
        bool $isBulk = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToEmail = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToAddress = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $startDate = null,
        bool $isPermanent = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $createdOn = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null,
        \Flexsim\FlexnetOperations\Type\StateQueryType $state = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $createdUserId = null,
        \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $accountUnitName = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $maintStartDate = null,
        bool $maintIsPermanent = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $maintExpirationDate = null,
        \Flexsim\FlexnetOperations\Type\EntCustomAttributesQueryListType $entitlementAttributes = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailTemplateVariation = null
    ) {
        $this->entitlementId = $entitlementId;
        $this->entDescription = $entDescription;
        $this->productName = $productName;
        $this->productVersion = $productVersion;
        $this->productType = $productType;
        $this->partNumber = $partNumber;
        $this->isBulk = $isBulk;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->createdOn = $createdOn;
        $this->versionDate = $versionDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->description = $description;
        $this->state = $state;
        $this->licenseTechnology = $licenseTechnology;
        $this->createdUserId = $createdUserId;
        $this->accountUnitName = $accountUnitName;
        $this->organizationUnitName = $accountUnitName;
        $this->currentOwnerName = $currentOwnerName;
        $this->maintStartDate = $maintStartDate;
        $this->maintIsPermanent = $maintIsPermanent;
        $this->maintExpirationDate = $maintExpirationDate;
        $this->entitlementAttributes = $entitlementAttributes;
        $this->emailTemplateVariation = $emailTemplateVariation;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entDescription
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion
     * @var string $productType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var bool $isBulk
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToEmail
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $startDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $createdOn
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $createdUserId
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $accountUnitName this method is backwards compatible so you may also pass $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $maintStartDate
     * @var bool $maintIsPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $maintExpirationDate
     * @var \Flexsim\FlexnetOperations\Type\EntCustomAttributesQueryListType $entitlementAttributes
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailTemplateVariation
     */
    public static function create(
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $entDescription = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $productName = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $productVersion = null,
        string $productType = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null,
        bool $isBulk = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToEmail = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $shipToAddress = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $startDate = null,
        bool $isPermanent = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $createdOn = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $versionDate = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null,
        \Flexsim\FlexnetOperations\Type\StateQueryType $state = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $licenseTechnology = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $createdUserId = null,
        \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $accountUnitName = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $maintStartDate = null,
        bool $maintIsPermanent = null,
        \Flexsim\FlexnetOperations\Type\DateQueryType $maintExpirationDate = null,
        \Flexsim\FlexnetOperations\Type\EntCustomAttributesQueryListType $entitlementAttributes = null,
        \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailTemplateVariation = null
    ) {
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
    public function getEntDescription()
    {
        return $this->entDescription;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $entDescription
     * @return $this
     */
    public function setEntDescription($entDescription)
    {
        $this->entDescription = $entDescription;
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
     * @return bool
     */
    public function getIsBulk()
    {
        return $this->isBulk;
    }

    /**
     * @param bool $isBulk
     * @return $this
     */
    public function setIsBulk($isBulk)
    {
        $this->isBulk = $isBulk;
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
     * @return \Flexsim\FlexnetOperations\Type\PartnerTierQueryType
     */
    public function getAccountUnitName()
    {
        return $this->accountUnitName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $accountUnitName
     * @return $this
     */
    public function setAccountUnitName($accountUnitName)
    {
        $this->accountUnitName = $accountUnitName;
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
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getMaintStartDate()
    {
        return $this->maintStartDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $maintStartDate
     * @return $this
     */
    public function setMaintStartDate($maintStartDate)
    {
        $this->maintStartDate = $maintStartDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMaintIsPermanent()
    {
        return $this->maintIsPermanent;
    }

    /**
     * @param bool $maintIsPermanent
     * @return $this
     */
    public function setMaintIsPermanent($maintIsPermanent)
    {
        $this->maintIsPermanent = $maintIsPermanent;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getMaintExpirationDate()
    {
        return $this->maintExpirationDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $maintExpirationDate
     * @return $this
     */
    public function setMaintExpirationDate($maintExpirationDate)
    {
        $this->maintExpirationDate = $maintExpirationDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntCustomAttributesQueryListType
     */
    public function getEntitlementAttributes()
    {
        return $this->entitlementAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntCustomAttributesQueryListType $entitlementAttributes
     * @return $this
     */
    public function setEntitlementAttributes($entitlementAttributes)
    {
        $this->entitlementAttributes = $entitlementAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getEmailTemplateVariation()
    {
        return $this->emailTemplateVariation;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailTemplateVariation
     * @return $this
     */
    public function setEmailTemplateVariation($emailTemplateVariation)
    {
        $this->emailTemplateVariation = $emailTemplateVariation;
        return $this;
    }
}
