<?php

namespace Flexsim\FlexnetOperations\Type;

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
     * @var string
     */
    private $licenseText;

    /**
     * @var string
     */
    private $binaryLicense;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType
     */
    private $licenseFiles;

    /**
     * Constructor
     *
     * @var string $uniqueId
     * @var string $fulfillmentId
     * @var string $licenseText
     * @var string $binaryLicense
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     */
    public function __construct(string $uniqueId, string $fulfillmentId, string $licenseText = null, string $binaryLicense = null, \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null)
    {
        $this->uniqueId = $uniqueId;
        $this->fulfillmentId = $fulfillmentId;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->licenseFiles = $licenseFiles;
    }

    /**
     * create a new instance of this class
     *
     * @var string $uniqueId
     * @var string $fulfillmentId
     * @var string $licenseText
     * @var string $binaryLicense
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     */
    public static function create(string $uniqueId, string $fulfillmentId, string $licenseText = null, string $binaryLicense = null, \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
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

