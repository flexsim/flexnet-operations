<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntCustomAttributesQueryListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType>|null  $attribute
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType>|null  $attribute
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType>|null
     */
    public function getAttribute(): \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType>|null  $attribute
     */
    public function withAttribute(\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array|null $attribute): \Flexnet\EntitlementOrderService\Type\EntCustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
