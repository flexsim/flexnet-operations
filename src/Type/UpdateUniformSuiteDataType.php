<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUniformSuiteDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SuiteIdentifierType
     */
    protected $suiteIdentifier;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType
     */
    protected $licenseGenerator;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType
     */
    protected $packageProperties;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductsListType
     */
    protected $products;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType
     */
    protected $licenseModels;

    /**
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType
     */
    protected $trustedKey;

    /**
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType
     */
    protected $virtualTrustedKey;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType
     */
    protected $partNumbers;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    protected $hostType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType
     */
    protected $hostTypes;

    /**
     * @var bool
     */
    protected $usedOnDevice;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * @var bool
     */
    protected $allowDownloadObsoleteFrInAdmin;

    /**
     * @var bool
     */
    protected $allowDownloadObsoleteFrInPortal;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $productAttributes;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     * @param string $name
     * @param string $version
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator
     * @param \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties
     * @param \Flexsim\FlexnetOperations\Type\UpdateProductsListType $products
     * @param \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType $licenseModels
     * @param \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey
     * @param \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey
     * @param \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType $partNumbers
     * @param \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @param \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType $hostTypes
     * @param bool $usedOnDevice
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @param bool $allowDownloadObsoleteFrInAdmin
     * @param bool $allowDownloadObsoleteFrInPortal
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier, string $name = null, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties = null, \Flexsim\FlexnetOperations\Type\UpdateProductsListType $products = null, \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType $licenseModels = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType $partNumbers = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null, \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType $hostTypes = null, bool $usedOnDevice = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes = null)
    {
        $this->suiteIdentifier = $suiteIdentifier;
        $this->name = $name;
        $this->version = $version;
        $this->description = $description;
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
        $this->customAttributes = $customAttributes;
        $this->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;
        $this->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;
        $this->productAttributes = $productAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     * @param string $name
     * @param string $version
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator
     * @param \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties
     * @param \Flexsim\FlexnetOperations\Type\UpdateProductsListType $products
     * @param \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType $licenseModels
     * @param \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey
     * @param \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey
     * @param \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType $partNumbers
     * @param \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @param \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType $hostTypes
     * @param bool $usedOnDevice
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @param bool $allowDownloadObsoleteFrInAdmin
     * @param bool $allowDownloadObsoleteFrInPortal
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier, string $name = null, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties = null, \Flexsim\FlexnetOperations\Type\UpdateProductsListType $products = null, \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType $licenseModels = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType $partNumbers = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null, \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType $hostTypes = null, bool $usedOnDevice = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SuiteIdentifierType
     */
    public function getSuiteIdentifier()
    {
        return $this->suiteIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     * @return $this
     */
    public function setSuiteIdentifier($suiteIdentifier)
    {
        $this->suiteIdentifier = $suiteIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return \Flexsim\FlexnetOperations\Type\UpdateProductsListType
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateProductsListType $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType
     */
    public function getLicenseModels()
    {
        return $this->licenseModels;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType $licenseModels
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
     * @return \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType
     */
    public function getPartNumbers()
    {
        return $this->partNumbers;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType $partNumbers
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
     * @return \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType
     */
    public function getHostTypes()
    {
        return $this->hostTypes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType $hostTypes
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
