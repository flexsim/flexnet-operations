<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementStateDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var string
     */
    private $stateToSet;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, string $stateToSet)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->stateToSet = $stateToSet;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, string $stateToSet)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     */
    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): EntitlementStateDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getStateToSet(): string
    {
        return $this->stateToSet;
    }

    public function withStateToSet(string $stateToSet): EntitlementStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
