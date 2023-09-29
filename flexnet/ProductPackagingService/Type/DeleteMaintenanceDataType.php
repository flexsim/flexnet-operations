<?php

namespace Flexnet\ProductPackagingService\Type;

class DeleteMaintenanceDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
     */
    private $maintenanceIdentifier;

    /**
     * Constructor
     */
    public function __construct(MaintenanceIdentifierType $maintenanceIdentifier)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
    }

    public static function create(MaintenanceIdentifierType $maintenanceIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceIdentifier(): MaintenanceIdentifierType
    {
        return $this->maintenanceIdentifier;
    }

    public function withMaintenanceIdentifier(MaintenanceIdentifierType $maintenanceIdentifier): DeleteMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }
}
