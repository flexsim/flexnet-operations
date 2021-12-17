<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateProductRelationshipDataType extends FlexnetType
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
     * @var string
     */
    protected $newRelation;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productToRelate
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $relatedProduct
     * @param string $relation
     * @param string $newRelation
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productToRelate, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $relatedProduct, string $relation, string $newRelation)
    {
        $this->productToRelate = $productToRelate;
        $this->relatedProduct = $relatedProduct;
        $this->relation = $relation;
        $this->newRelation = $newRelation;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productToRelate
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $relatedProduct
     * @param string $relation
     * @param string $newRelation
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productToRelate, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $relatedProduct, string $relation, string $newRelation)
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

    /**
     * @return string
     */
    public function getNewRelation()
    {
        return $this->newRelation;
    }

    /**
     * @param string $newRelation
     * @return $this
     */
    public function setNewRelation($newRelation)
    {
        $this->newRelation = $newRelation;
        return $this;
    }
}
