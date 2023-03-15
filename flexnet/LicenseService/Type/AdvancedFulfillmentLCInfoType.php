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
     * @param  string|null  $licenseText
     * @param  string|null  $binaryLicense
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     */
    public function __construct(string $uniqueId, string $fulfillmentId, string|null $licenseText = null, string|null $binaryLicense = null, LicenseFileDataListType|null $licenseFiles = null)
    {
        $this->uniqueId = $uniqueId;
        $this->fulfillmentId = $fulfillmentId;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->licenseFiles = $licenseFiles;
    }

    /**
     * @param  string|null  $licenseText
     * @param  string|null  $binaryLicense
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     */
    public static function create(string $uniqueId, string $fulfillmentId, string|null $licenseText = null, string|null $binaryLicense = null, LicenseFileDataListType|null $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(string $fulfillmentId): AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getLicenseText(): string|null
    {
        return $this->licenseText;
    }

    public function withLicenseText(string|null $licenseText): AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): string|null
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(string|null $binaryLicense): AdvancedFulfillmentLCInfoType
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
     */
    public function withLicenseFiles(LicenseFileDataListType|null $licenseFiles): AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}
