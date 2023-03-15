<?php

namespace Flexnet\LicenseService\Type;

class FailedEmergencyResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType  $fulfillment
     */
    public function __construct(EmergencyFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType  $fulfillment
     */
    public static function create(EmergencyFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
     */
    public function getFulfillment(): EmergencyFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType  $fulfillment
     */
    public function withFulfillment(EmergencyFulfillmentDataType $fulfillment): FailedEmergencyResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedEmergencyResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
