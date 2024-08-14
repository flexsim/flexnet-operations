<?php

namespace Flexnet\ProductPackagingService\Type;

class SuiteCustomAttributeQueryType
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
    public function __construct(string $attributeName, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $stringValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
    }

    public static function create(string $attributeName, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $stringValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getStringValue(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->stringValue;
    }

    public function withStringValue(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $stringValue): \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }
}
