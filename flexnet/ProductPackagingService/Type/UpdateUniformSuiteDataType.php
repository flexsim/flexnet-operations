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
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier, ?string $name = null, ?string $version = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, ?\Flexnet\ProductPackagingService\Type\PackagePropertiesDataType $packageProperties = null, ?\Flexnet\ProductPackagingService\Type\UpdateProductsListType $products = null, ?\Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType $licenseModels = null, ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $trustedKey = null, ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, ?\Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType $partNumbers = null, ?\Flexnet\ProductPackagingService\Type\HostTypePKType $hostType = null, ?\Flexnet\ProductPackagingService\Type\UpdateHostTypeListType $hostTypes = null, ?bool $usedOnDevice = null, ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $customAttributes = null, ?bool $allowDownloadObsoleteFrInAdmin = null, ?bool $allowDownloadObsoleteFrInPortal = null, ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $productAttributes = null)
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

    public static function create(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier, ?string $name = null, ?string $version = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType $licenseGenerator = null, ?\Flexnet\ProductPackagingService\Type\PackagePropertiesDataType $packageProperties = null, ?\Flexnet\ProductPackagingService\Type\UpdateProductsListType $products = null, ?\Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType $licenseModels = null, ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $trustedKey = null, ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $virtualTrustedKey = null, ?\Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType $partNumbers = null, ?\Flexnet\ProductPackagingService\Type\HostTypePKType $hostType = null, ?\Flexnet\ProductPackagingService\Type\UpdateHostTypeListType $hostTypes = null, ?bool $usedOnDevice = null, ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $customAttributes = null, ?bool $allowDownloadObsoleteFrInAdmin = null, ?bool $allowDownloadObsoleteFrInPortal = null, ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteIdentifier(): \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    public function withSuiteIdentifier(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getLicenseGenerator(): ?\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType
    {
        return $this->licenseGenerator;
    }

    public function withLicenseGenerator(?\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType $licenseGenerator): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->licenseGenerator = $licenseGenerator;

        return $new;
    }

    public function getPackageProperties(): ?\Flexnet\ProductPackagingService\Type\PackagePropertiesDataType
    {
        return $this->packageProperties;
    }

    public function withPackageProperties(?\Flexnet\ProductPackagingService\Type\PackagePropertiesDataType $packageProperties): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    public function getProducts(): ?\Flexnet\ProductPackagingService\Type\UpdateProductsListType
    {
        return $this->products;
    }

    public function withProducts(?\Flexnet\ProductPackagingService\Type\UpdateProductsListType $products): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->products = $products;

        return $new;
    }

    public function getLicenseModels(): ?\Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType
    {
        return $this->licenseModels;
    }

    public function withLicenseModels(?\Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType $licenseModels): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->licenseModels = $licenseModels;

        return $new;
    }

    public function getTrustedKey(): ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType
    {
        return $this->trustedKey;
    }

    public function withTrustedKey(?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $trustedKey): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->trustedKey = $trustedKey;

        return $new;
    }

    public function getVirtualTrustedKey(): ?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType
    {
        return $this->virtualTrustedKey;
    }

    public function withVirtualTrustedKey(?\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType $virtualTrustedKey): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->virtualTrustedKey = $virtualTrustedKey;

        return $new;
    }

    public function getPartNumbers(): ?\Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType
    {
        return $this->partNumbers;
    }

    public function withPartNumbers(?\Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType $partNumbers): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }

    public function getHostType(): ?\Flexnet\ProductPackagingService\Type\HostTypePKType
    {
        return $this->hostType;
    }

    public function withHostType(?\Flexnet\ProductPackagingService\Type\HostTypePKType $hostType): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getHostTypes(): ?\Flexnet\ProductPackagingService\Type\UpdateHostTypeListType
    {
        return $this->hostTypes;
    }

    public function withHostTypes(?\Flexnet\ProductPackagingService\Type\UpdateHostTypeListType $hostTypes): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): ?bool
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(?bool $usedOnDevice): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getCustomAttributes(): ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $customAttributes): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): ?bool
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(?bool $allowDownloadObsoleteFrInAdmin): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): ?bool
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(?bool $allowDownloadObsoleteFrInPortal): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;

        return $new;
    }

    public function getProductAttributes(): ?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType
    {
        return $this->productAttributes;
    }

    public function withProductAttributes(?\Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType $productAttributes): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
