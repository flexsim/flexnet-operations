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
     * @var \Flexnet\ProductPackagingService\Type\RelationshipType
     */
    private $relation;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productToRelate, \Flexnet\ProductPackagingService\Type\ProductIdentifierType $relatedProduct, \Flexnet\ProductPackagingService\Type\RelationshipType $relation)
    {
        $this->productToRelate = $productToRelate;
        $this->relatedProduct = $relatedProduct;
        $this->relation = $relation;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productToRelate, \Flexnet\ProductPackagingService\Type\ProductIdentifierType $relatedProduct, \Flexnet\ProductPackagingService\Type\RelationshipType $relation)
    {
        return new static(...\func_get_args());
    }

    public function getProductToRelate(): \Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        return $this->productToRelate;
    }

    public function withProductToRelate(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productToRelate): \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType
    {
        $new = clone $this;
        $new->productToRelate = $productToRelate;

        return $new;
    }

    public function getRelatedProduct(): \Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        return $this->relatedProduct;
    }

    public function withRelatedProduct(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $relatedProduct): \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType
    {
        $new = clone $this;
        $new->relatedProduct = $relatedProduct;

        return $new;
    }

    public function getRelation(): \Flexnet\ProductPackagingService\Type\RelationshipType
    {
        return $this->relation;
    }

    public function withRelation(\Flexnet\ProductPackagingService\Type\RelationshipType $relation): \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType
    {
        $new = clone $this;
        $new->relation = $relation;

        return $new;
    }
}
