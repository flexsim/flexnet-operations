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
    public function __construct(\Flexnet\LicenseService\Type\StopGapFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\LicenseService\Type\StopGapFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillment(): \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        return $this->fulfillment;
    }

    public function withFulfillment(\Flexnet\LicenseService\Type\StopGapFulfillmentDataType $fulfillment): \Flexnet\LicenseService\Type\FailedStopGapResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\LicenseService\Type\FailedStopGapResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
