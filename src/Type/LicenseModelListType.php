<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseModelListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    private $licenseModelIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getLicenseModelIdentifier()
    {
        return $this->licenseModelIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifier
     * @return $this
     */
    public function setLicenseModelIdentifier($licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
        return $this;
    }


}

