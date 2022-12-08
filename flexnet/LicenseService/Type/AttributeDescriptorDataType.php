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
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorType|array<\Flexnet\LicenseService\Type\AttributeDescriptorType>|null $attribute
     */
    public function __construct(\Flexnet\LicenseService\Type\AttributeDescriptorType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorType|array<\Flexnet\LicenseService\Type\AttributeDescriptorType>|null $attribute
     */
    public static function create(\Flexnet\LicenseService\Type\AttributeDescriptorType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorType|array<\Flexnet\LicenseService\Type\AttributeDescriptorType>|null
     */
    public function getAttribute() : \Flexnet\LicenseService\Type\AttributeDescriptorType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorType|array<\Flexnet\LicenseService\Type\AttributeDescriptorType>|null $attribute
     * @return AttributeDescriptorDataType
     */
    public function withAttribute(\Flexnet\LicenseService\Type\AttributeDescriptorType|array|null $attribute) : \Flexnet\LicenseService\Type\AttributeDescriptorDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}

