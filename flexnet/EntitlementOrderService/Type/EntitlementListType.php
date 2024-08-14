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
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array $entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType>  $entitlementIdentifier
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array $entitlementIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType>
     */
    public function getEntitlementIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType>  $entitlementIdentifier
     */
    public function withEntitlementIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType|array $entitlementIdentifier): \Flexnet\EntitlementOrderService\Type\EntitlementListType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }
}
