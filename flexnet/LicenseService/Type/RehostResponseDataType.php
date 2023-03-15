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
    public function __construct(RehostFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(RehostFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): RehostFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function withFulfillmentData(RehostFulfillmentResponseDataType|array|null $fulfillmentData): RehostResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
