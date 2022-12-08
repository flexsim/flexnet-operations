<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PublisherErrorFulfillmentRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType> $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType> $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType>
     */
    public function getFulfillment() : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType|array<\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType> $fulfillment
     * @return PublisherErrorFulfillmentRequestType
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType|array $fulfillment) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}

