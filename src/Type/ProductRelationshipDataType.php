<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductRelationshipDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $productToRelate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $relatedProduct;

    /**
     * @var string
     */
    protected $relation;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $productToRelate
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $relatedProduct
     * @param  string  $relation
     */
    public function __construct(ProductIdentifierType $productToRelate, ProductIdentifierType $relatedProduct, string $relation)
    {
        $this->productToRelate = $productToRelate;
        $this->relatedProduct = $relatedProduct;
        $this->relation = $relation;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $productToRelate
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $relatedProduct
     * @param  string  $relation
     */
    public static function create(ProductIdentifierType $productToRelate, ProductIdentifierType $relatedProduct, string $relation)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getProductToRelate()
    {
        return $this->productToRelate;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $productToRelate
     * @return $this
     */
    public function setProductToRelate($productToRelate)
    {
        $this->productToRelate = $productToRelate;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getRelatedProduct()
    {
        return $this->relatedProduct;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $relatedProduct
     * @return $this
     */
    public function setRelatedProduct($relatedProduct)
    {
        $this->relatedProduct = $relatedProduct;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @param  string  $relation
     * @return $this
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }
}
