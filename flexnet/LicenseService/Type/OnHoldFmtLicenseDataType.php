<?php

namespace Flexnet\LicenseService\Type;

class OnHoldFmtLicenseDataType
{
    /**
     * @var string
     */
    private $fulfillmentId;

    /**
     * @var string|null
     */
    private $textLicense;

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
    public function __construct(string $fulfillmentId, ?string $textLicense = null, ?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null)
    {
        $this->fulfillmentId = $fulfillmentId;
        $this->textLicense = $textLicense;
        $this->binaryLicense = $binaryLicense;
        $this->licenseFiles = $licenseFiles;
    }

    public static function create(string $fulfillmentId, ?string $textLicense = null, ?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(string $fulfillmentId): \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getTextLicense(): ?string
    {
        return $this->textLicense;
    }

    public function withTextLicense(?string $textLicense): \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->textLicense = $textLicense;

        return $new;
    }

    public function getBinaryLicense(): ?\Flexnet\LicenseService\Type\Base64Binary
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense): \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getLicenseFiles(): ?\Flexnet\LicenseService\Type\LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles): \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}
