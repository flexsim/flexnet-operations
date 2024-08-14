<?php

namespace Flexnet\ProductPackagingService\Type;

class AttributeDescriptorDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\AttributeDescriptorType|array<\Flexnet\ProductPackagingService\Type\AttributeDescriptorType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorType|array<\Flexnet\ProductPackagingService\Type\AttributeDescriptorType>|null  $attribute
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\AttributeDescriptorType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorType|array<\Flexnet\ProductPackagingService\Type\AttributeDescriptorType>|null  $attribute
     */
    public static function create(\Flexnet\ProductPackagingService\Type\AttributeDescriptorType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\AttributeDescriptorType|array<\Flexnet\ProductPackagingService\Type\AttributeDescriptorType>|null
     */
    public function getAttribute(): \Flexnet\ProductPackagingService\Type\AttributeDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\AttributeDescriptorType|array<\Flexnet\ProductPackagingService\Type\AttributeDescriptorType>|null  $attribute
     */
    public function withAttribute(\Flexnet\ProductPackagingService\Type\AttributeDescriptorType|array|null $attribute): \Flexnet\ProductPackagingService\Type\AttributeDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
