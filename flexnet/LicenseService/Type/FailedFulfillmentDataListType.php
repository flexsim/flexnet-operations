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
    public function __construct(FailedFulfillmentDataType|array $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedFulfillmentDataType>|null  $failedFulfillment
     */
    public static function create(FailedFulfillmentDataType|array $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedFulfillmentDataType>|null
     */
    public function getFailedFulfillment(): FailedFulfillmentDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedFulfillmentDataType>|null  $failedFulfillment
     */
    public function withFailedFulfillment(FailedFulfillmentDataType|array|null $failedFulfillment): FailedFulfillmentDataListType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
