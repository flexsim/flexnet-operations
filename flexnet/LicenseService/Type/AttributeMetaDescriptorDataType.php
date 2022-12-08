<?php

namespace Flexnet\LicenseService\Type;

class AttributeMetaDescriptorDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\AttributeMetaDescriptorType|array<\Flexnet\LicenseService\Type\AttributeMetaDescriptorType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorType|array<\Flexnet\LicenseService\Type\AttributeMetaDescriptorType>|null  $attribute
     */
    public function __construct(AttributeMetaDescriptorType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorType|array<\Flexnet\LicenseService\Type\AttributeMetaDescriptorType>|null  $attribute
     */
    public static function create(AttributeMetaDescriptorType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeMetaDescriptorType|array<\Flexnet\LicenseService\Type\AttributeMetaDescriptorType>|null
     */
    public function getAttribute(): AttributeMetaDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorType|array<\Flexnet\LicenseService\Type\AttributeMetaDescriptorType>|null  $attribute
     * @return AttributeMetaDescriptorDataType
     */
    public function withAttribute(AttributeMetaDescriptorType|array|null $attribute): AttributeMetaDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
