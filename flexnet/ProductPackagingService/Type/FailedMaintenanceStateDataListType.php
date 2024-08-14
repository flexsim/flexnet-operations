<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedMaintenanceStateDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType>|null
     */
    private $failedMaintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType>|null  $failedMaintenance
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType|array|null $failedMaintenance = null)
    {
        $this->failedMaintenance = $failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType>|null  $failedMaintenance
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType|array|null $failedMaintenance = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType>|null
     */
    public function getFailedMaintenance(): \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType|array|null
    {
        return $this->failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType>|null  $failedMaintenance
     */
    public function withFailedMaintenance(\Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataType|array|null $failedMaintenance): \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataListType
    {
        $new = clone $this;
        $new->failedMaintenance = $failedMaintenance;

        return $new;
    }
}
