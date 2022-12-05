<?php

namespace Flexnet\EntitlementOrderService\Type;

class DeleteMaintenanceLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $maintenanceLineItemIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $maintenanceLineItemIdentifier
     */
    public function __construct(EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
    {
        $this->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $maintenanceLineItemIdentifier
     */
    public static function create(EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->maintenanceLineItemIdentifier;
    }

    public function withMaintenanceLineItemIdentifier(EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier): DeleteMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;

        return $new;
    }
}
