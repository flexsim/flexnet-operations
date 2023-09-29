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
    public function __construct(SuiteIdentifierType $suiteIdentifier, string $name = null, string $version = null, string $description = null, LicenseGeneratorIdentifierType $licenseGenerator = null, PackagePropertiesDataType $packageProperties = null, UpdateProductsListType $products = null, UpdateLicenseModelsListType $licenseModels = null, TrustedKeyIdentifierType $trustedKey = null, TrustedKeyIdentifierType $virtualTrustedKey = null, UpdatePartNumbersListType $partNumbers = null, HostTypePKType $hostType = null, UpdateHostTypeListType $hostTypes = null, bool $usedOnDevice = null, AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType $productAttributes = null)
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

    public static function create(SuiteIdentifierType $suiteIdentifier, string $name = null, string $version = null, string $description = null, LicenseGeneratorIdentifierType $licenseGenerator = null, PackagePropertiesDataType $packageProperties = null, UpdateProductsListType $products = null, UpdateLicenseModelsListType $licenseModels = null, TrustedKeyIdentifierType $trustedKey = null, TrustedKeyIdentifierType $virtualTrustedKey = null, UpdatePartNumbersListType $partNumbers = null, HostTypePKType $hostType = null, UpdateHostTypeListType $hostTypes = null, bool $usedOnDevice = null, AttributeDescriptorDataType $customAttributes = null, bool $allowDownloadObsoleteFrInAdmin = null, bool $allowDownloadObsoleteFrInPortal = null, AttributeDescriptorDataType $productAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteIdentifier(): SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    public function withSuiteIdentifier(SuiteIdentifierType $suiteIdentifier): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getLicenseGenerator(): ?LicenseGeneratorIdentifierType
    {
        return $this->licenseGenerator;
    }

    public function withLicenseGenerator(?LicenseGeneratorIdentifierType $licenseGenerator): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->licenseGenerator = $licenseGenerator;

        return $new;
    }

    public function getPackageProperties(): ?PackagePropertiesDataType
    {
        return $this->packageProperties;
    }

    public function withPackageProperties(?PackagePropertiesDataType $packageProperties): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->packageProperties = $packageProperties;

        return $new;
    }

    public function getProducts(): ?UpdateProductsListType
    {
        return $this->products;
    }

    public function withProducts(?UpdateProductsListType $products): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->products = $products;

        return $new;
    }

    public function getLicenseModels(): ?UpdateLicenseModelsListType
    {
        return $this->licenseModels;
    }

    public function withLicenseModels(?UpdateLicenseModelsListType $licenseModels): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->licenseModels = $licenseModels;

        return $new;
    }

    public function getTrustedKey(): ?TrustedKeyIdentifierType
    {
        return $this->trustedKey;
    }

    public function withTrustedKey(?TrustedKeyIdentifierType $trustedKey): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->trustedKey = $trustedKey;

        return $new;
    }

    public function getVirtualTrustedKey(): ?TrustedKeyIdentifierType
    {
        return $this->virtualTrustedKey;
    }

    public function withVirtualTrustedKey(?TrustedKeyIdentifierType $virtualTrustedKey): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->virtualTrustedKey = $virtualTrustedKey;

        return $new;
    }

    public function getPartNumbers(): ?UpdatePartNumbersListType
    {
        return $this->partNumbers;
    }

    public function withPartNumbers(?UpdatePartNumbersListType $partNumbers): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->partNumbers = $partNumbers;

        return $new;
    }

    public function getHostType(): ?HostTypePKType
    {
        return $this->hostType;
    }

    public function withHostType(?HostTypePKType $hostType): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getHostTypes(): ?UpdateHostTypeListType
    {
        return $this->hostTypes;
    }

    public function withHostTypes(?UpdateHostTypeListType $hostTypes): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getUsedOnDevice(): ?bool
    {
        return $this->usedOnDevice;
    }

    public function withUsedOnDevice(?bool $usedOnDevice): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->usedOnDevice = $usedOnDevice;

        return $new;
    }

    public function getCustomAttributes(): ?AttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?AttributeDescriptorDataType $customAttributes): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInAdmin(): ?bool
    {
        return $this->allowDownloadObsoleteFrInAdmin;
    }

    public function withAllowDownloadObsoleteFrInAdmin(?bool $allowDownloadObsoleteFrInAdmin): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInAdmin = $allowDownloadObsoleteFrInAdmin;

        return $new;
    }

    public function getAllowDownloadObsoleteFrInPortal(): ?bool
    {
        return $this->allowDownloadObsoleteFrInPortal;
    }

    public function withAllowDownloadObsoleteFrInPortal(?bool $allowDownloadObsoleteFrInPortal): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->allowDownloadObsoleteFrInPortal = $allowDownloadObsoleteFrInPortal;

        return $new;
    }

    public function getProductAttributes(): ?AttributeDescriptorDataType
    {
        return $this->productAttributes;
    }

    public function withProductAttributes(?AttributeDescriptorDataType $productAttributes): UpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->productAttributes = $productAttributes;

        return $new;
    }
}
