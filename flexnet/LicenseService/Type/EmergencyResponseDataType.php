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
    public function __construct(EmergencyFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(EmergencyFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): EmergencyFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseDataType>|null  $fulfillmentData
     * @return EmergencyResponseDataType
     */
    public function withFulfillmentData(EmergencyFulfillmentResponseDataType|array|null $fulfillmentData): EmergencyResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
