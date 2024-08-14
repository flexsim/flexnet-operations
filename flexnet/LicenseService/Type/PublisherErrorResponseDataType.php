<?php

namespace Flexnet\LicenseService\Type;

class PublisherErrorResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType>|null
     */
    private $fulfillmentData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function __construct(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public function withFulfillmentData(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array|null $fulfillmentData): \Flexnet\LicenseService\Type\PublisherErrorResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
