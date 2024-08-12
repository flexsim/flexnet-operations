<?php

namespace Flexnet\EntitlementOrderService\Type;

class LinkMaintenanceLineItemDataType
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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->lineItemIdentifier;
    }

    public function withLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $lineItemIdentifier): \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifier = $lineItemIdentifier;

        return $new;
    }

    public function getMaintenanceLineItemIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->maintenanceLineItemIdentifier;
    }

    public function withMaintenanceLineItemIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier): \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;

        return $new;
    }
}
