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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array $failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType>  $failedLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array $failedLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType>
     */
    public function getFailedLineItem(): \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array
    {
        return $this->failedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType>  $failedLineItem
     */
    public function withFailedLineItem(\Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType|array $failedLineItem): \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemsListType
    {
        $new = clone $this;
        $new->failedLineItem = $failedLineItem;

        return $new;
    }
}
