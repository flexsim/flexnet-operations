<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitledProductDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array
     */
    private $entitledProduct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array $entitledProduct
     */
    public function __construct($entitledProduct = null)
    {
        $this->entitledProduct = $entitledProduct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array $entitledProduct
     */
    public static function create($entitledProduct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array
     */
    public function getEntitledProduct()
    {
        return $this->entitledProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array $entitledProduct
     * @return $this
     */
    public function setEntitledProduct($entitledProduct)
    {
        $this->entitledProduct = $entitledProduct;
        return $this;
    }
}
