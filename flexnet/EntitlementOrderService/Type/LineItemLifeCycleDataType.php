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
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier, \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType $lineItem, ?bool $isFull = null, ?bool $allowActivationsOnParent = null, ?bool $autoDeploy = null)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->lineItem = $lineItem;
        $this->isFull = $isFull;
        $this->allowActivationsOnParent = $allowActivationsOnParent;
        $this->autoDeploy = $autoDeploy;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier, \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType $lineItem, ?bool $isFull = null, ?bool $allowActivationsOnParent = null, ?bool $autoDeploy = null)
    {
        return new static(...\func_get_args());
    }

    public function getParentLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->parentLineItemIdentifier;
    }

    public function withParentLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier): \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->parentLineItemIdentifier = $parentLineItemIdentifier;

        return $new;
    }

    public function getLineItem(): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
    {
        return $this->lineItem;
    }

    public function withLineItem(\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType $lineItem): \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getIsFull(): ?bool
    {
        return $this->isFull;
    }

    public function withIsFull(?bool $isFull): \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->isFull = $isFull;

        return $new;
    }

    public function getAllowActivationsOnParent(): ?bool
    {
        return $this->allowActivationsOnParent;
    }

    public function withAllowActivationsOnParent(?bool $allowActivationsOnParent): \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->allowActivationsOnParent = $allowActivationsOnParent;

        return $new;
    }

    public function getAutoDeploy(): ?bool
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(?bool $autoDeploy): \Flexnet\EntitlementOrderService\Type\LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }
}
