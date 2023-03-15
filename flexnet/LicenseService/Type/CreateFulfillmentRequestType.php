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
    public function __construct(CreateFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateFulfillmentDataType>  $fulfillment
     */
    public static function create(CreateFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateFulfillmentDataType>
     */
    public function getFulfillment(): CreateFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateFulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(CreateFulfillmentDataType|array $fulfillment): CreateFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
