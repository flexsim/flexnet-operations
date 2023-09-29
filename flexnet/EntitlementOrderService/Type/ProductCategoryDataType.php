<?php

namespace Flexnet\EntitlementOrderService\Type;

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
     * Constructor
     */
    public function __construct(string $uniqueId = null, string $name = null, string $description = null)
    {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->description = $description;
    }

    public static function create(string $uniqueId = null, string $name = null, string $description = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): ProductCategoryDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): ProductCategoryDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): ProductCategoryDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }
}
