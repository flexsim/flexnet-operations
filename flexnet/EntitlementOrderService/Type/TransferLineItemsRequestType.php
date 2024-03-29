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
    public function __construct(TransferLineItemsListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    public static function create(TransferLineItemsListType $lineItemList)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemList(): TransferLineItemsListType
    {
        return $this->lineItemList;
    }

    public function withLineItemList(TransferLineItemsListType $lineItemList): TransferLineItemsRequestType
    {
        $new = clone $this;
        $new->lineItemList = $lineItemList;

        return $new;
    }
}
