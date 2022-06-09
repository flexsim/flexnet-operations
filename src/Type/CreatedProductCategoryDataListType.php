<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedProductCategoryDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedProductCategoryDataType|array
     */
    protected $createdProductCatgory;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedProductCategoryDataType|array $createdProductCatgory
     */
    public function __construct($createdProductCatgory = null)
    {
        $this->createdProductCatgory = $createdProductCatgory;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedProductCategoryDataType|array $createdProductCatgory
     */
    public static function create($createdProductCatgory = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedProductCategoryDataType|array
     */
    public function getCreatedProductCatgory()
    {
        return $this->createdProductCatgory;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedProductCategoryDataType|array $createdProductCatgory
     * @return $this
     */
    public function setCreatedProductCatgory($createdProductCatgory)
    {
        $this->createdProductCatgory = $createdProductCatgory;

        return $this;
    }
}
