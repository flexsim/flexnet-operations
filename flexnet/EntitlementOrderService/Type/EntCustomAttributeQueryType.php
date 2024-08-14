<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntCustomAttributeQueryType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $stringValue;

    /**
     * Constructor
     */
    public function __construct(string $attributeName, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $stringValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
    }

    public static function create(string $attributeName, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $stringValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getStringValue(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->stringValue;
    }

    public function withStringValue(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $stringValue): \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }
}
