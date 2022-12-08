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
    public function __construct(PublisherErrorFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType>|null  $fulfillmentData
     */
    public static function create(PublisherErrorFulfillmentResponseDataType|array|null $fulfillmentData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType>|null
     */
    public function getFulfillmentData(): PublisherErrorFulfillmentResponseDataType|array|null
    {
        return $this->fulfillmentData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType>|null  $fulfillmentData
     * @return PublisherErrorResponseDataType
     */
    public function withFulfillmentData(PublisherErrorFulfillmentResponseDataType|array|null $fulfillmentData): PublisherErrorResponseDataType
    {
        $new = clone $this;
        $new->fulfillmentData = $fulfillmentData;

        return $new;
    }
}
