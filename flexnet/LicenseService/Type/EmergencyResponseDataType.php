<?php

namespace Flexnet\LicenseService\Type;

class EmergencyResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType>|null
     */
    private $fulfillmentData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function __construct(\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function withFulfillmentData(\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array|null $fulfillmentData): \Flexnet\LicenseService\Type\EmergencyResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
