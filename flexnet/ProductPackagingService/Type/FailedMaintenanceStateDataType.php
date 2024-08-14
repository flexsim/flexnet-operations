<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedMaintenanceStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType
     */
    private $maintenance;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType $maintenance, string $reason)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType $maintenance, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenance(): \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType
    {
        return $this->maintenance;
    }

    public function withMaintenance(\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType $maintenance): \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
