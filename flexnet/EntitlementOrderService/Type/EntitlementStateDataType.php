<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementStateDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateType
     */
    private $stateToSet;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexnet\EntitlementOrderService\Type\StateType $stateToSet)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->stateToSet = $stateToSet;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier, \Flexnet\EntitlementOrderService\Type\StateType $stateToSet)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier): \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getStateToSet(): \Flexnet\EntitlementOrderService\Type\StateType
    {
        return $this->stateToSet;
    }

    public function withStateToSet(\Flexnet\EntitlementOrderService\Type\StateType $stateToSet): \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
