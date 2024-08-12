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
    public function __construct(\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): \Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function withFulfillmentData(\Flexnet\LicenseService\Type\RepairFulfillmentResponseDataType|array|null $fulfillmentData): \Flexnet\LicenseService\Type\RepairResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
