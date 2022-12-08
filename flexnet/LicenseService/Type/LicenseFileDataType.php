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
     * @param  string  $licenseFileDefinitionName
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
     * @param  string  $licenseFileDefinitionName
     * @param  string|null  $licenseText
     * @param  string|null  $binaryLicense
     * @param  string|null  $fileName
     */
    public static function create(string $licenseFileDefinitionName, string|null $licenseText = null, string|null $binaryLicense = null, string|null $fileName = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getLicenseFileDefinitionName(): string
    {
        return $this->licenseFileDefinitionName;
    }

    /**
     * @param  string  $licenseFileDefinitionName
     * @return LicenseFileDataType
     */
    public function withLicenseFileDefinitionName(string $licenseFileDefinitionName): LicenseFileDataType
    {
        $new = clone $this;
        $new->licenseFileDefinitionName = $licenseFileDefinitionName;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLicenseText(): string|null
    {
        return $this->licenseText;
    }

    /**
     * @param  string|null  $licenseText
     * @return LicenseFileDataType
     */
    public function withLicenseText(string|null $licenseText): LicenseFileDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

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
     * @return LicenseFileDataType
     */
    public function withBinaryLicense(string|null $binaryLicense): LicenseFileDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFileName(): string|null
    {
        return $this->fileName;
    }

    /**
     * @param  string|null  $fileName
     * @return LicenseFileDataType
     */
    public function withFileName(string|null $fileName): LicenseFileDataType
    {
        $new = clone $this;
        $new->fileName = $fileName;

        return $new;
    }
}
