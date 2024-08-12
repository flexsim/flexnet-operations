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
    public function __construct(\Flexnet\LicenseService\Type\RehostFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentDataType>  $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\RehostFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RehostFulfillmentDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentDataType>
     */
    public function getFulfillment(): \Flexnet\LicenseService\Type\RehostFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostFulfillmentDataType|array<\Flexnet\LicenseService\Type\RehostFulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\RehostFulfillmentDataType|array $fulfillment): \Flexnet\LicenseService\Type\RehostFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
