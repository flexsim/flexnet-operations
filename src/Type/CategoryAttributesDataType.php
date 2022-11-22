<?php

namespace Flexsim\FlexnetOperations\Type;

class CategoryAttributesDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CategoryAttributeDataType
     */
    protected $categoryAttribute;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\CategoryAttributeDataType  $categoryAttribute
     */
    public function __construct(CategoryAttributeDataType $categoryAttribute)
    {
        $this->categoryAttribute = $categoryAttribute;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\CategoryAttributeDataType  $categoryAttribute
     */
    public static function create(CategoryAttributeDataType $categoryAttribute)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CategoryAttributeDataType
     */
    public function getCategoryAttribute()
    {
        return $this->categoryAttribute;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CategoryAttributeDataType  $categoryAttribute
     * @return $this
     */
    public function setCategoryAttribute($categoryAttribute)
    {
        $this->categoryAttribute = $categoryAttribute;

        return $this;
    }
}
