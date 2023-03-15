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
     */
    public function __construct(CreateFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateFulfillmentDataType  $fulfillment
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
     */
    public function withFulfillment(CreateFulfillmentDataType $fulfillment): FailedFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
