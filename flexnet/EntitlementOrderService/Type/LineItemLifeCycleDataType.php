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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType  $lineItem
     * @param  bool|null  $isFull
     * @param  bool|null  $allowActivationsOnParent
     * @param  bool|null  $autoDeploy
     */
    public function __construct(EntitlementLineItemIdentifierType $parentLineItemIdentifier, CreateEntitlementLineItemDataType $lineItem, bool|null $isFull = null, bool|null $allowActivationsOnParent = null, bool|null $autoDeploy = null)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->lineItem = $lineItem;
        $this->isFull = $isFull;
        $this->allowActivationsOnParent = $allowActivationsOnParent;
        $this->autoDeploy = $autoDeploy;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType  $lineItem
     * @param  bool|null  $isFull
     * @param  bool|null  $allowActivationsOnParent
     * @param  bool|null  $autoDeploy
     */
    public static function create(EntitlementLineItemIdentifierType $parentLineItemIdentifier, CreateEntitlementLineItemDataType $lineItem, bool|null $isFull = null, bool|null $allowActivationsOnParent = null, bool|null $autoDeploy = null)
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

    public function getIsFull(): bool|null
    {
        return $this->isFull;
    }

    public function withIsFull(bool|null $isFull): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->isFull = $isFull;

        return $new;
    }

    public function getAllowActivationsOnParent(): bool|null
    {
        return $this->allowActivationsOnParent;
    }

    public function withAllowActivationsOnParent(bool|null $allowActivationsOnParent): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->allowActivationsOnParent = $allowActivationsOnParent;

        return $new;
    }

    public function getAutoDeploy(): bool|null
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(bool|null $autoDeploy): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }
}
