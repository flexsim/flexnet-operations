<?php

namespace Flexnet\LicenseService\Type;

class FailedRehostResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\RehostFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(RehostFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    public static function create(RehostFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillment(): RehostFulfillmentDataType
    {
        return $this->fulfillment;
    }

    public function withFulfillment(RehostFulfillmentDataType $fulfillment): FailedRehostResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedRehostResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
