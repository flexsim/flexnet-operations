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
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType>  $lineItemData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array $lineItemData)
    {
        $this->lineItemData = $lineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType>  $lineItemData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array $lineItemData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType>
     */
    public function getLineItemData(): \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array
    {
        return $this->lineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType>  $lineItemData
     */
    public function withLineItemData(\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|array $lineItemData): \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemRequestType
    {
        $new = clone $this;
        $new->lineItemData = $lineItemData;

        return $new;
    }
}
