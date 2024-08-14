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
     * @param  \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType>|null  $renewedLineItem
     */
    public function __construct(string $entitlementRecordRefNo, \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier, \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array|null $renewedLineItem = null)
    {
        $this->entitlementRecordRefNo = $entitlementRecordRefNo;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->renewedLineItem = $renewedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType>|null  $renewedLineItem
     */
    public static function create(string $entitlementRecordRefNo, \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier, \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array|null $renewedLineItem = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementRecordRefNo(): string
    {
        return $this->entitlementRecordRefNo;
    }

    public function withEntitlementRecordRefNo(string $entitlementRecordRefNo): \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementRecordRefNo = $entitlementRecordRefNo;

        return $new;
    }

    public function getParentEntitlementIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->parentEntitlementIdentifier;
    }

    public function withParentEntitlementIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier): \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType>|null
     */
    public function getRenewedLineItem(): \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array|null
    {
        return $this->renewedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType>|null  $renewedLineItem
     */
    public function withRenewedLineItem(\Flexnet\EntitlementOrderService\Type\RenewedEntitlementLineItemDataType|array|null $renewedLineItem): \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->renewedLineItem = $renewedLineItem;

        return $new;
    }
}
