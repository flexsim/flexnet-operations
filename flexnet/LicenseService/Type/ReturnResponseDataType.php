<?php

namespace Flexnet\LicenseService\Type;

class ReturnResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType>|null
     */
    private $fulfillmentData;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType>|null $fulfillmentData
     */
    public function __construct(\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType>|null $fulfillmentData
     */
    public static function create(\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData() : \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType>|null $fulfillmentData
     * @return ReturnResponseDataType
     */
    public function withFulfillmentData(\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array|null $fulfillmentData) : \Flexnet\LicenseService\Type\ReturnResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}

