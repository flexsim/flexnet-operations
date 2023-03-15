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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType  $lineItemList
     */
    public function __construct(GetMatchingLineItemsListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsListType  $lineItemList
     */
    public static function create(GetMatchingLineItemsListType $lineItemList)
    {
        return new static(...\func_get_args());
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
     */
    public function withLineItemList(GetMatchingLineItemsListType $lineItemList): GetMatchingLineItemsRequestType
    {
        $new = clone $this;
        $new->lineItemList = $lineItemList;

        return $new;
    }
}
