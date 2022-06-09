<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseGeneratorsDetailsType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType
     */
    protected $licenseGeneratorIdentifier;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType|array $licenseGeneratorIdentifier
     */
    public function __construct($licenseGeneratorIdentifier = null)
    {
        $this->licenseGeneratorIdentifier = $licenseGeneratorIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType|array $licenseGeneratorIdentifier
     */
    public static function create($licenseGeneratorIdentifier = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType
     */
    public function getLicenseGeneratorIdentifier()
    {
        return $this->licenseGeneratorIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseGeneratorIdentifierType $licenseGeneratorIdentifier
     * @return $this
     */
    public function setLicenseGeneratorIdentifier($licenseGeneratorIdentifier)
    {
        $this->licenseGeneratorIdentifier = $licenseGeneratorIdentifier;

        return $this;
    }
}
