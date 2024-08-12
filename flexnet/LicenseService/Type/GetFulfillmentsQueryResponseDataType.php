<?php

namespace Flexnet\LicenseService\Type;

class GetFulfillmentsQueryResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>|null
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>|null  $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentDataType|array|null $fulfillment = null)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>|null  $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentDataType|array|null $fulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>|null
     */
    public function getFulfillment(): \Flexnet\LicenseService\Type\FulfillmentDataType|array|null
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>|null  $fulfillment
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\FulfillmentDataType|array|null $fulfillment): \Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
