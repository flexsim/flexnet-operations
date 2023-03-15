<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RehostFulfillmentRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\RehostFulfillmentDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentDataType>  $fulfillment
     */
    public function __construct(RehostFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentDataType>  $fulfillment
     */
    public static function create(RehostFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RehostFulfillmentDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentDataType>
     */
    public function getFulfillment(): RehostFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(RehostFulfillmentDataType|array $fulfillment): RehostFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
