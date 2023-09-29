<?php

namespace Flexnet\LicenseService\Type;

class FailedOnholdFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentIdentifier, string $reason)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->reason = $reason;
    }

    public static function create(FulfillmentIdentifierType $fulfillmentIdentifier, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(FulfillmentIdentifierType $fulfillmentIdentifier): FailedOnholdFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedOnholdFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
