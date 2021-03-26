<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseModelStateChangeListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeDataType
     */
    private $licenseModel;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeDataType|array $licenseModel
     */
    public function __construct($licenseModel = null)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeDataType|array $licenseModel
     */
    public static function create($licenseModel = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeDataType
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelStateChangeDataType $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;
        return $this;
    }


}

