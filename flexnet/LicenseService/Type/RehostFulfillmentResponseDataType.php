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
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>  $fulfillment
     */
    public function __construct(int $recordRefNo, \Flexnet\LicenseService\Type\FulfillmentDataType|array $fulfillment)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>  $fulfillment
     */
    public static function create(int $recordRefNo, \Flexnet\LicenseService\Type\FulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): int
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(int $recordRefNo): \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>
     */
    public function getFulfillment(): \Flexnet\LicenseService\Type\FulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\FulfillmentDataType|array $fulfillment): \Flexnet\LicenseService\Type\RehostFulfillmentResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
