<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedProductDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedProductDataType|array
     */
    protected $createdProduct;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedProductDataType|array $createdProduct
     */
    public function __construct($createdProduct = null)
    {
        $this->createdProduct = $createdProduct;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedProductDataType|array $createdProduct
     */
    public static function create($createdProduct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedProductDataType|array
     */
    public function getCreatedProduct()
    {
        return $this->createdProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedProductDataType|array $createdProduct
     * @return $this
     */
    public function setCreatedProduct($createdProduct)
    {
        $this->createdProduct = $createdProduct;

        return $this;
    }
}
