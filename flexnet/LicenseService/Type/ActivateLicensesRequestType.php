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
     * @param  \Flexnet\LicenseService\Type\TypeLineItem|array<\Flexnet\LicenseService\Type\TypeLineItem>  $lineItem
     * @param  string  $hostInfo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $soldTo
     * @param  string|null  $owner
     */
    public function __construct(TypeLineItem|array $lineItem, string $hostInfo, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $soldTo = null, string|null $owner = null)
    {
        $this->lineItem = $lineItem;
        $this->hostInfo = $hostInfo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->soldTo = $soldTo;
        $this->owner = $owner;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\TypeLineItem|array<\Flexnet\LicenseService\Type\TypeLineItem>  $lineItem
     * @param  string  $hostInfo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $soldTo
     * @param  string|null  $owner
     */
    public static function create(TypeLineItem|array $lineItem, string $hostInfo, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $soldTo = null, string|null $owner = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\TypeLineItem|array<\Flexnet\LicenseService\Type\TypeLineItem>
     */
    public function getLineItem(): TypeLineItem|array
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\TypeLineItem|array<\Flexnet\LicenseService\Type\TypeLineItem>  $lineItem
     * @return ActivateLicensesRequestType
     */
    public function withLineItem(TypeLineItem|array $lineItem): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  string|null  $shipToEmail
     * @return ActivateLicensesRequestType
     */
    public function withShipToEmail(string|null $shipToEmail): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  string|null  $shipToAddress
     * @return ActivateLicensesRequestType
     */
    public function withShipToAddress(string|null $shipToAddress): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSoldTo(): string|null
    {
        return $this->soldTo;
    }

    /**
     * @param  string|null  $soldTo
     * @return ActivateLicensesRequestType
     */
    public function withSoldTo(string|null $soldTo): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getOwner(): string|null
    {
        return $this->owner;
    }

    /**
     * @param  string|null  $owner
     * @return ActivateLicensesRequestType
     */
    public function withOwner(string|null $owner): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->owner = $owner;

        return $new;
    }

    /**
     * @return string
     */
    public function getHostInfo(): string
    {
        return $this->hostInfo;
    }

    /**
     * @param  string  $hostInfo
     * @return ActivateLicensesRequestType
     */
    public function withHostInfo(string $hostInfo): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->hostInfo = $hostInfo;

        return $new;
    }
}
