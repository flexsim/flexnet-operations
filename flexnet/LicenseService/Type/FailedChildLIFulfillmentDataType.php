<?php

namespace Flexnet\LicenseService\Type;

class FailedChildLIFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType  $fulfillment
     */
    public function __construct(CreateChildLineItemFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType  $fulfillment
     */
    public static function create(CreateChildLineItemFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
     */
    public function getFulfillment(): CreateChildLineItemFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType  $fulfillment
     */
    public function withFulfillment(CreateChildLineItemFulfillmentDataType $fulfillment): FailedChildLIFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedChildLIFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
