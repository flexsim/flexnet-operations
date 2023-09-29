<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementLifeCycleDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    private $parentEntitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>
     */
    private $lineItemData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>  $lineItemData
     */
    public function __construct(LineItemLifeCycleDataType|array $lineItemData, EntitlementIdentifierType $parentEntitlementIdentifier = null)
    {
        $this->lineItemData = $lineItemData;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>  $lineItemData
     */
    public static function create(LineItemLifeCycleDataType|array $lineItemData, EntitlementIdentifierType $parentEntitlementIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getParentEntitlementIdentifier(): ?EntitlementIdentifierType
    {
        return $this->parentEntitlementIdentifier;
    }

    public function withParentEntitlementIdentifier(?EntitlementIdentifierType $parentEntitlementIdentifier): EntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>
     */
    public function getLineItemData(): LineItemLifeCycleDataType|array
    {
        return $this->lineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>  $lineItemData
     */
    public function withLineItemData(LineItemLifeCycleDataType|array $lineItemData): EntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->lineItemData = $lineItemData;

        return $new;
    }
}
