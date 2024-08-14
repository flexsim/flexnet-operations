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
     */
    public function __construct(?string $uniqueId = null, ?string $name = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\CategoryAttributesDataType $categoryAttributes = null)
    {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->description = $description;
        $this->categoryAttributes = $categoryAttributes;
    }

    public static function create(?string $uniqueId = null, ?string $name = null, ?string $description = null, ?\Flexnet\ProductPackagingService\Type\CategoryAttributesDataType $categoryAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): \Flexnet\ProductPackagingService\Type\ProductCategoryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): \Flexnet\ProductPackagingService\Type\ProductCategoryDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\ProductPackagingService\Type\ProductCategoryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getCategoryAttributes(): ?\Flexnet\ProductPackagingService\Type\CategoryAttributesDataType
    {
        return $this->categoryAttributes;
    }

    public function withCategoryAttributes(?\Flexnet\ProductPackagingService\Type\CategoryAttributesDataType $categoryAttributes): \Flexnet\ProductPackagingService\Type\ProductCategoryDataType
    {
        $new = clone $this;
        $new->categoryAttributes = $categoryAttributes;

        return $new;
    }
}
