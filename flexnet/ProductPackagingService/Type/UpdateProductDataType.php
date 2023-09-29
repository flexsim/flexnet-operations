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
     */
    public function __construct(ProductIdentifierType $productIdentifier, string $name = null, string $version = null, string $description = null, LicenseGeneratorIdentifierType $licenseGenerator = null, PackagePropertiesDataType $packageProperties = null, UpdateFeaturesListType $features = null, UpdateFeatureBundlesListType $featureBundles = null, UpdatePartNumbersListType $partNumbers = null, UpdateLicenseModelsListType $licenseModels = null, TrustedKeyIdentifierType $trustedKey = null, TrustedKeyIdentifierType $virtualTrustedKey = null, HostTypePKType $hostType = null, UpdateHostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType $productAttributes = null, \DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null, string $upgradeEmailTemplateVarName = null)
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

    public static function create(ProductIdentifierType $productIdentifier, string $name = null, string $version = null, string $description = null, LicenseGeneratorIdentifierType $licenseGenerator = null, PackagePropertiesDataType $packageProperties = null, UpdateFeaturesListType $features = null, UpdateFeatureBundlesListType $featureBundles = null, UpdatePartNumbersListType $partNumbers = null, UpdateLicenseModelsListType $licenseModels = null, TrustedKeyIdentifierType $trustedKey = null, TrustedKeyIdentifierType $virtualTrustedKey = null, HostTypePKType $hostType = null, UpdateHostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType $productAttributes = null, \DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null, string $upgradeEmailTemplateVarName = null)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(ProductIdentifierType $productIdentifier): UpdateProductDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): UpdateProductDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): UpdateProductDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): UpdateProductDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getLicenseGenerator(): ?LicenseGeneratorIdentifierType
    {
        return $this->licenseGenerator;
    }

    public function withLicenseGenerator(?LicenseGeneratorIdentifierType $licenseGenerator): UpdateProductDataType
    {
        $new = clone $this;
        $new->licenseGenerator = $licenseGenerator;

        return $new;
    }

    public function getPackageProperties(): ?PackagePropertiesDataType
    {
        return $this->packageProperties;
    }

    public function withPackageProperties(?PackagePropertiesDataType $packageProperties): UpdateProductDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    public function getFeatures(): ?UpdateFeaturesListType
    {
        return $this->features;
    }

    public function withFeatures(?UpdateFeaturesListType $features): UpdateProductDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }

    public function getFeatureBundles(): ?UpdateFeatureBundlesListType
    {
        return $this->featureBundles;
    }

    public function withFeatureBundles(?UpdateFeatureBundlesListType $featureBundles): UpdateProductDataType
    {
        $new = clone $this;
        $new->featureBundles = $featureBundles;

        return $new;
    }

    public function getPartNumbers(): ?UpdatePartNumbersListType
    {
        return $this->partNumbers;
    }

    public function withPartNumbers(?UpdatePartNumbersListType $partNumbers): UpdateProductDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }

    public function getLicenseModels(): ?UpdateLicenseModelsListType
    {
        return $this->licenseModels;
    }

    public function withLicenseModels(?UpdateLicenseModelsListType $licenseModels): UpdateProductDataType
    {
        $new = clone $this;
        $new->licenseModels = $licenseModels;

        return $new;
    }

    public function getTrustedKey(): ?TrustedKeyIdentifierType
    {
        return $this->trustedKey;
    }

    public function withTrustedKey(?TrustedKeyIdentifierType $trustedKey): UpdateProductDataType
    {
        $new = clone $this;
        $new->trustedKey = $trustedKey;

        return $new;
    }

    public function getVirtualTrustedKey(): ?TrustedKeyIdentifierType
    {
        return $this->virtualTrustedKey;
    }

    public function withVirtualTrustedKey(?TrustedKeyIdentifierType $virtualTrustedKey): UpdateProductDataType
    {
        $new = clone $this;
        $new->virtualTrustedKey = $virtualTrustedKey;

        return $new;
    }

    public function getHostType(): ?HostTypePKType
    {
        return $this->hostType;
    }

    public function withHostType(?HostTypePKType $hostType): UpdateProductDataType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getHostTypes(): ?UpdateHostTypeListType
    {
        return $this->hostTypes;
    }

    public function withHostTypes(?UpdateHostTypeListType $hostTypes): UpdateProductDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): ?bool
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(?bool $usedOnDevice): UpdateProductDataType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    public function withProductCategory(?string $productCategory): UpdateProductDataType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }

    public function getCustomAttributes(): ?AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?AttributeDescriptorDataType $customAttributes): UpdateProductDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): ?bool
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(?bool $allowDownloadObsoleteFrInAdmin): UpdateProductDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): ?bool
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(?bool $allowDownloadObsoleteFrInPortal): UpdateProductDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;

        return $new;
    }

    public function getProductAttributes(): ?AttributeDescriptorDataType
    {
        return $this->productAttributes;
    }

    public function withProductAttributes(?AttributeDescriptorDataType $productAttributes): UpdateProductDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): UpdateProductDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function withEndDate(?\DateTimeInterface $endDate): UpdateProductDataType
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    public function getUpgradeEmailTemplateVarName(): ?string
    {
        return $this->upgradeEmailTemplateVarName;
    }

    public function withUpgradeEmailTemplateVarName(?string $upgradeEmailTemplateVarName): UpdateProductDataType
    {
        $new = clone $this;
        $new->upgradeEmailTemplateVarName = $upgradeEmailTemplateVarName;

        return $new;
    }
}
