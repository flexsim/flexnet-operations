<?php

namespace Flexnet\EntitlementOrderService\Type;

class MaintenanceLineItemStateDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var string
     */
    private $stateToSet;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  string  $stateToSet
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, string $stateToSet)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->stateToSet = $stateToSet;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  string  $stateToSet
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, string $stateToSet)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @return MaintenanceLineItemStateDataType
     */
    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): MaintenanceLineItemStateDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    /**
     * @return string
     */
    public function getStateToSet(): string
    {
        return $this->stateToSet;
    }

    /**
     * @param  string  $stateToSet
     * @return MaintenanceLineItemStateDataType
     */
    public function withStateToSet(string $stateToSet): MaintenanceLineItemStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
