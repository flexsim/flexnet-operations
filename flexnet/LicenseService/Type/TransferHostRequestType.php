<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransferHostRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\TransferHostList
     */
    private $sourceHosts;

    /**
     * @var string|null
     */
    private $soldTo;

    /**
     * @var bool|null
     */
    private $poolEntitlements;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\TransferHostList $sourceHosts, ?string $soldTo = null, ?bool $poolEntitlements = null)
    {
        $this->sourceHosts = $sourceHosts;
        $this->soldTo = $soldTo;
        $this->poolEntitlements = $poolEntitlements;
    }

    public static function create(\Flexnet\LicenseService\Type\TransferHostList $sourceHosts, ?string $soldTo = null, ?bool $poolEntitlements = null)
    {
        return new static(...\func_get_args());
    }

    public function getSourceHosts(): \Flexnet\LicenseService\Type\TransferHostList
    {
        return $this->sourceHosts;
    }

    public function withSourceHosts(\Flexnet\LicenseService\Type\TransferHostList $sourceHosts): \Flexnet\LicenseService\Type\TransferHostRequestType
    {
        $new = clone $this;
        $new->sourceHosts = $sourceHosts;

        return $new;
    }

    public function getSoldTo(): ?string
    {
        return $this->soldTo;
    }

    public function withSoldTo(?string $soldTo): \Flexnet\LicenseService\Type\TransferHostRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getPoolEntitlements(): ?bool
    {
        return $this->poolEntitlements;
    }

    public function withPoolEntitlements(?bool $poolEntitlements): \Flexnet\LicenseService\Type\TransferHostRequestType
    {
        $new = clone $this;
        $new->poolEntitlements = $poolEntitlements;

        return $new;
    }
}
