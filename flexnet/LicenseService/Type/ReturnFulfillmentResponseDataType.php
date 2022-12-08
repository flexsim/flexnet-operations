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
     *
     * @param  int  $recordRefNo
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|null  $fulfillment
     */
    public function __construct(int $recordRefNo, FulfillmentDataType|null $fulfillment = null)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  int  $recordRefNo
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|null  $fulfillment
     */
    public static function create(int $recordRefNo, FulfillmentDataType|null $fulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return int
     */
    public function getRecordRefNo(): int
    {
        return $this->recordRefNo;
    }

    /**
     * @param  int  $recordRefNo
     * @return ReturnFulfillmentResponseDataType
     */
    public function withRecordRefNo(int $recordRefNo): ReturnFulfillmentResponseDataType
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
     * @return ReturnFulfillmentResponseDataType
     */
    public function withFulfillment(FulfillmentDataType|null $fulfillment): ReturnFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}