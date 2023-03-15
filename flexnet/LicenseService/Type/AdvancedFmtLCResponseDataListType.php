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
    public function __construct(AdvancedFmtLCResponseDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array<\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType>  $fulfillment
     */
    public static function create(AdvancedFmtLCResponseDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array<\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType>
     */
    public function getFulfillment(): AdvancedFmtLCResponseDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType|array<\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType>  $fulfillment
     */
    public function withFulfillment(AdvancedFmtLCResponseDataType|array $fulfillment): AdvancedFmtLCResponseDataListType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
