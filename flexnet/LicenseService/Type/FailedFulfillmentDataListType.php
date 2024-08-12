<?php

namespace Flexnet\LicenseService\Type;

class FailedFulfillmentDataListType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedFulfillmentDataType>|null
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FailedFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedFulfillmentDataType>|null  $failedFulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedFulfillmentDataType|array|null $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedFulfillmentDataType>|null  $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedFulfillmentDataType|array|null $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedFulfillmentDataType>|null
     */
    public function getFailedFulfillment(): \Flexnet\LicenseService\Type\FailedFulfillmentDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedFulfillmentDataType>|null  $failedFulfillment
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedFulfillmentDataType|array|null $failedFulfillment): \Flexnet\LicenseService\Type\FailedFulfillmentDataListType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
