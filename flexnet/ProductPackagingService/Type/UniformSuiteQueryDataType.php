<?php

namespace Flexnet\ProductPackagingService\Type;

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
     * @var \Flexnet\ProductPackagingService\Type\ProductsListType|null
     */
    private $products;

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
     * Constructor
     */
    public function __construct(string $uniqueId, string $suiteName, string $state, string $version = null, string $description = null, LicenseTechnologyIdentifierType $licenseTechnology = null, LicenseGeneratorIdentifierType $licenseGenerator = null, PackagePropertiesDataType $packageProperties = null, ProductsListType $products = null, LicenseModelsListType $licenseModels = null, TrustedKeyIdentifierType $trustedKey = null, TrustedKeyIdentifierType $virtualTrustedKey = null, PartNumbersListType $partNumbers = null, HostTypePKType $hostType = null, HostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \DateTimeInterface $creationDate = null, \DateTimeInterface $lastModifiedDate = null, AttributeDescriptorDataType $productAttributes = null)
    {
        $this->uniqueId = $uniqueId;
        $this->suiteName = $suiteName;
        $this->state = $state;
        $this->version = $version;
        $this->description = $description;
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

    public static function create(string $uniqueId, string $suiteName, string $state, string $version = null, string $description = null, LicenseTechnologyIdentifierType $licenseTechnology = null, LicenseGeneratorIdentifierType $licenseGenerator = null, PackagePropertiesDataType $packageProperties = null, ProductsListType $products = null, LicenseModelsListType $licenseModels = null, TrustedKeyIdentifierType $trustedKey = null, TrustedKeyIdentifierType $virtualTrustedKey = null, PartNumbersListType $partNumbers = null, HostTypePKType $hostType = null, HostTypeListType $hostTypes = null, bool $usedOnDevice = null, string $productCategory = null, AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, \DateTimeInterface $creationDate = null, \DateTimeInterface $lastModifiedDate = null, AttributeDescriptorDataType $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getSuiteName(): string
    {
        return $this->suiteName;
    }

    public function withSuiteName(string $suiteName): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->suiteName = $suiteName;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function withState(string $state): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?LicenseTechnologyIdentifierType $licenseTechnology): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseGenerator(): ?LicenseGeneratorIdentifierType
    {
        return $this->licenseGenerator;
    }

    public function withLicenseGenerator(?LicenseGeneratorIdentifierType $licenseGenerator): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->licenseGenerator = $licenseGenerator;

        return $new;
    }

    public function getPackageProperties(): ?PackagePropertiesDataType
    {
        return $this->packageProperties;
    }

    public function withPackageProperties(?PackagePropertiesDataType $packageProperties): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    public function getProducts(): ?ProductsListType
    {
        return $this->products;
    }

    public function withProducts(?ProductsListType $products): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->products = $products;

        return $new;
    }

    public function getLicenseModels(): ?LicenseModelsListType
    {
        return $this->licenseModels;
    }

    public function withLicenseModels(?LicenseModelsListType $licenseModels): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->licenseModels = $licenseModels;

        return $new;
    }

    public function getTrustedKey(): ?TrustedKeyIdentifierType
    {
        return $this->trustedKey;
    }

    public function withTrustedKey(?TrustedKeyIdentifierType $trustedKey): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->trustedKey = $trustedKey;

        return $new;
    }

    public function getVirtualTrustedKey(): ?TrustedKeyIdentifierType
    {
        return $this->virtualTrustedKey;
    }

    public function withVirtualTrustedKey(?TrustedKeyIdentifierType $virtualTrustedKey): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->virtualTrustedKey = $virtualTrustedKey;

        return $new;
    }

    public function getPartNumbers(): ?PartNumbersListType
    {
        return $this->partNumbers;
    }

    public function withPartNumbers(?PartNumbersListType $partNumbers): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }

    public function getHostType(): ?HostTypePKType
    {
        return $this->hostType;
    }

    public function withHostType(?HostTypePKType $hostType): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getHostTypes(): ?HostTypeListType
    {
        return $this->hostTypes;
    }

    public function withHostTypes(?HostTypeListType $hostTypes): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): ?bool
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(?bool $usedOnDevice): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    public function withProductCategory(?string $productCategory): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }

    public function getCustomAttributes(): ?AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?AttributeDescriptorDataType $customAttributes): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): ?bool
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(?bool $allowDownloadObsoleteFrInAdmin): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): ?bool
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(?bool $allowDownloadObsoleteFrInPortal): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;

        return $new;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function withCreationDate(?\DateTimeInterface $creationDate): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?\DateTimeInterface
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?\DateTimeInterface $lastModifiedDate): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getProductAttributes(): ?AttributeDescriptorDataType
    {
        return $this->productAttributes;
    }

    public function withProductAttributes(?AttributeDescriptorDataType $productAttributes): UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
