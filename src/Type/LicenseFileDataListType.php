<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseFileDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataType|array 
     */
    protected $licenseFile;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataType|array $licenseFile
     */
    public function __construct($licenseFile = null)
    {
        $this->licenseFile = $licenseFile;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataType|array $licenseFile
     */
    public static function create($licenseFile = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseFileDataType|array 
     */
    public function getLicenseFile()
    {
        return $this->licenseFile;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataType|array $licenseFile
     * @return $this
     */
    public function setLicenseFile($licenseFile)
    {
        $this->licenseFile = $licenseFile;
        return $this;
    }
}
