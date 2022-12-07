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

    /**
     * @return string
     */
    public function getLineItemRecordRefNo(): string
    {
        return $this->lineItemRecordRefNo;
    }

    /**
     * @param  string  $lineItemRecordRefNo
     * @return LifeCycleLineItemDataType
     */
    public function withLineItemRecordRefNo(string $lineItemRecordRefNo): LifeCycleLineItemDataType
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
     * @return LifeCycleLineItemDataType
     */
    public function withParentLineItemIdentifier(EntitlementLineItemIdentifierType $parentLineItemIdentifier): LifeCycleLineItemDataType
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
     * @return LifeCycleLineItemDataType
     */
    public function withNewLineItem(NewEntitlementLineItemDataType $newLineItem): LifeCycleLineItemDataType
    {
        $new = clone $this;
        $new->newLineItem = $newLineItem;

        return $new;
    }
}
