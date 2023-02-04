<?php

namespace Flexnet\EntitlementOrderService\Type;

class UpdateEntitledProductDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null
     */
    private $entitledProducts;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  string  $opType
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProducts
     */
    public function __construct(string $opType, EntitledProductDataType|array|null $entitledProducts = null)
    {
        $this->opType = $opType;
        $this->entitledProducts = $entitledProducts;
    }

    /**
     * @param  string  $opType
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProducts
     */
    public static function create(string $opType, EntitledProductDataType|array|null $entitledProducts = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null
     */
    public function getEntitledProducts(): EntitledProductDataType|array|null
    {
        return $this->entitledProducts;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProducts
     * @return UpdateEntitledProductDataListType
     */
    public function withEntitledProducts(EntitledProductDataType|array|null $entitledProducts): UpdateEntitledProductDataListType
    {
        $new = clone $this;
        $new->entitledProducts = $entitledProducts;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpType(): string
    {
        return $this->opType;
    }

    /**
     * @param  string  $opType
     * @return UpdateEntitledProductDataListType
     */
    public function withOpType(string $opType): UpdateEntitledProductDataListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
