<?php

namespace Flexnet\ProductPackagingService\Type;

class CategoryAttributesDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array<\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType>
     */
    private $categoryAttribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array<\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType>  $categoryAttribute
     */
    public function __construct(CategoryAttributeDataType|array $categoryAttribute)
    {
        $this->categoryAttribute = $categoryAttribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array<\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType>  $categoryAttribute
     */
    public static function create(CategoryAttributeDataType|array $categoryAttribute)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array<\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType>
     */
    public function getCategoryAttribute(): CategoryAttributeDataType|array
    {
        return $this->categoryAttribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array<\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType>  $categoryAttribute
     */
    public function withCategoryAttribute(CategoryAttributeDataType|array $categoryAttribute): CategoryAttributesDataType
    {
        $new = clone $this;
        $new->categoryAttribute = $categoryAttribute;

        return $new;
    }
}
