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
    public function __construct(\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType>  $maintenance
     */
    public static function create(\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array $maintenance)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType>
     */
    public function getMaintenance(): \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array<\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType>  $maintenance
     */
    public function withMaintenance(\Flexnet\ProductPackagingService\Type\MaintenanceStateDataType|array $maintenance): \Flexnet\ProductPackagingService\Type\SetMaintenanceStateRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }
}
