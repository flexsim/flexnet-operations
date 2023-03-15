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
     *
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $stringValue
     */
    public function __construct(string $attributeName, SimpleQueryType|null $stringValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $stringValue
     */
    public static function create(string $attributeName, SimpleQueryType|null $stringValue = null)
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

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getStringValue(): SimpleQueryType|null
    {
        return $this->stringValue;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $stringValue
     */
    public function withStringValue(SimpleQueryType|null $stringValue): ProdCustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }
}
