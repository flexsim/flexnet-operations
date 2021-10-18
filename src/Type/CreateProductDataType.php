<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateProductDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $productName;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    protected $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType
     */
    protected $licenseGenerator;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType
     */
    protected $packageProperties;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeaturesListType
     */
    protected $features;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundlesListType
     */
    protected $featureBundles;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelsListType
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
     * @var \Flexsim\FlexnetOperations\Type\PartNumbersListType
     */
    protected $partNumbers;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    protected $hostType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypeListType
     */
    protected $hostTypes;

    /**
     * @var bool
     */
    protected $usedOnDevice;

    /**
     * @var string
     */
    protected $productCategory;

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
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var \DateTimeInterface
     */
    protected $endDate;

    /**
     * @var string
     */
    protected $upgradeEmailTemplateVarName;

    /**
     * Constructor
     *
     * @var string $productName
     * @var string $version
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties
     * @var \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundlesListType $featureBundles
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
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $endDate
     * @var string $upgradeEmailTemplateVarName
     */
    public function __construct(string $productName, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties = null, \Flexsim\FlexnetOperations\Type\FeaturesListType $features = null, \Flexsim\FlexnetOperations\Type\FeatureBundlesListType $featureBundles = null, \Flexsim\FlexnetOperations\Type\LicenseModelsListType $licenseModels = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, \Flexsim\FlexnetOperations\Type\PartNumbersListType $partNumbers = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null, \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes = null, \DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null, string $upgradeEmailTemplateVarName = null)
    {
        $this->productName = $productName;
        $this->version = $version;
        $this->description = $description;
        $this->licenseTechnology = $licenseTechnology;
        $this->licenseGenerator = $licenseGenerator;
        $this->packageProperties = $packageProperties;
        $this->features = $features;
        $this->featureBundles = $featureBundles;
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
        $this->productAttributes = $productAttributes;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->upgradeEmailTemplateVarName = $upgradeEmailTemplateVarName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $productName
     * @var string $version
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties
     * @var \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundlesListType $featureBundles
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
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $endDate
     * @var string $upgradeEmailTemplateVarName
     */
    public static function create(string $productName, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties = null, \Flexsim\FlexnetOperations\Type\FeaturesListType $features = null, \Flexsim\FlexnetOperations\Type\FeatureBundlesListType $featureBundles = null, \Flexsim\FlexnetOperations\Type\LicenseModelsListType $licenseModels = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, \Flexsim\FlexnetOperations\Type\PartNumbersListType $partNumbers = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null, \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes = null, \DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null, string $upgradeEmailTemplateVarName = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
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
     * @return \Flexsim\FlexnetOperations\Type\FeaturesListType
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundlesListType
     */
    public function getFeatureBundles()
    {
        return $this->featureBundles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundlesListType $featureBundles
     * @return $this
     */
    public function setFeatureBundles($featureBundles)
    {
        $this->featureBundles = $featureBundles;
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
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpgradeEmailTemplateVarName()
    {
        return $this->upgradeEmailTemplateVarName;
    }

    /**
     * @param string $upgradeEmailTemplateVarName
     * @return $this
     */
    public function setUpgradeEmailTemplateVarName($upgradeEmailTemplateVarName)
    {
        $this->upgradeEmailTemplateVarName = $upgradeEmailTemplateVarName;
        return $this;
    }
}
