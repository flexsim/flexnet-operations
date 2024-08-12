<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedMaintenanceDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType>|null
     */
    private $failedMaintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType>|null  $failedMaintenance
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array|null $failedMaintenance = null)
    {
        $this->failedMaintenance = $failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType>|null  $failedMaintenance
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array|null $failedMaintenance = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType>|null
     */
    public function getFailedMaintenance(): \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array|null
    {
        return $this->failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType>|null  $failedMaintenance
     */
    public function withFailedMaintenance(\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array|null $failedMaintenance): \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataListType
    {
        $new = clone $this;
        $new->failedMaintenance = $failedMaintenance;

        return $new;
    }
}
