<?php

namespace Flexnet\LicenseService\Type;

class CreatedChildLIFulfillmentInfoType
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
     */
    public function __construct(string $uniqueId, string $fulfillmentId, string $licenseText = null, string $binaryLicense = null, LicenseFileDataListType $licenseFiles = null)
    {
        $this->uniqueId = $uniqueId;
        $this->fulfillmentId = $fulfillmentId;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->licenseFiles = $licenseFiles;
    }

    public static function create(string $uniqueId, string $fulfillmentId, string $licenseText = null, string $binaryLicense = null, LicenseFileDataListType $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): CreatedChildLIFulfillmentInfoType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(string $fulfillmentId): CreatedChildLIFulfillmentInfoType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getLicenseText(): ?string
    {
        return $this->licenseText;
    }

    public function withLicenseText(?string $licenseText): CreatedChildLIFulfillmentInfoType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?string
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?string $binaryLicense): CreatedChildLIFulfillmentInfoType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getLicenseFiles(): ?LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?LicenseFileDataListType $licenseFiles): CreatedChildLIFulfillmentInfoType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}
