<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreatedRenewEntitlementDataType
{
    /**
     * @var string
     */
    private $entitlementRecordRefNo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $parentEntitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType>|null
     */
    private $renewedLineItem;

    /**
     * Constructor
     *
     * @param  string  $entitlementRecordRefNo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $parentEntitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType>|null  $renewedLineItem
     */
    public function __construct(string $entitlementRecordRefNo, EntitlementIdentifierType $parentEntitlementIdentifier, RenewedEntitlementLineItemDataType|array|null $renewedLineItem = null)
    {
        $this->entitlementRecordRefNo = $entitlementRecordRefNo;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->renewedLineItem = $renewedLineItem;
    }

    /**
     * @param  string  $entitlementRecordRefNo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $parentEntitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType>|null  $renewedLineItem
     */
    public static function create(string $entitlementRecordRefNo, EntitlementIdentifierType $parentEntitlementIdentifier, RenewedEntitlementLineItemDataType|array|null $renewedLineItem = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getEntitlementRecordRefNo(): string
    {
        return $this->entitlementRecordRefNo;
    }

    /**
     * @param  string  $entitlementRecordRefNo
     * @return CreatedRenewEntitlementDataType
     */
    public function withEntitlementRecordRefNo(string $entitlementRecordRefNo): CreatedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementRecordRefNo = $entitlementRecordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getParentEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->parentEntitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $parentEntitlementIdentifier
     * @return CreatedRenewEntitlementDataType
     */
    public function withParentEntitlementIdentifier(EntitlementIdentifierType $parentEntitlementIdentifier): CreatedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType>|null
     */
    public function getRenewedLineItem(): RenewedEntitlementLineItemDataType|array|null
    {
        return $this->renewedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType>|null  $renewedLineItem
     * @return CreatedRenewEntitlementDataType
     */
    public function withRenewedLineItem(RenewedEntitlementLineItemDataType|array|null $renewedLineItem): CreatedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->renewedLineItem = $renewedLineItem;

        return $new;
    }
}
