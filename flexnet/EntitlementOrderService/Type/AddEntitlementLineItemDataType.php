<?php

namespace Flexnet\EntitlementOrderService\Type;

class AddEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null
     */
    private $lineItems;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null
     */
    private $maintenanceLineItems;

    /**
     * @var bool|null
     */
    private $autoDeploy;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, CreateEntitlementLineItemDataType|array $lineItems = null, CreateMaintenanceLineItemDataType|array $maintenanceLineItems = null, bool $autoDeploy = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItems = $lineItems;
        $this->maintenanceLineItems = $maintenanceLineItems;
        $this->autoDeploy = $autoDeploy;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, CreateEntitlementLineItemDataType|array $lineItems = null, CreateMaintenanceLineItemDataType|array $maintenanceLineItems = null, bool $autoDeploy = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): AddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null
     */
    public function getLineItems(): CreateEntitlementLineItemDataType|array|null
    {
        return $this->lineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null  $lineItems
     */
    public function withLineItems(CreateEntitlementLineItemDataType|array|null $lineItems): AddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItems = $lineItems;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null
     */
    public function getMaintenanceLineItems(): CreateMaintenanceLineItemDataType|array|null
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public function withMaintenanceLineItems(CreateMaintenanceLineItemDataType|array|null $maintenanceLineItems): AddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItems = $maintenanceLineItems;

        return $new;
    }

    public function getAutoDeploy(): ?bool
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(?bool $autoDeploy): AddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }
}
