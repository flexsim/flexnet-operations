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
     * @param  \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function __construct(ReturnFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(ReturnFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): ReturnFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentResponseDataType>|null  $fulfillmentData
     * @return ReturnResponseDataType
     */
    public function withFulfillmentData(ReturnFulfillmentResponseDataType|array|null $fulfillmentData): ReturnResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
