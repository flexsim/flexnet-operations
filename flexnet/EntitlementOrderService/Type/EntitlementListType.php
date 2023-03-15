<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType>
     */
    private $entitlementIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType>  $entitlementIdentifier
     */
    public function __construct(EntitlementIdentifierType|array $entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType>  $entitlementIdentifier
     */
    public static function create(EntitlementIdentifierType|array $entitlementIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType>
     */
    public function getEntitlementIdentifier(): EntitlementIdentifierType|array
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType>  $entitlementIdentifier
     */
    public function withEntitlementIdentifier(EntitlementIdentifierType|array $entitlementIdentifier): EntitlementListType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }
}
