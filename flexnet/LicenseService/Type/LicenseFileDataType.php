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
     *
     * @param  string|null  $licenseText
     * @param  string|null  $binaryLicense
     * @param  string|null  $fileName
     */
    public function __construct(string $licenseFileDefinitionName, string|null $licenseText = null, string|null $binaryLicense = null, string|null $fileName = null)
    {
        $this->licenseFileDefinitionName = $licenseFileDefinitionName;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->fileName = $fileName;
    }

    /**
     * @param  string|null  $licenseText
     * @param  string|null  $binaryLicense
     * @param  string|null  $fileName
     */
    public static function create(string $licenseFileDefinitionName, string|null $licenseText = null, string|null $binaryLicense = null, string|null $fileName = null)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseFileDefinitionName(): string
    {
        return $this->licenseFileDefinitionName;
    }

    public function withLicenseFileDefinitionName(string $licenseFileDefinitionName): LicenseFileDataType
    {
        $new = clone $this;
        $new->licenseFileDefinitionName = $licenseFileDefinitionName;

        return $new;
    }

    public function getLicenseText(): string|null
    {
        return $this->licenseText;
    }

    public function withLicenseText(string|null $licenseText): LicenseFileDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): string|null
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(string|null $binaryLicense): LicenseFileDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getFileName(): string|null
    {
        return $this->fileName;
    }

    public function withFileName(string|null $fileName): LicenseFileDataType
    {
        $new = clone $this;
        $new->fileName = $fileName;

        return $new;
    }
}
