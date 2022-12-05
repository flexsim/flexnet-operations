<?php

namespace Flexnet\EntitlementOrderService\Type;

class MatchingBulkEntDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $matchingBulkEntIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $matchingBulkEntIdentifier
     */
    public function __construct(EntitlementIdentifierType $matchingBulkEntIdentifier)
    {
        $this->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $matchingBulkEntIdentifier
     */
    public static function create(EntitlementIdentifierType $matchingBulkEntIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getMatchingBulkEntIdentifier(): EntitlementIdentifierType
    {
        return $this->matchingBulkEntIdentifier;
    }

    public function withMatchingBulkEntIdentifier(EntitlementIdentifierType $matchingBulkEntIdentifier): MatchingBulkEntDataType
    {
        $new = clone $this;
        $new->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;

        return $new;
    }
}
