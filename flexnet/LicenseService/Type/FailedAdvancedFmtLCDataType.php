<?php

namespace Flexnet\LicenseService\Type;

class FailedAdvancedFmtLCDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType  $fulfillment
     * @param  string  $reason
     */
    public function __construct(AdvancedFulfillmentLCDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType  $fulfillment
     * @param  string  $reason
     */
    public static function create(AdvancedFulfillmentLCDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
     */
    public function getFulfillment(): AdvancedFulfillmentLCDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType  $fulfillment
     * @return FailedAdvancedFmtLCDataType
     */
    public function withFulfillment(AdvancedFulfillmentLCDataType $fulfillment): FailedAdvancedFmtLCDataType
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
     * @return FailedAdvancedFmtLCDataType
     */
    public function withReason(string $reason): FailedAdvancedFmtLCDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}