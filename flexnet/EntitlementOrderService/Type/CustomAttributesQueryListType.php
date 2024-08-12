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
    public function __construct(\Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType>|null  $attribute
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType>|null
     */
    public function getAttribute(): \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType>|null  $attribute
     */
    public function withAttribute(\Flexnet\EntitlementOrderService\Type\CustomAttributeQueryType|array|null $attribute): \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
