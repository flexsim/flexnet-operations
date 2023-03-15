<?php

namespace Flexnet\EntitlementOrderService\Type;

class AttributeMetaDescriptorDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType>|null  $attribute
     */
    public function __construct(AttributeMetaDescriptorType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType>|null  $attribute
     */
    public static function create(AttributeMetaDescriptorType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType>|null
     */
    public function getAttribute(): AttributeMetaDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType|array<\Flexnet\EntitlementOrderService\Type\AttributeMetaDescriptorType>|null  $attribute
     */
    public function withAttribute(AttributeMetaDescriptorType|array|null $attribute): AttributeMetaDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
