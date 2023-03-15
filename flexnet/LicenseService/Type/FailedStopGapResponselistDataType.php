<?php

namespace Flexnet\LicenseService\Type;

class FailedStopGapResponselistDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array<\Flexnet\LicenseService\Type\FailedStopGapResponseDataType>|null
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array<\Flexnet\LicenseService\Type\FailedStopGapResponseDataType>|null  $failedFulfillment
     */
    public function __construct(FailedStopGapResponseDataType|array|null $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array<\Flexnet\LicenseService\Type\FailedStopGapResponseDataType>|null  $failedFulfillment
     */
    public static function create(FailedStopGapResponseDataType|array|null $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array<\Flexnet\LicenseService\Type\FailedStopGapResponseDataType>|null
     */
    public function getFailedFulfillment(): FailedStopGapResponseDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array<\Flexnet\LicenseService\Type\FailedStopGapResponseDataType>|null  $failedFulfillment
     */
    public function withFailedFulfillment(FailedStopGapResponseDataType|array|null $failedFulfillment): FailedStopGapResponselistDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
