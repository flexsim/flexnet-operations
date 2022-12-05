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
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $parentEntitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>  $lineItemData
     */
    public function __construct(EntitlementIdentifierType|null $parentEntitlementIdentifier = null, LineItemLifeCycleDataType|array $lineItemData)
    {
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->lineItemData = $lineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $parentEntitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>  $lineItemData
     */
    public static function create(EntitlementIdentifierType|null $parentEntitlementIdentifier = null, LineItemLifeCycleDataType|array $lineItemData)
    {
        return new static(...\func_get_args());
    }

    public function getParentEntitlementIdentifier(): EntitlementIdentifierType|null
    {
        return $this->parentEntitlementIdentifier;
    }

    public function withParentEntitlementIdentifier(EntitlementIdentifierType|null $parentEntitlementIdentifier): EntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    public function getLineItemData(): LineItemLifeCycleDataType|array
    {
        return $this->lineItemData;
    }

    public function withLineItemData(LineItemLifeCycleDataType|array $lineItemData): EntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->lineItemData = $lineItemData;

        return $new;
    }
}