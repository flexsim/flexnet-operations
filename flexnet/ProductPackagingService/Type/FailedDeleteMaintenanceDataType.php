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
    public function __construct(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier, ?string $reason = null)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceIdentifier(): \Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType
    {
        return $this->maintenanceIdentifier;
    }

    public function withMaintenanceIdentifier(\Flexnet\ProductPackagingService\Type\MaintenanceIdentifierType $maintenanceIdentifier): \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenanceIdentifier = $maintenanceIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
