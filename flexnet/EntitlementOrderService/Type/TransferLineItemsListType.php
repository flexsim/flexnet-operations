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
    public function __construct(TransferLineItemInfoType|array $lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType>  $lineItemInfo
     */
    public static function create(TransferLineItemInfoType|array $lineItemInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType>
     */
    public function getLineItemInfo(): TransferLineItemInfoType|array
    {
        return $this->lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType>  $lineItemInfo
     * @return TransferLineItemsListType
     */
    public function withLineItemInfo(TransferLineItemInfoType|array $lineItemInfo): TransferLineItemsListType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }
}
