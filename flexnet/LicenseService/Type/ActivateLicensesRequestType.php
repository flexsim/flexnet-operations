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
     */
    public function __construct(TypeLineItem|array $lineItem, string $hostInfo, string $shipToEmail = null, string $shipToAddress = null, string $soldTo = null, string $owner = null)
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
     */
    public static function create(TypeLineItem|array $lineItem, string $hostInfo, string $shipToEmail = null, string $shipToAddress = null, string $soldTo = null, string $owner = null)
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
     */
    public function withLineItem(TypeLineItem|array $lineItem): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getSoldTo(): ?string
    {
        return $this->soldTo;
    }

    public function withSoldTo(?string $soldTo): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function withOwner(?string $owner): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->owner = $owner;

        return $new;
    }

    public function getHostInfo(): string
    {
        return $this->hostInfo;
    }

    public function withHostInfo(string $hostInfo): ActivateLicensesRequestType
    {
        $new = clone $this;
        $new->hostInfo = $hostInfo;

        return $new;
    }
}
