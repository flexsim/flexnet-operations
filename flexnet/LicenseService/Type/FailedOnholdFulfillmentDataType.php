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
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $reason)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentIdentifier(): \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier): \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
