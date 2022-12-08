<?php

namespace Flexnet\LicenseService\Type;

class AttributeDescriptorDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\AttributeDescriptorType|array<\Flexnet\LicenseService\Type\AttributeDescriptorType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorType|array<\Flexnet\LicenseService\Type\AttributeDescriptorType>|null  $attribute
     */
    public function __construct(AttributeDescriptorType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorType|array<\Flexnet\LicenseService\Type\AttributeDescriptorType>|null  $attribute
     */
    public static function create(AttributeDescriptorType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorType|array<\Flexnet\LicenseService\Type\AttributeDescriptorType>|null
     */
    public function getAttribute(): AttributeDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorType|array<\Flexnet\LicenseService\Type\AttributeDescriptorType>|null  $attribute
     * @return AttributeDescriptorDataType
     */
    public function withAttribute(AttributeDescriptorType|array|null $attribute): AttributeDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
