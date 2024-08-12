<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateProductsListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>
     */
    private $productIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CollectionOperationType
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $productIdentifier
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array $productIdentifier, \Flexnet\ProductPackagingService\Type\CollectionOperationType $opType)
    {
        $this->productIdentifier = $productIdentifier;
        $this->opType = $opType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $productIdentifier
     */
    public static function create(\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array $productIdentifier, \Flexnet\ProductPackagingService\Type\CollectionOperationType $opType)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>
     */
    public function getProductIdentifier(): \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $productIdentifier
     */
    public function withProductIdentifier(\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array $productIdentifier): \Flexnet\ProductPackagingService\Type\UpdateProductsListType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getOpType(): \Flexnet\ProductPackagingService\Type\CollectionOperationType
    {
        return $this->opType;
    }

    public function withOpType(\Flexnet\ProductPackagingService\Type\CollectionOperationType $opType): \Flexnet\ProductPackagingService\Type\UpdateProductsListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
