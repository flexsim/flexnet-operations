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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemsListType  $lineItemList
     */
    public function __construct(TransferLineItemsListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemsListType  $lineItemList
     */
    public static function create(TransferLineItemsListType $lineItemList)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferLineItemsListType
     */
    public function getLineItemList(): TransferLineItemsListType
    {
        return $this->lineItemList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemsListType  $lineItemList
     */
    public function withLineItemList(TransferLineItemsListType $lineItemList): TransferLineItemsRequestType
    {
        $new = clone $this;
        $new->lineItemList = $lineItemList;

        return $new;
    }
}
