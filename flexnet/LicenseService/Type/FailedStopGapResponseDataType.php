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
     */
    public function __construct(StopGapFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    public static function create(StopGapFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillment(): StopGapFulfillmentDataType
    {
        return $this->fulfillment;
    }

    public function withFulfillment(StopGapFulfillmentDataType $fulfillment): FailedStopGapResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedStopGapResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
