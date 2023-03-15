<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteMaintenanceRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType>
     */
    private $maintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType>  $maintenance
     */
    public function __construct(DeleteMaintenanceDataType|array $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType>  $maintenance
     */
    public static function create(DeleteMaintenanceDataType|array $maintenance)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType>
     */
    public function getMaintenance(): DeleteMaintenanceDataType|array
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\DeleteMaintenanceDataType>  $maintenance
     */
    public function withMaintenance(DeleteMaintenanceDataType|array $maintenance): DeleteMaintenanceRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }
}
