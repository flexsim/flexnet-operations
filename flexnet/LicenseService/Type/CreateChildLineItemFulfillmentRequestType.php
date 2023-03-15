<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateChildLineItemFulfillmentRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType>  $fulfillment
     */
    public function __construct(CreateChildLineItemFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType>  $fulfillment
     */
    public static function create(CreateChildLineItemFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType>
     */
    public function getFulfillment(): CreateChildLineItemFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(CreateChildLineItemFulfillmentDataType|array $fulfillment): CreateChildLineItemFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
