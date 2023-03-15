<?php

namespace Flexnet\EntitlementOrderService\Type;

class LineItemCustomAttributeQueryType
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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $stringValue
     */
    public function __construct(string $attributeName, SimpleQueryType|null $stringValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $stringValue
     */
    public static function create(string $attributeName, SimpleQueryType|null $stringValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): LineItemCustomAttributeQueryType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getStringValue(): SimpleQueryType|null
    {
        return $this->stringValue;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $stringValue
     */
    public function withStringValue(SimpleQueryType|null $stringValue): LineItemCustomAttributeQueryType
    {
        $new = clone $this;
        $new->stringValue = $stringValue;

        return $new;
    }
}
