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
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierListType $fulfillments)
    {
        $this->fulfillments = $fulfillments;
    }

    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierListType $fulfillments)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillments(): \Flexnet\LicenseService\Type\FulfillmentIdentifierListType
    {
        return $this->fulfillments;
    }

    public function withFulfillments(\Flexnet\LicenseService\Type\FulfillmentIdentifierListType $fulfillments): \Flexnet\LicenseService\Type\ConsolidateFulfillmentsRequestType
    {
        $new = clone $this;
        $new->fulfillments = $fulfillments;

        return $new;
    }
}
