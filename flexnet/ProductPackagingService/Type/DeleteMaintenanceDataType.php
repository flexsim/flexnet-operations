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
     *
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     */
    public function __construct(MaintenanceIdentifierType $maintenanceIdentifier)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     */
    public static function create(MaintenanceIdentifierType $maintenanceIdentifier)
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
    public function withMaintenanceIdentifier(MaintenanceIdentifierType $maintenanceIdentifier): DeleteMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }
}
