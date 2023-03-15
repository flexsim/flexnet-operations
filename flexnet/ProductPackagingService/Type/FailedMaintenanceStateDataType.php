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
     *
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType  $maintenance
     */
    public function __construct(MaintenanceStateDataType $maintenance, string $reason)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType  $maintenance
     */
    public static function create(MaintenanceStateDataType $maintenance, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType
     */
    public function getMaintenance(): MaintenanceStateDataType
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType  $maintenance
     */
    public function withMaintenance(MaintenanceStateDataType $maintenance): FailedMaintenanceStateDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedMaintenanceStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
