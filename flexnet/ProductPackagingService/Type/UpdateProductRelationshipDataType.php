<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateProductRelationshipDataType
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
     * @var string
     */
    private $newRelation;

    /**
     * Constructor
     */
    public function __construct(ProductIdentifierType $productToRelate, ProductIdentifierType $relatedProduct, string $relation, string $newRelation)
    {
        $this->productToRelate = $productToRelate;
        $this->relatedProduct = $relatedProduct;
        $this->relation = $relation;
        $this->newRelation = $newRelation;
    }

    public static function create(ProductIdentifierType $productToRelate, ProductIdentifierType $relatedProduct, string $relation, string $newRelation)
    {
        return new static(...\func_get_args());
    }

    public function getProductToRelate(): ProductIdentifierType
    {
        return $this->productToRelate;
    }

    public function withProductToRelate(ProductIdentifierType $productToRelate): UpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->productToRelate = $productToRelate;

        return $new;
    }

    public function getRelatedProduct(): ProductIdentifierType
    {
        return $this->relatedProduct;
    }

    public function withRelatedProduct(ProductIdentifierType $relatedProduct): UpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->relatedProduct = $relatedProduct;

        return $new;
    }

    public function getRelation(): string
    {
        return $this->relation;
    }

    public function withRelation(string $relation): UpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->relation = $relation;

        return $new;
    }

    public function getNewRelation(): string
    {
        return $this->newRelation;
    }

    public function withNewRelation(string $newRelation): UpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->newRelation = $newRelation;

        return $new;
    }
}
