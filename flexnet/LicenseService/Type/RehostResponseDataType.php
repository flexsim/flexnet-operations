<?php

namespace Flexnet\LicenseService\Type;

class RehostResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType>|null
     */
    private $fulfillmentData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function __construct(\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function withFulfillmentData(\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array|null $fulfillmentData): \Flexnet\LicenseService\Type\RehostResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
