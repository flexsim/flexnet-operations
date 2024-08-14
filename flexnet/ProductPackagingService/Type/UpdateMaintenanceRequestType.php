<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateMaintenanceRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType>
     */
    private $maintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType>  $maintenance
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType>  $maintenance
     */
    public static function create(\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array $maintenance)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType>
     */
    public function getMaintenance(): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType>  $maintenance
     */
    public function withMaintenance(\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array $maintenance): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }
}
