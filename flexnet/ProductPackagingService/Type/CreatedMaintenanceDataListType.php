<?php

namespace Flexnet\ProductPackagingService\Type;

class CreatedMaintenanceDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType|array<\Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType>|null
     */
    private $createdMaintenance;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType|array<\Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType>|null  $createdMaintenance
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType|array|null $createdMaintenance = null)
    {
        $this->createdMaintenance = $createdMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType|array<\Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType>|null  $createdMaintenance
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType|array|null $createdMaintenance = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType|array<\Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType>|null
     */
    public function getCreatedMaintenance(): \Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType|array|null
    {
        return $this->createdMaintenance;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType|array<\Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType>|null  $createdMaintenance
     */
    public function withCreatedMaintenance(\Flexnet\ProductPackagingService\Type\CreatedMaintenaceDataType|array|null $createdMaintenance): \Flexnet\ProductPackagingService\Type\CreatedMaintenanceDataListType
    {
        $new = clone $this;
        $new->createdMaintenance = $createdMaintenance;

        return $new;
    }
}
