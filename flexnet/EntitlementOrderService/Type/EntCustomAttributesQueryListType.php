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
    public function __construct(EntCustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType>|null  $attribute
     */
    public static function create(EntCustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType>|null
     */
    public function getAttribute(): EntCustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType|array<\Flexnet\EntitlementOrderService\Type\EntCustomAttributeQueryType>|null  $attribute
     * @return EntCustomAttributesQueryListType
     */
    public function withAttribute(EntCustomAttributeQueryType|array|null $attribute): EntCustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
