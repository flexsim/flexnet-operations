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
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType  $lineItemList
     */
    public static function create(GetMatchingLineItemsListType $lineItemList)
    {
        return new static(...\func_get_args());
    }

    public function __construct(GetMatchingLineItemsListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType
     */
    public function getLineItemList(): GetMatchingLineItemsListType
    {
        return $this->lineItemList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType  $lineItemList
     * @return GetMatchingLineItemsRequestType
     */
    public function withLineItemList(GetMatchingLineItemsListType $lineItemList): GetMatchingLineItemsRequestType
    {
        $new = clone $this;
        $new->lineItemList = $lineItemList;

        return $new;
    }
}
