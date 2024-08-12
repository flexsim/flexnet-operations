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
     * @var \Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType|null
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>  $lineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array $lineItem, ?\Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType $opType = null)
    {
        $this->lineItem = $lineItem;
        $this->opType = $opType;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>  $lineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array $lineItem, ?\Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType $opType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>
     */
    public function getLineItem(): \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType>  $lineItem
     */
    public function withLineItem(\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|array $lineItem): \Flexnet\EntitlementOrderService\Type\AddOnlyEntitlementLineItemRequestType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getOpType(): ?\Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType
    {
        return $this->opType;
    }

    public function withOpType(?\Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType $opType): \Flexnet\EntitlementOrderService\Type\AddOnlyEntitlementLineItemRequestType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
