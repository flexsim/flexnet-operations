<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseFileDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $licenseFileDefinitionName;

    /**
     * @var string
     */
    protected $licenseText;

    /**
     * @var string
     */
    protected $binaryLicense;

    /**
     * @var string
     */
    protected $fileName;

    /**
     * Constructor
     *
     * @param string $licenseFileDefinitionName
     * @param string $licenseText
     * @param string $binaryLicense
     * @param string $fileName
     */
    public function __construct(string $licenseFileDefinitionName, string $licenseText = null, string $binaryLicense = null, string $fileName = null)
    {
        $this->licenseFileDefinitionName = $licenseFileDefinitionName;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->fileName = $fileName;
    }

    /**
     * create a new instance of this class
     *
     * @param string $licenseFileDefinitionName
     * @param string $licenseText
     * @param string $binaryLicense
     * @param string $fileName
     */
    public static function create(string $licenseFileDefinitionName, string $licenseText = null, string $binaryLicense = null, string $fileName = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getLicenseFileDefinitionName()
    {
        return $this->licenseFileDefinitionName;
    }

    /**
     * @param string $licenseFileDefinitionName
     * @return $this
     */
    public function setLicenseFileDefinitionName($licenseFileDefinitionName)
    {
        $this->licenseFileDefinitionName = $licenseFileDefinitionName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseText()
    {
        return $this->licenseText;
    }

    /**
     * @param string $licenseText
     * @return $this
     */
    public function setLicenseText($licenseText)
    {
        $this->licenseText = $licenseText;

        return $this;
    }

    /**
     * @return string
     */
    public function getBinaryLicense()
    {
        return $this->binaryLicense;
    }

    /**
     * @param string $binaryLicense
     * @return $this
     */
    public function setBinaryLicense($binaryLicense)
    {
        $this->binaryLicense = $binaryLicense;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }
}
