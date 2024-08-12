<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMatchingLineItemsRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType
     */
    private $lineItemList;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType $lineItemList)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemList(): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType
    {
        return $this->lineItemList;
    }

    public function withLineItemList(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType $lineItemList): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsRequestType
    {
        $new = clone $this;
        $new->lineItemList = $lineItemList;

        return $new;
    }
}
