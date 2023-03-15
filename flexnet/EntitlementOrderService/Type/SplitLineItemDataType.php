<?php

namespace Flexnet\EntitlementOrderService\Type;

class SplitLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    private $entitlementIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementIdentifier
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementIdentifierType|null $entitlementIdentifier = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->entitlementIdentifier = $entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementIdentifier
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementIdentifierType|null $entitlementIdentifier = null)
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
     */
    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): SplitLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null
     */
    public function getEntitlementIdentifier(): EntitlementIdentifierType|null
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|null  $entitlementIdentifier
     */
    public function withEntitlementIdentifier(EntitlementIdentifierType|null $entitlementIdentifier): SplitLineItemDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }
}
