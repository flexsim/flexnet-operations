<?php

namespace Flexnet\LicenseService\Type;

class FailedPublisherErrorResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType  $fulfillment
     */
    public function __construct(PublisherErrorFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType  $fulfillment
     */
    public static function create(PublisherErrorFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
     */
    public function getFulfillment(): PublisherErrorFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType  $fulfillment
     */
    public function withFulfillment(PublisherErrorFulfillmentDataType $fulfillment): FailedPublisherErrorResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedPublisherErrorResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
