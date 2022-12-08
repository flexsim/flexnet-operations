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
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierListType  $fulfillments
     */
    public function __construct(FulfillmentIdentifierListType $fulfillments)
    {
        $this->fulfillments = $fulfillments;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierListType  $fulfillments
     */
    public static function create(FulfillmentIdentifierListType $fulfillments)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierListType
     */
    public function getFulfillments(): FulfillmentIdentifierListType
    {
        return $this->fulfillments;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierListType  $fulfillments
     * @return ConsolidateFulfillmentsRequestType
     */
    public function withFulfillments(FulfillmentIdentifierListType $fulfillments): ConsolidateFulfillmentsRequestType
    {
        $new = clone $this;
        $new->fulfillments = $fulfillments;

        return $new;
    }
}
