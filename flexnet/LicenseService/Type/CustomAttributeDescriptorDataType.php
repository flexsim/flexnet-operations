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
    public function __construct(\Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array<\Flexnet\LicenseService\Type\CustomAttributeDescriptorType>|null  $attribute
     */
    public static function create(\Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array<\Flexnet\LicenseService\Type\CustomAttributeDescriptorType>|null
     */
    public function getAttribute(): \Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array<\Flexnet\LicenseService\Type\CustomAttributeDescriptorType>|null  $attribute
     */
    public function withAttribute(\Flexnet\LicenseService\Type\CustomAttributeDescriptorType|array|null $attribute): \Flexnet\LicenseService\Type\CustomAttributeDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}
