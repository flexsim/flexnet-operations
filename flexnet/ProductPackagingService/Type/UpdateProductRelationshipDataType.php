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
     * @var \Flexnet\ProductPackagingService\Type\RelationshipType
     */
    private $relation;

    /**
     * @var \Flexnet\ProductPackagingService\Type\RelationshipType
     */
    private $newRelation;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productToRelate, \Flexnet\ProductPackagingService\Type\ProductIdentifierType $relatedProduct, \Flexnet\ProductPackagingService\Type\RelationshipType $relation, \Flexnet\ProductPackagingService\Type\RelationshipType $newRelation)
    {
        $this->productToRelate = $productToRelate;
        $this->relatedProduct = $relatedProduct;
        $this->relation = $relation;
        $this->newRelation = $newRelation;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productToRelate, \Flexnet\ProductPackagingService\Type\ProductIdentifierType $relatedProduct, \Flexnet\ProductPackagingService\Type\RelationshipType $relation, \Flexnet\ProductPackagingService\Type\RelationshipType $newRelation)
    {
        return new static(...\func_get_args());
    }

    public function getProductToRelate(): \Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        return $this->productToRelate;
    }

    public function withProductToRelate(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productToRelate): \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->productToRelate = $productToRelate;

        return $new;
    }

    public function getRelatedProduct(): \Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        return $this->relatedProduct;
    }

    public function withRelatedProduct(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $relatedProduct): \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->relatedProduct = $relatedProduct;

        return $new;
    }

    public function getRelation(): \Flexnet\ProductPackagingService\Type\RelationshipType
    {
        return $this->relation;
    }

    public function withRelation(\Flexnet\ProductPackagingService\Type\RelationshipType $relation): \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->relation = $relation;

        return $new;
    }

    public function getNewRelation(): \Flexnet\ProductPackagingService\Type\RelationshipType
    {
        return $this->newRelation;
    }

    public function withNewRelation(\Flexnet\ProductPackagingService\Type\RelationshipType $newRelation): \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType
    {
        $new = clone $this;
        $new->newRelation = $newRelation;

        return $new;
    }
}
