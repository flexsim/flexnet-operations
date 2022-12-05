<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedTransferLineItemListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedTransferLineItemDataType>
     */
    private $failedLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedTransferLineItemDataType>  $failedLineItem
     */
    public function __construct(FailedTransferLineItemDataType|array $failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedTransferLineItemDataType>  $failedLineItem
     */
    public static function create(FailedTransferLineItemDataType|array $failedLineItem)
    {
        return new static(...\func_get_args());
    }

    public function getFailedLineItem(): FailedTransferLineItemDataType|array
    {
        return $this->failedLineItem;
    }

    public function withFailedLineItem(FailedTransferLineItemDataType|array $failedLineItem): FailedTransferLineItemListType
    {
        $new = clone $this;
        $new->failedLineItem = $failedLineItem;

        return $new;
    }
}
