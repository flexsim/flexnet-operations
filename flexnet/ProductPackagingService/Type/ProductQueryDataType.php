<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductQueryDataType
{
    /**
     * @var string
     */
    private $uniqueId;

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
     * @var string
     */
    private $state;

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
     * @var \DateTimeInterface|null
     */
    private $creationDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $lastModifiedDate;

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
    public function __construct(string $uniqueId, string $productName, string $state, string $version = null, string $description = null, LicenseTechnologyIdentifierType $licenseTechnology = null, LicenseGeneratorIdentifierType $licenseGenerator = null, PackagePropertiesDataType $packageProperties = null, FeaturesListType $features = null, FeatureBundlesListType $featureBundles = null, LicenseModelsListType $licenseModels = null, TrustedKeyIdentifierType $trustedKey = null, TrustedKeyIdentifierType $virtualTrustedKey = null, PartNumbersListType $partNumbers = null, HostTypePKType $hostType = null, HostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \DateTimeInterface $creationDate = null, \DateTimeInterface $lastModifiedDate = null, AttributeDescriptorDataType $productAttributes = null, \DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null, string $upgradeEmailTemplateVarName = null)
    {
        $this->uniqueId = $uniqueId;
        $this->productName = $productName;
        $this->state = $state;
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
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->productAttributes = $productAttributes;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->upgradeEmailTemplateVarName = $upgradeEmailTemplateVarName;
    }

    public static function create(string $uniqueId, string $productName, string $state, string $version = null, string $description = null, LicenseTechnologyIdentifierType $licenseTechnology = null, LicenseGeneratorIdentifierType $licenseGenerator = null, PackagePropertiesDataType $packageProperties = null, FeaturesListType $features = null, FeatureBundlesListType $featureBundles = null, LicenseModelsListType $licenseModels = null, TrustedKeyIdentifierType $trustedKey = null, TrustedKeyIdentifierType $virtualTrustedKey = null, PartNumbersListType $partNumbers = null, HostTypePKType $hostType = null, HostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \DateTimeInterface $creationDate = null, \DateTimeInterface $lastModifiedDate = null, AttributeDescriptorDataType $productAttributes = null, \DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null, string $upgradeEmailTemplateVarName = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): ProductQueryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function withProductName(string $productName): ProductQueryDataType
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): ProductQueryDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): ProductQueryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function withState(string $state): ProductQueryDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?LicenseTechnologyIdentifierType $licenseTechnology): ProductQueryDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseGenerator(): ?LicenseGeneratorIdentifierType
    {
        return $this->licenseGenerator;
    }

    public function withLicenseGenerator(?LicenseGeneratorIdentifierType $licenseGenerator): ProductQueryDataType
    {
        $new = clone $this;
        $new->licenseGenerator = $licenseGenerator;

        return $new;
    }

    public function getPackageProperties(): ?PackagePropertiesDataType
    {
        return $this->packageProperties;
    }

    public function withPackageProperties(?PackagePropertiesDataType $packageProperties): ProductQueryDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    public function getFeatures(): ?FeaturesListType
    {
        return $this->features;
    }

    public function withFeatures(?FeaturesListType $features): ProductQueryDataType
    {
        $new = clone $this;
        $new->features = $features;

        return $new;
    }

    public function getFeatureBundles(): ?FeatureBundlesListType
    {
        return $this->featureBundles;
    }

    public function withFeatureBundles(?FeatureBundlesListType $featureBundles): ProductQueryDataType
    {
        $new = clone $this;
        $new->featureBundles = $featureBundles;

        return $new;
    }

    public function getLicenseModels(): ?LicenseModelsListType
    {
        return $this->licenseModels;
    }

    public function withLicenseModels(?LicenseModelsListType $licenseModels): ProductQueryDataType
    {
        $new = clone $this;
        $new->licenseModels = $licenseModels;

        return $new;
    }

    public function getTrustedKey(): ?TrustedKeyIdentifierType
    {
        return $this->trustedKey;
    }

    public function withTrustedKey(?TrustedKeyIdentifierType $trustedKey): ProductQueryDataType
    {
        $new = clone $this;
        $new->trustedKey = $trustedKey;

        return $new;
    }

    public function getVirtualTrustedKey(): ?TrustedKeyIdentifierType
    {
        return $this->virtualTrustedKey;
    }

    public function withVirtualTrustedKey(?TrustedKeyIdentifierType $virtualTrustedKey): ProductQueryDataType
    {
        $new = clone $this;
        $new->virtualTrustedKey = $virtualTrustedKey;

        return $new;
    }

    public function getPartNumbers(): ?PartNumbersListType
    {
        return $this->partNumbers;
    }

    public function withPartNumbers(?PartNumbersListType $partNumbers): ProductQueryDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }

    public function getHostType(): ?HostTypePKType
    {
        return $this->hostType;
    }

    public function withHostType(?HostTypePKType $hostType): ProductQueryDataType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getHostTypes(): ?HostTypeListType
    {
        return $this->hostTypes;
    }

    public function withHostTypes(?HostTypeListType $hostTypes): ProductQueryDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): ?bool
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(?bool $usedOnDevice): ProductQueryDataType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    public function withProductCategory(?string $productCategory): ProductQueryDataType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }

    public function getCustomAttributes(): ?AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?AttributeDescriptorDataType $customAttributes): ProductQueryDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): ?bool
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(?bool $allowDownloadObsoleteFrInAdmin): ProductQueryDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): ?bool
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(?bool $allowDownloadObsoleteFrInPortal): ProductQueryDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;

        return $new;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function withCreationDate(?\DateTimeInterface $creationDate): ProductQueryDataType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?\DateTimeInterface
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?\DateTimeInterface $lastModifiedDate): ProductQueryDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getProductAttributes(): ?AttributeDescriptorDataType
    {
        return $this->productAttributes;
    }

    public function withProductAttributes(?AttributeDescriptorDataType $productAttributes): ProductQueryDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): ProductQueryDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function withEndDate(?\DateTimeInterface $endDate): ProductQueryDataType
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    public function getUpgradeEmailTemplateVarName(): ?string
    {
        return $this->upgradeEmailTemplateVarName;
    }

    public function withUpgradeEmailTemplateVarName(?string $upgradeEmailTemplateVarName): ProductQueryDataType
    {
        $new = clone $this;
        $new->upgradeEmailTemplateVarName = $upgradeEmailTemplateVarName;

        return $new;
    }
}
