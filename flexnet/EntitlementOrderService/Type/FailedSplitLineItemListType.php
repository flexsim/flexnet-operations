<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedSplitLineItemListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType>
     */
    private $failedLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType>  $failedLineItem
     */
    public function __construct(FailedSplitLineItemDataType|array $failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType>  $failedLineItem
     */
    public static function create(FailedSplitLineItemDataType|array $failedLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType>
     */
    public function getFailedLineItem(): FailedSplitLineItemDataType|array
    {
        return $this->failedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType>  $failedLineItem
     * @return FailedSplitLineItemListType
     */
    public function withFailedLineItem(FailedSplitLineItemDataType|array $failedLineItem): FailedSplitLineItemListType
    {
        $new = clone $this;
        $new->failedLineItem = $failedLineItem;

        return $new;
    }
}
