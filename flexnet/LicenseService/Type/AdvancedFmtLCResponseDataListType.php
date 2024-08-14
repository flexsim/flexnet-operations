<?php

namespace Flexnet\LicenseService\Type;

class AdvancedFmtLCResponseDataListType
{
    /**
     * @var \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array<\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array<\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType>  $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array<\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType>  $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array<\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType>
     */
    public function getFulfillment(): \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array<\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType>  $fulfillment
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array $fulfillment): \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
