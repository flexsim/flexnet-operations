<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseModelListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array
     */
    protected $licenseModelIdentifier;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array $licenseModelIdentifier
     */
    public function __construct($licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array $licenseModelIdentifier
     */
    public static function create($licenseModelIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array
     */
    public function getLicenseModelIdentifier()
    {
        return $this->licenseModelIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType|array $licenseModelIdentifier
     * @return $this
     */
    public function setLicenseModelIdentifier($licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;

        return $this;
    }
}
