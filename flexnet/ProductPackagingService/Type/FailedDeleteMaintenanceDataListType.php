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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array|null $failedMaintenance = null)
    {
        $this->failedMaintenance = $failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType>|null  $failedMaintenance
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array|null $failedMaintenance = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType>|null
     */
    public function getFailedMaintenance(): \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array|null
    {
        return $this->failedMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType>|null  $failedMaintenance
     */
    public function withFailedMaintenance(\Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataType|array|null $failedMaintenance): \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataListType
    {
        $new = clone $this;
        $new->failedMaintenance = $failedMaintenance;

        return $new;
    }
}
