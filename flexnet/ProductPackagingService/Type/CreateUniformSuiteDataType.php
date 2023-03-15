<?php

namespace Flexnet\ProductPackagingService\Type;

class CreateUniformSuiteDataType
{
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
     * Constructor
     *
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null  $licenseGenerator
     * @param  \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null  $packageProperties
     * @param  \Flexnet\ProductPackagingService\Type\ProductsListType|null  $products
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelsListType|null  $licenseModels
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $trustedKey
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $virtualTrustedKey
     * @param  \Flexnet\ProductPackagingService\Type\PartNumbersListType|null  $partNumbers
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|null  $hostType
     * @param  \Flexnet\ProductPackagingService\Type\HostTypeListType|null  $hostTypes
     * @param  bool|null  $usedOnDevice
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  bool|null  $allowDownloadObsoleteFrInAdmin
     * @param  bool|null  $allowDownloadObsoleteFrInPortal
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $productAttributes
     */
    public function __construct(string $suiteName, string|null $version = null, string|null $description = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, LicenseGeneratorIdentifierType|null $licenseGenerator = null, PackagePropertiesDataType|null $packageProperties = null, ProductsListType|null $products = null, LicenseModelsListType|null $licenseModels = null, TrustedKeyIdentifierType|null $trustedKey = null, TrustedKeyIdentifierType|null $virtualTrustedKey = null, PartNumbersListType|null $partNumbers = null, HostTypePKType|null $hostType = null, HostTypeListType|null $hostTypes = null, bool|null $usedOnDevice = null, AttributeDescriptorDataType|null $customAttributes = null, bool|null $allowDownloadObsoleteFrInAdmin = null, bool|null $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType|null $productAttributes = null)
    {
        $this->suiteName = $suiteName;
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
        $this->customAttributes = $customAttributes;
        $this->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;
        $this->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;
        $this->productAttributes = $productAttributes;
    }

    /**
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType|null  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null  $licenseGenerator
     * @param  \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null  $packageProperties
     * @param  \Flexnet\ProductPackagingService\Type\ProductsListType|null  $products
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelsListType|null  $licenseModels
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $trustedKey
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $virtualTrustedKey
     * @param  \Flexnet\ProductPackagingService\Type\PartNumbersListType|null  $partNumbers
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|null  $hostType
     * @param  \Flexnet\ProductPackagingService\Type\HostTypeListType|null  $hostTypes
     * @param  bool|null  $usedOnDevice
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  bool|null  $allowDownloadObsoleteFrInAdmin
     * @param  bool|null  $allowDownloadObsoleteFrInPortal
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $productAttributes
     */
    public static function create(string $suiteName, string|null $version = null, string|null $description = null, LicenseTechnologyIdentifierType|null $licenseTechnology = null, LicenseGeneratorIdentifierType|null $licenseGenerator = null, PackagePropertiesDataType|null $packageProperties = null, ProductsListType|null $products = null, LicenseModelsListType|null $licenseModels = null, TrustedKeyIdentifierType|null $trustedKey = null, TrustedKeyIdentifierType|null $virtualTrustedKey = null, PartNumbersListType|null $partNumbers = null, HostTypePKType|null $hostType = null, HostTypeListType|null $hostTypes = null, bool|null $usedOnDevice = null, AttributeDescriptorDataType|null $customAttributes = null, bool|null $allowDownloadObsoleteFrInAdmin = null, bool|null $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType|null $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteName(): string
    {
        return $this->suiteName;
    }

    public function withSuiteName(string $suiteName): CreateUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteName = $suiteName;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): CreateUniformSuiteDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): CreateUniformSuiteDataType
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
    public function withLicenseTechnology(LicenseTechnologyIdentifierType|null $licenseTechnology): CreateUniformSuiteDataType
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
    public function withLicenseGenerator(LicenseGeneratorIdentifierType|null $licenseGenerator): CreateUniformSuiteDataType
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
    public function withPackageProperties(PackagePropertiesDataType|null $packageProperties): CreateUniformSuiteDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductsListType|null
     */
    public function getProducts(): ProductsListType|null
    {
        return $this->products;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductsListType|null  $products
     */
    public function withProducts(ProductsListType|null $products): CreateUniformSuiteDataType
    {
        $new = clone $this;
        $new->products = $products;

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
    public function withLicenseModels(LicenseModelsListType|null $licenseModels): CreateUniformSuiteDataType
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
    public function withTrustedKey(TrustedKeyIdentifierType|null $trustedKey): CreateUniformSuiteDataType
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
    public function withVirtualTrustedKey(TrustedKeyIdentifierType|null $virtualTrustedKey): CreateUniformSuiteDataType
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
    public function withPartNumbers(PartNumbersListType|null $partNumbers): CreateUniformSuiteDataType
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
    public function withHostType(HostTypePKType|null $hostType): CreateUniformSuiteDataType
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
    public function withHostTypes(HostTypeListType|null $hostTypes): CreateUniformSuiteDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): bool|null
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(bool|null $usedOnDevice): CreateUniformSuiteDataType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

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
    public function withCustomAttributes(AttributeDescriptorDataType|null $customAttributes): CreateUniformSuiteDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): bool|null
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(bool|null $allowDownloadObsoleteFrInAdmin): CreateUniformSuiteDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): bool|null
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(bool|null $allowDownloadObsoleteFrInPortal): CreateUniformSuiteDataType
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
    public function withProductAttributes(AttributeDescriptorDataType|null $productAttributes): CreateUniformSuiteDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
