<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductRelationshipDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $productToRelate;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $relatedProduct;

    /**
     * @var string
     */
    private $relation;

    /**
     * Constructor
     */
    public function __construct(ProductIdentifierType $productToRelate, ProductIdentifierType $relatedProduct, string $relation)
    {
        $this->productToRelate = $productToRelate;
        $this->relatedProduct = $relatedProduct;
        $this->relation = $relation;
    }

    public static function create(ProductIdentifierType $productToRelate, ProductIdentifierType $relatedProduct, string $relation)
    {
        return new static(...\func_get_args());
    }

    public function getProductToRelate(): ProductIdentifierType
    {
        return $this->productToRelate;
    }

    public function withProductToRelate(ProductIdentifierType $productToRelate): ProductRelationshipDataType
    {
        $new = clone $this;
        $new->productToRelate = $productToRelate;

        return $new;
    }

    public function getRelatedProduct(): ProductIdentifierType
    {
        return $this->relatedProduct;
    }

    public function withRelatedProduct(ProductIdentifierType $relatedProduct): ProductRelationshipDataType
    {
        $new = clone $this;
        $new->relatedProduct = $relatedProduct;

        return $new;
    }

    public function getRelation(): string
    {
        return $this->relation;
    }

    public function withRelation(string $relation): ProductRelationshipDataType
    {
        $new = clone $this;
        $new->relation = $relation;

        return $new;
    }
}
