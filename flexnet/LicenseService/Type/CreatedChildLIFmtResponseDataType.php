<?php

namespace Flexnet\LicenseService\Type;

class CreatedChildLIFmtResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType>  $fulfillment
     */
    public function __construct(CreatedChildLIFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType>  $fulfillment
     */
    public static function create(CreatedChildLIFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType>
     */
    public function getFulfillment(): CreatedChildLIFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(CreatedChildLIFulfillmentDataType|array $fulfillment): CreatedChildLIFmtResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
