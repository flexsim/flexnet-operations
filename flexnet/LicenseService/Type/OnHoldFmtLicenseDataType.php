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
     * @var string|null
     */
    private $binaryLicense;

    /**
     * @var \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    private $licenseFiles;

    /**
     * Constructor
     */
    public function __construct(string $fulfillmentId, string $textLicense = null, string $binaryLicense = null, LicenseFileDataListType $licenseFiles = null)
    {
        $this->fulfillmentId = $fulfillmentId;
        $this->textLicense = $textLicense;
        $this->binaryLicense = $binaryLicense;
        $this->licenseFiles = $licenseFiles;
    }

    public static function create(string $fulfillmentId, string $textLicense = null, string $binaryLicense = null, LicenseFileDataListType $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(string $fulfillmentId): OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getTextLicense(): ?string
    {
        return $this->textLicense;
    }

    public function withTextLicense(?string $textLicense): OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->textLicense = $textLicense;

        return $new;
    }

    public function getBinaryLicense(): ?string
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?string $binaryLicense): OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getLicenseFiles(): ?LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?LicenseFileDataListType $licenseFiles): OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}
