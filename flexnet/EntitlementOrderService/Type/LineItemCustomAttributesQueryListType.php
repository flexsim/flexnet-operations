<?php

namespace Flexnet\EntitlementOrderService\Type;

class LineItemCustomAttributesQueryListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType>|null  $attribute
     */
    public function __construct(LineItemCustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType>|null  $attribute
     */
    public static function create(LineItemCustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType>|null
     */
    public function getAttribute(): LineItemCustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType>|null  $attribute
     */
    public function withAttribute(LineItemCustomAttributeQueryType|array|null $attribute): LineItemCustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
