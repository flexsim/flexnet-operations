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
    public function __construct(\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType>|null  $attribute
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType>|null
     */
    public function getAttribute(): \Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType>|null  $attribute
     */
    public function withAttribute(\Flexnet\EntitlementOrderService\Type\AttributeDescriptorType|array|null $attribute): \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
