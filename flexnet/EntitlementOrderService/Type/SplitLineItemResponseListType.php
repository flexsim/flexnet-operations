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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array $splitLineItem)
    {
        $this->splitLineItem = $splitLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType>  $splitLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array $splitLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType>
     */
    public function getSplitLineItem(): \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array
    {
        return $this->splitLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType>  $splitLineItem
     */
    public function withSplitLineItem(\Flexnet\EntitlementOrderService\Type\SplitLineItemDataType|array $splitLineItem): \Flexnet\EntitlementOrderService\Type\SplitLineItemResponseListType
    {
        $new = clone $this;
        $new->splitLineItem = $splitLineItem;

        return $new;
    }
}
