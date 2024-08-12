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
    public function __construct(\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array $lineItemData, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null)
    {
        $this->lineItemData = $lineItemData;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>  $lineItemData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array $lineItemData, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getParentEntitlementIdentifier(): ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->parentEntitlementIdentifier;
    }

    public function withParentEntitlementIdentifier(?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>
     */
    public function getLineItemData(): \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array
    {
        return $this->lineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType>  $lineItemData
     */
    public function withLineItemData(\Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType|array $lineItemData): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->lineItemData = $lineItemData;

        return $new;
    }
}
