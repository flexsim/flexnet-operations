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
    public function __construct(string $uniqueId, string $suiteName, string $state, ?string $version = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, ?\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, ?\Flexnet\ProductPackagingService\Type\PackagePropertiesDataType $packageProperties = null, ?\Flexnet\ProductPackagingService\Type\ProductsListType $products = null, ?\Flexnet\ProductPackagingService\Type\LicenseModelsListType $licenseModels = null, ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $trustedKey = null, ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, ?\Flexnet\ProductPackagingService\Type\PartNumbersListType $partNumbers = null, ?\Flexnet\ProductPackagingService\Type\HostTypePKType $hostType = null, ?\Flexnet\ProductPackagingService\Type\HostTypeListType $hostTypes = null, ?bool $usedOnDevice = null, ?string $productCategory = null, ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $customAttributes = null, ?bool $allowDownloadObsoleteFrInAdmin = null, ?bool $allowDownloadObsoleteFrInPortal = null, ?\DateTimeInterface $creationDate = null, ?\DateTimeInterface $lastModifiedDate = null, ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $productAttributes = null)
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

    public static function create(string $uniqueId, string $suiteName, string $state, ?string $version = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, ?\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, ?\Flexnet\ProductPackagingService\Type\PackagePropertiesDataType $packageProperties = null, ?\Flexnet\ProductPackagingService\Type\ProductsListType $products = null, ?\Flexnet\ProductPackagingService\Type\LicenseModelsListType $licenseModels = null, ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $trustedKey = null, ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, ?\Flexnet\ProductPackagingService\Type\PartNumbersListType $partNumbers = null, ?\Flexnet\ProductPackagingService\Type\HostTypePKType $hostType = null, ?\Flexnet\ProductPackagingService\Type\HostTypeListType $hostTypes = null, ?bool $usedOnDevice = null, ?string $productCategory = null, ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $customAttributes = null, ?bool $allowDownloadObsoleteFrInAdmin = null, ?bool $allowDownloadObsoleteFrInPortal = null, ?\DateTimeInterface $creationDate = null, ?\DateTimeInterface $lastModifiedDate = null, ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getSuiteName(): string
    {
        return $this->suiteName;
    }

    public function withSuiteName(string $suiteName): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->suiteName = $suiteName;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function withState(string $state): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?\Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?\Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType $licenseTechnology): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getLicenseGenerator(): ?\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType
    {
        return $this->licenseGenerator;
    }

    public function withLicenseGenerator(?\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType $licenseGenerator): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->licenseGenerator = $licenseGenerator;

        return $new;
    }

    public function getPackageProperties(): ?\Flexnet\ProductPackagingService\Type\PackagePropertiesDataType
    {
        return $this->packageProperties;
    }

    public function withPackageProperties(?\Flexnet\ProductPackagingService\Type\PackagePropertiesDataType $packageProperties): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    public function getProducts(): ?\Flexnet\ProductPackagingService\Type\ProductsListType
    {
        return $this->products;
    }

    public function withProducts(?\Flexnet\ProductPackagingService\Type\ProductsListType $products): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->products = $products;

        return $new;
    }

    public function getLicenseModels(): ?\Flexnet\ProductPackagingService\Type\LicenseModelsListType
    {
        return $this->licenseModels;
    }

    public function withLicenseModels(?\Flexnet\ProductPackagingService\Type\LicenseModelsListType $licenseModels): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->licenseModels = $licenseModels;

        return $new;
    }

    public function getTrustedKey(): ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType
    {
        return $this->trustedKey;
    }

    public function withTrustedKey(?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $trustedKey): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->trustedKey = $trustedKey;

        return $new;
    }

    public function getVirtualTrustedKey(): ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType
    {
        return $this->virtualTrustedKey;
    }

    public function withVirtualTrustedKey(?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $virtualTrustedKey): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->virtualTrustedKey = $virtualTrustedKey;

        return $new;
    }

    public function getPartNumbers(): ?\Flexnet\ProductPackagingService\Type\PartNumbersListType
    {
        return $this->partNumbers;
    }

    public function withPartNumbers(?\Flexnet\ProductPackagingService\Type\PartNumbersListType $partNumbers): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }

    public function getHostType(): ?\Flexnet\ProductPackagingService\Type\HostTypePKType
    {
        return $this->hostType;
    }

    public function withHostType(?\Flexnet\ProductPackagingService\Type\HostTypePKType $hostType): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getHostTypes(): ?\Flexnet\ProductPackagingService\Type\HostTypeListType
    {
        return $this->hostTypes;
    }

    public function withHostTypes(?\Flexnet\ProductPackagingService\Type\HostTypeListType $hostTypes): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): ?bool
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(?bool $usedOnDevice): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    public function withProductCategory(?string $productCategory): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }

    public function getCustomAttributes(): ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $customAttributes): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): ?bool
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(?bool $allowDownloadObsoleteFrInAdmin): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): ?bool
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(?bool $allowDownloadObsoleteFrInPortal): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;

        return $new;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function withCreationDate(?\DateTimeInterface $creationDate): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?\DateTimeInterface
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?\DateTimeInterface $lastModifiedDate): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }

    public function getProductAttributes(): ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType
    {
        return $this->productAttributes;
    }

    public function withProductAttributes(?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $productAttributes): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
