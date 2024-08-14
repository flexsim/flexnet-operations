<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateEntitlementLineItemRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType>
     */
    private $lineItemData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType>  $lineItemData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array $lineItemData)
    {
        $this->lineItemData = $lineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType>  $lineItemData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array $lineItemData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType>
     */
    public function getLineItemData(): \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array
    {
        return $this->lineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType>  $lineItemData
     */
    public function withLineItemData(\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array $lineItemData): \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemRequestType
    {
        $new = clone $this;
        $new->lineItemData = $lineItemData;

        return $new;
    }
}
