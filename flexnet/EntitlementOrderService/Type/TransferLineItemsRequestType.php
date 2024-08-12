<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransferLineItemsRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferLineItemsListType
     */
    private $lineItemList;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\TransferLineItemsListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\TransferLineItemsListType $lineItemList)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemList(): \Flexnet\EntitlementOrderService\Type\TransferLineItemsListType
    {
        return $this->lineItemList;
    }

    public function withLineItemList(\Flexnet\EntitlementOrderService\Type\TransferLineItemsListType $lineItemList): \Flexnet\EntitlementOrderService\Type\TransferLineItemsRequestType
    {
        $new = clone $this;
        $new->lineItemList = $lineItemList;

        return $new;
    }
}
