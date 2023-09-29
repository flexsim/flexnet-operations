<?php

namespace Flexnet\EntitlementOrderService\Type;

class LineItemStateDataType
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
     * @var bool|null
     */
    private $includeChildItems;

    /**
     * Constructor
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, string $stateToSet, bool $includeChildItems = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->stateToSet = $stateToSet;
        $this->includeChildItems = $includeChildItems;
    }

    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, string $stateToSet, bool $includeChildItems = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): LineItemStateDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getStateToSet(): string
    {
        return $this->stateToSet;
    }

    public function withStateToSet(string $stateToSet): LineItemStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }

    public function getIncludeChildItems(): ?bool
    {
        return $this->includeChildItems;
    }

    public function withIncludeChildItems(?bool $includeChildItems): LineItemStateDataType
    {
        $new = clone $this;
        $new->includeChildItems = $includeChildItems;

        return $new;
    }
}
