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
    public function __construct(GetMatchingLineItemInfoType|array $lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType>  $lineItemInfo
     */
    public static function create(GetMatchingLineItemInfoType|array $lineItemInfo)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemInfo(): GetMatchingLineItemInfoType|array
    {
        return $this->lineItemInfo;
    }

    public function withLineItemInfo(GetMatchingLineItemInfoType|array $lineItemInfo): GetMatchingLineItemsListType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }
}
