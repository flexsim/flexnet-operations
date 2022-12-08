<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReturnFulfillmentRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\ReturnFulfillmentDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\ReturnFulfillmentDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentDataType>  $fulfillment
     */
    public function __construct(ReturnFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ReturnFulfillmentDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentDataType>  $fulfillment
     */
    public static function create(ReturnFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ReturnFulfillmentDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentDataType>
     */
    public function getFulfillment(): ReturnFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ReturnFulfillmentDataType|array<\Flexnet\LicenseService\Type\ReturnFulfillmentDataType>  $fulfillment
     * @return ReturnFulfillmentRequestType
     */
    public function withFulfillment(ReturnFulfillmentDataType|array $fulfillment): ReturnFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
