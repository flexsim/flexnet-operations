<?php

namespace Flexnet\LicenseService\Type;

class FailedFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\CreateFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CreateFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public function __construct(CreateFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public static function create(CreateFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateFulfillmentDataType
     */
    public function getFulfillment(): CreateFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateFulfillmentDataType  $fulfillment
     * @return FailedFulfillmentDataType
     */
    public function withFulfillment(CreateFulfillmentDataType $fulfillment): FailedFulfillmentDataType
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
     * @return FailedFulfillmentDataType
     */
    public function withReason(string $reason): FailedFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
