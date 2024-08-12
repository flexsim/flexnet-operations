<?php

namespace Flexnet\ProductPackagingService\Type;

class CreatedProductCategoryDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType>|null
     */
    private $createdProductCatgory;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType>|null  $createdProductCatgory
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array|null $createdProductCatgory = null)
    {
        $this->createdProductCatgory = $createdProductCatgory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType>|null  $createdProductCatgory
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array|null $createdProductCatgory = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType>|null
     */
    public function getCreatedProductCatgory(): \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array|null
    {
        return $this->createdProductCatgory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType>|null  $createdProductCatgory
     */
    public function withCreatedProductCatgory(\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array|null $createdProductCatgory): \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataListType
    {
        $new = clone $this;
        $new->createdProductCatgory = $createdProductCatgory;

        return $new;
    }
}
