<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseTechnologyDetailsType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    protected $licenseTechnologyIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseGeneratorsDetailsType
     */
    protected $licenseGenerators;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypeListType
     */
    protected $hostTypes;

    /**
     * @var string
     */
    protected $state;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier
     * @param \Flexsim\FlexnetOperations\Type\LicenseGeneratorsDetailsType $licenseGenerators
     * @param \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes
     * @param string $state
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, \Flexsim\FlexnetOperations\Type\LicenseGeneratorsDetailsType $licenseGenerators, \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes, string $state)
    {
        $this->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;
        $this->licenseGenerators = $licenseGenerators;
        $this->hostTypes = $hostTypes;
        $this->state = $state;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier
     * @param \Flexsim\FlexnetOperations\Type\LicenseGeneratorsDetailsType $licenseGenerators
     * @param \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes
     * @param string $state
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, \Flexsim\FlexnetOperations\Type\LicenseGeneratorsDetailsType $licenseGenerators, \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes, string $state)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    public function getLicenseTechnologyIdentifier()
    {
        return $this->licenseTechnologyIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier
     * @return $this
     */
    public function setLicenseTechnologyIdentifier($licenseTechnologyIdentifier)
    {
        $this->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseGeneratorsDetailsType
     */
    public function getLicenseGenerators()
    {
        return $this->licenseGenerators;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseGeneratorsDetailsType $licenseGenerators
     * @return $this
     */
    public function setLicenseGenerators($licenseGenerators)
    {
        $this->licenseGenerators = $licenseGenerators;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostTypeListType
     */
    public function getHostTypes()
    {
        return $this->hostTypes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostTypeListType $hostTypes
     * @return $this
     */
    public function setHostTypes($hostTypes)
    {
        $this->hostTypes = $hostTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
}
