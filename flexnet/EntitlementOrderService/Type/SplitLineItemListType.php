<?php

namespace Flexnet\EntitlementOrderService\Type;

class SplitLineItemListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType>
     */
    private $lineItemInfo;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType>  $lineItemInfo
     */
    public function __construct(SplitLineItemInfoType|array $lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType>  $lineItemInfo
     */
    public static function create(SplitLineItemInfoType|array $lineItemInfo)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemInfo(): SplitLineItemInfoType|array
    {
        return $this->lineItemInfo;
    }

    public function withLineItemInfo(SplitLineItemInfoType|array $lineItemInfo): SplitLineItemListType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }
}
