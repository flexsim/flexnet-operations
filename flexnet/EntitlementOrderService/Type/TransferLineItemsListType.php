<?php

namespace Flexnet\EntitlementOrderService\Type;

class TransferLineItemsListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType>
     */
    private $lineItemInfo;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType>  $lineItemInfo
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array $lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType>  $lineItemInfo
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array $lineItemInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType>
     */
    public function getLineItemInfo(): \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array
    {
        return $this->lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType>  $lineItemInfo
     */
    public function withLineItemInfo(\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array $lineItemInfo): \Flexnet\EntitlementOrderService\Type\TransferLineItemsListType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }
}
