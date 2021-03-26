<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseModelsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    private $licenseModel;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;
        return $this;
    }


}

