<?php

namespace Flexnet\EntitlementOrderService\Type;

class TransferredLineItemsListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType>
     */
    private $transferredLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType>  $transferredLineItem
     */
    public function __construct(TransferredLineItemDataType|array $transferredLineItem)
    {
        $this->transferredLineItem = $transferredLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType>  $transferredLineItem
     */
    public static function create(TransferredLineItemDataType|array $transferredLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType>
     */
    public function getTransferredLineItem(): TransferredLineItemDataType|array
    {
        return $this->transferredLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType>  $transferredLineItem
     */
    public function withTransferredLineItem(TransferredLineItemDataType|array $transferredLineItem): TransferredLineItemsListType
    {
        $new = clone $this;
        $new->transferredLineItem = $transferredLineItem;

        return $new;
    }
}
