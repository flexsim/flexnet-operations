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
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $parentEntitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>  $renewLineItemData
     */
    public function __construct(EntitlementIdentifierType|null $parentEntitlementIdentifier = null, RenewLineItemDataType|array $renewLineItemData)
    {
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->renewLineItemData = $renewLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $parentEntitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>  $renewLineItemData
     */
    public static function create(EntitlementIdentifierType|null $parentEntitlementIdentifier = null, RenewLineItemDataType|array $renewLineItemData)
    {
        return new static(...\func_get_args());
    }

    public function getParentEntitlementIdentifier(): EntitlementIdentifierType|null
    {
        return $this->parentEntitlementIdentifier;
    }

    public function withParentEntitlementIdentifier(EntitlementIdentifierType|null $parentEntitlementIdentifier): RenewEntitlementDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    public function getRenewLineItemData(): RenewLineItemDataType|array
    {
        return $this->renewLineItemData;
    }

    public function withRenewLineItemData(RenewLineItemDataType|array $renewLineItemData): RenewEntitlementDataType
    {
        $new = clone $this;
        $new->renewLineItemData = $renewLineItemData;

        return $new;
    }
}
