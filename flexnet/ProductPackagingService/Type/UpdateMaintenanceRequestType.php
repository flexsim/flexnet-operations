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
    public function __construct(UpdateMaintenanceDataType|array $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType>  $maintenance
     */
    public static function create(UpdateMaintenanceDataType|array $maintenance)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType>
     */
    public function getMaintenance(): UpdateMaintenanceDataType|array
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType|array<\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType>  $maintenance
     */
    public function withMaintenance(UpdateMaintenanceDataType|array $maintenance): UpdateMaintenanceRequestType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }
}
