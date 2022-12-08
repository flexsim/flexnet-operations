<?php

namespace Flexnet\LicenseService\Type;

class AdvancedFulfillmentLCListType
{
    /**
     * @var \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType>  $fulfillment
     */
    public function __construct(AdvancedFulfillmentLCDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType>  $fulfillment
     */
    public static function create(AdvancedFulfillmentLCDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType>
     */
    public function getFulfillment(): AdvancedFulfillmentLCDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType>  $fulfillment
     * @return AdvancedFulfillmentLCListType
     */
    public function withFulfillment(AdvancedFulfillmentLCDataType|array $fulfillment): AdvancedFulfillmentLCListType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
