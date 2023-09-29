<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SplitLineItemRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitLineItemListType
     */
    private $lineItemList;

    /**
     * Constructor
     */
    public function __construct(SplitLineItemListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    public static function create(SplitLineItemListType $lineItemList)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemList(): SplitLineItemListType
    {
        return $this->lineItemList;
    }

    public function withLineItemList(SplitLineItemListType $lineItemList): SplitLineItemRequestType
    {
        $new = clone $this;
        $new->lineItemList = $lineItemList;

        return $new;
    }
}
