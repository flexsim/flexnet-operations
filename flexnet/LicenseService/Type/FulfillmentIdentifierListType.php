<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentIdentifierListType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>
     */
    private $fulfillmentIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>  $fulfillmentIdentifier
     */
    public function __construct(FulfillmentIdentifierType|array $fulfillmentIdentifier)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>  $fulfillmentIdentifier
     */
    public static function create(FulfillmentIdentifierType|array $fulfillmentIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>
     */
    public function getFulfillmentIdentifier(): FulfillmentIdentifierType|array
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>  $fulfillmentIdentifier
     */
    public function withFulfillmentIdentifier(FulfillmentIdentifierType|array $fulfillmentIdentifier): FulfillmentIdentifierListType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }
}
