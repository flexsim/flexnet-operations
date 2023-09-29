<?php

namespace Flexnet\LicenseService\Type;

class FailedReturnResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\ReturnFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(ReturnFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    public static function create(ReturnFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillment(): ReturnFulfillmentDataType
    {
        return $this->fulfillment;
    }

    public function withFulfillment(ReturnFulfillmentDataType $fulfillment): FailedReturnResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedReturnResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
