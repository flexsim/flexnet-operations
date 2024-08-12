<?php

namespace Flexnet\EntitlementOrderService\Type;

class UpdateEntitledProductDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null
     */
    private $entitledProducts;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CollectionOperationType
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProducts
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\CollectionOperationType $opType, \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array|null $entitledProducts = null)
    {
        $this->opType = $opType;
        $this->entitledProducts = $entitledProducts;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProducts
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\CollectionOperationType $opType, \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array|null $entitledProducts = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null
     */
    public function getEntitledProducts(): \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array|null
    {
        return $this->entitledProducts;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProducts
     */
    public function withEntitledProducts(\Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array|null $entitledProducts): \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    public function getOpType(): \Flexnet\EntitlementOrderService\Type\CollectionOperationType
    {
        return $this->opType;
    }

    public function withOpType(\Flexnet\EntitlementOrderService\Type\CollectionOperationType $opType): \Flexnet\EntitlementOrderService\Type\UpdateEntitledProductDataListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
