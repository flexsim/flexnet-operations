<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateFulfillmentRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\CreateFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateFulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CreateFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateFulfillmentDataType>  $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\CreateFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateFulfillmentDataType>  $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\CreateFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateFulfillmentDataType>
     */
    public function getFulfillment(): \Flexnet\LicenseService\Type\CreateFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateFulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\CreateFulfillmentDataType|array $fulfillment): \Flexnet\LicenseService\Type\CreateFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
