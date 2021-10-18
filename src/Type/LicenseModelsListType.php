<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseModelsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array 
     */
    protected $licenseModel;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array $licenseModel
     */
    public function __construct($licenseModel)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array $licenseModel
     */
    public static function create($licenseModel)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array 
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;
        return $this;
    }
}
