<?php

namespace Flexnet\EntitlementOrderService\Type;

class RenewedEntitlementLineItemDataType
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

    public function withLineItemRecordRefNo(string $lineItemRecordRefNo): RenewedEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemRecordRefNo = $lineItemRecordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    public function getParentLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->parentLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     */
    public function withParentLineItemIdentifier(EntitlementLineItemIdentifierType $parentLineItemIdentifier): RenewedEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItemIdentifier = $parentLineItemIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\NewEntitlementLineItemDataType
     */
    public function getNewLineItem(): NewEntitlementLineItemDataType
    {
        return $this->newLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\NewEntitlementLineItemDataType  $newLineItem
     */
    public function withNewLineItem(NewEntitlementLineItemDataType $newLineItem): RenewedEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->newLineItem = $newLineItem;

        return $new;
    }
}
