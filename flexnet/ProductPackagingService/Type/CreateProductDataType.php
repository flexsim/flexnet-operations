<?php

namespace Flexnet\ProductPackagingService\Type;

class CreateProductDataType
{
    /**
     * @var string
     */
    private $productName;

    /**
     * @var string|null
     */
    private $version;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType|null
     */
    private $licenseTechnology;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null
     */
    private $licenseGenerator;

    /**
     * @var \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null
     */
    private $packageProperties;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FeaturesListType|null
     */
    private $features;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundlesListType|null
     */
    private $featureBundles;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseModelsListType|null
     */
    private $licenseModels;

    /**
     * @var \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null
     */
    private $trustedKey;

    /**
     * @var \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null
     */
    private $virtualTrustedKey;

    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumbersListType|null
     */
    private $partNumbers;

    /**
     * @var \Flexnet\ProductPackagingService\Type\HostTypePKType|null
     */
    private $hostType;

    /**
     * @var \Flexnet\ProductPackagingService\Type\HostTypeListType|null
     */
    private $hostTypes;

    /**
     * @var bool|null
     */
    private $usedOnDevice;

    /**
     * @var string|null
     */
    private $productCategory;

    /**
     * @var \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null
     */
    private $customAttributes;

    /**
     * @var bool|null
     */
    private $allowDownloadObsoleteFrInAdmin;

    /**
     * @var bool|null
     */
    private $allowDownloadObsoleteFrInPortal;

    /**
     * @var \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null
     */
    private $productAttributes;

    /**
     * @var \DateTimeInterface|null
     */
    private $startDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $endDate;

    /**
     * @var string|null
     */
    private $upgradeEmailTemplateVarName;

