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
     * @param \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array<\Flexnet\LicenseService\Type\FailedRepairResponseDataType>|null $failedFulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedRepairResponseDataType|array|null $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array<\Flexnet\LicenseService\Type\FailedRepairResponseDataType>|null $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedRepairResponseDataType|array|null $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array<\Flexnet\LicenseService\Type\FailedRepairResponseDataType>|null
     */
    public function getFailedFulfillment() : \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedRepairResponseDataType|array<\Flexnet\LicenseService\Type\FailedRepairResponseDataType>|null $failedFulfillment
     * @return FailedRepairResponselistDataType
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedRepairResponseDataType|array|null $failedFulfillment) : \Flexnet\LicenseService\Type\FailedRepairResponselistDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}

