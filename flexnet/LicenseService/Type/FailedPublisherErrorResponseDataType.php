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
     * @param \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public function __construct(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public static function create(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
     */
    public function getFulfillment() : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType $fulfillment
     * @return FailedPublisherErrorResponseDataType
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType $fulfillment) : \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return FailedPublisherErrorResponseDataType
     */
    public function withReason(string $reason) : \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

