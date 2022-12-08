<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetHostAttributesRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
     */
    private $licenseTechnologyIdentifier;

    /**
     * @var \Flexnet\LicenseService\Type\HostTypePKType|null
     */
    private $hostType;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier
     * @param \Flexnet\LicenseService\Type\HostTypePKType|null $hostType
     */
    public function __construct(\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, \Flexnet\LicenseService\Type\HostTypePKType|null $hostType = null)
    {
        $this->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;
        $this->hostType = $hostType;
    }

    /**
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier
     * @param \Flexnet\LicenseService\Type\HostTypePKType|null $hostType
     */
    public static function create(\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, \Flexnet\LicenseService\Type\HostTypePKType|null $hostType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
     */
    public function getLicenseTechnologyIdentifier() : \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnologyIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier
     * @return GetHostAttributesRequestType
     */
    public function withLicenseTechnologyIdentifier(\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier) : \Flexnet\LicenseService\Type\GetHostAttributesRequestType
    {
        $new = clone $this;
        $new->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\HostTypePKType|null
     */
    public function getHostType() : \Flexnet\LicenseService\Type\HostTypePKType|null
    {
        return $this->hostType;
    }

    /**
     * @param \Flexnet\LicenseService\Type\HostTypePKType|null $hostType
     * @return GetHostAttributesRequestType
     */
    public function withHostType(\Flexnet\LicenseService\Type\HostTypePKType|null $hostType) : \Flexnet\LicenseService\Type\GetHostAttributesRequestType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }
}