    /**
     * Constructor
     *
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null  $licenseGenerator
     * @param  \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null  $packageProperties
     * @param  \Flexnet\ProductPackagingService\Type\FeaturesListType|null  $features
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundlesListType|null  $featureBundles
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelsListType|null  $licenseModels
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $trustedKey
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $virtualTrustedKey
     * @param  \Flexnet\ProductPackagingService\Type\PartNumbersListType|null  $partNumbers
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|null  $hostType
     * @param  \Flexnet\ProductPackagingService\Type\HostTypeListType|null  $hostTypes
     * @param  bool|null  $usedOnDevice
     * @param  string|null  $productCategory
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  bool|null  $allowDownloadObsoleteFrInAdmin
     * @param  bool|null  $allowDownloadObsoleteFrInPortal
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $productAttributes
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $endDate
     * @param  string|null  $upgradeEmailTemplateVarName
     */
    public function __construct(string $productName, string|null $version = null, string|null $description = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, LicenseGeneratorIdentifierType|null $licenseGenerator = null, PackagePropertiesDataType|null $packageProperties = null, FeaturesListType|null $features = null, FeatureBundlesListType|null $featureBundles = null, LicenseModelsListType|null $licenseModels = null, TrustedKeyIdentifierType|null $trustedKey = null, TrustedKeyIdentifierType|null $virtualTrustedKey = null, PartNumbersListType|null $partNumbers = null, HostTypePKType|null $hostType = null, HostTypeListType|null $hostTypes = null, bool|null $usedOnDevice = null, string|null $productCategory = null, AttributeDescriptorDataType|null $customAttributes = null, bool|null $allowDownloadObsoleteFrInAdmin = null, bool|null $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType|null $productAttributes = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $endDate = null, string|null $upgradeEmailTemplateVarName = null)
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
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null  $licenseGenerator
     * @param  \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null  $packageProperties
     * @param  \Flexnet\ProductPackagingService\Type\FeaturesListType|null  $features
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundlesListType|null  $featureBundles
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelsListType|null  $licenseModels
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $trustedKey
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $virtualTrustedKey
     * @param  \Flexnet\ProductPackagingService\Type\PartNumbersListType|null  $partNumbers
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|null  $hostType
     * @param  \Flexnet\ProductPackagingService\Type\HostTypeListType|null  $hostTypes
     * @param  bool|null  $usedOnDevice
     * @param  string|null  $productCategory
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  bool|null  $allowDownloadObsoleteFrInAdmin
     * @param  bool|null  $allowDownloadObsoleteFrInPortal
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $productAttributes
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $endDate
     * @param  string|null  $upgradeEmailTemplateVarName
     */
    public static function create(string $productName, string|null $version = null, string|null $description = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, LicenseGeneratorIdentifierType|null $licenseGenerator = null, PackagePropertiesDataType|null $packageProperties = null, FeaturesListType|null $features = null, FeatureBundlesListType|null $featureBundles = null, LicenseModelsListType|null $licenseModels = null, TrustedKeyIdentifierType|null $trustedKey = null, TrustedKeyIdentifierType|null $virtualTrustedKey = null, PartNumbersListType|null $partNumbers = null, HostTypePKType|null $hostType = null, HostTypeListType|null $hostTypes = null, bool|null $usedOnDevice = null, string|null $productCategory = null, AttributeDescriptorDataType|null $customAttributes = null, bool|null $allowDownloadObsoleteFrInAdmin = null, bool|null $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType|null $productAttributes = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $endDate = null, string|null $upgradeEmailTemplateVarName = null)
    {
        return new static(...\func_get_args());
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function withProductName(string $productName): CreateProductDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): CreateProductDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): CreateProductDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType|null
     */
    public function getLicenseTechnology(): LicenseTechnologyIdentifierType|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     */
    public function withLicenseTechnology(LicenseTechnologyIdentifierType|null $licenseTechnology): CreateProductDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null
     */
    public function getLicenseGenerator(): LicenseGeneratorIdentifierType|null
    {
        return $this->licenseGenerator;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null  $licenseGenerator
     */
    public function withLicenseGenerator(LicenseGeneratorIdentifierType|null $licenseGenerator): CreateProductDataType
    {
        $new = clone $this;
        $new->licenseGenerator = $licenseGenerator;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null
     */
    public function getPackageProperties(): PackagePropertiesDataType|null
    {
        return $this->packageProperties;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null  $packageProperties
     */
    public function withPackageProperties(PackagePropertiesDataType|null $packageProperties): CreateProductDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeaturesListType|null
     */
    public function getFeatures(): FeaturesListType|null
    {
        return $this->features;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeaturesListType|null  $features
     */
    public function withFeatures(FeaturesListType|null $features): CreateProductDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundlesListType|null
     */
    public function getFeatureBundles(): FeatureBundlesListType|null
    {
        return $this->featureBundles;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundlesListType|null  $featureBundles
     */
    public function withFeatureBundles(FeatureBundlesListType|null $featureBundles): CreateProductDataType
    {
        $new = clone $this;
        $new->featureBundles = $featureBundles;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseModelsListType|null
     */
    public function getLicenseModels(): LicenseModelsListType|null
    {
        return $this->licenseModels;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelsListType|null  $licenseModels
     */
    public function withLicenseModels(LicenseModelsListType|null $licenseModels): CreateProductDataType
    {
        $new = clone $this;
        $new->licenseModels = $licenseModels;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null
     */
    public function getTrustedKey(): TrustedKeyIdentifierType|null
    {
        return $this->trustedKey;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $trustedKey
     */
    public function withTrustedKey(TrustedKeyIdentifierType|null $trustedKey): CreateProductDataType
    {
        $new = clone $this;
        $new->trustedKey = $trustedKey;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null
     */
    public function getVirtualTrustedKey(): TrustedKeyIdentifierType|null
    {
        return $this->virtualTrustedKey;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $virtualTrustedKey
     */
    public function withVirtualTrustedKey(TrustedKeyIdentifierType|null $virtualTrustedKey): CreateProductDataType
    {
        $new = clone $this;
        $new->virtualTrustedKey = $virtualTrustedKey;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumbersListType|null
     */
    public function getPartNumbers(): PartNumbersListType|null
    {
        return $this->partNumbers;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumbersListType|null  $partNumbers
     */
    public function withPartNumbers(PartNumbersListType|null $partNumbers): CreateProductDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\HostTypePKType|null
     */
    public function getHostType(): HostTypePKType|null
    {
        return $this->hostType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|null  $hostType
     */
    public function withHostType(HostTypePKType|null $hostType): CreateProductDataType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\HostTypeListType|null
     */
    public function getHostTypes(): HostTypeListType|null
    {
        return $this->hostTypes;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\HostTypeListType|null  $hostTypes
     */
    public function withHostTypes(HostTypeListType|null $hostTypes): CreateProductDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): bool|null
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(bool|null $usedOnDevice): CreateProductDataType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getProductCategory(): string|null
    {
        return $this->productCategory;
    }

    public function withProductCategory(string|null $productCategory): CreateProductDataType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null
     */
    public function getCustomAttributes(): AttributeDescriptorDataType|null
    {
        return $this->customAttributes;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $customAttributes
     */
    public function withCustomAttributes(AttributeDescriptorDataType|null $customAttributes): CreateProductDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): bool|null
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(bool|null $allowDownloadObsoleteFrInAdmin): CreateProductDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): bool|null
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(bool|null $allowDownloadObsoleteFrInPortal): CreateProductDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null
     */
    public function getProductAttributes(): AttributeDescriptorDataType|null
    {
        return $this->productAttributes;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $productAttributes
     */
    public function withProductAttributes(AttributeDescriptorDataType|null $productAttributes): CreateProductDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface|null $startDate): CreateProductDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getEndDate(): \DateTimeInterface|null
    {
        return $this->endDate;
    }

    public function withEndDate(\DateTimeInterface|null $endDate): CreateProductDataType
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    public function getUpgradeEmailTemplateVarName(): string|null
    {
        return $this->upgradeEmailTemplateVarName;
    }

    public function withUpgradeEmailTemplateVarName(string|null $upgradeEmailTemplateVarName): CreateProductDataType
    {
        $new = clone $this;
        $new->upgradeEmailTemplateVarName = $upgradeEmailTemplateVarName;

        return $new;
    }
}
