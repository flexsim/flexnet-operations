<?php

namespace Flexnet\EntitlementOrderService\Type;

class CustomAttributeDescriptorDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType>|null  $attribute
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType>|null  $attribute
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType>|null
     */
    public function getAttribute(): \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType|array<\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType>|null  $attribute
     */
    public function withAttribute(\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType|array|null $attribute): \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
