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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->entitlementIdentifier = $entitlementIdentifier;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier): \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getEntitlementIdentifier(): ?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(?\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $entitlementIdentifier): \Flexnet\EntitlementOrderService\Type\SplitLineItemDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }
}
