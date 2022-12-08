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
     * @param \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public function __construct(\Flexnet\LicenseService\Type\EmergencyFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public static function create(\Flexnet\LicenseService\Type\EmergencyFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
     */
    public function getFulfillment() : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType $fulfillment
     * @return FailedEmergencyResponseDataType
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\EmergencyFulfillmentDataType $fulfillment) : \Flexnet\LicenseService\Type\FailedEmergencyResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return FailedEmergencyResponseDataType
     */
    public function withReason(string $reason) : \Flexnet\LicenseService\Type\FailedEmergencyResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

