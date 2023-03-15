<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateMaintenanceDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType>|null
     */
    private $failedMaintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType>|null  $failedMaintenance
     */
    public function __construct(FailedUpdateMaintenanceDataType|array|null $failedMaintenance = null)
    {
        $this->failedMaintenance = $failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType>|null  $failedMaintenance
     */
    public static function create(FailedUpdateMaintenanceDataType|array|null $failedMaintenance = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType>|null
     */
    public function getFailedMaintenance(): FailedUpdateMaintenanceDataType|array|null
    {
        return $this->failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType>|null  $failedMaintenance
     */
    public function withFailedMaintenance(FailedUpdateMaintenanceDataType|array|null $failedMaintenance): FailedUpdateMaintenanceDataListType
    {
        $new = clone $this;
        $new->failedMaintenance = $failedMaintenance;

        return $new;
    }
}
