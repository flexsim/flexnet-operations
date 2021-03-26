<?php

namespace Flexsim\FlexnetOperations\Type;

class UniformSuiteQueryDataType
{

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $suiteName;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    private $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType
     */
    private $licenseGenerator;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType
     */
    private $packageProperties;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductsListType
     */
    private $products;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelsListType
     */
    private $licenseModels;

    /**
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType
     */
    private $trustedKey;

    /**
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType
     */
    private $virtualTrustedKey;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumbersListType
     */
    private $partNumbers;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    private $hostType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypeListType
     */
    private $hostTypes;

    /**
     * @var bool
     */
    private $usedOnDevice;

    /**
     * @var string
     */
    private $productCategory;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var bool
     */
    private $allowDownloadObsoleteFrInAdmin;

    /**
     * @var bool
     */
    private $allowDownloadObsoleteFrInPortal;

    /**
     * @var \DateTimeInterface
     */
    private $creationDate;

    /**
     * @var \DateTimeInterface
     */
    private $lastModifiedDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $productAttributes;

    /**
     * Constructor
     *
     * @var string $uniqueId
     * @var string $suiteName
     * @var string $version
     * @var string $description
     * @var string $state
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties
     * @var \Flexsim\FlexnetOperations\Type\ProductsListType $products
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelsListType $licenseModels
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey
     * @var \Flexsim\FlexnetOperations\Type\PartNumbersListType $partNumbers
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @var \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes
     * @var bool $usedOnDevice
     * @var string $productCategory
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var bool $allowDownloadObsoleteFrInAdmin
     * @var bool $allowDownloadObsoleteFrInPortal
     * @var \DateTimeInterface $creationDate
     * @var \DateTimeInterface $lastModifiedDate
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes
     */
    public function __construct(string $uniqueId, string $suiteName, string $version = null, string $description = null, string $state, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties = null, \Flexsim\FlexnetOperations\Type\ProductsListType $products = null, \Flexsim\FlexnetOperations\Type\LicenseModelsListType $licenseModels = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, \Flexsim\FlexnetOperations\Type\PartNumbersListType $partNumbers = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null, \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \DateTimeInterface $creationDate = null, \DateTimeInterface $lastModifiedDate = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes = null)
    {
        $this->uniqueId = $uniqueId;
        $this->suiteName = $suiteName;
        $this->version = $version;
        $this->description = $description;
        $this->state = $state;
        $this->licenseTechnology = $licenseTechnology;
        $this->licenseGenerator = $licenseGenerator;
        $this->packageProperties = $packageProperties;
        $this->products = $products;
        $this->licenseModels = $licenseModels;
        $this->trustedKey = $trustedKey;
        $this->virtualTrustedKey = $virtualTrustedKey;
        $this->partNumbers = $partNumbers;
        $this->hostType = $hostType;
        $this->hostTypes = $hostTypes;
        $this->usedOnDevice = $usedOnDevice;
        $this->productCategory = $productCategory;
        $this->customAttributes = $customAttributes;
        $this->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;
        $this->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->productAttributes = $productAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @var string $uniqueId
     * @var string $suiteName
     * @var string $version
     * @var string $description
     * @var string $state
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties
     * @var \Flexsim\FlexnetOperations\Type\ProductsListType $products
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelsListType $licenseModels
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey
     * @var \Flexsim\FlexnetOperations\Type\PartNumbersListType $partNumbers
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @var \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes
     * @var bool $usedOnDevice
     * @var string $productCategory
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var bool $allowDownloadObsoleteFrInAdmin
     * @var bool $allowDownloadObsoleteFrInPortal
     * @var \DateTimeInterface $creationDate
     * @var \DateTimeInterface $lastModifiedDate
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes
     */
    public static function create(string $uniqueId, string $suiteName, string $version = null, string $description = null, string $state, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties = null, \Flexsim\FlexnetOperations\Type\ProductsListType $products = null, \Flexsim\FlexnetOperations\Type\LicenseModelsListType $licenseModels = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, \Flexsim\FlexnetOperations\Type\PartNumbersListType $partNumbers = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null, \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \DateTimeInterface $creationDate = null, \DateTimeInterface $lastModifiedDate = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuiteName()
    {
        return $this->suiteName;
    }

    /**
     * @param string $suiteName
     * @return $this
     */
    public function setSuiteName($suiteName)
    {
        $this->suiteName = $suiteName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
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
     * @return \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType
     */
    public function getLicenseGenerator()
    {
        return $this->licenseGenerator;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator
     * @return $this
     */
    public function setLicenseGenerator($licenseGenerator)
    {
        $this->licenseGenerator = $licenseGenerator;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType
     */
    public function getPackageProperties()
    {
        return $this->packageProperties;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties
     * @return $this
     */
    public function setPackageProperties($packageProperties)
    {
        $this->packageProperties = $packageProperties;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductsListType
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductsListType $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelsListType
     */
    public function getLicenseModels()
    {
        return $this->licenseModels;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelsListType $licenseModels
     * @return $this
     */
    public function setLicenseModels($licenseModels)
    {
        $this->licenseModels = $licenseModels;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType
     */
    public function getTrustedKey()
    {
        return $this->trustedKey;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey
     * @return $this
     */
    public function setTrustedKey($trustedKey)
    {
        $this->trustedKey = $trustedKey;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType
     */
    public function getVirtualTrustedKey()
    {
        return $this->virtualTrustedKey;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey
     * @return $this
     */
    public function setVirtualTrustedKey($virtualTrustedKey)
    {
        $this->virtualTrustedKey = $virtualTrustedKey;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumbersListType
     */
    public function getPartNumbers()
    {
        return $this->partNumbers;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumbersListType $partNumbers
     * @return $this
     */
    public function setPartNumbers($partNumbers)
    {
        $this->partNumbers = $partNumbers;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    public function getHostType()
    {
        return $this->hostType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->hostType = $hostType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostTypeListType
     */
    public function getHostTypes()
    {
        return $this->hostTypes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes
     * @return $this
     */
    public function setHostTypes($hostTypes)
    {
        $this->hostTypes = $hostTypes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUsedOnDevice()
    {
        return $this->usedOnDevice;
    }

    /**
     * @param bool $usedOnDevice
     * @return $this
     */
    public function setUsedOnDevice($usedOnDevice)
    {
        $this->usedOnDevice = $usedOnDevice;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param string $productCategory
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
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
     * @return bool
     */
    public function getAllowDownloadObsoleteFrInAdmin()
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    /**
     * @param bool $allowDownloadObsoleteFrInAdmin
     * @return $this
     */
    public function setAllowDownloadObsoleteFrInAdmin($allowDownloadObsoleteFrInAdmin)
    {
        $this->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowDownloadObsoleteFrInPortal()
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    /**
     * @param bool $allowDownloadObsoleteFrInPortal
     * @return $this
     */
    public function setAllowDownloadObsoleteFrInPortal($allowDownloadObsoleteFrInPortal)
    {
        $this->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTimeInterface $creationDate
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param \DateTimeInterface $lastModifiedDate
     * @return $this
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getProductAttributes()
    {
        return $this->productAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes
     * @return $this
     */
    public function setProductAttributes($productAttributes)
    {
        $this->productAttributes = $productAttributes;
        return $this;
    }


}

