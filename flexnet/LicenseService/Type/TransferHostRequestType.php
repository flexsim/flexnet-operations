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
     * @param \Flexnet\LicenseService\Type\TransferHostList $sourceHosts
     * @param string|null $soldTo
     * @param bool|null $poolEntitlements
     */
    public function __construct(\Flexnet\LicenseService\Type\TransferHostList $sourceHosts, string|null $soldTo = null, bool|null $poolEntitlements = null)
    {
        $this->sourceHosts = $sourceHosts;
        $this->soldTo = $soldTo;
        $this->poolEntitlements = $poolEntitlements;
    }

    /**
     * @param \Flexnet\LicenseService\Type\TransferHostList $sourceHosts
     * @param string|null $soldTo
     * @param bool|null $poolEntitlements
     */
    public static function create(\Flexnet\LicenseService\Type\TransferHostList $sourceHosts, string|null $soldTo = null, bool|null $poolEntitlements = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\TransferHostList
     */
    public function getSourceHosts() : \Flexnet\LicenseService\Type\TransferHostList
    {
        return $this->sourceHosts;
    }

    /**
     * @param \Flexnet\LicenseService\Type\TransferHostList $sourceHosts
     * @return TransferHostRequestType
     */
    public function withSourceHosts(\Flexnet\LicenseService\Type\TransferHostList $sourceHosts) : \Flexnet\LicenseService\Type\TransferHostRequestType
    {
        $new = clone $this;
        $new->sourceHosts = $sourceHosts;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSoldTo() : string|null
    {
        return $this->soldTo;
    }

    /**
     * @param string|null $soldTo
     * @return TransferHostRequestType
     */
    public function withSoldTo(string|null $soldTo) : \Flexnet\LicenseService\Type\TransferHostRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getPoolEntitlements() : bool|null
    {
        return $this->poolEntitlements;
    }

    /**
     * @param bool|null $poolEntitlements
     * @return TransferHostRequestType
     */
    public function withPoolEntitlements(bool|null $poolEntitlements) : \Flexnet\LicenseService\Type\TransferHostRequestType
    {
        $new = clone $this;
        $new->poolEntitlements = $poolEntitlements;

        return $new;
    }
}

