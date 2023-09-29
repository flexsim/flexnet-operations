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
    public function __construct(FailedMaintenanceDataType|array $failedMaintenance = null)
    {
        $this->failedMaintenance = $failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType>|null  $failedMaintenance
     */
    public static function create(FailedMaintenanceDataType|array $failedMaintenance = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType>|null
     */
    public function getFailedMaintenance(): FailedMaintenanceDataType|array|null
    {
        return $this->failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType>|null  $failedMaintenance
     */
    public function withFailedMaintenance(FailedMaintenanceDataType|array|null $failedMaintenance): FailedMaintenanceDataListType
    {
        $new = clone $this;
        $new->failedMaintenance = $failedMaintenance;

        return $new;
    }
}
