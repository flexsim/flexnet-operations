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
    public function __construct(CreatedProductCategoryDataType|array $createdProductCatgory = null)
    {
        $this->createdProductCatgory = $createdProductCatgory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType>|null  $createdProductCatgory
     */
    public static function create(CreatedProductCategoryDataType|array $createdProductCatgory = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType>|null
     */
    public function getCreatedProductCatgory(): CreatedProductCategoryDataType|array|null
    {
        return $this->createdProductCatgory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductCategoryDataType>|null  $createdProductCatgory
     */
    public function withCreatedProductCatgory(CreatedProductCategoryDataType|array|null $createdProductCatgory): CreatedProductCategoryDataListType
    {
        $new = clone $this;
        $new->createdProductCatgory = $createdProductCatgory;

        return $new;
    }
}
