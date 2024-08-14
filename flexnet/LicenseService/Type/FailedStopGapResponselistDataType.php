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
    public function __construct(\Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array|null $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array<\Flexnet\LicenseService\Type\FailedStopGapResponseDataType>|null  $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array|null $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array<\Flexnet\LicenseService\Type\FailedStopGapResponseDataType>|null
     */
    public function getFailedFulfillment(): \Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array<\Flexnet\LicenseService\Type\FailedStopGapResponseDataType>|null  $failedFulfillment
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedStopGapResponseDataType|array|null $failedFulfillment): \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
