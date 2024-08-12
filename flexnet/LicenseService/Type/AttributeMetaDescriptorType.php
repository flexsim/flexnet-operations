<?php

namespace Flexnet\LicenseService\Type;

class AttributeMetaDescriptorType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeDataType
     */
    private $attributeDataType;

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var \Flexnet\LicenseService\Type\ValueType|null
     */
    private $validValues;

    /**
     * Constructor
     */
    public function __construct(string $attributeName, \Flexnet\LicenseService\Type\AttributeDataType $attributeDataType, string $namespace, ?\Flexnet\LicenseService\Type\ValueType $validValues = null)
    {
        $this->attributeName = $attributeName;
        $this->attributeDataType = $attributeDataType;
        $this->namespace = $namespace;
        $this->validValues = $validValues;
    }

    public static function create(string $attributeName, \Flexnet\LicenseService\Type\AttributeDataType $attributeDataType, string $namespace, ?\Flexnet\LicenseService\Type\ValueType $validValues = null)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): \Flexnet\LicenseService\Type\AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }

    public function getAttributeDataType(): \Flexnet\LicenseService\Type\AttributeDataType
    {
        return $this->attributeDataType;
    }

    public function withAttributeDataType(\Flexnet\LicenseService\Type\AttributeDataType $attributeDataType): \Flexnet\LicenseService\Type\AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->attributeDataType = $attributeDataType;

        return $new;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function withNamespace(string $namespace): \Flexnet\LicenseService\Type\AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->namespace = $namespace;

        return $new;
    }

    public function getValidValues(): ?\Flexnet\LicenseService\Type\ValueType
    {
        return $this->validValues;
    }

    public function withValidValues(?\Flexnet\LicenseService\Type\ValueType $validValues): \Flexnet\LicenseService\Type\AttributeMetaDescriptorType
    {
        $new = clone $this;
        $new->validValues = $validValues;

        return $new;
    }
}
