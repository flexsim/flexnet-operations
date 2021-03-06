<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseModelDetailsType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $licenseModelIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    protected $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ModelAttributesType
     */
    protected $attributeDetails;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifier
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @param \Flexsim\FlexnetOperations\Type\ModelAttributesType $attributeDetails
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifier, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology, \Flexsim\FlexnetOperations\Type\ModelAttributesType $attributeDetails)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
        $this->licenseTechnology = $licenseTechnology;
        $this->attributeDetails = $attributeDetails;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifier
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @param \Flexsim\FlexnetOperations\Type\ModelAttributesType $attributeDetails
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModelIdentifier, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology, \Flexsim\FlexnetOperations\Type\ModelAttributesType $attributeDetails)
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

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ModelAttributesType
     */
    public function getAttributeDetails()
    {
        return $this->attributeDetails;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ModelAttributesType $attributeDetails
     * @return $this
     */
    public function setAttributeDetails($attributeDetails)
    {
        $this->attributeDetails = $attributeDetails;

        return $this;
    }
}
