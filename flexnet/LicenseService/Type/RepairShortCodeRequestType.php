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
     *
     * @param  \Flexnet\LicenseService\Type\RepairShortCodeDataType|null  $shortCodeData
     */
    public function __construct(RepairShortCodeDataType|null $shortCodeData = null)
    {
        $this->shortCodeData = $shortCodeData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairShortCodeDataType|null  $shortCodeData
     */
    public static function create(RepairShortCodeDataType|null $shortCodeData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairShortCodeDataType|null
     */
    public function getShortCodeData(): RepairShortCodeDataType|null
    {
        return $this->shortCodeData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairShortCodeDataType|null  $shortCodeData
     */
    public function withShortCodeData(RepairShortCodeDataType|null $shortCodeData): RepairShortCodeRequestType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }
}
