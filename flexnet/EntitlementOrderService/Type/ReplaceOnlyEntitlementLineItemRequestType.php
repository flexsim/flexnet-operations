<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReplaceOnlyEntitlementLineItemRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>
     */
    private $lineItem;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>  $lineItem
     */
    public static function create(AddEntitlementLineItemDataType|array $lineItem)
    {
        return new static(...\func_get_args());
    }

    public function __construct(AddEntitlementLineItemDataType $lineItem)
    {
        $this->lineItem = $lineItem;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>
     */
    public function getLineItem(): AddEntitlementLineItemDataType|array
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>  $lineItem
     * @return ReplaceOnlyEntitlementLineItemRequestType
     */
    public function withLineItem(AddEntitlementLineItemDataType|array $lineItem): ReplaceOnlyEntitlementLineItemRequestType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }
}
