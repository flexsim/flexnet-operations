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
     *
     * @param  string|null  $uniqueId
     * @param  string|null  $name
     * @param  string|null  $description
     */
    public function __construct(string|null $uniqueId = null, string|null $name = null, string|null $description = null)
    {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  string|null  $name
     * @param  string|null  $description
     */
    public static function create(string|null $uniqueId = null, string|null $name = null, string|null $description = null)
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
}
