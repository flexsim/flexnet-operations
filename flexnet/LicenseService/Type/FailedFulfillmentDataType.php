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
     */
    public function __construct(\Flexnet\LicenseService\Type\CreateFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\LicenseService\Type\CreateFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillment(): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        return $this->fulfillment;
    }

    public function withFulfillment(\Flexnet\LicenseService\Type\CreateFulfillmentDataType $fulfillment): \Flexnet\LicenseService\Type\FailedFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\LicenseService\Type\FailedFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
