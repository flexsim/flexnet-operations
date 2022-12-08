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
     * @param string $uniqueId
     * @param string $fulfillmentId
     * @param string|null $licenseText
     * @param string|null $binaryLicense
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     */
    public function __construct(string $uniqueId, string $fulfillmentId, string|null $licenseText = null, string|null $binaryLicense = null, \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles = null)
    {
        $this->uniqueId = $uniqueId;
        $this->fulfillmentId = $fulfillmentId;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->licenseFiles = $licenseFiles;
    }

    /**
     * @param string $uniqueId
     * @param string $fulfillmentId
     * @param string|null $licenseText
     * @param string|null $binaryLicense
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     */
    public static function create(string $uniqueId, string $fulfillmentId, string|null $licenseText = null, string|null $binaryLicense = null, \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId() : string
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return AdvancedFulfillmentLCInfoType
     */
    public function withUniqueId(string $uniqueId) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return string
     */
    public function getFulfillmentId() : string
    {
        return $this->fulfillmentId;
    }

    /**
     * @param string $fulfillmentId
     * @return AdvancedFulfillmentLCInfoType
     */
    public function withFulfillmentId(string $fulfillmentId) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLicenseText() : string|null
    {
        return $this->licenseText;
    }

    /**
     * @param string|null $licenseText
     * @return AdvancedFulfillmentLCInfoType
     */
    public function withLicenseText(string|null $licenseText) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getBinaryLicense() : string|null
    {
        return $this->binaryLicense;
    }

    /**
     * @param string|null $binaryLicense
     * @return AdvancedFulfillmentLCInfoType
     */
    public function withBinaryLicense(string|null $binaryLicense) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    public function getLicenseFiles() : \Flexnet\LicenseService\Type\LicenseFileDataListType|null
    {
        return $this->licenseFiles;
    }

    /**
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     * @return AdvancedFulfillmentLCInfoType
     */
    public function withLicenseFiles(\Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}

