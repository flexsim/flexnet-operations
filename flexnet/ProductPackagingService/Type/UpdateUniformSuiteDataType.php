<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateUniformSuiteDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
     */
    private $suiteIdentifier;

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
     * @var \Flexnet\ProductPackagingService\Type\UpdateProductsListType|null
     */
    private $products;

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
     * @var \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType|null
     */
    private $partNumbers;

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
     * @param  \Flexnet\ProductPackagingService\Type\SuiteIdentifierType  $suiteIdentifier
     * @param  string|null  $name
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null  $licenseGenerator
     * @param  \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null  $packageProperties
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductsListType|null  $products
     * @param  \Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType|null  $licenseModels
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $trustedKey
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $virtualTrustedKey
     * @param  \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType|null  $partNumbers
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|null  $hostType
     * @param  \Flexnet\ProductPackagingService\Type\UpdateHostTypeListType|null  $hostTypes
     * @param  bool|null  $usedOnDevice
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  bool|null  $allowDownloadObsoleteFrInAdmin
     * @param  bool|null  $allowDownloadObsoleteFrInPortal
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $productAttributes
     */
    public function __construct(SuiteIdentifierType $suiteIdentifier, string|null $name = null, string|null $version = null, string|null $description = null, LicenseGeneratorIdentifierType|null $licenseGenerator = null, PackagePropertiesDataType|null $packageProperties = null, UpdateProductsListType|null $products = null, UpdateLicenseModelsListType|null $licenseModels = null, TrustedKeyIdentifierType|null $trustedKey = null, TrustedKeyIdentifierType|null $virtualTrustedKey = null, UpdatePartNumbersListType|null $partNumbers = null, HostTypePKType|null $hostType = null, UpdateHostTypeListType|null $hostTypes = null, bool|null $usedOnDevice = null, AttributeDescriptorDataType|null $customAttributes = null, bool|null $allowDownloadObsoleteFrInAdmin = null, bool|null $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType|null $productAttributes = null)
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
     * @param  \Flexnet\ProductPackagingService\Type\SuiteIdentifierType  $suiteIdentifier
     * @param  string|null  $name
     * @param  string|null  $version
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|null  $licenseGenerator
     * @param  \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType|null  $packageProperties
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductsListType|null  $products
     * @param  \Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType|null  $licenseModels
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $trustedKey
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|null  $virtualTrustedKey
     * @param  \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType|null  $partNumbers
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|null  $hostType
     * @param  \Flexnet\ProductPackagingService\Type\UpdateHostTypeListType|null  $hostTypes
     * @param  bool|null  $usedOnDevice
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $customAttributes
     * @param  bool|null  $allowDownloadObsoleteFrInAdmin
     * @param  bool|null  $allowDownloadObsoleteFrInPortal
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType|null  $productAttributes
     */
    public static function create(SuiteIdentifierType $suiteIdentifier, string|null $name = null, string|null $version = null, string|null $description = null, LicenseGeneratorIdentifierType|null $licenseGenerator = null, PackagePropertiesDataType|null $packageProperties = null, UpdateProductsListType|null $products = null, UpdateLicenseModelsListType|null $licenseModels = null, TrustedKeyIdentifierType|null $trustedKey = null, TrustedKeyIdentifierType|null $virtualTrustedKey = null, UpdatePartNumbersListType|null $partNumbers = null, HostTypePKType|null $hostType = null, UpdateHostTypeListType|null $hostTypes = null, bool|null $usedOnDevice = null, AttributeDescriptorDataType|null $customAttributes = null, bool|null $allowDownloadObsoleteFrInAdmin = null, bool|null $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType|null $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
     */
    public function getSuiteIdentifier(): SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteIdentifierType  $suiteIdentifier
     */
    public function withSuiteIdentifier(SuiteIdentifierType $suiteIdentifier): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }

    public function getName(): string|null
    {
        return $this->name;
    }

    public function withName(string|null $name): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): UpdateUniformSuiteDataType
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
    public function withLicenseGenerator(LicenseGeneratorIdentifierType|null $licenseGenerator): UpdateUniformSuiteDataType
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
    public function withPackageProperties(PackagePropertiesDataType|null $packageProperties): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateProductsListType|null
     */
    public function getProducts(): UpdateProductsListType|null
    {
        return $this->products;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductsListType|null  $products
     */
    public function withProducts(UpdateProductsListType|null $products): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->products = $products;

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
    public function withLicenseModels(UpdateLicenseModelsListType|null $licenseModels): UpdateUniformSuiteDataType
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
    public function withTrustedKey(TrustedKeyIdentifierType|null $trustedKey): UpdateUniformSuiteDataType
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
    public function withVirtualTrustedKey(TrustedKeyIdentifierType|null $virtualTrustedKey): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->virtualTrustedKey = $virtualTrustedKey;

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
    public function withPartNumbers(UpdatePartNumbersListType|null $partNumbers): UpdateUniformSuiteDataType
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
    public function withHostType(HostTypePKType|null $hostType): UpdateUniformSuiteDataType
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
    public function withHostTypes(UpdateHostTypeListType|null $hostTypes): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): bool|null
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(bool|null $usedOnDevice): UpdateUniformSuiteDataType
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
    public function withCustomAttributes(AttributeDescriptorDataType|null $customAttributes): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): bool|null
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(bool|null $allowDownloadObsoleteFrInAdmin): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): bool|null
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(bool|null $allowDownloadObsoleteFrInPortal): UpdateUniformSuiteDataType
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
    public function withProductAttributes(AttributeDescriptorDataType|null $productAttributes): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
