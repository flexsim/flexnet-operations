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
    public function __construct(MaintenanceQueryDataType|array $maintenance = null)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType>|null  $maintenance
     */
    public static function create(MaintenanceQueryDataType|array $maintenance = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType>|null
     */
    public function getMaintenance(): MaintenanceQueryDataType|array|null
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceQueryDataType>|null  $maintenance
     */
    public function withMaintenance(MaintenanceQueryDataType|array|null $maintenance): GetMaintenanceQueryResponseDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }
}
