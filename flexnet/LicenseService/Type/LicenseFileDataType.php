<?php

namespace Flexnet\LicenseService\Type;

class LicenseFileDataType
{
    /**
     * @var string
     */
    private $licenseFileDefinitionName;

    /**
     * @var string|null
     */
    private $licenseText;

    /**
     * @var string|null
     */
    private $binaryLicense;

    /**
     * @var string|null
     */
    private $fileName;

    /**
     * Constructor
     */
    public function __construct(string $licenseFileDefinitionName, ?string $licenseText = null, ?string $binaryLicense = null, ?string $fileName = null)
    {
        $this->licenseFileDefinitionName = $licenseFileDefinitionName;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->fileName = $fileName;
    }

    public static function create(string $licenseFileDefinitionName, ?string $licenseText = null, ?string $binaryLicense = null, ?string $fileName = null)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseFileDefinitionName(): string
    {
        return $this->licenseFileDefinitionName;
    }

    public function withLicenseFileDefinitionName(string $licenseFileDefinitionName): \Flexnet\LicenseService\Type\LicenseFileDataType
    {
        $new = clone $this;
        $new->licenseFileDefinitionName = $licenseFileDefinitionName;

        return $new;
    }

    public function getLicenseText(): ?string
    {
        return $this->licenseText;
    }

    public function withLicenseText(?string $licenseText): \Flexnet\LicenseService\Type\LicenseFileDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?string
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?string $binaryLicense): \Flexnet\LicenseService\Type\LicenseFileDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function withFileName(?string $fileName): \Flexnet\LicenseService\Type\LicenseFileDataType
    {
        $new = clone $this;
        $new->fileName = $fileName;

        return $new;
    }
}
