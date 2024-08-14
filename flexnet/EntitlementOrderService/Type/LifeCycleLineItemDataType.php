<?php

namespace Flexnet\EntitlementOrderService\Type;

class LifeCycleLineItemDataType
{
    /**
     * @var string
     */
    private $lineItemRecordRefNo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $parentLineItemIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\NewEntitlementLineItemDataType
     */
    private $newLineItem;

    /**
     * Constructor
     */
    public function __construct(string $lineItemRecordRefNo, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier, \Flexnet\EntitlementOrderService\Type\NewEntitlementLineItemDataType $newLineItem)
    {
        $this->lineItemRecordRefNo = $lineItemRecordRefNo;
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->newLineItem = $newLineItem;
    }

    public static function create(string $lineItemRecordRefNo, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier, \Flexnet\EntitlementOrderService\Type\NewEntitlementLineItemDataType $newLineItem)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemRecordRefNo(): string
    {
        return $this->lineItemRecordRefNo;
    }

    public function withLineItemRecordRefNo(string $lineItemRecordRefNo): \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType
    {
        $new = clone $this;
        $new->lineItemRecordRefNo = $lineItemRecordRefNo;

        return $new;
    }

    public function getParentLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->parentLineItemIdentifier;
    }

    public function withParentLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier): \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItemIdentifier = $parentLineItemIdentifier;

        return $new;
    }

    public function getNewLineItem(): \Flexnet\EntitlementOrderService\Type\NewEntitlementLineItemDataType
    {
        return $this->newLineItem;
    }

    public function withNewLineItem(\Flexnet\EntitlementOrderService\Type\NewEntitlementLineItemDataType $newLineItem): \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType
    {
        $new = clone $this;
        $new->newLineItem = $newLineItem;

        return $new;
    }
}
