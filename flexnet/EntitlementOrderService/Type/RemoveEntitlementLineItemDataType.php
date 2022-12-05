<?php

namespace Flexnet\EntitlementOrderService\Type;

class RemoveEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null
     */
    private $lineItemIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $lineItemIdentifier
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, EntitlementLineItemIdentifierType|array|null $lineItemIdentifier = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItemIdentifier = $lineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $lineItemIdentifier
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, EntitlementLineItemIdentifierType|array|null $lineItemIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): RemoveEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getLineItemIdentifier(): EntitlementLineItemIdentifierType|array|null
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(EntitlementLineItemIdentifierType|array|null $lineItemIdentifier): RemoveEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }
}
