<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateProductDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $version;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null
     */
    private $licenseGenerator;

    /**
     * @var \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null
     */
    private $packageProperties;

    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null
     */
    private $features;

    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateFeatureBundlesListType|null
     */
    private $featureBundles;

    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType|null
     */
    private $partNumbers;

    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType|null
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
     * @var \Flexnet\ProductPackagingService\Type\HostTypePKType|null
     */
    private $hostType;

    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateHostTypeListType|null
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
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     * @param  string|null  $name
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null  $licenseGenerator
     * @param  \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null  $packageProperties
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null  $features
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundlesListType|null  $featureBundles
     * @param  \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType|null  $partNumbers
     * @param  \Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType|null  $licenseModels
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $trustedKey
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $virtualTrustedKey
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|null  $hostType
     * @param  \Flexnet\ProductPackagingService\Type\UpdateHostTypeListType|null  $hostTypes
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
    public function __construct(ProductIdentifierType $productIdentifier, string|null $name = null, string|null $version = null, string|null $description = null, LicenseGeneratorIdentifierType|null $licenseGenerator = null, PackagePropertiesDataType|null $packageProperties = null, UpdateFeaturesListType|null $features = null, UpdateFeatureBundlesListType|null $featureBundles = null, UpdatePartNumbersListType|null $partNumbers = null, UpdateLicenseModelsListType|null $licenseModels = null, TrustedKeyIdentifierType|null $trustedKey = null, TrustedKeyIdentifierType|null $virtualTrustedKey = null, HostTypePKType|null $hostType = null, UpdateHostTypeListType|null $hostTypes = null, bool|null $usedOnDevice = null, string|null $productCategory = null, AttributeDescriptorDataType|null $customAttributes = null, bool|null $allowDownloadObsoleteFrInAdmin = null, bool|null $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType|null $productAttributes = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $endDate = null, string|null $upgradeEmailTemplateVarName = null)
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
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     * @param  string|null  $name
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null  $licenseGenerator
     * @param  \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null  $packageProperties
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null  $features
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundlesListType|null  $featureBundles
     * @param  \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType|null  $partNumbers
     * @param  \Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType|null  $licenseModels
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $trustedKey
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $virtualTrustedKey
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|null  $hostType
     * @param  \Flexnet\ProductPackagingService\Type\UpdateHostTypeListType|null  $hostTypes
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
    public static function create(ProductIdentifierType $productIdentifier, string|null $name = null, string|null $version = null, string|null $description = null, LicenseGeneratorIdentifierType|null $licenseGenerator = null, PackagePropertiesDataType|null $packageProperties = null, UpdateFeaturesListType|null $features = null, UpdateFeatureBundlesListType|null $featureBundles = null, UpdatePartNumbersListType|null $partNumbers = null, UpdateLicenseModelsListType|null $licenseModels = null, TrustedKeyIdentifierType|null $trustedKey = null, TrustedKeyIdentifierType|null $virtualTrustedKey = null, HostTypePKType|null $hostType = null, UpdateHostTypeListType|null $hostTypes = null, bool|null $usedOnDevice = null, string|null $productCategory = null, AttributeDescriptorDataType|null $customAttributes = null, bool|null $allowDownloadObsoleteFrInAdmin = null, bool|null $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType|null $productAttributes = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $endDate = null, string|null $upgradeEmailTemplateVarName = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     */
    public function withProductIdentifier(ProductIdentifierType $productIdentifier): UpdateProductDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getName(): string|null
    {
        return $this->name;
    }

    public function withName(string|null $name): UpdateProductDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): UpdateProductDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): UpdateProductDataType
    {
        $new = clone $this;
        $new->description = $description;

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
    public function withLicenseGenerator(LicenseGeneratorIdentifierType|null $licenseGenerator): UpdateProductDataType
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
    public function withPackageProperties(PackagePropertiesDataType|null $packageProperties): UpdateProductDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null
     */
    public function getFeatures(): UpdateFeaturesListType|null
    {
        return $this->features;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeaturesListType|null  $features
     */
    public function withFeatures(UpdateFeaturesListType|null $features): UpdateProductDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateFeatureBundlesListType|null
     */
    public function getFeatureBundles(): UpdateFeatureBundlesListType|null
    {
        return $this->featureBundles;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundlesListType|null  $featureBundles
     */
    public function withFeatureBundles(UpdateFeatureBundlesListType|null $featureBundles): UpdateProductDataType
    {
        $new = clone $this;
        $new->featureBundles = $featureBundles;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType|null
     */
    public function getPartNumbers(): UpdatePartNumbersListType|null
    {
        return $this->partNumbers;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType|null  $partNumbers
     */
    public function withPartNumbers(UpdatePartNumbersListType|null $partNumbers): UpdateProductDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType|null
     */
    public function getLicenseModels(): UpdateLicenseModelsListType|null
    {
        return $this->licenseModels;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType|null  $licenseModels
     */
    public function withLicenseModels(UpdateLicenseModelsListType|null $licenseModels): UpdateProductDataType
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
    public function withTrustedKey(TrustedKeyIdentifierType|null $trustedKey): UpdateProductDataType
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
    public function withVirtualTrustedKey(TrustedKeyIdentifierType|null $virtualTrustedKey): UpdateProductDataType
    {
        $new = clone $this;
        $new->virtualTrustedKey = $virtualTrustedKey;

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
    public function withHostType(HostTypePKType|null $hostType): UpdateProductDataType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateHostTypeListType|null
     */
    public function getHostTypes(): UpdateHostTypeListType|null
    {
        return $this->hostTypes;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateHostTypeListType|null  $hostTypes
     */
    public function withHostTypes(UpdateHostTypeListType|null $hostTypes): UpdateProductDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): bool|null
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(bool|null $usedOnDevice): UpdateProductDataType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getProductCategory(): string|null
    {
        return $this->productCategory;
    }

    public function withProductCategory(string|null $productCategory): UpdateProductDataType
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
    public function withCustomAttributes(AttributeDescriptorDataType|null $customAttributes): UpdateProductDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): bool|null
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(bool|null $allowDownloadObsoleteFrInAdmin): UpdateProductDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): bool|null
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(bool|null $allowDownloadObsoleteFrInPortal): UpdateProductDataType
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
    public function withProductAttributes(AttributeDescriptorDataType|null $productAttributes): UpdateProductDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface|null $startDate): UpdateProductDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getEndDate(): \DateTimeInterface|null
    {
        return $this->endDate;
    }

    public function withEndDate(\DateTimeInterface|null $endDate): UpdateProductDataType
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    public function getUpgradeEmailTemplateVarName(): string|null
    {
        return $this->upgradeEmailTemplateVarName;
    }

    public function withUpgradeEmailTemplateVarName(string|null $upgradeEmailTemplateVarName): UpdateProductDataType
    {
        $new = clone $this;
        $new->upgradeEmailTemplateVarName = $upgradeEmailTemplateVarName;

        return $new;
    }
}
