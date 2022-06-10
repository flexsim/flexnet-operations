<?php

namespace Flexsim\FlexnetOperations\Type;

class ModelIdentifiersDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelDetailsType|array
     */
    protected $licenseModel;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelDetailsType|array $licenseModel
     */
    public function __construct($licenseModel = null)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelDetailsType|array $licenseModel
     */
    public static function create($licenseModel = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelDetailsType|array
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelDetailsType|array $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;

        return $this;
    }
}
