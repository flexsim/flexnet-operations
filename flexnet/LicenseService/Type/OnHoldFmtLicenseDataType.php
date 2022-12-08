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
     *
     * @param  string  $fulfillmentId
     * @param  string|null  $textLicense
     * @param  string|null  $binaryLicense
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     */
    public function __construct(string $fulfillmentId, string|null $textLicense = null, string|null $binaryLicense = null, LicenseFileDataListType|null $licenseFiles = null)
    {
        $this->fulfillmentId = $fulfillmentId;
        $this->textLicense = $textLicense;
        $this->binaryLicense = $binaryLicense;
        $this->licenseFiles = $licenseFiles;
    }

    /**
     * @param  string  $fulfillmentId
     * @param  string|null  $textLicense
     * @param  string|null  $binaryLicense
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     */
    public static function create(string $fulfillmentId, string|null $textLicense = null, string|null $binaryLicense = null, LicenseFileDataListType|null $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    /**
     * @param  string  $fulfillmentId
     * @return OnHoldFmtLicenseDataType
     */
    public function withFulfillmentId(string $fulfillmentId): OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getTextLicense(): string|null
    {
        return $this->textLicense;
    }

    /**
     * @param  string|null  $textLicense
     * @return OnHoldFmtLicenseDataType
     */
    public function withTextLicense(string|null $textLicense): OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->textLicense = $textLicense;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getBinaryLicense(): string|null
    {
        return $this->binaryLicense;
    }

    /**
     * @param  string|null  $binaryLicense
     * @return OnHoldFmtLicenseDataType
     */
    public function withBinaryLicense(string|null $binaryLicense): OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    public function getLicenseFiles(): LicenseFileDataListType|null
    {
        return $this->licenseFiles;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     * @return OnHoldFmtLicenseDataType
     */
    public function withLicenseFiles(LicenseFileDataListType|null $licenseFiles): OnHoldFmtLicenseDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}
