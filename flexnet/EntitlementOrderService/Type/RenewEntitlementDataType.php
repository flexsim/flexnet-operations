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
    public function __construct(\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array $renewLineItemData, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null)
    {
        $this->renewLineItemData = $renewLineItemData;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>  $renewLineItemData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array $renewLineItemData, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getParentEntitlementIdentifier(): ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->parentEntitlementIdentifier;
    }

    public function withParentEntitlementIdentifier(?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier): \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>
     */
    public function getRenewLineItemData(): \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array
    {
        return $this->renewLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType>  $renewLineItemData
     */
    public function withRenewLineItemData(\Flexnet\EntitlementOrderService\Type\RenewLineItemDataType|array $renewLineItemData): \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType
    {
        $new = clone $this;
        $new->renewLineItemData = $renewLineItemData;

        return $new;
    }
}
