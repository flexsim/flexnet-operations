<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateProductsListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>
     */
    private $productIdentifier;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $productIdentifier
     */
    public function __construct(ProductIdentifierWithCountDataType|array $productIdentifier, string $opType)
    {
        $this->productIdentifier = $productIdentifier;
        $this->opType = $opType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $productIdentifier
     */
    public static function create(ProductIdentifierWithCountDataType|array $productIdentifier, string $opType)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>
     */
    public function getProductIdentifier(): ProductIdentifierWithCountDataType|array
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $productIdentifier
     */
    public function withProductIdentifier(ProductIdentifierWithCountDataType|array $productIdentifier): UpdateProductsListType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getOpType(): string
    {
        return $this->opType;
    }

    public function withOpType(string $opType): UpdateProductsListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
