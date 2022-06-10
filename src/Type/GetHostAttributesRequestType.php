<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetHostAttributesRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    protected $licenseTechnologyIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    protected $hostType;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier
     * @param \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null)
    {
        $this->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;
        $this->hostType = $hostType;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier
     * @param \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null)
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
     * @return \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    public function getHostType()
    {
        return $this->hostType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->hostType = $hostType;

        return $this;
    }
}
