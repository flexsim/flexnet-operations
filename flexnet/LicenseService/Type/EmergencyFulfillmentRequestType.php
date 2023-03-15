<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmergencyFulfillmentRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentDataType>  $fulfillment
     */
    public function __construct(EmergencyFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentDataType>  $fulfillment
     */
    public static function create(EmergencyFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentDataType>
     */
    public function getFulfillment(): EmergencyFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType|array<\Flexnet\LicenseService\Type\EmergencyFulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(EmergencyFulfillmentDataType|array $fulfillment): EmergencyFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
