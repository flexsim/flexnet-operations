<?php

namespace Flexnet\LicenseService\Type;

class CountDataType
{
    /**
     * @var string
     */
    private $activationId;

    /**
     * @var \Flexnet\LicenseService\Type\CountForHostsType|array<\Flexnet\LicenseService\Type\CountForHostsType>
     */
    private $countForHosts;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CountForHostsType|array<\Flexnet\LicenseService\Type\CountForHostsType>  $countForHosts
     */
    public function __construct(string $activationId, \Flexnet\LicenseService\Type\CountForHostsType|array $countForHosts)
    {
        $this->activationId = $activationId;
        $this->countForHosts = $countForHosts;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CountForHostsType|array<\Flexnet\LicenseService\Type\CountForHostsType>  $countForHosts
     */
    public static function create(string $activationId, \Flexnet\LicenseService\Type\CountForHostsType|array $countForHosts)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): \Flexnet\LicenseService\Type\CountDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CountForHostsType|array<\Flexnet\LicenseService\Type\CountForHostsType>
     */
    public function getCountForHosts(): \Flexnet\LicenseService\Type\CountForHostsType|array
    {
        return $this->countForHosts;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CountForHostsType|array<\Flexnet\LicenseService\Type\CountForHostsType>  $countForHosts
     */
    public function withCountForHosts(\Flexnet\LicenseService\Type\CountForHostsType|array $countForHosts): \Flexnet\LicenseService\Type\CountDataType
    {
        $new = clone $this;
        $new->countForHosts = $countForHosts;

        return $new;
    }
}
