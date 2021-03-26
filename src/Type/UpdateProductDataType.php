<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateProductDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType
     */
    private $licenseGenerator;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType
     */
    private $packageProperties;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType
     */
    private $features;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureBundlesListType
     */
    private $featureBundles;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType
     */
    private $partNumbers;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType
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
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    private $hostType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType
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
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $productAttributes;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \DateTimeInterface
     */
    private $endDate;

    /**
     * @var string
     */
    private $upgradeEmailTemplateVarName;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @var string $name
     * @var string $version
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureBundlesListType $featureBundles
     * @var \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType $partNumbers
     * @var \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType $licenseModels
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @var \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType $hostTypes
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
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier, string $name = null, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties = null, \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features = null, \Flexsim\FlexnetOperations\Type\UpdateFeatureBundlesListType $featureBundles = null, \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType $partNumbers = null, \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType $licenseModels = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null, \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes = null, \DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null, string $upgradeEmailTemplateVarName = null)
    {
        $this->productIdentifier = $productIdentifier;
        $this->name = $name;
        $this->version = $version;
        $this->description = $description;
        $this->licenseGenerator = $licenseGenerator;
        $this->packageProperties = $packageProperties;
        $this->features = $features;
        $this->featureBundles = $featureBundles;
        $this->partNumbers = $partNumbers;
        $this->licenseModels = $licenseModels;
        $this->trustedKey = $trustedKey;
        $this->virtualTrustedKey = $virtualTrustedKey;
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
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @var string $name
     * @var string $version
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator
     * @var \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureBundlesListType $featureBundles
     * @var \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType $partNumbers
     * @var \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType $licenseModels
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @var \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType $hostTypes
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
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier, string $name = null, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, \Flexsim\FlexnetOperations\Type\PackagePropertiesDataType $packageProperties = null, \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features = null, \Flexsim\FlexnetOperations\Type\UpdateFeatureBundlesListType $featureBundles = null, \Flexsim\FlexnetOperations\Type\UpdatePartNumbersListType $partNumbers = null, \Flexsim\FlexnetOperations\Type\UpdateLicenseModelsListType $licenseModels = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $trustedKey = null, \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null, \Flexsim\FlexnetOperations\Type\UpdateHostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $productAttributes = null, \DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null, string $upgradeEmailTemplateVarName = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getProductIdentifier()
    {
        return $this->productIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @return $this
     */
    public function setProductIdentifier($productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
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
     * @return \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateFeatureBundlesListType
     */
    public function getFeatureBundles()
    {
        return $this->featureBundles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateFeatureBundlesListType $featureBundles
     * @return $this
     */
    public function setFeatureBundles($featureBundles)
    {
        $this->featureBundles = $featureBundles;
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

