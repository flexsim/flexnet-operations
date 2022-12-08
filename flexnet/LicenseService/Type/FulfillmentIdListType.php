<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentIdListType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>
     */
    private $fulfillmentIdentifier;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType> $fulfillmentIdentifier
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|array $fulfillmentIdentifier)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType> $fulfillmentIdentifier
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|array $fulfillmentIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>
     */
    public function getFulfillmentIdentifier() : \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType> $fulfillmentIdentifier
     * @return FulfillmentIdListType
     */
    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|array $fulfillmentIdentifier) : \Flexnet\LicenseService\Type\FulfillmentIdListType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }
}

