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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SplitLineItemListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SplitLineItemListType $lineItemList)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemList(): \Flexnet\EntitlementOrderService\Type\SplitLineItemListType
    {
        return $this->lineItemList;
    }

    public function withLineItemList(\Flexnet\EntitlementOrderService\Type\SplitLineItemListType $lineItemList): \Flexnet\EntitlementOrderService\Type\SplitLineItemRequestType
    {
        $new = clone $this;
        $new->lineItemList = $lineItemList;

        return $new;
    }
}
