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
     * @param  string  $reason
     */
    public function __construct(EmergencyFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType  $fulfillment
     * @param  string  $reason
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
     * @return FailedEmergencyResponseDataType
     */
    public function withFulfillment(EmergencyFulfillmentDataType $fulfillment): FailedEmergencyResponseDataType
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
     * @return FailedEmergencyResponseDataType
     */
    public function withReason(string $reason): FailedEmergencyResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}