<?php

namespace Flexnet\EntitlementOrderService\Type;

class UpdateEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType>|null
     */
    private $lineItemData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType>|null
     */
    private $maintenanceLineItemData;

    /**
     * @var bool|null
     */
    private $autoDeploy;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType>|null  $lineItemData
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType>|null  $maintenanceLineItemData
     * @param  bool|null  $autoDeploy
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, UpdateLineItemDataType|array|null $lineItemData = null, UpdateMaintenanceLineItemDataType|array|null $maintenanceLineItemData = null, bool|null $autoDeploy = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItemData = $lineItemData;
        $this->maintenanceLineItemData = $maintenanceLineItemData;
        $this->autoDeploy = $autoDeploy;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType>|null  $lineItemData
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType>|null  $maintenanceLineItemData
     * @param  bool|null  $autoDeploy
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, UpdateLineItemDataType|array|null $lineItemData = null, UpdateMaintenanceLineItemDataType|array|null $maintenanceLineItemData = null, bool|null $autoDeploy = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @return UpdateEntitlementLineItemDataType
     */
    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): UpdateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType>|null
     */
    public function getLineItemData(): UpdateLineItemDataType|array|null
    {
        return $this->lineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateLineItemDataType>|null  $lineItemData
     * @return UpdateEntitlementLineItemDataType
     */
    public function withLineItemData(UpdateLineItemDataType|array|null $lineItemData): UpdateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemData = $lineItemData;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType>|null
     */
    public function getMaintenanceLineItemData(): UpdateMaintenanceLineItemDataType|array|null
    {
        return $this->maintenanceLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateMaintenanceLineItemDataType>|null  $maintenanceLineItemData
     * @return UpdateEntitlementLineItemDataType
     */
    public function withMaintenanceLineItemData(UpdateMaintenanceLineItemDataType|array|null $maintenanceLineItemData): UpdateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemData = $maintenanceLineItemData;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getAutoDeploy(): bool|null
    {
        return $this->autoDeploy;
    }

    /**
     * @param  bool|null  $autoDeploy
     * @return UpdateEntitlementLineItemDataType
     */
    public function withAutoDeploy(bool|null $autoDeploy): UpdateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }
}
