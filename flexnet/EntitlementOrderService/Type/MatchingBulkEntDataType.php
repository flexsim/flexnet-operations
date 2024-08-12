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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $matchingBulkEntIdentifier)
    {
        $this->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $matchingBulkEntIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getMatchingBulkEntIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->matchingBulkEntIdentifier;
    }

    public function withMatchingBulkEntIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $matchingBulkEntIdentifier): \Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType
    {
        $new = clone $this;
        $new->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;

        return $new;
    }
}
