<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetLineItemStateRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemStateDataType>
     */
    private $lineItem;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemStateDataType>  $lineItem
     */
    public static function create(LineItemStateDataType|array $lineItem)
    {
        return new static(...\func_get_args());
    }

    public function __construct(LineItemStateDataType $lineItem)
    {
        $this->lineItem = $lineItem;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemStateDataType>
     */
    public function getLineItem(): LineItemStateDataType|array
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemStateDataType>  $lineItem
     * @return SetLineItemStateRequestType
     */
    public function withLineItem(LineItemStateDataType|array $lineItem): SetLineItemStateRequestType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }
}
