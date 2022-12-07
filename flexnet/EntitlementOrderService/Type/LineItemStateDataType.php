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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  string  $stateToSet
     * @param  bool|null  $includeChildItems
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, string $stateToSet, bool|null $includeChildItems = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->stateToSet = $stateToSet;
        $this->includeChildItems = $includeChildItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  string  $stateToSet
     * @param  bool|null  $includeChildItems
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, string $stateToSet, bool|null $includeChildItems = null)
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
     * @return LineItemStateDataType
     */
    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): LineItemStateDataType
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
     * @return LineItemStateDataType
     */
    public function withStateToSet(string $stateToSet): LineItemStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIncludeChildItems(): bool|null
    {
        return $this->includeChildItems;
    }

    /**
     * @param  bool|null  $includeChildItems
     * @return LineItemStateDataType
     */
    public function withIncludeChildItems(bool|null $includeChildItems): LineItemStateDataType
    {
        $new = clone $this;
        $new->includeChildItems = $includeChildItems;

        return $new;
    }
}
