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
     *
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public function __construct(RehostFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public static function create(RehostFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RehostFulfillmentDataType
     */
    public function getFulfillment(): RehostFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentDataType  $fulfillment
     * @return FailedRehostResponseDataType
     */
    public function withFulfillment(RehostFulfillmentDataType $fulfillment): FailedRehostResponseDataType
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
     * @return FailedRehostResponseDataType
     */
    public function withReason(string $reason): FailedRehostResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
