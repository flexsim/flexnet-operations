<?php

namespace Flexnet\LicenseService\Type;

class FailedStopGapResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StopGapFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public function __construct(StopGapFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StopGapFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public static function create(StopGapFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
     */
    public function getFulfillment(): StopGapFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StopGapFulfillmentDataType  $fulfillment
     * @return FailedStopGapResponseDataType
     */
    public function withFulfillment(StopGapFulfillmentDataType $fulfillment): FailedStopGapResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param  string  $reason
     * @return FailedStopGapResponseDataType
     */
    public function withReason(string $reason): FailedStopGapResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
