<?php

namespace Flexnet\ProductPackagingService\Type;

class GetMaintenanceQueryResponseDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType>|null
     */
    private $maintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType>|null  $maintenance
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array|null $maintenance = null)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType>|null  $maintenance
     */
    public static function create(\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array|null $maintenance = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType>|null
     */
    public function getMaintenance(): \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array|null
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType>|null  $maintenance
     */
    public function withMaintenance(\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array|null $maintenance): \Flexnet\ProductPackagingService\Type\GetMaintenanceQueryResponseDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }
}
