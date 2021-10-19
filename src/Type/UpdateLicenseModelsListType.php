<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateLicenseModelsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array
     */
    protected $licenseModelIdentifiers;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array $licenseModelIdentifiers
     * @param string $opType
     */
    public function __construct($licenseModelIdentifiers, string $opType)
    {
        $this->licenseModelIdentifiers = $licenseModelIdentifiers;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array $licenseModelIdentifiers
     * @param string $opType
     */
    public static function create($licenseModelIdentifiers, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array
     */
    public function getLicenseModelIdentifiers()
    {
        return $this->licenseModelIdentifiers;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array $licenseModelIdentifiers
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
