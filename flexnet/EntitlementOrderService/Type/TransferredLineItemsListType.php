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
    public function __construct(\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array $transferredLineItem)
    {
        $this->transferredLineItem = $transferredLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType>  $transferredLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array $transferredLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType>
     */
    public function getTransferredLineItem(): \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array
    {
        return $this->transferredLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType>  $transferredLineItem
     */
    public function withTransferredLineItem(\Flexnet\EntitlementOrderService\Type\TransferredLineItemDataType|array $transferredLineItem): \Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType
    {
        $new = clone $this;
        $new->transferredLineItem = $transferredLineItem;

        return $new;
    }
}
