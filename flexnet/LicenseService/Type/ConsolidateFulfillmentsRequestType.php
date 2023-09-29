<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ConsolidateFulfillmentsRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierListType
     */
    private $fulfillments;

    /**
     * Constructor
     */
    public function __construct(FulfillmentIdentifierListType $fulfillments)
    {
        $this->fulfillments = $fulfillments;
    }

    public static function create(FulfillmentIdentifierListType $fulfillments)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillments(): FulfillmentIdentifierListType
    {
        return $this->fulfillments;
    }

    public function withFulfillments(FulfillmentIdentifierListType $fulfillments): ConsolidateFulfillmentsRequestType
    {
        $new = clone $this;
        $new->fulfillments = $fulfillments;

        return $new;
    }
}
