<?php

namespace Flexnet\LicenseService\Type;

class RehostFulfillmentResponseDataType
{
    /**
     * @var int
     */
    private $recordRefNo;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  int  $recordRefNo
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>  $fulfillment
     */
    public function __construct(int $recordRefNo, FulfillmentDataType|array $fulfillment)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  int  $recordRefNo
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>  $fulfillment
     */
    public static function create(int $recordRefNo, FulfillmentDataType|array $fulfillment)
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
     * @return RehostFulfillmentResponseDataType
     */
    public function withRecordRefNo(int $recordRefNo): RehostFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>
     */
    public function getFulfillment(): FulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>  $fulfillment
     * @return RehostFulfillmentResponseDataType
     */
    public function withFulfillment(FulfillmentDataType|array $fulfillment): RehostFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
