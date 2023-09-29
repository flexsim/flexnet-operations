<?php

namespace Flexnet\ProductPackagingService\Type;

class CreateProductCategoryDataType
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * Constructor
     */
    public function __construct(string $name, string $description = null)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public static function create(string $name, string $description = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): CreateProductCategoryDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): CreateProductCategoryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }
}
