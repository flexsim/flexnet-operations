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
    public function __construct(\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array $categoryAttribute)
    {
        $this->categoryAttribute = $categoryAttribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array<\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType>  $categoryAttribute
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array $categoryAttribute)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array<\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType>
     */
    public function getCategoryAttribute(): \Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array
    {
        return $this->categoryAttribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array<\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType>  $categoryAttribute
     */
    public function withCategoryAttribute(\Flexnet\ProductPackagingService\Type\CategoryAttributeDataType|array $categoryAttribute): \Flexnet\ProductPackagingService\Type\CategoryAttributesDataType
    {
        $new = clone $this;
        $new->categoryAttribute = $categoryAttribute;

        return $new;
    }
}
