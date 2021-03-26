<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductRelationshipDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $productToRelate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $relatedProduct;

    /**
     * @var string
     */
    private $relation;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productToRelate
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $relatedProduct
     * @var string $relation
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productToRelate, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $relatedProduct, string $relation)
    {
        $this->productToRelate = $productToRelate;
        $this->relatedProduct = $relatedProduct;
        $this->relation = $relation;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productToRelate
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $relatedProduct
     * @var string $relation
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productToRelate, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $relatedProduct, string $relation)
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
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productToRelate
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
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $relatedProduct
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
     * @param string $relation
     * @return $this
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
        return $this;
    }


}

