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
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentIdentifier, string $reason)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     */
    public static function create(FulfillmentIdentifierType $fulfillmentIdentifier, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     */
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
