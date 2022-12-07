<?php

namespace Flexnet\EntitlementOrderService\Type;

class UnlinkMaintenanceLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    private $maintenanceLineItemIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $maintenanceLineItemIdentifier
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $maintenanceLineItemIdentifier
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
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
     * @return UnlinkMaintenanceLineItemDataType
     */
    public function withLineItemIdentifier(EntitlementLineItemIdentifierType $lineItemIdentifier): UnlinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
     */
    public function getMaintenanceLineItemIdentifier(): EntitlementLineItemIdentifierType
    {
        return $this->maintenanceLineItemIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType  $maintenanceLineItemIdentifier
     * @return UnlinkMaintenanceLineItemDataType
     */
    public function withMaintenanceLineItemIdentifier(EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier): UnlinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;

        return $new;
    }
}
