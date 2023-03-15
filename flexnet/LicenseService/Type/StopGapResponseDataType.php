<?php

namespace Flexnet\LicenseService\Type;

class StopGapResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType>|null
     */
    private $fulfillmentData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function __construct(StopGapFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(StopGapFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): StopGapFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function withFulfillmentData(StopGapFulfillmentResponseDataType|array|null $fulfillmentData): StopGapResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
