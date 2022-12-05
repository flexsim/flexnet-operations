<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RemoveEntitlementLineItemRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType>
     */
    private $lineItemData;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType>  $lineItemData
     */
    public static function create(RemoveEntitlementLineItemDataType|array $lineItemData)
    {
        return new static(...\func_get_args());
    }

    public function __construct(RemoveEntitlementLineItemDataType $lineItemData)
    {
        $this->lineItemData = $lineItemData;
    }

    public function getLineItemData(): RemoveEntitlementLineItemDataType|array
    {
        return $this->lineItemData;
    }

    public function withLineItemData(RemoveEntitlementLineItemDataType|array $lineItemData): RemoveEntitlementLineItemRequestType
    {
        $new = clone $this;
        $new->lineItemData = $lineItemData;

        return $new;
    }
}
