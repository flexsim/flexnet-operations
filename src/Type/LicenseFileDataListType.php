<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseFileDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataType
     */
    private $licenseFile;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataType|array $licenseFile
     */
    public function __construct($licenseFile = null)
    {
        $this->licenseFile = $licenseFile;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataType|array $licenseFile
     */
    public static function create($licenseFile = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseFileDataType
     */
    public function getLicenseFile()
    {
        return $this->licenseFile;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataType $licenseFile
     * @return $this
     */
    public function setLicenseFile($licenseFile)
    {
        $this->licenseFile = $licenseFile;
        return $this;
    }


}

