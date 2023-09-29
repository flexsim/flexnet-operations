<?php

namespace Flexnet\EntitlementOrderService\Type;

class LineItemLifeCycleDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $parentLineItemIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
     */
    private $lineItem;

    /**
     * @var bool|null
     */
    private $isFull;

    /**
     * @var bool|null
     */
    private $allowActivationsOnParent;

    /**
     * @var bool|null
     */
    private $autoDeploy;

    /**
     * Constructor
     */
    public function __construct(EntitlementLineItemIdentifierType $parentLineItemIdentifier, CreateEntitlementLineItemDataType $lineItem, bool $isFull = null, bool $allowActivationsOnParent = null, bool $autoDeploy = null)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->lineItem = $lineItem;
        $this->isFull = $isFull;
        $this->allowActivationsOnParent = $allowActivationsOnParent;
        $this->autoDeploy = $autoDeploy;
    }

    public static function create(EntitlementLineItemIdentifierType $parentLineItemIdentifier, CreateEntitlementLineItemDataType $lineItem, bool $isFull = null, bool $allowActivationsOnParent = null, bool $autoDeploy = null)
    {
        return new static(...\func_get_args());
    }

    public function getParentLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->parentLineItemIdentifier;
    }

    public function withParentLineItemIdentifier(EntitlementLineItemIdentifierType $parentLineItemIdentifier): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->parentLineItemIdentifier = $parentLineItemIdentifier;

        return $new;
    }

    public function getLineItem(): CreateEntitlementLineItemDataType
    {
        return $this->lineItem;
    }

    public function withLineItem(CreateEntitlementLineItemDataType $lineItem): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getIsFull(): ?bool
    {
        return $this->isFull;
    }

    public function withIsFull(?bool $isFull): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->isFull = $isFull;

        return $new;
    }

    public function getAllowActivationsOnParent(): ?bool
    {
        return $this->allowActivationsOnParent;
    }

    public function withAllowActivationsOnParent(?bool $allowActivationsOnParent): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->allowActivationsOnParent = $allowActivationsOnParent;

        return $new;
    }

    public function getAutoDeploy(): ?bool
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(?bool $autoDeploy): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }
}
