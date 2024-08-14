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
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemStateDataType>  $lineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array $lineItem)
    {
        $this->lineItem = $lineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemStateDataType>  $lineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array $lineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemStateDataType>
     */
    public function getLineItem(): \Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemStateDataType>  $lineItem
     */
    public function withLineItem(\Flexnet\EntitlementOrderService\Type\LineItemStateDataType|array $lineItem): \Flexnet\EntitlementOrderService\Type\SetLineItemStateRequestType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }
}
