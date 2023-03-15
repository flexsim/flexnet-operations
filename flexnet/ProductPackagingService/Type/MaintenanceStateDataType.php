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
     *
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     */
    public function __construct(MaintenanceIdentifierType $maintenanceIdentifier, string $stateToSet)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->stateToSet = $stateToSet;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     */
    public static function create(MaintenanceIdentifierType $maintenanceIdentifier, string $stateToSet)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
     */
    public function getMaintenanceIdentifier(): MaintenanceIdentifierType
    {
        return $this->maintenanceIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     */
    public function withMaintenanceIdentifier(MaintenanceIdentifierType $maintenanceIdentifier): MaintenanceStateDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }

    public function getStateToSet(): string
    {
        return $this->stateToSet;
    }

    public function withStateToSet(string $stateToSet): MaintenanceStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
