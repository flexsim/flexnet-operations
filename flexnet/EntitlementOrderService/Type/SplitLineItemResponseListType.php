<?php

namespace Flexnet\EntitlementOrderService\Type;

class SplitLineItemResponseListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType>
     */
    private $splitLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType>  $splitLineItem
     */
    public function __construct(SplitLineItemDataType|array $splitLineItem)
    {
        $this->splitLineItem = $splitLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType>  $splitLineItem
     */
    public static function create(SplitLineItemDataType|array $splitLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType>
     */
    public function getSplitLineItem(): SplitLineItemDataType|array
    {
        return $this->splitLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType>  $splitLineItem
     * @return SplitLineItemResponseListType
     */
    public function withSplitLineItem(SplitLineItemDataType|array $splitLineItem): SplitLineItemResponseListType
    {
        $new = clone $this;
        $new->splitLineItem = $splitLineItem;

        return $new;
    }
}
