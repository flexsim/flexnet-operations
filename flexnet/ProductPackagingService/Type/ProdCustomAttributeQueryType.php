<?php

namespace Flexnet\ProductPackagingService\Type;

class ProdCustomAttributeQueryType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $stringValue;

    /**
     * Constructor
     */
    public function __construct(string $attributeName, SimpleQueryType $stringValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
    }

    public static function create(string $attributeName, SimpleQueryType $stringValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): ProdCustomAttributeQueryType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getStringValue(): ?SimpleQueryType
    {
        return $this->stringValue;
    }

    public function withStringValue(?SimpleQueryType $stringValue): ProdCustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }
}
