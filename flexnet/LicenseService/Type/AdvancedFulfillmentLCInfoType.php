<?php

namespace Flexnet\LicenseService\Type;

class AdvancedFulfillmentLCInfoType
{
    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $fulfillmentId;

    /**
     * @var string|null
     */
    private $licenseText;

    /**
     * @var \Flexnet\LicenseService\Type\Base64Binary|null
     */
    private $binaryLicense;

    /**
     * @var \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    private $licenseFiles;

    /**
     * Constructor
     */
    public function __construct(string $uniqueId, string $fulfillmentId, ?string $licenseText = null, ?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null)
    {
        $this->uniqueId = $uniqueId;
        $this->fulfillmentId = $fulfillmentId;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->licenseFiles = $licenseFiles;
    }

    public static function create(string $uniqueId, string $fulfillmentId, ?string $licenseText = null, ?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(string $fulfillmentId): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getLicenseText(): ?string
    {
        return $this->licenseText;
    }

    public function withLicenseText(?string $licenseText): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?\Flexnet\LicenseService\Type\Base64Binary
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getLicenseFiles(): ?\Flexnet\LicenseService\Type\LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}
