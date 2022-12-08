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
     * @param \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType> $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType> $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType>
     */
    public function getFulfillment() : \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType> $fulfillment
     * @return CreatedChildLIFmtResponseDataType
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType|array $fulfillment) : \Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}

