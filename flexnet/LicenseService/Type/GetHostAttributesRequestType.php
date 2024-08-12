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
     */
    public function __construct(\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, ?\Flexnet\LicenseService\Type\HostTypePKType $hostType = null)
    {
        $this->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;
        $this->hostType = $hostType;
    }

    public static function create(\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, ?\Flexnet\LicenseService\Type\HostTypePKType $hostType = null)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseTechnologyIdentifier(): \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnologyIdentifier;
    }

    public function withLicenseTechnologyIdentifier(\Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier): \Flexnet\LicenseService\Type\GetHostAttributesRequestType
    {
        $new = clone $this;
        $new->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;

        return $new;
    }

    public function getHostType(): ?\Flexnet\LicenseService\Type\HostTypePKType
    {
        return $this->hostType;
    }

    public function withHostType(?\Flexnet\LicenseService\Type\HostTypePKType $hostType): \Flexnet\LicenseService\Type\GetHostAttributesRequestType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }
}
