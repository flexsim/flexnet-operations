<?php

namespace Flexnet\LicenseService\Type;

class CustomAttributeDescriptorDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array<\Flexnet\LicenseService\Type\CustomAttributeDescriptorType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array<\Flexnet\LicenseService\Type\CustomAttributeDescriptorType>|null  $attribute
     */
    public function __construct(CustomAttributeDescriptorType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array<\Flexnet\LicenseService\Type\CustomAttributeDescriptorType>|null  $attribute
     */
    public static function create(CustomAttributeDescriptorType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array<\Flexnet\LicenseService\Type\CustomAttributeDescriptorType>|null
     */
    public function getAttribute(): CustomAttributeDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array<\Flexnet\LicenseService\Type\CustomAttributeDescriptorType>|null  $attribute
     * @return CustomAttributeDescriptorDataType
     */
    public function withAttribute(CustomAttributeDescriptorType|array|null $attribute): CustomAttributeDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
