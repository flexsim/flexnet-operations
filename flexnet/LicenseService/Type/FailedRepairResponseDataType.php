<?php

namespace Flexnet\LicenseService\Type;

class FailedRepairResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\RepairFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentDataType  $fulfillment
     */
    public function __construct(RepairFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentDataType  $fulfillment
     */
    public static function create(RepairFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairFulfillmentDataType
     */
    public function getFulfillment(): RepairFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentDataType  $fulfillment
     */
    public function withFulfillment(RepairFulfillmentDataType $fulfillment): FailedRepairResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedRepairResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
