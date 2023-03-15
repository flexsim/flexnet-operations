<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateMaintenanceDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
     */
    private $maintenance;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType  $maintenance
     * @param  string|null  $reason
     */
    public function __construct(UpdateMaintenanceDataType $maintenance, string|null $reason = null)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType  $maintenance
     * @param  string|null  $reason
     */
    public static function create(UpdateMaintenanceDataType $maintenance, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
     */
    public function getMaintenance(): UpdateMaintenanceDataType
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType  $maintenance
     */
    public function withMaintenance(UpdateMaintenanceDataType $maintenance): FailedUpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedUpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
