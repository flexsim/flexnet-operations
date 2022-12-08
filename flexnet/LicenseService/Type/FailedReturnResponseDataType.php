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
     *
     * @param  \Flexnet\LicenseService\Type\ReturnFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public function __construct(ReturnFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ReturnFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public static function create(ReturnFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ReturnFulfillmentDataType
     */
    public function getFulfillment(): ReturnFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ReturnFulfillmentDataType  $fulfillment
     * @return FailedReturnResponseDataType
     */
    public function withFulfillment(ReturnFulfillmentDataType $fulfillment): FailedReturnResponseDataType
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
     * @return FailedReturnResponseDataType
     */
    public function withReason(string $reason): FailedReturnResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
