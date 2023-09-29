<?php

namespace Flexnet\EntitlementOrderService\Type;

class RenewLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $parentLineItemIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
     */
    private $renewParameters;

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
    public function __construct(EntitlementLineItemIdentifierType $parentLineItemIdentifier, RenewParametersDataType $renewParameters, bool $isFull = null, bool $allowActivationsOnParent = null, bool $autoDeploy = null)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->renewParameters = $renewParameters;
        $this->isFull = $isFull;
        $this->allowActivationsOnParent = $allowActivationsOnParent;
        $this->autoDeploy = $autoDeploy;
    }

    public static function create(EntitlementLineItemIdentifierType $parentLineItemIdentifier, RenewParametersDataType $renewParameters, bool $isFull = null, bool $allowActivationsOnParent = null, bool $autoDeploy = null)
    {
        return new static(...\func_get_args());
    }

    public function getParentLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->parentLineItemIdentifier;
    }

    public function withParentLineItemIdentifier(EntitlementLineItemIdentifierType $parentLineItemIdentifier): RenewLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItemIdentifier = $parentLineItemIdentifier;

        return $new;
    }

    public function getRenewParameters(): RenewParametersDataType
    {
        return $this->renewParameters;
    }

    public function withRenewParameters(RenewParametersDataType $renewParameters): RenewLineItemDataType
    {
        $new = clone $this;
        $new->renewParameters = $renewParameters;

        return $new;
    }

    public function getIsFull(): ?bool
    {
        return $this->isFull;
    }

    public function withIsFull(?bool $isFull): RenewLineItemDataType
    {
        $new = clone $this;
        $new->isFull = $isFull;

        return $new;
    }

    public function getAllowActivationsOnParent(): ?bool
    {
        return $this->allowActivationsOnParent;
    }

    public function withAllowActivationsOnParent(?bool $allowActivationsOnParent): RenewLineItemDataType
    {
        $new = clone $this;
        $new->allowActivationsOnParent = $allowActivationsOnParent;

        return $new;
    }

    public function getAutoDeploy(): ?bool
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(?bool $autoDeploy): RenewLineItemDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }
}
