<?php

namespace Flexnet\EntitlementOrderService\Type;

class GetMatchingLineItemsResponseListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType>
     */
    private $matchingLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType>  $matchingLineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType|array $matchingLineItem)
    {
        $this->matchingLineItem = $matchingLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType>  $matchingLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType|array $matchingLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType>
     */
    public function getMatchingLineItem(): \Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType|array
    {
        return $this->matchingLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType>  $matchingLineItem
     */
    public function withMatchingLineItem(\Flexnet\EntitlementOrderService\Type\MatchingLineItemDataType|array $matchingLineItem): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsResponseListType
    {
        $new = clone $this;
        $new->matchingLineItem = $matchingLineItem;

        return $new;
    }
}
