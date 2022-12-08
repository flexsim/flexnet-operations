<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ActivateLicensesRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\TypeLineItem|array<\Flexnet\LicenseService\Type\TypeLineItem>
     */
    private $lineItem;

    /**
     * @var string|null
     */
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * @var string|null
     */
    private $soldTo;

    /**
     * @var string|null
     */
    private $owner;

    /**
     * @var string
     */
    private $hostInfo;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\TypeLineItem|array<\Flexnet\LicenseService\Type\TypeLineItem> $lineItem
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param string|null $soldTo
     * @param string|null $owner
     * @param string $hostInfo
     */
    public function __construct(\Flexnet\LicenseService\Type\TypeLineItem|array $lineItem, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $soldTo = null, string|null $owner = null, string $hostInfo)
    {
        $this->lineItem = $lineItem;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->soldTo = $soldTo;
        $this->owner = $owner;
        $this->hostInfo = $hostInfo;
    }

    /**
     * @param \Flexnet\LicenseService\Type\TypeLineItem|array<\Flexnet\LicenseService\Type\TypeLineItem> $lineItem
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param string|null $soldTo
     * @param string|null $owner
     * @param string $hostInfo
     */
    public static function create(\Flexnet\LicenseService\Type\TypeLineItem|array $lineItem, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $soldTo = null, string|null $owner = null, string $hostInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\TypeLineItem|array<\Flexnet\LicenseService\Type\TypeLineItem>
     */
    public function getLineItem() : \Flexnet\LicenseService\Type\TypeLineItem|array
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexnet\LicenseService\Type\TypeLineItem|array<\Flexnet\LicenseService\Type\TypeLineItem> $lineItem
     * @return ActivateLicensesRequestType
     */
    public function withLineItem(\Flexnet\LicenseService\Type\TypeLineItem|array $lineItem) : \Flexnet\LicenseService\Type\ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail() : string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param string|null $shipToEmail
     * @return ActivateLicensesRequestType
     */
    public function withShipToEmail(string|null $shipToEmail) : \Flexnet\LicenseService\Type\ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress() : string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param string|null $shipToAddress
     * @return ActivateLicensesRequestType
     */
    public function withShipToAddress(string|null $shipToAddress) : \Flexnet\LicenseService\Type\ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

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
     * @return ActivateLicensesRequestType
     */
    public function withSoldTo(string|null $soldTo) : \Flexnet\LicenseService\Type\ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getOwner() : string|null
    {
        return $this->owner;
    }

    /**
     * @param string|null $owner
     * @return ActivateLicensesRequestType
     */
    public function withOwner(string|null $owner) : \Flexnet\LicenseService\Type\ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->owner = $owner;

        return $new;
    }

    /**
     * @return string
     */
    public function getHostInfo() : string
    {
        return $this->hostInfo;
    }

    /**
     * @param string $hostInfo
     * @return ActivateLicensesRequestType
     */
    public function withHostInfo(string $hostInfo) : \Flexnet\LicenseService\Type\ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->hostInfo = $hostInfo;

        return $new;
    }
}

