<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedMatchingLineItemsListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType>
     */
    private $failedLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType>  $failedLineItem
     */
    public function __construct(FailedMatchingLineItemDataType|array $failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType>  $failedLineItem
     */
    public static function create(FailedMatchingLineItemDataType|array $failedLineItem)
    {
        return new static(...\func_get_args());
    }

    public function getFailedLineItem(): FailedMatchingLineItemDataType|array
    {
        return $this->failedLineItem;
    }

    public function withFailedLineItem(FailedMatchingLineItemDataType|array $failedLineItem): FailedMatchingLineItemsListType
    {
        $new = clone $this;
        $new->failedLineItem = $failedLineItem;

        return $new;
    }
}
