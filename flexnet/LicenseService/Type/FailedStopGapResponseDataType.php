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
     * @param \Flexnet\LicenseService\Type\StopGapFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public function __construct(\Flexnet\LicenseService\Type\StopGapFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StopGapFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public static function create(\Flexnet\LicenseService\Type\StopGapFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
     */
    public function getFulfillment() : \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StopGapFulfillmentDataType $fulfillment
     * @return FailedStopGapResponseDataType
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\StopGapFulfillmentDataType $fulfillment) : \Flexnet\LicenseService\Type\FailedStopGapResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return FailedStopGapResponseDataType
     */
    public function withReason(string $reason) : \Flexnet\LicenseService\Type\FailedStopGapResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

