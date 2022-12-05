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
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType>  $lineItemData
     */
    public static function create(UpdateEntitlementLineItemDataType|array $lineItemData)
    {
        return new static(...\func_get_args());
    }

    public function __construct(UpdateEntitlementLineItemDataType $lineItemData)
    {
        $this->lineItemData = $lineItemData;
    }

    public function getLineItemData(): UpdateEntitlementLineItemDataType|array
    {
        return $this->lineItemData;
    }

    public function withLineItemData(UpdateEntitlementLineItemDataType|array $lineItemData): UpdateEntitlementLineItemRequestType
    {
        $new = clone $this;
        $new->lineItemData = $lineItemData;

        return $new;
    }
}
