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
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|null  $fulfillment
     */
    public function __construct(int $recordRefNo, FulfillmentDataType|null $fulfillment = null)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|null  $fulfillment
     */
    public static function create(int $recordRefNo, FulfillmentDataType|null $fulfillment = null)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): int
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(int $recordRefNo): PublisherErrorFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentDataType|null
     */
    public function getFulfillment(): FulfillmentDataType|null
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|null  $fulfillment
     */
    public function withFulfillment(FulfillmentDataType|null $fulfillment): PublisherErrorFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
