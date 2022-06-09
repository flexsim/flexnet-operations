<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateEntitledProductDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array
     */
    protected $entitledProducts;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array $entitledProducts
     * @param string $opType
     */
    public function __construct($entitledProducts, string $opType)
    {
        $this->entitledProducts = $entitledProducts;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array $entitledProducts
     * @param string $opType
     */
    public static function create($entitledProducts, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array
     */
    public function getEntitledProducts()
    {
        return $this->entitledProducts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitledProductDataType|array $entitledProducts
     * @return $this
     */
    public function setEntitledProducts($entitledProducts)
    {
        $this->entitledProducts = $entitledProducts;

        return $this;
    }

    /**
     * @return string
     */
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;

        return $this;
    }
}
