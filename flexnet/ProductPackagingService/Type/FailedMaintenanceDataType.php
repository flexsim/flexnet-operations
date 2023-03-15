<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedMaintenanceDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|null
     */
    private $maintenance;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|null  $maintenance
     * @param  string|null  $reason
     */
    public function __construct(CreateMaintenanceDataType|null $maintenance = null, string|null $reason = null)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|null  $maintenance
     * @param  string|null  $reason
     */
    public static function create(CreateMaintenanceDataType|null $maintenance = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|null
     */
    public function getMaintenance(): CreateMaintenanceDataType|null
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|null  $maintenance
     */
    public function withMaintenance(CreateMaintenanceDataType|null $maintenance): FailedMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedMaintenanceDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
