<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetMaintenanceStateRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType>
     */
    private $maintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType>  $maintenance
     */
    public function __construct(MaintenanceStateDataType|array $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType>  $maintenance
     */
    public static function create(MaintenanceStateDataType|array $maintenance)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType>
     */
    public function getMaintenance(): MaintenanceStateDataType|array
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType>  $maintenance
     */
    public function withMaintenance(MaintenanceStateDataType|array $maintenance): SetMaintenanceStateRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }
}
