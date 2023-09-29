<?php

namespace Flexnet\EntitlementOrderService\Type;

class RenewEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    private $parentEntitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>
     */
    private $renewLineItemData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>  $renewLineItemData
     */
    public function __construct(RenewLineItemDataType|array $renewLineItemData, EntitlementIdentifierType $parentEntitlementIdentifier = null)
    {
        $this->renewLineItemData = $renewLineItemData;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>  $renewLineItemData
     */
    public static function create(RenewLineItemDataType|array $renewLineItemData, EntitlementIdentifierType $parentEntitlementIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getParentEntitlementIdentifier(): ?EntitlementIdentifierType
    {
        return $this->parentEntitlementIdentifier;
    }

    public function withParentEntitlementIdentifier(?EntitlementIdentifierType $parentEntitlementIdentifier): RenewEntitlementDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>
     */
    public function getRenewLineItemData(): RenewLineItemDataType|array
    {
        return $this->renewLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>  $renewLineItemData
     */
    public function withRenewLineItemData(RenewLineItemDataType|array $renewLineItemData): RenewEntitlementDataType
    {
        $new = clone $this;
        $new->renewLineItemData = $renewLineItemData;

        return $new;
    }
}
