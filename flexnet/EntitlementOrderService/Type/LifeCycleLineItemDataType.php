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
     *
     * @param  string  $lineItemRecordRefNo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\NewEntitlementLineItemDataType  $newLineItem
     */
    public function __construct(string $lineItemRecordRefNo, EntitlementLineItemIdentifierType $parentLineItemIdentifier, NewEntitlementLineItemDataType $newLineItem)
    {
        $this->lineItemRecordRefNo = $lineItemRecordRefNo;
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->newLineItem = $newLineItem;
    }

    /**
     * @param  string  $lineItemRecordRefNo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\NewEntitlementLineItemDataType  $newLineItem
     */
    public static function create(string $lineItemRecordRefNo, EntitlementLineItemIdentifierType $parentLineItemIdentifier, NewEntitlementLineItemDataType $newLineItem)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemRecordRefNo(): string
    {
        return $this->lineItemRecordRefNo;
    }

    public function withLineItemRecordRefNo(string $lineItemRecordRefNo): LifeCycleLineItemDataType
    {
        $new = clone $this;
        $new->lineItemRecordRefNo = $lineItemRecordRefNo;

        return $new;
    }

    public function getParentLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->parentLineItemIdentifier;
    }

    public function withParentLineItemIdentifier(EntitlementLineItemIdentifierType $parentLineItemIdentifier): LifeCycleLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItemIdentifier = $parentLineItemIdentifier;

        return $new;
    }

    public function getNewLineItem(): NewEntitlementLineItemDataType
    {
        return $this->newLineItem;
    }

    public function withNewLineItem(NewEntitlementLineItemDataType $newLineItem): LifeCycleLineItemDataType
    {
        $new = clone $this;
        $new->newLineItem = $newLineItem;

        return $new;
    }
}
