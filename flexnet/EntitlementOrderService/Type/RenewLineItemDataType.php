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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\RenewParametersDataType  $renewParameters
     * @param  bool|null  $isFull
     * @param  bool|null  $allowActivationsOnParent
     * @param  bool|null  $autoDeploy
     */
    public function __construct(EntitlementLineItemIdentifierType $parentLineItemIdentifier, RenewParametersDataType $renewParameters, bool|null $isFull = null, bool|null $allowActivationsOnParent = null, bool|null $autoDeploy = null)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->renewParameters = $renewParameters;
        $this->isFull = $isFull;
        $this->allowActivationsOnParent = $allowActivationsOnParent;
        $this->autoDeploy = $autoDeploy;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\RenewParametersDataType  $renewParameters
     * @param  bool|null  $isFull
     * @param  bool|null  $allowActivationsOnParent
     * @param  bool|null  $autoDeploy
     */
    public static function create(EntitlementLineItemIdentifierType $parentLineItemIdentifier, RenewParametersDataType $renewParameters, bool|null $isFull = null, bool|null $allowActivationsOnParent = null, bool|null $autoDeploy = null)
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
     * @return RenewLineItemDataType
     */
    public function withParentLineItemIdentifier(EntitlementLineItemIdentifierType $parentLineItemIdentifier): RenewLineItemDataType
    {
        $new = clone $this;
        $new->parentLineItemIdentifier = $parentLineItemIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
     */
    public function getRenewParameters(): RenewParametersDataType
    {
        return $this->renewParameters;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewParametersDataType  $renewParameters
     * @return RenewLineItemDataType
     */
    public function withRenewParameters(RenewParametersDataType $renewParameters): RenewLineItemDataType
    {
        $new = clone $this;
        $new->renewParameters = $renewParameters;

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
     * @return RenewLineItemDataType
     */
    public function withIsFull(bool|null $isFull): RenewLineItemDataType
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
     * @return RenewLineItemDataType
     */
    public function withAllowActivationsOnParent(bool|null $allowActivationsOnParent): RenewLineItemDataType
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
     * @return RenewLineItemDataType
     */
    public function withAutoDeploy(bool|null $autoDeploy): RenewLineItemDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }
}
