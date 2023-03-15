<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddOnlyEntitlementLineItemRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>
     */
    private $lineItem;

    /**
     * @var string|null
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>  $lineItem
     * @param  string|null  $opType
     */
    public function __construct(AddEntitlementLineItemDataType|array $lineItem, string|null $opType = null)
    {
        $this->lineItem = $lineItem;
        $this->opType = $opType;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>  $lineItem
     * @param  string|null  $opType
     */
    public static function create(AddEntitlementLineItemDataType|array $lineItem, string|null $opType = null)
    {
        return new static(...\func_get_args());
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
     */
    public function withLineItem(AddEntitlementLineItemDataType|array $lineItem): AddOnlyEntitlementLineItemRequestType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getOpType(): string|null
    {
        return $this->opType;
    }

    public function withOpType(string|null $opType): AddOnlyEntitlementLineItemRequestType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
