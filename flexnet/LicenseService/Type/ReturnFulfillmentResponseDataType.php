<?php

namespace Flexnet\LicenseService\Type;

class ReturnFulfillmentResponseDataType
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
    public function __construct(int $recordRefNo, FulfillmentDataType $fulfillment = null)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillment = $fulfillment;
    }

    public static function create(int $recordRefNo, FulfillmentDataType $fulfillment = null)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): int
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(int $recordRefNo): ReturnFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    public function getFulfillment(): ?FulfillmentDataType
    {
        return $this->fulfillment;
    }

    public function withFulfillment(?FulfillmentDataType $fulfillment): ReturnFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
