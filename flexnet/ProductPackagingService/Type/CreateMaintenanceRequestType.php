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
    public function __construct(CreateMaintenanceDataType|array $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType>  $maintenance
     */
    public static function create(CreateMaintenanceDataType|array $maintenance)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType>
     */
    public function getMaintenance(): CreateMaintenanceDataType|array
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType>  $maintenance
     */
    public function withMaintenance(CreateMaintenanceDataType|array $maintenance): CreateMaintenanceRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }
}
