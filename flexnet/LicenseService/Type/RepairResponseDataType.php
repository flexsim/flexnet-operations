<?php

namespace Flexnet\LicenseService\Type;

class RepairResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType>|null
     */
    private $fulfillmentData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function __construct(RepairFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(RepairFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): RepairFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType>|null  $fulfillmentData
     * @return RepairResponseDataType
     */
    public function withFulfillmentData(RepairFulfillmentResponseDataType|array|null $fulfillmentData): RepairResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
