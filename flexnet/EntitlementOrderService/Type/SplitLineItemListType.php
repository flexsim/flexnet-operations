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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array $lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType>  $lineItemInfo
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array $lineItemInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType>
     */
    public function getLineItemInfo(): \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array
    {
        return $this->lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType>  $lineItemInfo
     */
    public function withLineItemInfo(\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType|array $lineItemInfo): \Flexnet\EntitlementOrderService\Type\SplitLineItemListType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }
}
