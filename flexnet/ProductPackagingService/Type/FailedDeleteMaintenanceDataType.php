<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeleteMaintenanceDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
     */
    private $maintenanceIdentifier;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     * @param  string|null  $reason
     */
    public function __construct(MaintenanceIdentifierType $maintenanceIdentifier, string|null $reason = null)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     * @param  string|null  $reason
     */
    public static function create(MaintenanceIdentifierType $maintenanceIdentifier, string|null $reason = null)
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
    public function withMaintenanceIdentifier(MaintenanceIdentifierType $maintenanceIdentifier): FailedDeleteMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedDeleteMaintenanceDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
