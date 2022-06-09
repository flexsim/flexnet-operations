<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateBulkEntitlementDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $entitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\IdType
     */
    protected $entitlementId;

    /**
     * @var string
     */
    protected $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $product;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    protected $partNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $licenseModel;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $alternateLicenseModel1;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $alternateLicenseModel2;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $licenseModelAttributes;

    /**
     * @var string
     */
    protected $FNPTimeZoneValue;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyAttributesListType
     */
    protected $policyAttributes;

    /**
     * @var string
     */
    protected $shipToEmail;

    /**
     * @var string
     */
    protected $shipToAddress;

    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var string
     */
    protected $orderLineNumber;

    /**
     * @var string
     */
    protected $startDateOption;

    /**
     * @var bool
     */
    protected $isPermanent;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DurationType
     */
    protected $term;

    /**
     * @var \DateTimeInterface
     */
    protected $expirationDate;

    /**
     * @var \DateTimeInterface
     */
    protected $versionDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\VersionDateAttributesType
     */
    protected $versionDateAttributes;

    /**
     * @var int
     */
    protected $numberOfCopies;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $autoDeploy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateEntitledProductDataListType
     */
    protected $updatedEntitledProducts;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataListType
     */
    protected $entitledProducts;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    protected $channelPartners;

    /**
     * @var bool
     */
    protected $allowPortalLogin;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @param string $soldTo
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel1
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel2
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param string $FNPTimeZoneValue
     * @param \Flexsim\FlexnetOperations\Type\PolicyAttributesListType $policyAttributes
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param string $orderId
     * @param string $orderLineNumber
     * @param string $startDateOption
     * @param bool $isPermanent
     * @param \Flexsim\FlexnetOperations\Type\DurationType $term
     * @param \DateTimeInterface $expirationDate
     * @param \DateTimeInterface $versionDate
     * @param \Flexsim\FlexnetOperations\Type\VersionDateAttributesType $versionDateAttributes
     * @param int $numberOfCopies
     * @param string $description
     * @param bool $autoDeploy
     * @param \Flexsim\FlexnetOperations\Type\UpdateEntitledProductDataListType $updatedEntitledProducts
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param bool $allowPortalLogin
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexsim\FlexnetOperations\Type\IdType $entitlementId = null, string $soldTo = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, \Flexsim\FlexnetOperations\Type\PolicyAttributesListType $policyAttributes = null, string $shipToEmail = null, string $shipToAddress = null, string $orderId = null, string $orderLineNumber = null, string $startDateOption = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, \Flexsim\FlexnetOperations\Type\VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, string $description = null, bool $autoDeploy = null, \Flexsim\FlexnetOperations\Type\UpdateEntitledProductDataListType $updatedEntitledProducts = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->entitlementId = $entitlementId;
        $this->soldTo = $soldTo;
        $this->product = $product;
        $this->partNumber = $partNumber;
        $this->licenseModel = $licenseModel;
        $this->alternateLicenseModel1 = $alternateLicenseModel1;
        $this->alternateLicenseModel2 = $alternateLicenseModel2;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->policyAttributes = $policyAttributes;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->startDateOption = $startDateOption;
        $this->isPermanent = $isPermanent;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->versionDateAttributes = $versionDateAttributes;
        $this->numberOfCopies = $numberOfCopies;
        $this->description = $description;
        $this->autoDeploy = $autoDeploy;
        $this->updatedEntitledProducts = $updatedEntitledProducts;
        $this->entitledProducts = $entitledProducts;
        $this->channelPartners = $channelPartners;
        $this->allowPortalLogin = $allowPortalLogin;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @param string $soldTo
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel1
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel2
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param string $FNPTimeZoneValue
     * @param \Flexsim\FlexnetOperations\Type\PolicyAttributesListType $policyAttributes
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param string $orderId
     * @param string $orderLineNumber
     * @param string $startDateOption
     * @param bool $isPermanent
     * @param \Flexsim\FlexnetOperations\Type\DurationType $term
     * @param \DateTimeInterface $expirationDate
     * @param \DateTimeInterface $versionDate
     * @param \Flexsim\FlexnetOperations\Type\VersionDateAttributesType $versionDateAttributes
     * @param int $numberOfCopies
     * @param string $description
     * @param bool $autoDeploy
     * @param \Flexsim\FlexnetOperations\Type\UpdateEntitledProductDataListType $updatedEntitledProducts
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param bool $allowPortalLogin
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexsim\FlexnetOperations\Type\IdType $entitlementId = null, string $soldTo = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, \Flexsim\FlexnetOperations\Type\PolicyAttributesListType $policyAttributes = null, string $shipToEmail = null, string $shipToAddress = null, string $orderId = null, string $orderLineNumber = null, string $startDateOption = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DurationType $term = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $versionDate = null, \Flexsim\FlexnetOperations\Type\VersionDateAttributesType $versionDateAttributes = null, int $numberOfCopies = null, string $description = null, bool $autoDeploy = null, \Flexsim\FlexnetOperations\Type\UpdateEntitledProductDataListType $updatedEntitledProducts = null, \Flexsim\FlexnetOperations\Type\EntitledProductDataListType $entitledProducts = null, \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier()
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @return $this
     */
    public function setEntitlementIdentifier($entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\IdType
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\IdType $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;

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
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getLicenseModelAttributes()
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @return $this
     */
    public function setLicenseModelAttributes($licenseModelAttributes)
    {
        $this->licenseModelAttributes = $licenseModelAttributes;

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
     * @return \Flexsim\FlexnetOperations\Type\PolicyAttributesListType
     */
    public function getPolicyAttributes()
    {
        return $this->policyAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyAttributesListType $policyAttributes
     * @return $this
     */
    public function setPolicyAttributes($policyAttributes)
    {
        $this->policyAttributes = $policyAttributes;

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
     * @return bool
     */
    public function getAutoDeploy()
    {
        return $this->autoDeploy;
    }

    /**
     * @param bool $autoDeploy
     * @return $this
     */
    public function setAutoDeploy($autoDeploy)
    {
        $this->autoDeploy = $autoDeploy;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateEntitledProductDataListType
     */
    public function getUpdatedEntitledProducts()
    {
        return $this->updatedEntitledProducts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateEntitledProductDataListType $updatedEntitledProducts
     * @return $this
     */
    public function setUpdatedEntitledProducts($updatedEntitledProducts)
    {
        $this->updatedEntitledProducts = $updatedEntitledProducts;

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
}
