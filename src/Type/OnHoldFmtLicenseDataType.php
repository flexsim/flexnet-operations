<?php

namespace Flexsim\FlexnetOperations\Type;

class OnHoldFmtLicenseDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $fulfillmentId;

    /**
     * @var string
     */
    protected $textLicense;

    /**
     * @var string
     */
    protected $binaryLicense;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType
     */
    protected $licenseFiles;

    /**
     * Constructor
     *
     * @var string $fulfillmentId
     * @var string $textLicense
     * @var string $binaryLicense
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     */
    public function __construct(string $fulfillmentId, string $textLicense = null, string $binaryLicense = null, \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null)
    {
        $this->fulfillmentId = $fulfillmentId;
        $this->textLicense = $textLicense;
        $this->binaryLicense = $binaryLicense;
        $this->licenseFiles = $licenseFiles;
    }

    /**
     * create a new instance of this class
     *
     * @var string $fulfillmentId
     * @var string $textLicense
     * @var string $binaryLicense
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     */
    public static function create(string $fulfillmentId, string $textLicense = null, string $binaryLicense = null, \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getFulfillmentId()
    {
        return $this->fulfillmentId;
    }

    /**
     * @param string $fulfillmentId
     * @return $this
     */
    public function setFulfillmentId($fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextLicense()
    {
        return $this->textLicense;
    }

    /**
     * @param string $textLicense
     * @return $this
     */
    public function setTextLicense($textLicense)
    {
        $this->textLicense = $textLicense;
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
     * @return \Flexsim\FlexnetOperations\Type\LicenseFileDataListType
     */
    public function getLicenseFiles()
    {
        return $this->licenseFiles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     * @return $this
     */
    public function setLicenseFiles($licenseFiles)
    {
        $this->licenseFiles = $licenseFiles;
        return $this;
    }
}
