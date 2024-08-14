<?php

namespace Flexnet\EntitlementOrderService\Type;

class GetMatchingLineItemsListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType>
     */
    private $lineItemInfo;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType>  $lineItemInfo
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array $lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType>  $lineItemInfo
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array $lineItemInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType>
     */
    public function getLineItemInfo(): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array
    {
        return $this->lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType>  $lineItemInfo
     */
    public function withLineItemInfo(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array $lineItemInfo): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }
}
