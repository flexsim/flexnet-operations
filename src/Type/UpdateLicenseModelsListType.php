<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateLicenseModelsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    private $licenseModelIdentifiers;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifiers
     * @var string $opType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifiers, string $opType)
    {
        $this->licenseModelIdentifiers = $licenseModelIdentifiers;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifiers
     * @var string $opType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifiers, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getLicenseModelIdentifiers()
    {
        return $this->licenseModelIdentifiers;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifiers
     * @return $this
     */
    public function setLicenseModelIdentifiers($licenseModelIdentifiers)
    {
        $this->licenseModelIdentifiers = $licenseModelIdentifiers;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;
        return $this;
    }


}

