<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RepairShortCodeRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\RepairShortCodeDataType|null
     */
    private $shortCodeData;

    /**
     * Constructor
     */
    public function __construct(RepairShortCodeDataType $shortCodeData = null)
    {
        $this->shortCodeData = $shortCodeData;
    }

    public static function create(RepairShortCodeDataType $shortCodeData = null)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): ?RepairShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(?RepairShortCodeDataType $shortCodeData): RepairShortCodeRequestType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }
}
