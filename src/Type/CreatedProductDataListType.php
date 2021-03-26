<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedProductDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedProductDataType
     */
    private $createdProduct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedProductDataType|array $createdProduct
     */
    public function __construct($createdProduct = null)
    {
        $this->createdProduct = $createdProduct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedProductDataType|array $createdProduct
     */
    public static function create($createdProduct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedProductDataType
     */
    public function getCreatedProduct()
    {
        return $this->createdProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedProductDataType $createdProduct
     * @return $this
     */
    public function setCreatedProduct($createdProduct)
    {
        $this->createdProduct = $createdProduct;
        return $this;
    }


}

