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
     * @param  string  $activationId
     * @param  \Flexnet\LicenseService\Type\CountForHostsType|array<\Flexnet\LicenseService\Type\CountForHostsType>  $countForHosts
     */
    public function __construct(string $activationId, CountForHostsType|array $countForHosts)
    {
        $this->activationId = $activationId;
        $this->countForHosts = $countForHosts;
    }

    /**
     * @param  string  $activationId
     * @param  \Flexnet\LicenseService\Type\CountForHostsType|array<\Flexnet\LicenseService\Type\CountForHostsType>  $countForHosts
     */
    public static function create(string $activationId, CountForHostsType|array $countForHosts)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId(): string
    {
        return $this->activationId;
    }

    /**
     * @param  string  $activationId
     * @return CountDataType
     */
    public function withActivationId(string $activationId): CountDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CountForHostsType|array<\Flexnet\LicenseService\Type\CountForHostsType>
     */
    public function getCountForHosts(): CountForHostsType|array
    {
        return $this->countForHosts;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CountForHostsType|array<\Flexnet\LicenseService\Type\CountForHostsType>  $countForHosts
     * @return CountDataType
     */
    public function withCountForHosts(CountForHostsType|array $countForHosts): CountDataType
    {
        $new = clone $this;
        $new->countForHosts = $countForHosts;

        return $new;
    }
}