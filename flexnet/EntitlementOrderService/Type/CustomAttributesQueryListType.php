<?php

namespace Flexnet\EntitlementOrderService\Type;

class CustomAttributesQueryListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType>|null  $attribute
     */
    public function __construct(CustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType>|null  $attribute
     */
    public static function create(CustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttribute(): CustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    public function withAttribute(CustomAttributeQueryType|array|null $attribute): CustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
