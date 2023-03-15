<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductCategoryDataType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CategoryAttributesDataType|null
     */
    private $categoryAttributes;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  string|null  $name
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\CategoryAttributesDataType|null  $categoryAttributes
     */
    public function __construct(string|null $uniqueId = null, string|null $name = null, string|null $description = null, CategoryAttributesDataType|null $categoryAttributes = null)
    {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->description = $description;
        $this->categoryAttributes = $categoryAttributes;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  string|null  $name
     * @param  string|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\CategoryAttributesDataType|null  $categoryAttributes
     */
    public static function create(string|null $uniqueId = null, string|null $name = null, string|null $description = null, CategoryAttributesDataType|null $categoryAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): ProductCategoryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getName(): string|null
    {
        return $this->name;
    }

    public function withName(string|null $name): ProductCategoryDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): ProductCategoryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CategoryAttributesDataType|null
     */
    public function getCategoryAttributes(): CategoryAttributesDataType|null
    {
        return $this->categoryAttributes;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CategoryAttributesDataType|null  $categoryAttributes
     */
    public function withCategoryAttributes(CategoryAttributesDataType|null $categoryAttributes): ProductCategoryDataType
    {
        $new = clone $this;
        $new->categoryAttributes = $categoryAttributes;

        return $new;
    }
}
