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
    public function __construct(LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, HostTypePKType $hostType = null)
    {
        $this->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;
        $this->hostType = $hostType;
    }

    public static function create(LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, HostTypePKType $hostType = null)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseTechnologyIdentifier(): LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnologyIdentifier;
    }

    public function withLicenseTechnologyIdentifier(LicenseTechnologyIdentifierType $licenseTechnologyIdentifier): GetHostAttributesRequestType
    {
        $new = clone $this;
        $new->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;

        return $new;
    }

    public function getHostType(): ?HostTypePKType
    {
        return $this->hostType;
    }

    public function withHostType(?HostTypePKType $hostType): GetHostAttributesRequestType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }
}
