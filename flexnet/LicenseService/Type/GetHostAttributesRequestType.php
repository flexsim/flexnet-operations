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
     * @param  \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType  $licenseTechnologyIdentifier
     * @param  \Flexnet\LicenseService\Type\HostTypePKType|null  $hostType
     */
    public function __construct(LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, HostTypePKType|null $hostType = null)
    {
        $this->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;
        $this->hostType = $hostType;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType  $licenseTechnologyIdentifier
     * @param  \Flexnet\LicenseService\Type\HostTypePKType|null  $hostType
     */
    public static function create(LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, HostTypePKType|null $hostType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
     */
    public function getLicenseTechnologyIdentifier(): LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnologyIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType  $licenseTechnologyIdentifier
     */
    public function withLicenseTechnologyIdentifier(LicenseTechnologyIdentifierType $licenseTechnologyIdentifier): GetHostAttributesRequestType
    {
        $new = clone $this;
        $new->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\HostTypePKType|null
     */
    public function getHostType(): HostTypePKType|null
    {
        return $this->hostType;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\HostTypePKType|null  $hostType
     */
    public function withHostType(HostTypePKType|null $hostType): GetHostAttributesRequestType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }
}
