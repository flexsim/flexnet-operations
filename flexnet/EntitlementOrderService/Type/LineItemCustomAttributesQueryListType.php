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
    public function __construct(\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType>|null  $attribute
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType>|null
     */
    public function getAttribute(): \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType>|null  $attribute
     */
    public function withAttribute(\Flexnet\EntitlementOrderService\Type\LineItemCustomAttributeQueryType|array|null $attribute): \Flexnet\EntitlementOrderService\Type\LineItemCustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
