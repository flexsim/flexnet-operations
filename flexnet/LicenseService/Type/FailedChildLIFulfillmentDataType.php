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
     * @param  string  $reason
     */
    public function __construct(CreateChildLineItemFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType  $fulfillment
     * @param  string  $reason
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
     * @return FailedChildLIFulfillmentDataType
     */
    public function withFulfillment(CreateChildLineItemFulfillmentDataType $fulfillment): FailedChildLIFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param  string  $reason
     * @return FailedChildLIFulfillmentDataType
     */
    public function withReason(string $reason): FailedChildLIFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
