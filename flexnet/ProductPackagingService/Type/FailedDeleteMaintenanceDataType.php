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
     */
    public function __construct(MaintenanceIdentifierType $maintenanceIdentifier, string $reason = null)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->reason = $reason;
    }

    public static function create(MaintenanceIdentifierType $maintenanceIdentifier, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceIdentifier(): MaintenanceIdentifierType
    {
        return $this->maintenanceIdentifier;
    }

    public function withMaintenanceIdentifier(MaintenanceIdentifierType $maintenanceIdentifier): FailedDeleteMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedDeleteMaintenanceDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
