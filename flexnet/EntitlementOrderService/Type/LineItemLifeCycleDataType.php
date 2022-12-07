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

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    public function getParentLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->parentLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @return LineItemLifeCycleDataType
     */
    public function withParentLineItemIdentifier(EntitlementLineItemIdentifierType $parentLineItemIdentifier): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->parentLineItemIdentifier = $parentLineItemIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType
     */
    public function getLineItem(): CreateEntitlementLineItemDataType
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType  $lineItem
     * @return LineItemLifeCycleDataType
     */
    public function withLineItem(CreateEntitlementLineItemDataType $lineItem): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsFull(): bool|null
    {
        return $this->isFull;
    }

    /**
     * @param  bool|null  $isFull
     * @return LineItemLifeCycleDataType
     */
    public function withIsFull(bool|null $isFull): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->isFull = $isFull;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getAllowActivationsOnParent(): bool|null
    {
        return $this->allowActivationsOnParent;
    }

    /**
     * @param  bool|null  $allowActivationsOnParent
     * @return LineItemLifeCycleDataType
     */
    public function withAllowActivationsOnParent(bool|null $allowActivationsOnParent): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->allowActivationsOnParent = $allowActivationsOnParent;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getAutoDeploy(): bool|null
    {
        return $this->autoDeploy;
    }

    /**
     * @param  bool|null  $autoDeploy
     * @return LineItemLifeCycleDataType
     */
    public function withAutoDeploy(bool|null $autoDeploy): LineItemLifeCycleDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }
}
