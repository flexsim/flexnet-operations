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
     */
    public function __construct(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillment(): \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
    {
        return $this->fulfillment;
    }

    public function withFulfillment(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType $fulfillment): \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
