<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeleteMaintenanceDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType>|null
     */
    private $failedMaintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType>|null  $failedMaintenance
     */
    public function __construct(FailedDeleteMaintenanceDataType|array $failedMaintenance = null)
    {
        $this->failedMaintenance = $failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType>|null  $failedMaintenance
     */
    public static function create(FailedDeleteMaintenanceDataType|array $failedMaintenance = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType>|null
     */
    public function getFailedMaintenance(): FailedDeleteMaintenanceDataType|array|null
    {
        return $this->failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType>|null  $failedMaintenance
     */
    public function withFailedMaintenance(FailedDeleteMaintenanceDataType|array|null $failedMaintenance): FailedDeleteMaintenanceDataListType
    {
        $new = clone $this;
        $new->failedMaintenance = $failedMaintenance;

        return $new;
    }
}
