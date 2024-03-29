<?php

namespace Flexnet\EntitlementOrderService\Type;

class DeleteEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * Constructor
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
    }

    public static function create(EntitlementIdentifierType $entitlementIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): DeleteEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }
}
