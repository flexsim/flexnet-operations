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
     * @param \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType> $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType> $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType>
     */
    public function getFulfillment() : \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType> $fulfillment
     * @return CreateChildLineItemFulfillmentRequestType
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType|array $fulfillment) : \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}

