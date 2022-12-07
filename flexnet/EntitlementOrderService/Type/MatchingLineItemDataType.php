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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $matchingLineItemIdentifier
     */
    public function __construct(EntitlementLineItemIdentifierType $matchingLineItemIdentifier)
    {
        $this->matchingLineItemIdentifier = $matchingLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $matchingLineItemIdentifier
     */
    public static function create(EntitlementLineItemIdentifierType $matchingLineItemIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    public function getMatchingLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->matchingLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $matchingLineItemIdentifier
     * @return MatchingLineItemDataType
     */
    public function withMatchingLineItemIdentifier(EntitlementLineItemIdentifierType $matchingLineItemIdentifier): MatchingLineItemDataType
    {
        $new = clone $this;
        $new->matchingLineItemIdentifier = $matchingLineItemIdentifier;

        return $new;
    }
}
