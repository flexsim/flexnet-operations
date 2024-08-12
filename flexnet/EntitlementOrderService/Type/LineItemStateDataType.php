<?php

namespace Flexnet\EntitlementOrderService\Type;

class LineItemStateDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateType
     */
    private $stateToSet;

    /**
     * @var bool|null
     */
    private $includeChildItems;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexnet\EntitlementOrderService\Type\StateType $stateToSet, ?bool $includeChildItems = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->stateToSet = $stateToSet;
        $this->includeChildItems = $includeChildItems;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexnet\EntitlementOrderService\Type\StateType $stateToSet, ?bool $includeChildItems = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier): \Flexnet\EntitlementOrderService\Type\LineItemStateDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getStateToSet(): \Flexnet\EntitlementOrderService\Type\StateType
    {
        return $this->stateToSet;
    }

    public function withStateToSet(\Flexnet\EntitlementOrderService\Type\StateType $stateToSet): \Flexnet\EntitlementOrderService\Type\LineItemStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }

    public function getIncludeChildItems(): ?bool
    {
        return $this->includeChildItems;
    }

    public function withIncludeChildItems(?bool $includeChildItems): \Flexnet\EntitlementOrderService\Type\LineItemStateDataType
    {
        $new = clone $this;
        $new->includeChildItems = $includeChildItems;

        return $new;
    }
}
