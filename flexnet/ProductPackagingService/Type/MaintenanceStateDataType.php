<?php

namespace Flexnet\ProductPackagingService\Type;

class MaintenanceStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
     */
    private $maintenanceIdentifier;

    /**
     * @var string
     */
    private $stateToSet;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier, string $stateToSet)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->stateToSet = $stateToSet;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier, string $stateToSet)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceIdentifier(): \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
    {
        return $this->maintenanceIdentifier;
    }

    public function withMaintenanceIdentifier(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier): \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }

    public function getStateToSet(): string
    {
        return $this->stateToSet;
    }

    public function withStateToSet(string $stateToSet): \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
