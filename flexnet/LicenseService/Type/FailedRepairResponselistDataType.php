<?php

namespace Flexnet\LicenseService\Type;

class FailedRepairResponselistDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array<\Flexnet\LicenseService\Type\FailedRepairResponseDataType>|null
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array<\Flexnet\LicenseService\Type\FailedRepairResponseDataType>|null  $failedFulfillment
     */
    public function __construct(FailedRepairResponseDataType|array $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array<\Flexnet\LicenseService\Type\FailedRepairResponseDataType>|null  $failedFulfillment
     */
    public static function create(FailedRepairResponseDataType|array $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array<\Flexnet\LicenseService\Type\FailedRepairResponseDataType>|null
     */
    public function getFailedFulfillment(): FailedRepairResponseDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array<\Flexnet\LicenseService\Type\FailedRepairResponseDataType>|null  $failedFulfillment
     */
    public function withFailedFulfillment(FailedRepairResponseDataType|array|null $failedFulfillment): FailedRepairResponselistDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
