<?php

namespace Flexnet\EntitlementOrderService\Type;

class AttributeDescriptorDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType>|null  $attribute
     */
    public function __construct(AttributeDescriptorType|array $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType>|null  $attribute
     */
    public static function create(AttributeDescriptorType|array $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType>|null
     */
    public function getAttribute(): AttributeDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType>|null  $attribute
     */
    public function withAttribute(AttributeDescriptorType|array|null $attribute): AttributeDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
