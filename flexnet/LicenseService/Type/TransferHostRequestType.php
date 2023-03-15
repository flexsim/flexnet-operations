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
     *
     * @param  \Flexnet\LicenseService\Type\TransferHostList  $sourceHosts
     * @param  string|null  $soldTo
     * @param  bool|null  $poolEntitlements
     */
    public function __construct(TransferHostList $sourceHosts, string|null $soldTo = null, bool|null $poolEntitlements = null)
    {
        $this->sourceHosts = $sourceHosts;
        $this->soldTo = $soldTo;
        $this->poolEntitlements = $poolEntitlements;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\TransferHostList  $sourceHosts
     * @param  string|null  $soldTo
     * @param  bool|null  $poolEntitlements
     */
    public static function create(TransferHostList $sourceHosts, string|null $soldTo = null, bool|null $poolEntitlements = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\TransferHostList
     */
    public function getSourceHosts(): TransferHostList
    {
        return $this->sourceHosts;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\TransferHostList  $sourceHosts
     */
    public function withSourceHosts(TransferHostList $sourceHosts): TransferHostRequestType
    {
        $new = clone $this;
        $new->sourceHosts = $sourceHosts;

        return $new;
    }

    public function getSoldTo(): string|null
    {
        return $this->soldTo;
    }

    public function withSoldTo(string|null $soldTo): TransferHostRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getPoolEntitlements(): bool|null
    {
        return $this->poolEntitlements;
    }

    public function withPoolEntitlements(bool|null $poolEntitlements): TransferHostRequestType
    {
        $new = clone $this;
        $new->poolEntitlements = $poolEntitlements;

        return $new;
    }
}
