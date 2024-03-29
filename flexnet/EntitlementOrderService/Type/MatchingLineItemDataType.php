<?php

namespace Flexnet\EntitlementOrderService\Type;

class MatchingLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $matchingLineItemIdentifier;

    /**
     * Constructor
     */
    public function __construct(EntitlementLineItemIdentifierType $matchingLineItemIdentifier)
    {
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;
    }

    public static function create(EntitlementLineItemIdentifierType $matchingLineItemIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getMatchingLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->matchingLineItemIdentifier;
    }

    public function withMatchingLineItemIdentifier(EntitlementLineItemIdentifierType $matchingLineItemIdentifier): MatchingLineItemDataType
    {
        $new = clone $this;
        $new->matchingLineItemIdentifier = $matchingLineItemIdentifier;

        return $new;
    }
}
