<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateMaintenanceRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType>
     */
    private $maintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType>  $maintenance
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType>  $maintenance
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array $maintenance)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType>
     */
    public function getMaintenance(): \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType>  $maintenance
     */
    public function withMaintenance(\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array $maintenance): \Flexnet\ProductPackagingService\Type\CreateMaintenanceRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }
}
