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
    public function __construct(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceIdentifier(): \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
    {
        return $this->maintenanceIdentifier;
    }

    public function withMaintenanceIdentifier(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier): \Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }
}
