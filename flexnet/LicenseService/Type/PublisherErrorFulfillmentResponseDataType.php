<?php

namespace Flexnet\LicenseService\Type;

class PublisherErrorFulfillmentResponseDataType
{
    /**
     * @var int
     */
    private $recordRefNo;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentDataType|null
     */
    private $fulfillment;

    /**
     * Constructor
     */
    public function __construct(int $recordRefNo, ?\Flexnet\LicenseService\Type\FulfillmentDataType $fulfillment = null)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillment = $fulfillment;
    }

    public static function create(int $recordRefNo, ?\Flexnet\LicenseService\Type\FulfillmentDataType $fulfillment = null)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): int
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(int $recordRefNo): \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    public function getFulfillment(): ?\Flexnet\LicenseService\Type\FulfillmentDataType
    {
        return $this->fulfillment;
    }

    public function withFulfillment(?\Flexnet\LicenseService\Type\FulfillmentDataType $fulfillment): \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
