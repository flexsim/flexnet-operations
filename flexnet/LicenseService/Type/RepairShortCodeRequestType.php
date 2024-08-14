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
    public function __construct(?\Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData = null)
    {
        $this->shortCodeData = $shortCodeData;
    }

    public static function create(?\Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData = null)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): ?\Flexnet\LicenseService\Type\RepairShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(?\Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData): \Flexnet\LicenseService\Type\RepairShortCodeRequestType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }
}
